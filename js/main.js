/*jshint sub:true*/
/***************************
CONTENTS:
***************************/

$(document).ready(function() {
  $(document).ready(function() {
    objectFitImages(); // Object-fit polyfill https://github.com/bfred-it/object-fit-images/ works on new images too
  });

  /*
   * Get Viewport Dimensions
   * returns object with viewport dimensions to match css in width and height properties
   * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
   */

  var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName("body")[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight || e.clientHeight || g.clientHeight;

  function updateViewportDimensions() {
    var w = window,
      d = document,
      e = d.documentElement,
      g = d.getElementsByTagName("body")[0],
      x = w.innerWidth || e.clientWidth || g.clientWidth,
      y = w.innerHeight || e.clientHeight || g.clientHeight;
    return {
      width: x,
      height: y
    };
  }

  // setting the viewport width
  var viewport = updateViewportDimensions();
  // If the window re-sizes we need to re-define the viewport var
  $(window).resize(function() {
    function updateViewportDimensions() {
      var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName("body")[0],
        x = w.innerWidth || e.clientWidth || g.clientWidth,
        y = w.innerHeight || e.clientHeight || g.clientHeight;
      return {
        width: x,
        height: y
      };
    }
    viewport = updateViewportDimensions();
  });

  /****
   HEADER
   ****/
  // Fixed header
  var splashInnerContentContainer = document.querySelectorAll(
    ".splash-inner-container"
  )[0];
  var splashInnerContentContainerHeight =
    splashInnerContentContainer.scrollHeight;
  var splashInnerContentContainerDistanceFromTop = getPosition(
    splashInnerContentContainer
  ).y;

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

    scrollTop = supportPageOffset
      ? window.pageYOffset
      : isCSS1Compat
        ? document.documentElement.scrollTop
        : document.body.scrollTop;

    // Uncomment these two console logs below if you want an idea of how this works
    //   console.log("hit");
    console.log(scrollTop);
    console.log(splashInnerContentContainerHeight);
    console.log(splashInnerContentContainerDistanceFromTop);

    if (
      scrollTop >=
      splashInnerContentContainerHeight +
        splashInnerContentContainerDistanceFromTop
    ) {
      if (!fixedHeader.classList.contains("show")) {
        fixedHeader.classList.add("show");
      }
    } else if (
      scrollTop <
      splashInnerContentContainerHeight +
        splashInnerContentContainerDistanceFromTop
    ) {
      if (fixedHeader.classList.contains("show")) {
        fixedHeader.classList.remove("show");
      }
    }
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

  // Company-profiles columns add empty divs

  var columns = document.querySelectorAll(".col");

  /****
   * SCROLL REVEAL
   *
   * ****/
  window.sr = ScrollReveal();
  sr.reveal(".intro-section", { duration: 1000 });
  sr.reveal(".industry-block");
  // sr.reveal(".industry-block", { duration: 1000, viewFactor: 0.1 }, 50);

  /****
Video output depending on mobile or not   
****/
  if (viewport.width >= 1030) {
    var videoString =
      '<video width="320" id="introVideo" height="240" muted loop autoplay="autoplay"> <source src="video/video.mp4" type="video/mp4"> Your browser does not support the video tag. </video>';
    if ($(".main-container.home").length > 0) {
      $(".splash").prepend(videoString);
      var video = document.getElementById("introVideo");
      video.addEventListener(
        "loadeddata",
        function() {
          $(".splash-inner-container").css({
            opacity: "1"
          });
          $(".down-arrows").fadeIn(1000);
        },
        false
      );
    }
  } else {
  }
});
