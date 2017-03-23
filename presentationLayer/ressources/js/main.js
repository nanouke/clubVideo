/**
 * Created by phil_ on 3/23/2017.
 */
$(function () {

    // var $content = $('#content');
    //
    // var footerHeight = $('footer').outerHeight();
    // var menuHeight = $('footer').outerHeight();
    // var contentHeight = $content.outerHeight();
    // var pageHeight = $(window).innerHeight();
    //
    //
    // if( (contentHeight + menuHeight + footerHeight) < pageHeight)
    // {
    //     console.log( (contentHeight + menuHeight + footerHeight)  + "/" + pageHeight);
    //
    //     var delta = pageHeight - (menuHeight + footerHeight);
    //
    //     $content.css({'min-height' : delta + "px"});
    //
    // }
    //
    // $( window ).resize(function () {
    //     if( (contentHeight + menuHeight + footerHeight) < pageHeight)
    //     {
    //         console.log( (contentHeight + menuHeight + footerHeight)  + "/" + pageHeight);
    //
    //         var delta = pageHeight - (menuHeight + footerHeight);
    //
    //         $content.css({'min-height' : delta + "px"});
    //
    //     }
    // });

    // Window load event used just in case window height is dependant upon images
    $(window).bind("load", function() {

        var footerHeight = 0,
            footerTop = 0,
            $footer = $("footer");

        positionFooter();

        function positionFooter() {

            footerHeight = $footer.height();
            footerTop = ($(window).scrollTop()+$(window).height()-footerHeight)+"px";

            if ( ($(document.body).height()+footerHeight) < $(window).height()) {
                $footer.css({
                    position: "absolute"
                }).animate({
                    top: footerTop
                })
            } else {
                $footer.css({
                    position: "static"
                })
            }

        }

        $(window)
            .scroll(positionFooter)
            .resize(positionFooter)

    });


});