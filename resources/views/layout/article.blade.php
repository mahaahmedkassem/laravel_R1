<!DOCTYPE html>
<html lang="en" class="no-js">
@include('includes.head')


<body>
@include('includes.header')
@include('includes.toparea')
@include('includes.welcome')

@yield('content') 
<!-- //محتوى صفحة البلوج -->


@include('includes.footer')
@include('includes.footerjs')
</body>
</html>