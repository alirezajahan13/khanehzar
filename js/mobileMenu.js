var $ = jQuery;
var svg = '<svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1 1" xml:space="preserve" transform="rotate(90)"><path fill="#cdb578" d="M.311.817a.02.02 0 0 0 .028 0l.3-.3a.02.02 0 0 0 0-.028l-.3-.3a.02.02 0 1 0-.028.028l.286.286-.286.286a.02.02 0 0 0 0 .028z"/></svg>'


$(document).ready(function(){
    $(".menuMobile").click(function(){
        $(".mobileMenuContainer").fadeIn(400);
        // $(".mobileMenuOverlay").addClass("showMobileMenuOverlay");
    })
    $(".closeMenu").click(function(){
        $(".mobileMenuContainer").fadeOut(400);
        // $(".mobileMenuOverlay").removeClass("showMobileMenuOverlay");
    })

    $(".mobileMenu>ul>.menu-item-has-children>a").click(function(){
        $(".mobileMenu>ul>.menu-item-has-children>ul").slideUp(300);
        $(".mobileMenu>ul>.menu-item-has-children>a>svg").css('transform','rotate(90deg)');
        if($(this).siblings("ul").css('display')=='block'){
            $(this).siblings('ul').slideUp(300);
        }
        else{
            $(this).siblings('ul').slideToggle(400);
            $(this).find("svg").css('transform','rotate(270deg)')
        }

        
    })  
    $(".menu-item-has-children>a").append(svg);
})
