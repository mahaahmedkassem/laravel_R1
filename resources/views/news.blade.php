
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add NEWS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>news</h2>
  <form action="{{ route('newsadded')}}" method="post"  enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="newstitle" value="{{ old('newstitle') }}">
      @error('newstitle')
      <div class="alert alert-warning">
      {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="content">content:</label>
      <input type="text" class="form-control" id="content" placeholder="content" name="content" value="{{ old('content') }}">
      @error('content')
      <div class="alert alert-warning">
      {{$message}}
      </div>
      @enderror
    </div>

   

    <div class="form-group">
      <label for="price">author:</label>
      <input type="text" class="form-control" id="author" placeholder="author" name="author" value="{{ old('author') }}">
      @error('author')
      <div class="alert alert-warning">
      {{$message}}
      </div>
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
