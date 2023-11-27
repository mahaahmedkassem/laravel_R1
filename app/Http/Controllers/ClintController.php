<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;

class ClintController extends Controller
{

    private $columns = ['clintname', 'adress','contact','published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('showclient',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("client");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
       
        $client = new Client();
        $client->clintname = $request->clintname;
        $client->adress = $request->adress;
        $client->contact = $request->contact;
        if(isset($request->published)){
            $client->published = true;
        }else{
            $client->published = false;
        }
        $client->save();
        return 'Added Successfully';

 

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
        
        $client = Client::findorfail($id);
        return view ('updateclient',compact('client'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true:false;

        Client::where('id', $id)->update($data);

       return "updated";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
