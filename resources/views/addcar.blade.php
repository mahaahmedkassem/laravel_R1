
<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{__('messege.addcar')}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div>
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a>
    </div>

  <h2>{{__('messege.addcar')}}</h2>
  <form action="{{ route('cars')}}" method="post"  enctype="multipart/form-data" >
  @csrf
    <div class="form-group">
      <label for="title">{{__('messege.title')}}</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="cartitle" value="{{ old('cartitle') }}">
      @error('cartitle')
      <div class="alert alert-warning">
      {{$message}}
      </div>
      @enderror
       
        </div>
    <div class="form-group">
      <label for="price">{{__('messege.price')}}:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price">
     

    </div>
    <div class="form-group">
        <label for="description">{{__('messege.description')}}:</label>
        <textarea class="form-control" rows="5" name="describtion" id="description"> {{ old('describtion') }} </textarea>
        @error('describtion')
        <div class="alert alert-warning">
      {{$message}}

      @enderror
      </div>
      <div class="form-group">
            <label for="image">{{__('messege.image')}}:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
            <div class="alert alert-warning">
            @error('image')
                {{ $message }}
            @enderror
            </div>
        </div>
      
      <div class="form-group">
      <label for="category">{{__('messege.carcategory')}}:</label>
            <select name="category_id" id="">
                <option value="">{{__('messege.carcategory')}}</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                @endforeach

            </select>
        </div>
       




    <div class="checkbox">
      <label><input type="checkbox" name="published"> {{__('messege.puplished')}}</label>
    </div>
    <button type="submit" class="btn btn-default">{{__('messege.add')}}</button>
  </form>
</div>

</body>
</html>
