<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::with('type','technologies','user')->paginate(10);
        $data = [
            'results'=> $projects,
            'success'=> true,
        ] ;
        return response()->json($data);
    }
}
