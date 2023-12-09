<!DOCTYPE html>
<html lang="en">

<title>places</title>
@extends('layout.article')
@section('content')
  <div class="container">
  
   
  

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
        <td><h1>{{$data->title}}</h1></td>
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
   
    @endsection
  </table>  

<!-- 

</div>

</body>
</html>

