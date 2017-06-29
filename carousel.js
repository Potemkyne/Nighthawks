// JavaScript Document

$('.im1').hover(
        function () {
            "use strict";
            $('p').css("color", "darkgoldenrod");
            $('.btn.btn-default').css("background-color", "darkgoldenrod").css("border-color", "darkgoldenrod").css("color", "white");
        },
        function () {
            "use strict";
            $('p').css("color", "white");
            $('.btn.btn-default').css("background-color", "darkslategray").css("border-color", "darkslategray").css("color", "black");
        }
);
