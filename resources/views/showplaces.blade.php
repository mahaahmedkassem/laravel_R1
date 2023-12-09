<!DOCTYPE html>
<html lang="en">

<title>places</title>
@extends('layout.article')
 
  <div class="container">
  
  <p>The .table-hover class enables a hover state on table rows:</p>      
  
  @section('content')
  <table class="table table-hover">
    <thead>
      <tr>

        <th>title</th>
        <th>content</th>
        <th>published</th>
        <th>from</th>
        <th>to</th>
        <th>image</th>
       
      </tr>
    </thead>
    <tbody>
      @foreach($places as $place)
    <tr>
        <td>{{$place->title}}</td>
        <td>{{$place->description}}</td>
        <td>@if ($place->published)
          yes 🟢
          @else
          no 🛑
          @endif

      </td>
      <td>{{$place->from}}</td>
      <td>{{$place->to}}</td>
      <td><img src="{{ asset('assets/images/'.$place->image) }}" alt="place" style="width:150px;"></td>
     
      </tr>
      @endforeach
     
      </tr>
    </tbody>
  </table>
</div>
@endsection
</body>
</html>

