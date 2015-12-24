jQuery(document).on('ready', function () {
    jQuery('[data-nav-toggle], .overlay').on('click', function (e) {
        jQuery('[data-container], [data-nav]').toggleClass('is-showing-nav');
        jQuery('[data-nav-toggle]').toggle(
            function(){
                jQuery(this).find('[data-nav-image]').attr('{src:"/smarr-garage-door/local/resources/assets/images/icon/close-menu-30.png"}')
            },
            function(){
                jQuery(this).find('[data-nav-image]').attr('{src:"/smarr-garage-door/local/resources/assets/images/icon/menu-alt-30.png"}')
            }
        );
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