<!DOCTYPE html>
<html lang="{{app()->getLocale()}}"> @include('sections.default.head')
<body>
@include('sections.default.header')
@yield('content')
@include('sections.default.footer')</body>
</html>
