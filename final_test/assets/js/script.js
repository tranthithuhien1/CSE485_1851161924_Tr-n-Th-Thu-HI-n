$(document).ready(function(){
    $('.has-sub1').hover(function(){
        $('.nav-sub1').show('slow')
    })
    $('.has-sub2').hover(function(){
        $('.nav-sub2').show('slow');
    })
    $('.has-sub3').hover(function(){
        $('.nav-sub3').show('slow');
    })
    $('.has-sub4').hover(function(){
        $('.nav-sub4').show('slow');
    })
    $('.has-sub5').hover(function(){
        $('.nav-sub5').show('slow');
    })
    $('.has-sub5').hover(function(){
        $('.nav-sub5').show('slow');
    })
    $('.has-sub6').hover(function(){
        $('.nav-sub6').show('slow');
    })
    $('.has-sub7').hover(function(){
        $('.nav-sub7').show('slow');
    })
    $('.has-sub1').mouseleave(function(){
        $(".nav-sub1").hide('slow');
    })
     $('.has-sub2').mouseleave(function(){
        $(".nav-sub2").hide('slow');
    })
     $('.has-sub3').mouseleave(function(){
        $(".nav-sub3").hide('slow');
    })
     $('.has-sub4').mouseleave(function(){
        $(".nav-sub4").hide('slow');
    })
     $('.has-sub5').mouseleave(function(){
        $(".nav-sub5").hide('slow');
    })
     $('.has-sub6').mouseleave(function(){
        $(".nav-sub6").hide('slow');
    })
     $('.has-sub7').mouseleave(function(){
        $(".nav-sub7").hide('slow');
    })
});
$(document).ready(function(){
    $(".has-sub").mouseenter(function(){
        $(".nav-sub").show(fast)
    })
})

$(document).ready(function(){
    $(":input").click(function(){
         $(this).css("border","2px solid green");
    });
    $(":input").mouseleave(function(){
        $(this).css("border","white");
    })
    
});
// bar responsive
// nav mobile
$(document).ready(function () {
    $("#respon-bar").click(function(){
        $(".navbar-mobile").fem("transform","translate(0%)");
        // $(".navbar-mobile").slideToggle();
        // $(".dropdown-menu a ").css("display","none");
    });
    $(".nav-mobile-close").click(function(){
        $(".navbar-mobile").fem("transform","translate(-100%)");
    });
// search mobile
    $("#search1").click(function(){
        $(".search-mobile").fem("display","block");
        $(".search-mobile .search-frame").fem("display","block");
        $(".search-mobile .btn-close").fem("display","block");
    });
    $(".btn-close").click(function(){
        $(".search-mobile").fem("display","none");
        $(".search-mobile .search-frame").fem("display","none");
        $(".search-mobile .btn-close").fem("display","none");
    });
    
});
