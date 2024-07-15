<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $image);
            $input['image'] = $imageName;
        }

        Testimonial::create($input);

        return redirect('/admin/testimonials')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param \App\Models\Testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Testimonial
     * @return \Illuminate\Http\Response 
     */
    public function edit(Testimonial $testimonial)
    {
        return view('testimonial.edit', compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request
     * @param \App\Models\Testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $testimonial->update($input);

        return redirect('/admin/testimonials')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param \App\Models\Testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect('/admin/testimonials')->with('message', 'Data berhasil dihapus');
    }
}