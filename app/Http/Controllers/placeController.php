<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Place;
use App\Traits\Common;

class placeController extends Controller
{

    use Common;
   
    public function index()
    {
        $places = Place::latest()-> limit(6)->get();
        return view('showplaces',compact('places'));
    }

    public function list()
    {
        $places = Place::get();
        return view('placelist',compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('addplaces');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
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

        return redirect ('showplaces');
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
        $places = Place::get();
        Place::where('id', $id)->delete();
         return view('placelist',compact('places'));  
    }

    public function trashed()
    {
        $places = Place::onlyTrashed()->get();
        return view ('trashedplace', compact('places'));
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
