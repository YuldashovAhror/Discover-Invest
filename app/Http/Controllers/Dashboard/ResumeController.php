<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resume = Resume::with('vacancy')->orderBy('id')->get();
        return view('dashboard.resume.index', [
            'resume'=>$resume
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $resume = new Resume();
        $resume->vacancy_id = $request->vacancy_id;
        $resume->name = $request->name;
        $resume->phone = $request->phone;
    
        if($request->file('file')){
            $projects['file'] = $this->photoSave($request->file('file'), 'image/resume');
        }


        $resume->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resum = Resume::find($id); 
        return view('dashboard.resume.show', [
            'resum'=>$resum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $resume = Resume::find($id);

        $resume->delete();
        if(is_file(public_path($resume->file))){
            unlink(public_path($resume->file));
        }
        return redirect()->back();
    }
}
