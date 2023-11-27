<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;




class CarController extends Controller
{

    private $columns = ['cartitle', 'describtion','published'];
  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $cars = Car::get();
      return view('carslist',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("addcar");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cars = new Car;      //اسم الموديل
        $cars->cartitle =$request->cartitle;
        $cars->describtion=$request->describtion;
        if(isset($request->published)){
            $cars->published = true;
        }else{
            $cars->published = false;
        }
        $cars->save();
        return "car title is" .$request->cartitle;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        

        $car = Car::findOrFail($id);
        return view('carDetail',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findorfail($id);
        return view ('updateCar',compact('car'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
       
       
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true:false;

        Car::where('id', $id)->update($data);

       
       return redirect('thecar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cars = Car::get();
       Car::where('id', $id)->delete();
        return view('carslist',compact('cars'));
    }
}


// public function update(Request $request, string $id)
//     {

//         $data = $request->only($this->columns);
//         $data['published'] = isset($data['published'])? true:false;

//         Car::where('id', $id)->update($data);
//        Car::where('id', $id)->update($request->only($this->columns));

//         return redirect('car-index');
