
<!DOCTYPE html>
<html lang="en">
<head>
  <title>update Car</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>edit Car</h2>
  <form action="{{ route('updateCar',$car->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="cartitle" value="{{$car->cartitle}}">
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5" name="describtion" id="description">{{$car->describtion}}</textarea>
      </div> 
      <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ $car->image }}">
            <img src="{{ asset('assets/images/'.$car->image) }}" alt="cars" style="width:150px;">
        </div>
      
    <div class="checkbox">
      <label><input type="checkbox" name="published" @checked($car->published)   > Published</label>
    </div>
    <button type="submit" class="btn btn-default">update</button>
  </form>
</div>

</body>
</html>
