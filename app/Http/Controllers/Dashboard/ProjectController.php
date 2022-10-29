<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use Image;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.project.index', [
            'projects'=>$projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        
        $projects = new Project();

        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image/projects'), $filename);
            $projects['photo']= 'Image/projects/'.$filename;
        }
        $projects->name_uz = $request->name_uz;
        $projects->name_ru = $request->name_ru;
        $projects->name_en = $request->name_en;
        $projects->description_uz = $request->description_uz;
        $projects->description_ru = $request->description_ru;
        $projects->description_en = $request->description_en;
        $projects->save();
        
        return redirect()->route('dashboard.project');  
    

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);

        return view('dashboard.project.edit', [

            'project'=>$project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
        $projects = Project::find($id);

        if($request->file('photo')){
            $this->validate($request, [
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            ]);
            if(is_file(public_path($projects->photo))){
                unlink(public_path($projects->photo));
            }
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('Image/projects'), $filename);
            $projects['photo']= 'Image/projects/'.$filename;
        }
        
        $projects->name_uz = $request->name_uz;
        $projects->name_ru = $request->name_ru;
        $projects->name_en = $request->name_en;
        $projects->description_uz = $request->description_uz;
        $projects->description_ru = $request->description_ru;
        $projects->description_en = $request->description_en;
        $projects->save();
        
        return redirect()->route('dashboard.project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        $project->delete();
        if(is_file(public_path($project->photo))){
            unlink(public_path($project->photo));
        }
        return redirect()->route('dashboard.project');

    }
}
