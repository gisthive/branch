<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Pharmnamics </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/images/logo3.png" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/')}}/css/bulma.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/')}}/css/icons.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/')}}/css/pharmnamics.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/')}}/css/bulma-badge.min.css" />
    @yield('styles')
    <script src="{{url('/')}}/js/jquery.js"></script>
    <script src="{{url('/')}}/js/app.js"></script>
    <script src="{{url('/')}}/js/bulma-carousel.min.js"></script>
    <script src="{{url('/')}}/js/bulma-accordion.min.js"></script>
    <script>
    $(document).ready(function(){
        var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances
        var accordions = bulmaAccordion.attach(); // accordions now contains an array of all Accordion instances
         });
    </script>
</head>