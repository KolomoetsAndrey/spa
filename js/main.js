$(document).ready(function(){
    var menuwidth = document.getElementById("container").clientWidth;
    var hafmenuwidth = menuwidth / 2;
    var mainmenu = document.getElementById("mainmenu");
    mainmenu.style.setProperty('width', menuwidth + 'px' );
    mainmenu.style.setProperty('--haf-mainmenu', '-' + hafmenuwidth + 'px');
});

window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    document.getElementById("toTop").style.display = "block";
    } else {
    document.getElementById("toTop").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:7
        }
    }
})

// Main Menu
function openNav() {
    var x = window.matchMedia("(max-width:900px)");

    if (x.matches) {
        document.getElementById("header_menu_mobile").style.width = "100%";
        document.getElementById("header_menu_mobile").style.background = "#44261C";
    } else {
        document.getElementById("header_menu_mobile").style.width = "80%";
        document.getElementById("header_menu_mobile").style.background = "#44261C";
    }
};
    
function closeNav() {
    document.getElementById("header_menu_mobile").style.width = "0";
    document.getElementById("header_menu_mobile").style.background = "transparent";
};

// Phone Menu
function openPhone() {
    var x = window.matchMedia("(max-width:900px)");

    if (x.matches) {
        document.getElementById("phone_mobile").style.width = "100%";
        document.getElementById("phone_mobile").style.background = "#44261C";
    } else {
        document.getElementById("phone_mobile").style.width = "80%";
        document.getElementById("phone_mobile").style.background = "#44261C";
    }
};
    
function closePhone() {
    document.getElementById("phone_mobile").style.width = "0";
    document.getElementById("phone_mobile").style.background = "transparent";
};

// var getButtons = document.getElementsByClassName('day_block');

// for (var i=0; i<getButtons.length; i++) {
//     var getCicleDate = document.getElementById('date').innerHTML;
//     console.log(getCicleDate);
// }



// moment.locale('en');
// var getDateNow = [2019, 11, 12];
// var day = moment(getDateNow).format('dddd');
// console.log(day);

