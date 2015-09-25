<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset=" utf-8">
    <title itemprop="name">@yield('title')</title>
    <meta itemprop="about" name="description" content="Servicing the Mid-Missouri area for over 35 years, Smarr Garage Door in Columbia, MO provides repair or installation of residential and commercial doors.">
    <meta itemprop="author" name="author" content="Smarr Garage Door">
    <meta property="og:url" content="http://www.smarrdoors.com/your-page.html" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Smarr Garage Door" />
    <meta property="og:description" content="Garage Door Installation, Service & Repair | Smarr Garage Door - Columbia MO" />
    <meta property="og:image" content="http://www.smarrdoors.com/images/smarr2.png" />


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/smarr-garage-door/local/resources/assets/css/normalize.css">
    <link rel="stylesheet" href="/smarr-garage-door/local/resources/assets/css/skeleton.css">
    <link rel="stylesheet" href="/smarr-garage-door/local/resources/assets/css/custom.css">
    <link rel="stylesheet" href="/smarr-garage-door/local/resources/assets/css/media.css">

    <link rel="icon" type="image/png" href="/smarr-garage-door/local/resources/assets/images/favicon.png">

    <script src="/smarr-garage-door/local/resources/assets/js/jquery-1.11.2.min.js"></script>
    <script src="/smarr-garage-door/local/resources/assets/js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <script>
        jQuery(document).on('ready', function () {
            jQuery('[data-nav-toggle]').on('click', function (e) {
                jQuery('[data-container]').toggleClass('is-showing-nav');
                e.preventDefault();
            });

            jQuery('[data-nav]').accordion({
                active: false,
                heightStyle: "content",
                header: "> [data-nav-submenu]",
                collapsible: true
            });
        });
    </script>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body>
     

    <div class="top-container" data-container itemscope itemtype="http://schema.org/GeneralContractor">
        @include('layout.header')
        
        @include('layout.navigation')

        <div class="content container">
            
            @yield('content')
            
        </div>

        @include('layout.footer')

    </div>

    @include('shared.google-analytics')

</body>
</html>
