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
        $month_ukr=["січня","лютого","березня","квітня","травня","червня","липня","серпня","вересня","жовтня","листопада","грудня" ];
        $month_en=["January","February","March","April","May","June",'July',"August","September","October","November","December"];

        $page=1;
        $all_news=FondNew::all();
        if(isset($_GET['page'])){
            $page=trim(strip_tags($_GET['page']));
            $news = FondNew::orderBy('date', 'DESC')->skip(2 * ($page - 1))->take(2)->get();
        }
        else{
            $news = FondNew::orderBy('date', 'DESC')->take(2)->get();
        }
        return view('news', compact('news', 'page', 'all_news', 'month_en', 'month_ukr'));
    }
    public function str_text($m1,$m2, $all_text){
        $str="";
        for($i=$m1; $i<$m1+$m2; $i++){
            $str.=$all_text[$i];

        }
        return $str;
    }

    public function new_id($id){
        $month_ukr=["січня","лютого","березня","квітня","травня","червня","липня","серпня","вересня","жовтня","листопада","грудня" ];
        $month_en=["January","February","March","April","May","June",'July',"August","September","October","November","December"];
        $new = FondNew::find($id);
        $all_text= preg_split('/([^.!?]+[.!?]+)/', $new->text, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
        $k = preg_split('/\.\.\.|\.|\!|\?/',$new->text);

        $mas = $this->mass(count($new->photos), count($k)-1);
        $text=[];
        $j=0;
        $text_1=[];
        for($i=1; $i<count($mas); $i++){
            array_push($text,implode('.', array_slice($k, $j, $mas[$i])));
            $j+=$mas[$i];
        }
        $k=0;
        for($i=1; $i<count($mas);$i++){
            array_push($text_1,$this->str_text($k, $mas[$i],$all_text));
            $k+=$mas[$i];
        }

        return view('new', compact('new', 'mas','text', 'k','month_ukr', 'month_en', 'text_1'));
    }
    public function info_fond(){
        return view('fond');
    }
    public function mass($count, $sum){
        $mas = [0];
        $min = intdiv($sum, $count);
        if($count>1) {

            $d = ((2 * $sum / $count) - 2 * $min) / ($count - 1);

            for ($i = $count - 1; $i >= 0; $i--) {
                array_push($mas, ($i * $d + $min));
            }
        }
        else{
            array_push($mas,$min);
        }
        return $mas;
    }
}
