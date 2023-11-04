<!DOCTYPE html>
<html lang="en">
<!-- , user-scalable=no -->

<head>
    @include('frontend.new_layouts.head')
</head>

<body class="body">

<div class="cursor"></div>
<canvas></canvas>

<div class="area">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<audio loop="" id="audioPlayer" autoplay="" style="display: none;">
    <source src="{{asset('elite/src/mp3/preloader.mp3')}}" type="audio/mp3"/>
</audio>
<div id="preloader"></div>
<noscript>Allow Javascript</noscript>

<header>
    @include('frontend.new_layouts.navbar')
</header>


<!-- main starts here -->
<main>
    @yield('content')
</main>
<!-- main ends here -->

</body>

@include('frontend.new_layouts.script')
@stack('script')
</html>
