<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Game;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use App\Rules\ValidatePasswordWithDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function UserRegister(Request $request){
        $request->validate([
            'username' => 'required|unique:users,username',
            'fullname' => 'required',
            'password' => 'required|alpha_dash|required_with:confpassword|same:confpassword|min:8',
        ]);
        $data = $request->all();
        $data = User::create([
            'username'=>$data['username'],
            'fullname'=>$data['fullname'],
            'password'=>Hash::make($data['password']),
            'role'=>$data['role'],
        ]);
        $data->save();
        return redirect('/login')->withSuccess('Successfully Registered');
    }
    public function LoginUser(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $userData = $request->only('username', 'password');
        $user = User::where(['username'=>$request->username])->first();
        // dd($user);
        if(Auth::attempt($userData)){
            $request->session()->put('user', $user);
            Auth::login($user);
            return redirect('/')->withSuccess('Logged in');
        }
        return back()->withErrors([
            'username' => 'Invalid User Credentials.',
        ]);
    }
    public function getProfile($username){
        $data = User::where('username', $username)->get();
        return view('myprofile', ['data' => $data]);
    }

    public function updateProfile(Request $request){
        // dd($request->username);
        $id = Session::get('user')['id'];
        $user = User::find($id);
        $file = $request->file('image');
        $validate= $request->validate([
            'username' => 'required',
            'fullname' => 'required',
            'old' => ['required', new ValidatePasswordWithDB],
        ]);
        if($request->new!=null){
            $passvalidate = $request->validate([
                'new' => 'alpha_dash|required_with:confnew|min:8|same:confnew',
            ]);
            // dd($passvalidate);
            $user->password = Hash::make($passvalidate['new']);
        }

        if($file!=null){
            $image_path = time().'.'.$file->getClientOriginalExtension();
            // dd($image_path);
            Storage::putFileAs('public/Images', $file, $image_path);
            $image_path = 'Images/'.$image_path;
        }
        else{
            $image_path = $user->picture;
        }

        $user->username = $validate['username'] !=null ? $validate['username'] : $user->username;
        $user->fullname = $validate['fullname'] != null ? $validate['fullname']:$user->fullname;
        $user->picture = $image_path;

        $user->save();
        return redirect()->back();
    }

    public function addToCart(Request $request){
        $cart_table = Cart::where('game_id', $request->game_id)->first();
        $transaction = Transaction::where('user_id', Auth::user()->id)->get();
        // return $transaction[0]->detail;
        $check = true;
        if(!empty($cart_table)){
            if($cart_table->user_id == Auth::user()->id){
                return redirect()->back()->withErrors('Item Already in Cart');
            }
        }
        foreach($transaction as $item){
            foreach ($item->detail as $detail) {
                if($detail->game_id == $request->game_id){
                    $check=false;
                }
            }
        }
        if($check==false){
            return redirect()->back()->withErrors('Game Already Owned');

        }
        else{
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->game_id = $request->game_id;
            $cart->save();
            return redirect('/');
        }
    }

    public function viewCart(){
        $data = Cart::where('user_id', Auth::user()->id)->get();
        $totalPrice = 0;
        foreach ($data as $item) {
            $totalPrice = $totalPrice + $item->game[0]->price;
        }
        return view('cart', compact('data', 'totalPrice'));
    }
    public function payment(){
        $data = Cart::where('user_id', Auth::user()->id)->get();
        $totalPrice = 0;
        foreach ($data as $item) {
            $totalPrice = $totalPrice + $item->game[0]->price;
        }
        return view('payment', compact('totalPrice'));
    }
    public function getHistory(){
        $data = Transaction::where('user_id', Auth::user()->id)->get();
        return view('history', compact('data'));
    }


    public function checkPayment(Request $request){
        $request->validate([
            'name' => 'required',
            'number' => 'required|min:16|max:16',
            'month'=>'required|integer|gte:1|lte:12',
            'year'=>'required|integer|gte:2021|lte:2050',
            'cvv'=>'required|integer|gte:100|lte:9999',
        ]);
        $PATH = '/account'.'/'.Auth::user()->username.'/history';

        $cart = Cart::where('user_id', Auth::user()->id)->get();
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice = $totalPrice + $item->game[0]->price;
        }
        $count = 0;
        $level = Auth::user()->level;
        $history = new Transaction();
        $history->user_id = Auth::user()->id;
        $history->totalPrice = $totalPrice;
        $history->save();
        foreach ($cart as $item){
            $detail = new TransactionDetail();
            $detail->transaction_id = $history->id;
            $detail->game_id = $item->game_id;
            $count = $count+1;
            $detail->save();
        }
        $level = $level + $count;
        $users=User::find(Auth::user()->id);
        $users->level = $level;
        $users->save();
        // dd($users);
        // User::find(Auth::user()->id)->update(['level'=>$level]);

        $cart->each->delete();

        return redirect($PATH);
    }

}
