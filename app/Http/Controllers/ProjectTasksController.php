<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;


class ProjectTasksController extends Controller
{
    

    public function store(Project $project){
        Task::create([

            'project_id' => $project->id,
            'comentario' => request('comentario')
        ]);
        
        return back();

    }




}
