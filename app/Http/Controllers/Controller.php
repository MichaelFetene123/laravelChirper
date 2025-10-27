<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
        // ninjas -> /ninjas/
        // fetch all ninjas from the database
    }

    public function show($id){
        // ninjas -> /ninjas/1
        // fetch a single ninja from the database by its id
    }

    public function create(){
        // ninjas -> /ninjas/create
        // render a create view (with web form) to user
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
