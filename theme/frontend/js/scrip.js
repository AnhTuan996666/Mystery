var SLIDESHOW = (function () {
    var slideBanner = function () {
        if ($(".slide-baner").find(".swiper-slide").length >= 2) {
            var swiper = new Swiper(".slide-baner", {
                navigation: {
                    nextEl: ".banner-next",
                    prevEl: ".banner-prev",
                },
                speed: 1000,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
            });
        }
    };
    var dealSlide = function () {
        if ($(".deal-slideshow").length > 0) {
            var swiper = new Swiper(".deal-slideshow", {
                centeredSlides: true,
                roundLengths: true,
                loop: true,
                loopAdditionalSlides: 30,
                pagination: {
                    el: ".deal-slideshow .swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".product-left-next",
                    prevEl: ".product-left-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    480: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    769: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1200: {
                        spaceBetween: 50,
                        slidesPerView: 5,
                    },
                },
            });
        }
    };
    var productNewSlide = function () {
        if ($(".product-new-slideshow").length > 0) {
            var swiper = new Swiper(".product-new-slideshow", {
                loop: true,
                pagination: {
                    el: ".product-new .swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".product-new .swiper-button-next",
                    prevEl: ".product-new .swiper-button-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    769: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1200: {
                        spaceBetween: 30,
                        slidesPerView: 4,
                    },
                },
            });
        }
    };
    var productFlashSaleSlideshow = function () {
        if ($(".product-flash-sale-slideshow").length > 0) {
            var swiper = new Swiper(".product-flash-sale-slideshow", {
                loop: true,
                pagination: {
                    el: ".product-flash-sale-slideshow .swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".btn-product-flash-next",
                    prevEl: ".btn-product-flash-prev",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    767: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    992: {
                        slidesPerView: 1,
                    },
                },
            });
        }
    };
    var productDetail = function () {
        if ($(".product-detail-slide").length > 0) {
            var swiper = new Swiper(".mySwiper", {
                loop: true,
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".mySwiper2", {
                loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
            });
        }
    };
    return {
        _: function () {
            slideBanner();
            dealSlide();
            productNewSlide();
            productFlashSaleSlideshow();
            productDetail();
        },
    };
})();
var WEBS = (function () {
    var scrollHeader = function () {
        if ($(".header").length > 0) {
            $(window).scroll(function () {
                var header = $(".header").height();
                var height = $(this).scrollTop();

                if (height > header) {
                    $(".header-top").hide();
                    $(".header").addClass("fixed");
                } else {
                    $(".header-top").show();
                    $(".header").removeClass("fixed");
                }
            });
        }
    };

    var backTop = function () {
        var backTop = $(".back-to-top");
        $(window).scroll(function (event) {
            if ($(this).scrollTop() > 1200) {
                backTop.show(200);
            } else {
                backTop.hide(200);
            }
        });
        backTop.click(function (event) {
            $("html,body").animate({ scrollTop: 0 }, 300);
        });
    };

    var showSearch = function () {
        var showSearch = $(".btn-search");
        if (typeof showSearch !== "undefined") {
            showSearch.click(function (event) {
                event.preventDefault();
                $(".main-search-top").toggleClass("show");
            });
        }
    };

    var showVoucher = function () {
        var ishow = $("#ishow");
        ishow.click(function (e) {
            e.preventDefault();
            $(this).find("#showform").toggleClass("ishow");
            $(this).find(".title").toggleClass("rote");
        });
    };

    var showFooter = function () {
        var showFooter = $(".title-footer");
        if ($(document).width() <= 991) {
            showFooter.click(function (event) {
                $(".item-menu").slideToggle(300);
            });
        }
    };

    var productFancy = function () {
        if ($("[data-fancybox]").length > 0) {
            $("[data-fancybox]").fancybox({
                buttons: ["close"],
                wheel: false,
                transitionEffect: "slide",
                loop: true,
                toolbar: false,
                clickContent: false,
            });
        }
    };

    var quantity = function () {
        if ($(".box-quantity").length > 0) {
            $(".input-qty").each(function () {
                var $this = $(this),
                    qty = $this.parent().find(".is-form"),
                    min = Number($this.attr("min")),
                    max = Number($this.attr("max"));
                if (min == 0) {
                    var d = 0;
                } else {
                    d = min;
                }
                $(qty).on("click", function () {
                    if ($(this).hasClass("minus")) {
                        if (d > min) d += -1;
                    } else if ($(this).hasClass("plus")) {
                        var x = Number($this.val()) + 1;
                        if (x <= max) d += 1;
                    }
                    $this.attr("value", d).val(d);
                });
            });
        }
    };

    var checkCardPayment = function () {
        var card = $(".payment-form-card__item");
        var cardInput = card.find("input[name=payment-card]");
        cardInput.change(function () {
            cardInput.closest(".payment-form-card__item").removeClass("checked");
            if ($(this).is(":checked")) {
                $(this).closest(".payment-form-card__item").addClass("checked");
            }
        });
    };

    var inputGroupAnimation = function () {
        var group = $(".js-input-group-animate");
        var input = group.find("input");

        input.focus(function () {
            $(this).parent().addClass("has-content");
        });

        input.focusout(function () {
            if ($(this).val() === "") {
                $(this).parent().removeClass("has-content");
            }
        });
    };

    var initAnimation = function () {
        var wow = new WOW();
        wow.init();
    };
    return {
        _: function () {
            scrollHeader();
            backTop();
            showSearch();
            showFooter();
            initAnimation();
            quantity();
            productFancy();
            checkCardPayment();
            inputGroupAnimation();
            showVoucher();
        },
    };
})();

