<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;
use App\Traits\Common;





class CarController extends Controller
{
    use Common;
    

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
    public function store(Request $request): RedirectResponse
    {
        // $cars = new Car;      //اسم الموديل
        // $cars->cartitle =$request->cartitle;
        // $cars->describtion=$request->describtion;
        // if(isset($request->published)){
        //     $cars->published = true;
        // }else{
        //     $cars->published = false;
        // }
        // $cars->save();
        // return "car title is" .$request->cartitle;


        $messages=[
            'cartitle.required'=>'الرجاء اضافة العنوان',
            'describtion.required'=>'describtion is required'


        ];
        $data=$request->validate([
                 'cartitle' => 'required|string|max:50',
                'describtion' => 'required|string',
                'image' => 'required|mimes:png,jpg,jpeg|max:2048',
               ], $messages);
               $fileName=$this->uploadFile($request->image, 'assets/images');
               $data['image']=$fileName;

         $data['published'] = isset($request['published']);
        

        //  $request->validate([
        //     'cartitle' => 'required|string|max:50',
        //     'describtion' => 'required|string'
        //     ]);
            // $data = $request->only($this->columns);
            // $data['published'] = isset($data['published'])? true : false;
        
            Car::create($data);

          return redirect('thecar'); 



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
       
        $data = Car::find($id);
        $data=$request->validate([
            'cartitle' => 'required|string|max:50',
           'describtion' => 'required|string',
        
          ]);
        
       
        if ($request->hasfile('image')){
            $file =$request->file('image');
          
            $fileName=$this->uploadFile($request->image, 'assets/images');
            $data['image']=$fileName;
               
        }
        
        $data['published'] = isset($request['published'])? true:false;
        Car::where('id', $id)->update($data);
        return redirect('thecar');    

        // $messages= $this->messages();

        // $data = $request->validate([
        //     'carTitle'=>'required|string',
        //     'description'=>'required|string',
        //     'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
        // ], $messages);
       
        // $data['published'] = isset($request->published);

        // // update image if new file selected
        // if($request->hasFile('image')){
        //     $fileName = $this->uploadFile($request->image, 'assets/images');
        //     $data['image']= $fileName;
        // }

        // //return dd($data);
        // Car::where('id', $id)->update($data);
        // return 'Updated';
            
        
       

    
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $cars = Car::get();
       Car::where('id', $id)->delete();
        return redirect('thecar');
    }

    

    public function trashed(){
        $cars = Car::onlyTrashed()->get();
              return view ('trashed', compact('cars'));
    }

    

    public function restore (string $id):  RedirectResponse
    {
        Car::where('id', $id)->restore();
        return redirect('thecar');
    }


 

    public function forcedelete(string $id): RedirectResponse
    {
        Car::where('id', $id)->forceDelete();
        return redirect ('thecar');

    }

    public function messages(){
        return [
            'cartitle.required'=>'الرجاء اضافة العنوان',
            'describtion.required'=>'describtion is required'
        ];
    }



}
