<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timelines = Timeline::all();
        return view('dashboard.timeline.index', [
            'timelines'=>$timelines
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.timeline.create');
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
        
        $timeline = new Timeline();

        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Image/timeline'), $filename);
            $timeline['photo']= '/Image/timeline/'.$filename;
        }
        $timeline->date = $request->date;
        $timeline->name_uz = $request->name_uz;
        $timeline->name_ru = $request->name_ru;
        $timeline->name_en = $request->name_en;
        $timeline->description_uz = $request->description_uz;
        $timeline->description_ru = $request->description_ru;
        $timeline->description_en = $request->description_en;
        $timeline->save();
        
        return redirect()->route('dashboard.timeline');
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
        $timelines = Timeline::find($id);

        return view('dashboard.timeline.edit', [

            'timelines'=>$timelines
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
        
        $timeline = Timeline::find($id);

        if($request->file('photo')){
            $this->validate($request, [
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            ]);
            if(is_file(public_path($timeline->photo))){
                unlink(public_path($timeline->photo));
            }
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Image/timeline'), $filename);
            $timeline['photo']= '/Image/timeline/'.$filename;
        }
        $timeline->date = $request->date;
        $timeline->name_uz = $request->name_uz;
        $timeline->name_ru = $request->name_ru;
        $timeline->name_en = $request->name_en;
        $timeline->description_uz = $request->description_uz;
        $timeline->description_ru = $request->description_ru;
        $timeline->description_en = $request->description_en;
        $timeline->save();
        
        return redirect()->route('dashboard.timeline');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timeline = Timeline::find($id);

        $timeline->delete();
        if(is_file(public_path($timeline->photo))){
            unlink(public_path($timeline->photo));
        }
        return redirect()->route('dashboard.timeline');
    }
}
