<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        @include('user.layout.head')
</head>
<body>

  <div class="header">
    <div class="container">
        @include('user.layout.header')
    </div>

    @section('main-content')

        @show

</div>
@include('user.layout.footer')

</body>
</html>
