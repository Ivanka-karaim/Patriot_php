<?php

namespace App\Http\Controllers;

use App\Models\FondNew;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function general(){

        $news=FondNew::orderBy('date', 'DESC')->take(5)->get();
        return view('index', compact('news'));
    }
    public function news(){
        $page=1;
        if(isset($_GET['page'])){
            $page=trim(strip_tags($_GET['page']));
            $news = FondNew::orderBy('date', 'DESC')->skip(2 * ($page - 1))->take(2)->get();
        }
        else{
            $news = FondNew::orderBy('date', 'DESC')->take(2)->get();
        }
        return view('news', compact('news', 'page'));
    }
    public function new_id($id){
        $new = FondNew::find($id);
        return view('new', compact('new'));

    }
    public function fond_info(){
        return view('fond');
    }
}
