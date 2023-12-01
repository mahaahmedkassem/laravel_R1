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
    public function store(Request $request) : RedirectResponse
    {
       
        // $client = new Client();
        // $client->clintname = $request->clintname;
        // $client->adress = $request->adress;
        // $client->contact = $request->contact;
        // if(isset($request->published)){
        //     $client->published = true;
        // }else{
        //     $client->published = false;
        // }
        // $client->save();
        // return redirect('showclients');;


        $request->validate([
            'clintname' => 'required|string|max:50',
            'adress' => 'required|string',
            'contact' => 'required|string'
            

            ]);
            $data = $request->only($this->columns);
            $data['published'] = isset($data['published'])? true : false;
        
            Client::create($data);
            return redirect ('showclients');
       

      

 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        

        $client = Client::findOrFail($id);
        return view('clientDetail',compact('client'));
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
        $clients = Client::get();
        Client::where('id', $id)->delete();
         return view('showclient',compact('clients'));
    }

    public function trashed(){
        $clients = Client::onlyTrashed()->get();
              return view ('trashedclient', compact('clients'));
    }

    public function restore (string $id):  RedirectResponse
    {
        Client::where('id', $id)->restore();
        return redirect('showclients');
    }

    public function forcedelete(string $id): RedirectResponse
    {
        Client::where('id', $id)->forceDelete();
        return redirect ('showclients');

    }
}
