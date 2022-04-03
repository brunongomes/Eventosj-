<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\guest;

class guests extends Controller
{
    public function getAllGuests() {
        $Guests = Guest::get()->toJson(JSON_PRETTY_PRINT);
        return response($Guests, 200);
      }
  
      public function createGuest(Request $request) {
        $guest = new Guest;
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->description_event = $request->description_event;
        $guest->save();
  
        return response()->json([
          "message" => "Convidado cadastrado."
        ], 201);
      }
  
      public function getGuest($id) {
        if (Guest::where('id', $id)->exists()) {
            $guest = Guest::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($guest, 200);
          } else {
            return response()->json([
              "message" => "Convidado não encontrado."
            ], 404);
          }
      }

      public function getEventDescription($description_event) {
        if (Guest::where('description_event', $description_event)->exists()) {
            $guest = Guest::where('description_event', $description_event)->get()->toJson(JSON_PRETTY_PRINT);
            return response($guest, 200);
          } else {
            return response()->json([
              "message" => "Evento não encontrado."
            ], 404);
          }
      }
  
      public function updateGuest(Request $request, $id) {
        if (Guest::where('id', $id)->exists()) {
            $guest = Guest::find($id);
    
            $guest->name = is_null($request->name) ? $guest->name : $request->name;
            $guest->email = is_null($request->email) ? $guest->email : $request->email;
            $guest->save();
    
            return response()->json([
              "message" => "Convidado alterado com sucesso."
            ], 200);
          } else {
            return response()->json([
              "message" => "Convidado inexistente."
            ], 404);
          }
      }
  
      public function deleteGuest ($id) {
        if(Guest::where('id', $id)->exists()) {
            $guest = Guest::find($id);
            $guest->delete();
    
            return response()->json([
              "message" => "Convidado deletado."
            ], 202);
          } else {
            return response()->json([
              "message" => "Deletado com sucesso."
            ], 404);
          }
      }
}