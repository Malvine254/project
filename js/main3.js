/*
=============================================================================================================================================
This marks the start of counter
=============================================================================================================================================
*/
$(document).ready(function() {
  var counterList = $(".counter");

  // Function to start counting from 0 to the target value
  function startCounter() {
      counterList.each(function() {
          var target = parseInt($(this).attr("data-target"));
          var element = $(this);
          var count = 0;

          // Counter function
          var counter = setInterval(function() {
              element.text(count);
              count++;

              // Stop counting when reaching the target value
              if (count > target) {
                  clearInterval(counter);
              }
          }, 5); // Speed of counting in milliseconds
      });
  }

  // Call startCounter function when the page is loaded
  startCounter();

  // Call startCounter function again when the page is scrolled
  $(window).scroll(function() {
      var scrollPosition = $(this).scrollTop();
      var windowHeight = $(window).height();
      var documentHeight = $(document).height();

      // Start counter only when the scroll position reaches the middle of the page
      if (scrollPosition > (documentHeight - windowHeight) / 2.5) {
          startCounter();
      }
  });
});

/*
=============================================================================================================================================
This marks the end of counter
=============================================================================================================================================
*/

/*
=============================================================================================================================================
This marks the start of Show or hide the scroll to top button based on scroll position
=============================================================================================================================================
*/

 // Show or hide the scroll to top button based on scroll position
 $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
        $('#scrollToTopBtn').fadeIn();
    } else {
        $('#scrollToTopBtn').fadeOut();
    }
});

// Scroll to top when the button is clicked
$('#scrollToTopBtn').click(function() {
    $('html, body').animate({ scrollTop: 0 }, 'slow');
    return false;
});

/*
=============================================================================================================================================
This marks the end of Show or hide the scroll to top button based on scroll position
=============================================================================================================================================
*/


/*
=============================================================================================================================================
This marks the start of Show or hide hide model
=============================================================================================================================================
*/

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
/*
=============================================================================================================================================
This marks the end of Show or hide hide model
=============================================================================================================================================
*/


/*
=============================================================================================================================================
This marks the start of Check if user preference for dark mode is stored in local storage
=============================================================================================================================================
*/
 const isDarkMode = localStorage.getItem('darkMode') === 'enabled';

 // Apply dark mode if user preference is enabled
 if (isDarkMode) {
     $('body').addClass('dark-mode');
     $('.icon').removeClass('fa fa-moon')
     $('.icon').addClass('fa fa-sun')
     $('nav').removeClass("bg-light")
     $('nav').css({"background-color":"#121212"})
     $(".link").removeClass('text-dark')
     $(".link").addClass("text-light")
     $("#floatingItem").css({"background":"#121212"})
     $("#floatingItemTwo").css({"background":"#121212"})
        
    
 }else{
    $('.icon').removeClass('fa fa-sun')
    $('.icon').addClass('fa fa-moon')
    $('footer').css({"background":"rgb(47,85,151)"})
    $('nav').css({"background-color":"white"})
    $(".link").removeClass('text-light')
    $(".link").addClass("text-dark")
    $("#floatingItem").css({"background":"#fff"})
    $("#floatingItemTwo").css({"background":"#fff"})
    
    
 }

 // Toggle dark mode on button click

 $('#toggleDarkMode').on('click', function () {
     $('body').toggleClass('dark-mode');
     const isDarkModeEnabled = $('body').hasClass('dark-mode');
     if (isDarkModeEnabled) {
        $('body').addClass('dark-mode');
        $('.icon').removeClass('fa fa-moon')
        $('.icon').addClass('fa fa-sun')
        $('footer').css({"background":""})
        $('nav').removeClass("bg-light")
        $('nav').css({"background-color":"#121212"})
        $(".link").removeClass('text-dark')
        $(".link").addClass("text-light")
        $("#floatingItem").css({"background":"#121212"})
        $("#floatingItemTwo").css({"background":"#121212"})
           
    }else{
       $('.icon').removeClass('fa fa-sun')
       $('.icon').addClass('fa fa-moon')
       $('footer').css({"background":"rgb(47,85,151)"})
       $('nav').css({"background-color":"white"})
       $(".link").removeClass('text-light')
       $(".link").addClass("text-dark") 
       $("#floatingItem").css({"background":"#fff"})  
       $("#floatingItemTwo").css({"background":"#fff"})
    }
   
     // Store user preference in local storage
     localStorage.setItem('darkMode', isDarkModeEnabled ? 'enabled' : 'disabled');
 });
  /*
=============================================================================================================================================
This marks the end of Check if user preference for dark mode is stored in local storage
=============================================================================================================================================
*/

 /*
=============================================================================================================================================
This marks the start of preloader
=============================================================================================================================================
*/ 
 $(window).on('load', function() {
    // Hide preloader and show content when all contents are loaded
    $('#preloader').fadeOut('fast', function() {
      $('.content').fadeIn('slow');
    });
  });
  /*
=============================================================================================================================================
This marks the end of preloader
=============================================================================================================================================
*/
/*

=============================================================================================================================================
This marks the start of floating service and company pages
=============================================================================================================================================
*/  

 $("#myButton").click(() => {
    // $("#floatingItemTwo").css({"display":"none"});
      var buttonPosition = $("#myButton").position(); // Get button position
      var buttonHeight = $("#myButton").outerHeight(); // Get button height
      var floatingItem = $("#floatingItem");
      // Set floating item position to below the button
      floatingItem.css({
        "top": buttonPosition.top + buttonHeight + 30// Adjust as needed
      });
      floatingItem.toggle(); // Toggle display of floating item
<<<<<<< HEAD
      // $("#footer").toggle();
=======
      $("#footer").toggle();
>>>>>>> 08cb6bd748b01a9b5d60c749cf1dbd996506eb0e
   });
   

  $("#myButton").hover(() => {
    $("#floatingItem").css({ "display": "block" });
    var buttonPosition = $("#myButton").position(); // Get button position
    var buttonHeight = $("#myButton").outerHeight(); // Get button height
    var floatingItem = $("#floatingItem");
    // Set floating item position to below the button
    floatingItem.css({
      "top": buttonPosition.top + buttonHeight + 30 // Adjust as needed
    });

    $(document).on("click", function(event) {

      // Check if the click target is outside the floating item
      if (
        !floatingItem.is(event.target) &&
        !floatingItem.has(event.target).length
      ) {
        floatingItem.css({ "display": "none" });
      }
    });
  });

$("#test-btn").click(()=>{
   Swal.fire({
        title: 'Success!',
        text: 'Your operation was successful.',
        icon: 'success'
      });
<<<<<<< HEAD
})
   
=======
      floatingItem.toggle(); // Toggle display of floating item
      $("#footer").toggle();
   });
>>>>>>> 08cb6bd748b01a9b5d60c749cf1dbd996506eb0e
   /*
=============================================================================================================================================
This marks the end of floating service and company pages
=============================================================================================================================================
*/  