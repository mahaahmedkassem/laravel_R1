<!DOCTYPE html>
<html lang="en">
<head>
  <title>update client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>clients</h2>
  <form action="{{ route('updateclient',$client->id)}}"  method="post" >
    @csrf
    @method('put')


    <div class="form-group">
      <label for="text">clintname:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter name" name="clintname" value="{{$client->clintname}}">
    </div>
    <div class="form-group">
      <label for="text">adress:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter adress" name="adress" value="{{$client->adress}}" >
    </div>
    <div class="form-group">
      <label for="email">contact:</label>
      <input type="email" class="form-control" id="email" placeholder="contact" name="contact"  value="{{$client->contact}}">
    </div>
   
    <div class="checkbox">
      <label><input type="checkbox" name="published"  @checked($client->published)> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">update</button>
  </form>
</div>

</body>
</html>
