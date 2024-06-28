<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        $data = [
            'results'=> $projects,
            'success'=> true,
        ] ;
        return response()->json($data);
    }
}
