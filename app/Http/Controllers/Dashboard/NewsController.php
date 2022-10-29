<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('dashboard.news.index', [
            'news'=>$news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
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
        
        $news = new News();

        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Image/news'), $filename);
            $news['photo']= '/Image/news/'.$filename;
        }
        $news->date = $request->date;
        $news->title_uz = $request->title_uz;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->description_uz = $request->description_uz;
        $news->description_ru = $request->description_ru;
        $news->description_en = $request->description_en;
        $news->save();
        
        return redirect()->route('dashboard.news');  
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
        $news = News::find($id);

        return view('dashboard.news.edit', [

            'news'=>$news
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
        $news = News::find($id);

        if($request->file('photo')){
            $this->validate($request, [
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            ]);
            if(is_file(public_path($news->photo))){
                unlink(public_path($news->photo));
            }
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Image/news'), $filename);
            $news['photo']= '/Image/news/'.$filename;
        }

        $news->date = $request->date;
        $news->title_uz = $request->title_uz;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->description_uz = $request->description_uz;
        $news->description_ru = $request->description_ru;
        $news->description_en = $request->description_en;
        $news->save();
        
        return redirect()->route('dashboard.news');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        $news->delete();
        if(is_file(public_path($news->photo))){
            unlink(public_path($news->photo));
        }
        return redirect()->route('dashboard.news');
    }
}
