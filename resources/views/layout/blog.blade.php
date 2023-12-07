<!DOCTYPE html>
<html lang="en" class="no-js">
@include('includes.head')


<body>
@include('includes.header')
@include('includes.toparea')

@yield('content')

@include('includes.footor')
@include('includes.footorjs')
</body>
</html>