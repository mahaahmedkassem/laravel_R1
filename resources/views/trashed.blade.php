<!DOCTYPE html>
<html lang="en">
<head>
  <title>cars list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>car list</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>content</th>
        <th>published</th>
     
        <th>DELETE</th>
        <th>restore</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cars as $car)
    <tr>
        <td>{{$car->cartitle}}</td>
        <td>{{$car->describtion}}</td>
        <td>@if ($car->published)
          yes 🟢
          @else
          no 🛑
          @endif

      </td>
      
      <td><a href="forcedelete/{{$car->id}}">delete</a></td>
      <td><a href="restorecar/{{ $car->id }}">restore</a></td>
      </tr>
      @endforeach
     
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
