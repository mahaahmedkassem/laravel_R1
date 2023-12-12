<!DOCTYPE html>
<html lang="en">
<head>
  <title>places</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>places list</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>name</th>
    
    
        <th>published</th>
        
       
        <th>created at</th>
       
      
      </tr>
    </thead>
    <tbody>
      @foreach($places as $place)
    <tr>
   
        <td>{{$place->title}}</td>
        
    
        <td>@if ($place->published)
          yes ✅
          @else
          no 🚫
          @endif

      </td>
     
      <td>{{$place->created_at}}</td>
      
      
      </tr>
      @endforeach
     
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
