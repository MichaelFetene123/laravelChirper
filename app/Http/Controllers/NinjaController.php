<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
   public function index(){
        $ninjas = Ninja::orderBy('created_at', 'desc')->paginate(10);
        return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function show($id){
        // ninjas -> /ninjas/1
        $ninja = Ninja::findOrFail($id);

     return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create(){
        // ninjas -> /ninjas/create
        return view('ninjas.create');
    }

    public function store(){
        // ninjas -> POST /ninjas
        // handle the form submission from the create view
        // validate input data
        // save new ninja to the database
    }

  public function destroy($id){
        // ninjas -> DELETE /ninjas/1
        // delete a ninja from the database by its id
    }

}
