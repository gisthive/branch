<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Free Bulma template</title>
    <link rel="stylesheet" href="/css/icons.css">
    <link rel="stylesheet" href="/css/bootstrap.css" />
</head>

<body>
    
    @include ('admin.includes.nav')
        <div class="container">
                @yield ('content')
        </div>        
                
            <script src="/js/jquery.js"></script>  
    <script async type="text/javascript" src="/js/bootstrap.js"></script>
</body>

</html>