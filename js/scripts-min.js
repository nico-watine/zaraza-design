$(document).ready(function(){$(".slider-for").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!0,asNavFor:".slider-nav"}),$(".slider-nav").slick({slidesToShow:3,slidesToScroll:1,asNavFor:".slider-for",centerMode:!0,centerPadding:"30px",focusOnSelect:!0}),$(".slides").slick()});