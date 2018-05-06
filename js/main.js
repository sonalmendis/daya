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
  sr.reveal(".intro-section", {
    duration: 1000
  });
	sr.reveal(".intro", {
    duration: 1000
  });
  sr.reveal(".industry-block");
  sr.reveal(".director_card", {
  	duration: 1000
  });
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

  // SMOOTH ANCHOR LINK SCROLLING
  //
  //
  //
  var scroll = new SmoothScroll('a[href*="#"]');

  /**** TIMELINE - About Us ****/
  (function() {
    function VerticalTimeline(element) {
      this.element = element;
      this.blocks = this.element.getElementsByClassName("js-cd-block");
      this.images = this.element.getElementsByClassName("js-cd-img");
      this.contents = this.element.getElementsByClassName("js-cd-content");
      this.offset = 0.8;
      this.hideBlocks();
    }

    VerticalTimeline.prototype.hideBlocks = function() {
      //hide timeline blocks which are outside the viewport
      if (!"classList" in document.documentElement) {
        return;
      }
      var self = this;
      for (var i = 0; i < this.blocks.length; i++) {
        (function(i) {
          if (
            self.blocks[i].getBoundingClientRect().top >
            window.innerHeight * self.offset
          ) {
            self.images[i].classList.add("cd-is-hidden");
            self.contents[i].classList.add("cd-is-hidden");
          }
        })(i);
      }
    };

    VerticalTimeline.prototype.showBlocks = function() {
      if (!"classList" in document.documentElement) {
        return;
      }
      var self = this;
      for (var i = 0; i < this.blocks.length; i++) {
        (function(i) {
          if (
            self.contents[i].classList.contains("cd-is-hidden") &&
            self.blocks[i].getBoundingClientRect().top <=
              window.innerHeight * self.offset
          ) {
            // add bounce-in animation
            self.images[i].classList.add("cd-timeline__img--bounce-in");
            self.contents[i].classList.add("cd-timeline__content--bounce-in");
            self.images[i].classList.remove("cd-is-hidden");
            self.contents[i].classList.remove("cd-is-hidden");
          }
        })(i);
      }
    };

    var verticalTimelines = document.getElementsByClassName("js-cd-timeline"),
      verticalTimelinesArray = [],
      scrolling = false;
    if (verticalTimelines.length > 0) {
      for (var i = 0; i < verticalTimelines.length; i++) {
        (function(i) {
          verticalTimelinesArray.push(
            new VerticalTimeline(verticalTimelines[i])
          );
        })(i);
      }

      //show timeline blocks on scrolling
      window.addEventListener("scroll", function(event) {
        if (!scrolling) {
          scrolling = true;
          !window.requestAnimationFrame
            ? setTimeout(checkTimelineScroll, 250)
            : window.requestAnimationFrame(checkTimelineScroll);
        }
      });
    }

    function checkTimelineScroll() {
      verticalTimelinesArray.forEach(function(timeline) {
        timeline.showBlocks();
      });
      scrolling = false;
    }
  })(); // end of timeline function

  // MOBILE NAV-BAR
  //
  //
  //
  // Click listener Companies, toggles dropdown
  $("ul li > a:not(:only-child)").click(function(e) {
    $(".nav-dropdown").slideToggle("400", "swing", function() {
      // Animation styles
    });
    $(".nav-list").toggleClass("nav-list-show");
    $(this).toggleClass("companies-pressed", "400");
  });

  // Click listener to close the menu when an option has been picked
  $("ul li > a:only-child, .nav-dropdown").click(function() {
    $(".nav-list").slideToggle( "fast", function() {
      $("body").toggleClass("body-scroll");
      $(".nav-dropdown").hide();
      $(".nav-list").removeClass("nav-list-show");
    });

    $(".nav-toggle").toggle();
    $(".nav-toggle-cross").toggle();
  });

  // Click listener hamburger, toggles nav-list
  $(".nav-toggle").click(function() {
    $(".nav-toggle").toggle();
    $(".nav-toggle-cross").toggle();

    $(".nav-list").slideToggle( "fast", function() {
      $("body").toggleClass("body-scroll");
      $(".nav-dropdown").hide();
      $(".nav-list").removeClass("nav-list-show");
    });
  });

  $(".nav-toggle-cross").click(function() {
    $(".nav-toggle").toggle();
    $(".nav-toggle-cross").toggle();

    $(".nav-list").slideToggle( "fast", function() {
      $("body").toggleClass("body-scroll");
      $(".nav-dropdown").hide();
      $(".nav-list").removeClass("nav-list-show");
    });
  });

  // Touch listener to close nav-list
  $(document).on("touchstart", function() {
	    $(".nav-list").slideUp("fast", "swing", function() {
	      $(".nav-list").hide();
    	});
      $("body").removeClass("body-scroll");
      $(".nav-list").removeClass("nav-list-show");
	    $(".nav-toggle").show();
	    $(".nav-toggle-cross").hide();
	});

  // Touch listener makes sure above is correctly selected
  $(".nav-list, .fixed-header-inner-inner, .fixed-header-inner").on("touchstart", function(e) {
    e.stopPropagation();
  });

  /****
   * CONTACT FORM SUBMIT
   ****/

  if ($(".main-container").hasClass("contact-us")) {
    // The actual form submission
    $("#contact-form").submit(function(event) {
      /* stop form from submitting normally */
      event.preventDefault();

      var $this = $("#contact-form .btn");
      if ($this.hasClass("active") || $this.hasClass("success")) {
        return false;
      }
      // Init loding
      $this.addClass("active");
      //Loading
      $this.addClass("loader");

      /* get some values from elements on the page: */
      var $form = $(this),
        name_value = $form.find('input[name="name"]').val(),
        email_value = $form.find('input[name="email"]').val(),
        message_value = $form.find('textarea[name="message"]').val(),
        url = $form.attr("action");

      /* Send the data using post */
      var posting = $.post(url, {
        name: name_value,
        email: email_value,
        message: message_value
      });

      posting.done(function(data) {
        //Success
        $this.removeClass("loader active");
        $this.text("Your message has been sent successfully");
        $this.addClass("success animated pulse");
      });
    });
  }
}); // end of document ready, put everything inside here
