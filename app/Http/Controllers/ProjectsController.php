<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;



class ProjectsController extends Controller
{

    public function project(){
        return view('projects');
    }

    public function projects(){

        $projects  = Project::all();

        return view('projects',compact('projects'));
    }

    public function show($id){

        $project = Project::findOrFail($id);

        return view('show',compact('project'));

    }

    public function myprojects(){
        return view('myprojects');
    }

}
