<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabledata=Project::all();
        return view("showproject",compact("tabledata"));
    }

   public function showprojects()
    {
        $tabledata=Project::all();
        return view("projects",compact("tabledata"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("addproject");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formdata=$request->validate([
        "title" => "required",
        "description" =>"required",
        "url" =>"required",
        "tech_used" =>"required"


        ]);
        Project::create($formdata);
        return redirect("/admin/projects")->with("success","project is added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        echo $request->id;

        $project=project::find($request->id);
        return view('editproject',compact("project"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project=project::find($request->id);
        $project->title=$request->title;
        $project->description=$request->description;
        $project->url=$request->url;
        $project->tech_used=$request->tech_used;
        $project->save();
        return redirect("/admin/projects");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        project::destroy($request->id);
        return redirect("/admin/projects")->with("success","project is added");       
    }
}
