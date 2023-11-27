<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\New1;
use Illuminate\Http\RedirectResponse;


class NewsController extends Controller
{

    private $columns = ['newstitle', 'content','published','author'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news= New1::get();                        //$news اسم انا اخترته وده الي هيبقى في For each
        return view('shownews',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("news");   //فايل الBlade
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        $new = new New1;
        // $new->newstitle ="war";
        // $new->content ="war start";
        // $new->published = true;
        // $new->author="maha";
        //  $new->save();
        //  return "added";

        $new->newstitle =$request->newstitle;
        $new->content=$request->content;
        if(isset($request->published)){
            $new->published = true;
        }else{
            $new->published = false;
        }
        $new->author=$request->author;
        $new->save();
        return "the news is " .  $request->newstitle;




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        

        $new = New1::findOrFail($id);
        return view('NewsDetail',compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $new = New1::findorfail($id);
        return view ('updateNews',compact('new'));     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        

        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true:false;

        New1::where('id', $id)->update($data);

       
       return 'updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $news = New1::get();
        New1::where('id', $id)->delete();
         return view('shownews',compact('news'));
    }
}
