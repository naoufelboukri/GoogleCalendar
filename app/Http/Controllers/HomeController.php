<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // This function return the principal view of the calendar 
    public function index(){
        return view('welcome') ; 
        // ->format('Y-m-d H:i:s') 
    }

    //This function is used to create new events 
    public function create(){
        return view('form') ; 
    }

    //This function stores the input data register by the customer and push them on the database 
    public function store(Request $request){
            Calendar::create([
                'title' => $request->title , 
                'start' => $request->start , 
                'end' => $request->end , 
                'description' => $request->description , 
                'all_day' => $request->all_day , 
                ]) ; 
            
        
        return view('welcome') ; 
    }

    // This function returns the json data 
    public function source(){
        // Get all my calendar events 
        $events = Calendar::all() ;

        $tab_events = array() ; 

        foreach($events as $event){
            $tab_events[] = [
                'id' => $event->id , 
                'title' => $event->title , 
                'start' => $event->start , 
                'end' => $event->end , 
                'description' => $event->description,
                'all_day' => $event->all_day
            ] ; 
        }

        return response()->json($tab_events) ; 
    }
}
