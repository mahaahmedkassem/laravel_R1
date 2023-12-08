<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Place;
use App\Traits\Common;

class placeController extends Controller
{

    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view ('addplaces');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages= $this->messages();

        $data = $request->validate([
            'title'=>'required|string',
            'description'=>'required|string',
            'from'=>'required|string',
            'to'=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);

        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image']= $fileName;
        $data['published'] = isset($request->published);
        Place::create($data);

        return 'done';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function messages(){
        return [
            'title.required'=>'الرجاء اضافة العنوان',
            'description.required'=>'describtion is required',
            'from.required'=>'price is required',
            'to.required'=>'price is required'
        ];
    }

}
