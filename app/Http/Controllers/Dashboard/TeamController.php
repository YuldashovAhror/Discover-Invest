<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.team.index', [
            'teams'=>$teams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.team.create');
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
        
        // dd('asd');
        $teams = new Team();

        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Image/teams'), $filename);
            $teams['photo']= '/Image/teams/'.$filename;
        }
        $teams->name_uz = $request->name_uz;
        $teams->name_ru = $request->name_ru;
        $teams->name_en = $request->name_en;
        $teams->position_uz = $request->position_uz;
        $teams->position_ru = $request->position_en;
        $teams->position_en = $request->position_en;
        $teams->save();
        
        return redirect()->route('dashboard.team');
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
        // dd('asd');
        $team = Team::find($id);

        return view('dashboard.team.edit', [

            'team'=>$team
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
        
        $teams = Team::find($id);

        if($request->file('photo')){
            $this->validate($request, [
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            ]);
            if(is_file(public_path($teams->photo))){
                unlink(public_path($teams->photo));
            }
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image/teams'), $filename);
            $teams['photo']= '/Image/teams/'.$filename;
        }
        
        $teams->name_uz = $request->name_uz;
        $teams->name_ru = $request->name_ru;
        $teams->name_en = $request->name_en;
        $teams->position_uz = $request->position_uz;
        $teams->position_ru = $request->position_en;
        $teams->position_en = $request->position_en;
        $teams->save();
        
        return redirect()->route('dashboard.team');
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
        $teams = Team::find($id);
        $teams->delete();
        if(is_file(public_path($teams->photo))){
            unlink(public_path($teams->photo));
        }
        return redirect()->route('dashboard.team');
    }
}
