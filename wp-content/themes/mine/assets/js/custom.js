$(document).ready(function($) {
    const burgerMenu = document.getElementById("burger");
    const navbarMenu = document.getElementById("menu");

    // Show and Hide Navbar Menu
    burgerMenu.addEventListener("click", () => {
        burgerMenu.classList.toggle("is-active");
        navbarMenu.classList.toggle("is-active");

        if (navbarMenu.classList.contains("is-active")) {
            navbarMenu.style.maxHeight = navbarMenu.scrollHeight + "px";
        } else {
            navbarMenu.removeAttribute("style");
        }
    });
    $("#primary-menu a,.scroll").click(function (e) {
        $("html,body").animate({
            scrollTop: $($(this).attr("href")).offset().top,
          },
          1000,
        );
        $('input[name="Name"]').focus();
        e.preventDefault();
      });
    $(window).on("load", function () {
        if ($(window).width() > 767.98) {
        var height = 0;
        $(".first-equal-height").each(function () {
            if (height < $(this).outerHeight()) {
            height = $(this).outerHeight();
            }
        });
        $(".first-equal-height").css("height", height);
        }
    });
    $(window).on("load", function () {
        if ($(window).width() > 767.98) {
        var height = 0;
        $(".campaign-text").each(function () {
            if (height < $(this).outerHeight()) {
            height = $(this).outerHeight();
            }
        });
        $(".campaign-text").css("height", height);
        }
    });
    $(window).on("load", function () {
        if ($(window).width() > 767.98) {
          var height = 0;
          $(".equal-height").each(function () {
            if (height < $(this).outerHeight()) {
              height = $(this).outerHeight();
            }
          });
          $(".equal-height").css("height", height);
        }
    });
});
new WOW().init();