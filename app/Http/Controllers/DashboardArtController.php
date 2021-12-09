<?php

namespace App\Http\Controllers;

use App\Models\Art;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.gallery.index', [
            'arts' => Art::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // save an image from upload form to local storage
        $image = $validateData['image'];
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/img'), $imageName);
        $validateData['image'] = $imageName;
        Art::create($validateData);

        return redirect('/dashboard/gallery')->with('success', 'Art has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function show(Art $art)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view update
        $art = Art::find($id);
        return view('dashboard.gallery.edit', [
            'art' => $art
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            // update an image from upload form to local storage
            $image = $validateData['image'];
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/img'), $imageName);
            $validateData['image'] = $imageName;
        }
        Art::find($id)->update($validateData);
        return redirect('/dashboard/gallery')->with('success', 'Art has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function destroy($artid)
    {
        // destory data from database from form
        $art = Art::find($artid);
        $art->delete();
        return redirect('/dashboard/gallery')->with('success', 'Art has been deleted');

    }
}
