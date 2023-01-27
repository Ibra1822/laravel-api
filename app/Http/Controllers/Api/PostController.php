<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

    $projects = Project::all();

    return response()->json(compact('projects'));

    }

    public function show($slug){

        $detail = Project::where('slug',$slug)->with(['type','tech'])->first();

        return response()->json(compact('detail'));
    }

}
