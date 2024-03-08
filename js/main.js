$('.counter-count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

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

// modal
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

 // Check if user preference for dark mode is stored in local storage
 const isDarkMode = localStorage.getItem('darkMode') === 'enabled';

 // Apply dark mode if user preference is enabled
 if (isDarkMode) {
     $('body').addClass('dark-mode');
     $('.icon').removeClass('fa fa-moon')
      $('.icon').addClass('fa fa-sun')
      $('a').css({"color":"white"})
    
    
 }else{
    $('.icon').removeClass('fa fa-sun')
    $('.icon').addClass('fa fa-moon')
    $('a').css({"color":"rgb(47,85,151)"})
 }

 // Toggle dark mode on button click

 $('#toggleDarkMode').on('click', function () {
     $('body').toggleClass('dark-mode');
     const isDarkModeEnabled = $('body').hasClass('dark-mode');
     if (isDarkModeEnabled) {
        $('body').addClass('dark-mode');
        $('.icon').removeClass('fa fa-moon')
         $('.icon').addClass('fa fa-sun')
         $('a').css({"color":"rgb(47,85,151)"})
       
       
    }else{
       $('.icon').removeClass('fa fa-sun')
       $('.icon').addClass('fa fa-moon')
       $('a').css({"color":"white"})
    }
     
     
    

     // Store user preference in local storage
     localStorage.setItem('darkMode', isDarkModeEnabled ? 'enabled' : 'disabled');
 });

 //preloader 
 $(window).on('load', function() {
    // Hide preloader and show content when all contents are loaded
    $('#preloader').fadeOut('fast', function() {
      $('.content').fadeIn('slow');
    });
  });