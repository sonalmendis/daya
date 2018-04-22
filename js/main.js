/*jshint sub:true*/
/***************************
CONTENTS:
***************************/

$(document).ready(function() {
	objectFitImages(); // Object-fit polyfill https://github.com/bfred-it/object-fit-images/ works on new images too
});

// Fixed header
var splashInnerContentContainer = document.querySelectorAll(".splash-inner-container")[0];
var splashInnerContentContainerHeight = splashInnerContentContainer.scrollHeight;
var splashInnerContentContainerDistanceFromTop = getPosition(splashInnerContentContainer).y;

var fixedHeader = document.querySelectorAll(".fixed-header-bar")[0];
var fixedHeaderMobile = document.querySelectorAll(".fixed-header-mobile")[0];
var scrollTop;


// This function gets the distance of an element from the top
function getPosition(element) {
  var xPosition = 0;
  var yPosition = 0;

  while (element) {
    xPosition += element.offsetLeft - element.scrollLeft + element.clientLeft;
    yPosition += element.offsetTop - element.scrollTop + element.clientTop;
    element = element.offsetParent;
  }

  return {
    x: xPosition,
    y: yPosition
  };
}

// Add an event listener so the function below runs everytime a scroll is done
document.addEventListener("scroll", function(event) {
  /* Define vars that help with determining vertical scroll position 
  (https://stackoverflow.com/questions/11193453/find-the-vertical-position-of-scrollbar-without-jquery)
  These need constant re-defining otherwise they give old values */
  supportPageOffset = window.pageXOffset !== undefined;
  isCSS1Compat = (document.compatMode || "") === "CSS1Compat";

  scrollTop = supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;

  // Uncomment these two console logs below if you want an idea of how this works
  //   console.log("hit");
  console.log(scrollTop);
  console.log(splashInnerContentContainerHeight);
  console.log(splashInnerContentContainerDistanceFromTop);


  if (scrollTop >= splashInnerContentContainerHeight + splashInnerContentContainerDistanceFromTop) {
    if (!fixedHeader.classList.contains("show")) {
      fixedHeader.classList.add("show");
    }
  } else if (scrollTop < splashInnerContentContainerHeight + splashInnerContentContainerDistanceFromTop) {
    if (fixedHeader.classList.contains("show")) {
      fixedHeader.classList.remove("show");
    }
  };

});


















//   if (scrollTop >= splashInnerContentContainerHeight + splashInnerContentContainerDistanceFromTop && !fixedHeaderMobile.classList.contains("show")) {
//     fixedHeaderMobile.classList.add("show");
//   } else if (scrollTop < splashInnerContentContainerHeight + splashInnerContentContainerDistanceFromTop && fixedHeaderMobile.classList.contains("show")) {
//     fixedHeaderMobile.classList.remove("show")
//     if (!$(".nav-menu").hasClass("visuallyhidden")) {
//       $(".hamburger").removeClass("hidden");
//       $(".cross").addClass("hidden");
//       $(".nav-menu").addClass("visuallyhidden");
//     };
//   };
// });

// $(".menu").toggle(false);

// $(".hamburger").on("click", function() {
//   $(".menu").animate({width: 'toggle'}, 400, "swing", function() {
//     $(".nav-menu").removeClass("visuallyhidden");
//   });
//   $(".cross").removeClass("hidden");
//   $(".hamburger").addClass("hidden");
//   $(".nav-text").delay(100).fadeIn(300);
// });

// $(".cross").on("click", function() {
//   $(".menu").animate({width: 'toggle'}, 400, "swing", function() {
//     $(".nav-menu").addClass("visuallyhidden");
//   });
//   $(".hamburger").removeClass("hidden");
//   $(".cross").addClass("hidden");
//   $(".nav-text").fadeOut(300);
// });