<?php

namespace App\Http\Controllers;

use App\Models\Game;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        $data = Game::simplePaginate(8);
        return view('home', ['data'=>$data]);
    }
    public function search(Request $request){
        $data = Game::where('name','LIKE', "%$request->search%")->simplePaginate(8);
        return view('home', ['data'=>$data]);
    }
    public function gameDetail($id){
        $data = Game::find($id);
        if($data->is_adult){

            return view('adultCheck', compact('data'));
        }

        return view('gameDetail', compact('data'));
    }

    public function checkAge(Request $request, $id){
        $day = $request->day;
        $month = $request->month;
        $year = $request->year;
        $birthdate = $day . '-' . $month .'-' . $year;
        $birthdate = new DateTime($birthdate);
        $birthdate->add(new DateInterval("P18Y"));
        if($birthdate < new DateTime()){
            $data = Game::find($id);
            return view('gameDetail', compact('data'));
        }else{
            return redirect()->back();
        }
    }

}
