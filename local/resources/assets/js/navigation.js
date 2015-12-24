jQuery(document).on('ready', function () {
    jQuery('[data-nav-toggle], .overlay').on('click', function (e) {
        
        // Add class when menu is open, toggle back when closed
        jQuery('[data-container], [data-nav]').toggleClass('is-showing-nav');

        // Change Menu Icon from open to close on click
        var isShowingNav = jQuery('[data-nav]').hasClass('is-showing-nav');
        var menuText = 'Menu';
        var menuImagePath = "/smarr-garage-door/local/resources/assets/images/icon/menu-alt-30.png";
        
        if(isShowingNav)
        {
            menuText = "Close";
            menuImagePath = "/smarr-garage-door/local/resources/assets/images/icon/close-menu-36.png";
        }

        var menuImageElement = jQuery(this).find('[data-nav-image]');
        menuImageElement.attr('src', menuImagePath);
        jQuery(this).html(menuText);
        jQuery(this).prepend(menuImageElement);

        // Prevent default click behavior on menu icon
        e.preventDefault();
    });


    jQuery('[data-nav-submenu]').on('click', function () {

        if (window.matchMedia('(max-width: 549px)').matches) {
            jQuery(this).find('.nav-submenu').slideToggle();
        }
        else {
            var isopen = jQuery(this).find('.nav-submenu').hasClass('is-open');
            jQuery('.nav-submenu').removeClass('is-open');

            if (isopen === false) {
                jQuery(this).find('.nav-submenu').toggleClass('is-open');
            }
        }
    });

    jQuery('body').on('click', function (e) {
        if (jQuery(e.target).is('.nav-item')) {
            return;
        }

        jQuery('.nav-submenu').removeClass('is-open');
    });
});