@include('partials._header')

<body class="ecommerce">
    @include('partials._nav')
   

<div class="wrapper">
     

    
    <div class="container">
               


     @yield('content')
    <!-- section -->
    

    @include('partials._footer')

</div>



</div> <!-- wrapper -->

</body>

@include('partials._scripts')

</html>
