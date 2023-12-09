<!DOCTYPE html>
<html lang="en">

<title>places</title>
@extends('layout.article')
 
  <div class="container">
  
   
  
  @section('content')
  <table class="table table-hover">
    <thead>

      <tr>

        <th>title</th>
        <th>content</th>
       <th>from</th>
        <th>to</th>
        <th>image</th>
        <th>published</th>
       
      </tr>
    </thead>
    <tbody>
    @foreach($places as $data)
     
    <tr>
        <td>{{$data->title}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->from}}</td>
      <td>{{$data->to}}</td>
      <td><img src="{{ asset('assets/images/'.$data->image) }}" alt="cars" style="width:150px;"></td>
        <td>@if ($data->image)
          yes 🟢
          @else
          no 🛑
          @endif

      </td>
      
     
      </tr>
      @endforeach
     
  
    </tbody>
    @endsection
  </table>
</div>

</body>
</html>

