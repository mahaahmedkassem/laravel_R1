<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
</head>
<body>


  <h2>  Car title: {{  $car->cartitle }} </h2>
    <br>
    Car Description:{{  $car->describtion }} 
    
<br>
    Category Details: {{ $car->category->categoryName }}
    
</body>
</html>