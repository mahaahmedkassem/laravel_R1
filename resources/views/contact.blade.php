<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <h2>contact us</h2>

  <form action="{{ route('sendemail')}}" method="post"  enctype="multipart/form-data" >
  @csrf
    <div class="form-group">
      <label for="title">Name:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="name" value="">
      </div>

      <div class="form-group">
      <label for="title">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="">
      </div>
      
      <div class="form-group">
      <label for="title">messege:</label>
      <input type="text" class="form-control" id="messege" placeholder="Enter messege" name="messege" value="">
      </div>

      <button type="submit" class="btn btn-default">send</button>

  </form>
</div>




</body>
</html>