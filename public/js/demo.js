$(document).ready(function(){$(window).resize(function(){767<$(window).width()&&$("#account_menu").addClass("show")}),0<$(".cookies_msg_box").length&&$(".cookies_msg_box a.cookie-close").click(function(e){$(".cookies_msg_box").addClass("hide")}),$(function(){$(".navbar-toggler").on("click",function(){var e=$(".header"),a=$("html");e.hasClass("active")?(e.removeClass("active"),a.removeClass("open-nav")):(e.addClass("active"),a.addClass("open-nav")),$(".navbar-user").removeClass("active"),$(".user-toggle").removeClass("active")}),$(".member-icon").on("click",function(){var e=$(".member-icon");e.hasClass("active")?e.removeClass("active"):e.addClass("active")}),$(".product-nav-toggler").on("click",function(){var e=$(".product-nav-collapse"),a=$(".product-nav-icon");e.hasClass("active")?(e.removeClass("active"),a.removeClass("active")):(e.addClass("active"),a.addClass("active"))}),$(".nav-product").children().each(function(e,a){var s=$(this).find("a");s.attr("href")==window.location.pathname?s.addClass("active"):s.removeClass("active")}),$(".user-toggle").on("mouseenter",function(){$(".navbar-user").addClass("active"),$(".user-toggle").addClass("active"),$chk_user_target=!0;var e=$(".header"),a=$("html");e.hasClass("active")&&(e.removeClass("active"),a.removeClass("open-nav"))}).on("mouseleave",function(){}),$(".user-header .close").on("click",function(){$(".navbar-user").removeClass("active"),$(".user-toggle").removeClass("active"),$chk_user_target=!1}),$(".navbar-user").on("mouseleave",function(){$(".navbar-user").removeClass("active"),$(".user-toggle").removeClass("active")}),$(".tab-product-support nav>a").on("click",function(e){e.preventDefault();var a=$(this.hash);$(".header");if(a.length)return $("html,body").stop().animate({scrollTop:a.offset().top},600),!1}),$(".an-scroll").on("click",function(e){var a=$(this).parents("section").next("section");return $("html,body").stop().animate({scrollTop:a.offset().top},600),!1}),$(".btn-gotop").on("click",function(e){return $("html,body").stop().animate({scrollTop:0},600),!1})}),$(function(){$(".spec-color-list").delegate("li","click",function(e){if(!$(this).hasClass("active")){var a=$(e.delegateTarget),s=a.siblings("img");a.find("li").removeClass("active"),$(this).addClass("active"),s.attr("src",$(this).data("image"))}})}),$(function(){$(".email-subscription-form").on("submit",function(e){e.preventDefault();var a=$(this).serializeArray();this.reset(),$.isEmptyObject(a)||$.post("/subscription",a),alert("Thank you for your subscription !")})})});