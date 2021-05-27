<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use App\Models\product;
use App\Models\event;
use App\Models\wwd;
use App\Models\testimoni;





class SateController extends Controller
{
    public function index()
        {
            $sliders=slider::get()->where('active',"active");
            $products=product::get()->where('active',"active");
            $events=event::get()->where('active',"active");
            $wwds=wwd::get()->where('active',"active");
            $testimonis=testimoni::get()->where('active',"active");


    
            
            return view('sate')->with(compact('sliders','products','events','wwds','testimonis'));
        }

    public function indexedit()
        {
            $products=product::get();
            $sliders=slider::get();
            $events=event::get();
            $wwds=wwd::get();
            $testimonis=testimoni::get();



            // Session::get('variableName');
            
            
            return view('edit')->with(compact('products','sliders','events','wwds','testimonis'))->with('yAxis',0);
            
        }

    public function indexeditscroll($y)
        {
            $products=product::get();
            $sliders=slider::get();
            $events=event::get();
            $wwds=wwd::get();
            $testimonis=testimoni::get();



            // Session::get('variableName');

            $yAxis=$y;  
                // return $y;    
            return view('edit')->with(compact('products','sliders','events','wwds','testimonis'))->with('yAxis',$yAxis);
            
        }
}
