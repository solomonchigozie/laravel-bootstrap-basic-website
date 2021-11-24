 /* Preloader */
 $(window).on('load', function() {
    var preloaderFadeOutTime = 500;
    function hidePreloader() {
        var preloader = $('.spinner-wrapper');
        setTimeout(function() {
            preloader.fadeOut(preloaderFadeOutTime);
        }, 500);
    }
    hidePreloader();
});

 
 //adding active class to menu links
 var site_url = window.location.href;
 //split url to get the last part
 var menu_url = site_url.split("/").pop();
 
 $("[href$='" +site_url +"']").addClass("active");

 