<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Vacansy;
use Illuminate\Http\Request;

class VacansyController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancy = Vacansy::all();
        return view('dashboard.vacancy.index',[
            'vacancy'=>$vacancy
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.vacancy.create');
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
        
        $vacancy = new Vacansy();
        
        if($request->file('photo')){
            $vacancy['photo'] = $this->photoSave($request->file('photo'), 'image/vacancy');
        }
        $vacancy->name_uz = $request->name_uz;
        $vacancy->name_ru = $request->name_ru;
        $vacancy->name_en = $request->name_en;
        $vacancy->description_uz = $request->description_uz;
        $vacancy->description_ru = $request->description_ru;
        $vacancy->description_en = $request->description_en;
        $vacancy->responsihilities_uz = $request->responsihilities_uz;
        $vacancy->responsihilities_ru = $request->responsihilities_ru;
        $vacancy->responsihilities_en = $request->responsihilities_en;
        $vacancy->requirements_uz = $request->requirements_uz;
        $vacancy->requirements_ru = $request->requirements_ru;
        $vacancy->requirements_en = $request->requirements_en;
        $vacancy->terms_uz = $request->terms_uz;
        $vacancy->terms_ru = $request->terms_ru;
        $vacancy->terms_en = $request->terms_en;
        $vacancy->save();
        
        return redirect()->route('dashboard.vacancy');
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
        $vacancy = Vacansy::find($id);

        return view('dashboard.vacancy.edit', [

            'vacancy'=>$vacancy
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

        $vacancy = Vacansy::find($id);
        
        if($request->file('photo')){
            if(is_file(public_path($vacancy->photo))){
                unlink(public_path($vacancy->photo));
            }
            $vacancy['photo'] = $this->photoSave($request->file('photo'), 'image/vacancy');
        }

        $vacancy->name_uz = $request->name_uz;
        $vacancy->name_ru = $request->name_ru;
        $vacancy->name_en = $request->name_en;
        $vacancy->description_uz = $request->description_uz;
        $vacancy->description_ru = $request->description_ru;
        $vacancy->description_en = $request->description_en;
        $vacancy->responsihilities_uz = $request->responsihilities_uz;
        $vacancy->responsihilities_ru = $request->responsihilities_ru;
        $vacancy->responsihilities_en = $request->responsihilities_en;
        $vacancy->requirements_uz = $request->requirements_uz;
        $vacancy->requirements_ru = $request->requirements_ru;
        $vacancy->requirements_en = $request->requirements_en;
        $vacancy->terms_uz = $request->terms_uz;
        $vacancy->terms_ru = $request->terms_ru;
        $vacancy->terms_en = $request->terms_en;
        $vacancy->save();
        
        return redirect()->route('dashboard.vacancy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = Vacansy::find($id);

        $vacancy->delete();
        if(is_file(public_path($vacancy->photo))){
            unlink(public_path($vacancy->photo));
        }
        return redirect()->route('dashboard.vacancy');
    }
}
