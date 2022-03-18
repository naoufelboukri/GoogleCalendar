<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ActionController extends Controller
{

    //This function is able to return all the events in our database 
    public function list()
    {
        $events = Calendar::all();
        return view('list', [
            'events' => $events
        ]);
    }

    //This function is used to update an entity by using his id and return a form (the same as "create" form)
    public function updateEvent($id)
    {
        return view('form' , [
            'id' => $id
        ]);
    }

    // This function is the post method and is used to update the data
    public function update($id, Request $request)
    {
        $event = Calendar::findOrFail($id);
        $event->update([
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
            'description' => $request->description,
            'all_day' => $request->all_day
        ]);

        return view('welcome');
    }

    //This function is used to destroy an entity by using his id 
    public function destroy($id)
    {
        $event = Calendar::findOrFail($id);
        $event->delete();

        return Redirect::to('list');
    }
}
