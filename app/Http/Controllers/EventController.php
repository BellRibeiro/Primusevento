<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){

// Obtém o valor do parâmetro de consulta 'search' da requisição atual
$search = request('search');
if($search) {

    $events = Event::where([ ['titulo', 'like', '%'.$search.'%'] ])->get();
    //title: Estamos procurando no título dos eventos.
    //'like': Estamos procurando por algo semelhante ao que foi digitado.
    //'%' procura por algo que tenha o que foi digitado em qualquer lugar no título.
    //%search%, isso significa que qualquer palavra ou sequência de caracteres pode estar antes ou depois da palavra "search".
} else {
    $events = Event::all();
}


return view('welcome',['events' => $events, 'search' => $search]);
    }


    public function create(){
        return view('events.create');
    }

   public function store ( Request $request){
        $event= new Event;

        $event -> titulo = $request->titulo;
        $event -> date = $request->date;
        $event -> cidade = $request->cidade;
        $event -> privado = $request->privado;
        $event -> descricao = $request->descricao;
        $event -> items = $request->items;

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;

        }
        $event->save();

        return redirect('/') -> with('msg', 'Evento criado com sucesso!');
   }

   public function show($id){

    $event = Event::findOrFail($id); //

    return view('events.show', ['event' => $event]);
   }
}
