<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task ;

class todoController extends Controller
{
    public function show(){
        return view('welcome') ; 
    }

    public function store(){

        $task = new Task() ;

        $task->name = request('name') ; 
        $task->notes = request('note') ; 
        $task->save() ;
        return redirect('/')->with('msg','task added successfully !') ; 
    }

    public function index(){
        $tasks = Task::all() ;
        return view('welcome',['tasks'=>$tasks]) ;  
    }

    public function destroy($id){
        $task = Task::findOrFail($id) ;
        $task->delete() ;
        return redirect('/') ;  
    }

}

