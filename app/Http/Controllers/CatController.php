<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Cat::all();
        return view('adminpusat.pusat-cat',compact(['data']));
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
        $cat = new Cat;
        $cat->image=$cat->image;
        $cat->name=$cat->name;
        $cat->age=$cat->age;
        $cat->shelter=$cat->shelter;
        $cat->gender=$cat->gender;
        $cat->vaccinated=$cat->vaccinated;
        $cat->spayed=$cat->spayed;
        $cat->health=$cat->health;
        $cat->story=$cat->story;
        $cat->save();
        return redirect('pusat-cat');
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
        $data=Cat::find($id);
        return view('admin.peteditor',compact(['data']));
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
        $cat=Cat::find($id);
        $cat->image=$request->image;
        $cat->name=$request->name;
        $cat->age=$request->age;
        $cat->shelter=$request->shelter;
        $cat->gender=$request->gender;
        $cat->vaccinated=$request->vaccinated;
        $cat->spayed=$request->shelspayedter;
        $cat->health=$request->health;
        $cat->story=$request->story;
        $data->save();
        return redirect('pusat-cat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cat::find($id)->delete();
        return back();
    }
}
