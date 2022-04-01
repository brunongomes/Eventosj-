<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\event;

class events extends Controller
{
    public function getAllEvents() {
        $Events = Event::get()->toJson(JSON_PRETTY_PRINT);
        return response($Events, 200);
    }

    public function createEvent(Request $request) {
        $event = new Event;
        $event->description = $request->description;
        $event->event_date = $request->event_date;
        $event->save();
  
        return response()->json([
          "message" => "Evento cadastrado."
        ], 201);
    }

    public function getEvent($id) {
        if (Event::where('id', $id)->exists()) {
            $event = Event::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($event, 200);
          } else {
            return response()->json([
              "message" => "Evento não encontrado."
            ], 404);
          }
    }

    public function updateEvent(Request $request, $id) {
        if (Event::where('id', $id)->exists()) {
            $event = Event::find($id);
    
            $event->description = is_null($request->description) ? $event->description : $request->description;
            $event->event_date = is_null($request->event_date) ? $event->event_date : $request->event_date;
            $event->save();
    
            return response()->json([
              "message" => "Evento alterado com sucesso."
            ], 200);
          } else {
            return response()->json([
              "message" => "Evento inexistente."
            ], 404);
          }
    }

    public function deleteEvent ($id) {
        if(Event::where('id', $id)->exists()) {
            $Event = Event::find($id);
            $Event->delete();
    
            return response()->json([
              "message" => "Convidado deletado."
            ], 202);
          } else {
            return response()->json([
              "message" => "Convidado inexistente."
            ], 404);
          }
    }
}
