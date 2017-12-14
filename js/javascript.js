var slideIndex = 0;
var slideIndex2 = 1;
carousel();
showDivs(slideIndex2);

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1
    }
    x[slideIndex - 1].style.display = "block";
    setTimeout(carousel, 9000); // Change image every 2 seconds
}
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function openCity(evt, productname) {
    var i, x, tablinks;
    x = document.getElementsByClassName("product");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("w3-black", "");
    }
    document.getElementById(productname).style.display = "block";
    evt.currentTarget.className += " w3-black";
}


function plusDivs(n) {
    showDivs(slideIndex2 += n);
}

function currentDiv(n) {
    showDivs(slideIndex2 = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides1");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {
        slideIndex2 = 1
    }
    if (n < 1) {
        slideIndex2 = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("w3-opacity-off", "");
    }
    x[slideIndex2 - 1].style.display = "block";
    dots[slideIndex2 - 1].className += " w3-opacity-off";
}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtntop").style.display = "block";
    } else {
        document.getElementById("myBtntop").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 