
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Places</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2></h2>
  <form action="{{ route('placeadded')}}" method="post"  enctype="multipart/form-data" >
  @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ old('title') }}">
      @error('title')
      <div class="alert alert-warning">
      {{$message}}
      </div>
      @enderror

      <div class="form-group">
      <label for="title">description:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter description" name="description" value="{{ old('description') }}">
      @error('description')
      <div class="alert alert-warning">
      {{$message}}
      </div>
      @enderror
       
        </div>
    <div class="form-group">
      <label for="price">Price from:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter Price" name="from">
     

    </div>

    </div>
    <div class="form-group">
      <label for="price">Price to:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter Price" name="to">
     

    </div>
   

      <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
           
            @error('image')
                {{ $message }}
            @enderror

        </div>
      
    <div class="checkbox">
      <label><input type="checkbox" name="published"> Published</label>
    </div>
    <button type="submit" class="btn btn-default">Add</button>
  </form>
</div>

</body>
</html>
