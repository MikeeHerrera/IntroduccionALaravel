<?php

namespace App\Http\Controllers;
use App\Models\Target;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\TargetRequest;
class TargetController extends Controller
{
    public function index(){
        return view('index');
      
    }

    public function data(){
        $notes = DB::table('targets')->get();
        // return json_encode(['data' => $notes]);
       echo($notes);
        return view('index',['data'=>$notes]);
        
    }
    public function eliminar(){
        echo('hola');
    }

    public function create(){
        return view('create');
    }
    
    public function edit(){
        return view('edit');
    }

    public function store(TargetRequest $request){
        // DB::table('targets')->save($request);
    
        Target::create([
            'name' => $request->name,
            'ranking' => $request->ranking
        ]);
        dd($request -> all());

        return view('create');

        //  echo ('hola');
    }
    
}
