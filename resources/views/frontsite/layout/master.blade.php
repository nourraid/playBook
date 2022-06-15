<html lang="en">
<head>
    <title>PlayBook</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Mastering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- //custom-theme -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/JiSlider.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property=""/>

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>

    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property=""/>
    <!-- font-awesome-icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="{{asset('//fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800')}}"
          rel="stylesheet">
    <link
        href="{{asset('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic')}}"
        rel='stylesheet' type='text/css'>
</head>

<body>
@include('frontsite.layout.menu')

@yield('content')

@include('frontsite.layout.footer')

