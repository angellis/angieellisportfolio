$(window).scroll(function(){$(this).scrollTop()>=50?$("#myBtn").fadeIn(200):$("#myBtn").fadeOut(200)}),$("#myBtn").click(function(){$("body,html").animate({scrollTop:0},500)});