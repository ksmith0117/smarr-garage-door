<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset=" utf-8">
    
    @yield('meta-data')
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/smarr-garage-door/local/resources/assets/css/normalize.css">
    <link rel="stylesheet" href="/smarr-garage-door/local/resources/assets/css/skeleton.css">
    <link rel="stylesheet" href="/smarr-garage-door/local/resources/assets/css/custom.css">
    <link rel="stylesheet" href="/smarr-garage-door/local/resources/assets/css/media.css">

    <link rel="icon" type="image/png" href="/smarr-garage-door/local/resources/assets/images/favicon.png">

    <script src="/smarr-garage-door/local/resources/assets/js/jquery-1.11.2.min.js"></script>
    <script src="/smarr-garage-door/local/resources/assets/js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script src="/smarr-garage-door/local/resources/assets/js/navigation.js"></script>
    <script src="/smarr-garage-door/local/resources/assets/js/social.js"></script>
</head>
<body>
    <div class="top-container" data-container itemscope itemtype="http://schema.org/GeneralContractor">
        @include('layout.header')
        
        @include('layout.navigation')

        <div class="content container">
            <div class="overlay"></div>  
            @yield('content')
            
        </div>

        @include('layout.footer')

    </div>

    @include('shared.google-analytics')

</body>
</html>
