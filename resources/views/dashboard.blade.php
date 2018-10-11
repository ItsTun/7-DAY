<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard PRO by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

   @include('daspartial._css')
   


</head>
<body>

<div class="wrapper">
    @include('daspartial._nav')

    <div class="main-panel">
        @include('daspartial._navse')

        <div class="main-content">
            <div class="container-fluid">

                @yield('content')



            </div>
        </div>


       @include('daspartial._footer')

    </div>
</div>


</body>
@include('daspartial._scripts')

</html>
