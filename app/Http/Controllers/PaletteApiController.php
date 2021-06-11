<?php

namespace App\Http\Controllers;

use App\Models\Palette;
use App\Models\Color;
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

    public function categoryPalettes($category_id)
    {
        $palettes = Palette::where('category_id',$category_id)->get();
        return response($palettes,200);
    }

    public function paletteColors($palette_id)
    {
        $palette = Palette::find($palette_id);
        $colors = $palette -> colors;
        $palettes = Palette::where('palette_id',$palette_id)->get();
        return response($palettes,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id'=>'required',
            'size'=> 'required',
            'favourite'=> 'required'
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
    public function favourite($favourite)
    {
        $palettes = Palette::where('favourite',$favourite)->get();
        return response($palettes,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $palette_id)
    {
        $data = $request->validate([
            'category_id'=>'required',
            'size'=> 'required',
            'favourite'=> 'required'

        ]);
        $palette = Palette::where('id', $palette_id)-> update($data, $palette_id);
        return response($palette,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($palette_id)
    {
        $palette = Palette::find($palette_id);
        $palette->delete();
        return response('palette deleted, 200');
    }
}