var OPTIONS = (function () {
    var toggleOption = function () {
        if ($(".category-box-option").length > 0) {
            let li = $(".category-box-option > ul > li > p");
            li.click(function (e) {
                e.preventDefault();
                $(this).parents("li").children("ul").toggle();
                if ($(this).parents("li").children("ul").is(":hidden")) {
                    $(this)
                        .children("i")
                        .addClass("fa-angle-down")
                        .removeClass("fa-angle-up");
                } else {
                    $(this)
                        .children("i")
                        .addClass("fa-angle-up")
                        .removeClass("fa-angle-down");
                }
            });
        }
    };

    return {
        _: function () {
            toggleOption();
        },
    };
})();

var MENU = (function () {
    var headerBody = $("#header-body");
    var menuChildren = $(".menu-child");
    var mainMenu = $(".main-menu");
    var menuDesktop = function () {
        if ($(".main-menu").length > 0 && $(document).width() > 991.98) {
            $(".main-menu>ul>li")
                .mouseover(function () {
                    $("body").css("padding-right", "6.4px");
                    $("body").addClass("overflow-hidden");
                })
                .mouseout(function () {
                    $("body").css("padding-right", "0px");
                    $("body").removeClass("overflow-hidden");
                });
        }
    };
    var addbgMenu = function () {
        headerBody
            .find(".container")
            .append(
                '<div class="bg-menu"><i class="fa fa-times close_menu"></i></div>'
            );
    };
    var actionMenuChild = function () {
        mainMenu.find("i").on("click", function (event) {
            var menuC = $(this).nextAll(".menu-child");
            var ul = $(this).nextAll("ul");

            if (menuC.is(":hidden") === true || ul.is(":hidden") === true) {
                menuC.slideDown(300);
                ul.slideDown(300);
            } else {
                menuC.slideUp(300);
                ul.slideUp(300);
            }
            if ($(this).hasClass("fa-angle-down")) {
                $(this).addClass("fa-angle-up");
                $(this).removeClass("fa-angle-down");
                return;
            } else {
                $(this).addClass("fa-angle-down");
                $(this).removeClass("fa-angle-up");
                return;
            }
        });
    };
    var addIconMenu = function () {
        mainMenu.find("ul li").each(function () {
            if ($(this).find("ul>li").length > 0) {
                $(this).prepend('<i class=" fa fa-angle-down"></i>');
            }
        });
    };
    var menuMobile = function () {
        if ($(document).width() <= 991.98) {
            menuChildren.find(">ul:nth-child(2)").addClass('d-none');
            addIconMenu();
            actionMenuChild();
        }
    };
    var openMenuMobile = function () {
        if ($(".main-menu").length > 0) {
            $(".show_menu").click(function () {
                $(".header-body").addClass("active");
                $("body").addClass("overflow-hidden");
                $(".box-menu").addClass("menu-active");
                $(".bg-menu").addClass("bg-active");
                $(".header-body").addClass("smooth");
                $(".box-menu").addClass("smooth");
                $(".bg-menu").addClass("smooth");
            });
        }
    };
    var closeMenuMobile = function () {
        $(".bg-menu ").on("click", function () {
            $(".header-body").removeClass("active");
            $("body").removeClass("overflow-hidden");
            $(".box-menu").removeClass("menu-active");
            $(".bg-menu").removeClass("bg-active");
        });
    };
    var resize = function () {
        $(document).resize(function () {
            menuChildren.find(">ul:nth-child(2)").addClass('d-block');
        });
    }
    var siderbar = function () {
        $(".categories").find("ul>li>ul").hide();
        $(".categories")
            .find("ul li")
            .each(function () {
                if ($(this).find("ul>li").length > 0) {
                    $(this).prepend('<i class=" fa fa-plus smooth"></i>');
                    $(this).addClass("active");
                }
            });
        $(".categories")
            .find("li i")
            .click(function (event) {
                var ul = $(this).nextAll("ul");

                if (ul.is(":hidden") === true) {
                    ul.slideDown(200);
                } else {
                    ul.slideUp(200);
                }

                if ($(this).hasClass("fa-plus")) {
                    $(this).addClass(" fa-minus");
                    $(this).removeClass(" fa-plus");
                    return;
                } else {
                    $(this).addClass(" fa-plus");
                    $(this).removeClass(" fa-minus");
                    return;
                }
            });
    };
    return {
        _: function () {
            resize();
            addbgMenu();
            menuMobile();
            openMenuMobile();
            closeMenuMobile();
            siderbar();
            menuDesktop();
        },
    };
})();
$(document).ready(function () {
    MENU._();
    SLIDESHOW._();
    OPTIONS._();
    WEBS._();
});
