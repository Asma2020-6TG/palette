<?php

namespace App\Http\Controllers;

use App\Models\Palette;
use Illuminate\Http\Request;

class PaletteApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Palette[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Palette::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'size'=> 'required|min:3|max:6',
        ]);
        $palette= Palette::create($data);
        return response($palette,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $palette= Palette::where('id',$id)->get();
        return reponse($palette);

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
        $request->validate([
            'size'=> 'required|min:3|max:6',

        ]);
        $palette = Palette::where('id', $id)-> update($request, $id);
        return response($request,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $palette = Palette::find($id);
        $palette->delete();
        return response('palette deleted, 200');
    }
}
