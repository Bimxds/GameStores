<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(Request $request){
        if(Auth::user()->role == 'User'){
            return redirect('/home');
        }
        $data = Game::where('name', 'LIKE', "%$request->searchgame%")->simplePaginate(8);
        return view('manageGame', ['data' => $data]);
    }
    public function deleteGames($id){
        if(Auth::user()->role == 'User'){
            return redirect('/home');
        }
        $data = Game::find($id);
        Storage::delete('public/'.$data->cover);
        Storage::delete('public/'.$data->video);
        $data->delete();
        return redirect()->back();
    }
    public function indexUpdate($id){
        if(Auth::user()->role == 'User'){
            return redirect('/home');
        }
        $data = Game::find($id);
        return view('update', compact('data'));
    }

    public function update(Request $request, $id){
        if(Auth::user()->role == 'User'){
            return redirect('/home');
        }
        $validate = $request->validate([
            'description' => 'min:1|max:500|required',
            'longdescription' =>'min:1|max:2000|required',
            'category'=>'required',
            'price' =>'integer|numeric|required|gt:0|lte:1000000'
        ]);
        $game = Game::find($id);
        $image = $request->file('image');
        $video = $request->file('video');

        if($image!=null){
            $image_name = time().'.'.$image->getClientOriginalExtension();
            Storage::putFileAs('public/Images', $image, $image_name);
            $image_name = 'Images/'.$image_name;

            Storage::delete('public/'.$game->cover);
        }
        else{
            $image_name = $game->cover;
        }

        if($video!=null){
            $video_name = time().'.'.$video->getClientOriginalExtension();
            Storage::putFileAs('public/Videos', $video, $video_name);
            $video_name = 'Videos/'.$video_name;

            Storage::delete('public/'.$game->image);
        }
        else{
            $video_name = $game->video;
        }

        $game->description = $validate['description'];
        $game->description_long = $validate['longdescription'];
        $game->category = $validate['category'];
        $game->price = $validate['price'];
        $game->cover = $image_name;
        $game->video = $video_name;
        $game->save();

        return redirect('/manage');

    }
    public function insert(Request $request){
        // dd($request);
        $validate = $request->validate([
            'name'=>'required|unique:games,id',
            'description' => 'min:1|max:500|required',
            'longdescription' =>'min:1|max:2000|required',
            'category'=>'required',
            'developer' =>'required',
            'publisher' =>'required',
            'price' =>'integer|numeric|required|gt:0|lte:1000000',
            'image'=>'required',
            'video'=>'required',
        ]);
        $game = new Game();

        $file_image = $request->file('image');
        $image_name = time().'.'.$file_image->getClientOriginalExtension();
        Storage::putFileAs('public/Images', $file_image, $image_name);
        $image_name = 'Images/'.$image_name;

        $file_video = $request->file('video');
        $video_name = time().'.'.$file_video->getClientOriginalExtension();
        Storage::putFileAs('public/Videos', $file_video, $video_name);
        $video_name = 'Videos/'.$video_name;

        $game->name = $request->name;
        $game->description = $request->description;
        $game->description_long = $request->longdescription;
        $game->category = $request->category;
        $game->publisher = $request->publisher;
        $game->developer = $request->developer;
        $game->price = $request->price;
        $game->cover = $image_name;
        $game->video = $video_name;
        if($request->adult=="on"){
            $game->is_adult = true;
        }
        $game->save();
        return redirect('/');
    }

}
