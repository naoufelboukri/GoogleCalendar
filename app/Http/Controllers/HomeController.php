<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // This function return the principal view of the calendar 
    public function index(){
        // Get all my calendar events 
        $events = Calendar::all() ;
        
        // ->format('Y-m-d H:i:s') 

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

        $data = json_encode($tab_events) ; 

        return view('welcome' , compact('data')) ; 
    }

    //This function is used to create new events 
    public function create(){
        return view('form') ; 
    }

    public function show($id){
        $event = Calendar::findOrFail($id) ; 

        $data = [
            'id' => $event->id , 
            'title' => $event->title,
            'start' => $event->start,
            'end' => $event->end,
            'description' => $event->description,
            'all_day' => $event->all_day           
        ] ; 

        return response()->json($data) ; 
    }
}
