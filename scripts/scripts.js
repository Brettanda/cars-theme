window.onscroll = function() {scrollfunction()};

function scrollfunction() {
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80){
        console.log("kjsalkdjh");
    } else {
        console.log("below");
    }
}