<?php

namespace App\Http\Controllers;

use App\Models\Palette;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PalettesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function favourite()
    {
        $palette = Palette::all('favourite')->where();
        return view('FavoritePalette',compact('palette'));
    }
    public function index()
    {
        $palette= Palette::all();
        return view('palettes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('palette.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'size'=> 'required|min:3|max:6',
            'category_id'=> 'required',
            'favourite'=>'required'
        ]);

        $palette=Palette::create($request->all());
        return redirect()->route('palette.index')
        -> with('success','palette added successefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Palette $palette)
    {
        return view('palette.show', compact('palette'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('palette.edit',compact('palette'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Palette $palette)
    {
        $request->validate([
            'size'=> 'required|min:3|max:6',
        ]);

        $palette=Palette::update($request->all());
        return redirect()->route('palette.index')
            -> with('success','palette updated successefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Palette $palette)
    {
        $palette->delete();
        return redirect()->route('palette.index')
            -> with('success','palette deleted successefully');
    }
}
