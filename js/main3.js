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


$(document).ready(function(){
  // Open modal when button is clicked
  $("#share-button").click(function(){
    $("#customModal").fadeIn();
  });

  // Close modal when close button is clicked
  $(".close").click(function(){
    $("#customModal").fadeOut();
  });

  // Close modal when user clicks outside of it
  $(window).click(function(event) {
    if (event.target == $("#customModal")[0]) {
      $("#customModal").fadeOut();
    }
  });
});
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
       $("#floatingItemTwo").css({"color":"#fff"})
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

 $("#hideAll").click(() => {
    // $("#floatingItemTwo").css({"display":"none"});
      var buttonPosition = $("#hideAll").position(); // Get button position
      var buttonHeight = $("#hideAll").outerHeight(); // Get button height
      $(".floatingItemTwo").css({ "display": "none" });
      var floatingItem = $("#floatingItem");
      // Set floating item position to below the button
      floatingItem.css({
        "top": buttonPosition.top + buttonHeight + 30// Adjust as needed
      });
      floatingItem.toggle(); // Toggle display of floating item

   });
   

  $("#hideAll").on("mouseenter", function() {
    if ($(window).width() >= 768) { // Check if screen width is medium or large
        $("#floatingItem").css({ "display": "block" });
        $(".floatingItemTwo").css({ "display": "none" });
        var buttonPosition = $("#hideAll").position(); // Get button position
        var buttonHeight = $("#hideAll").outerHeight(); // Get button height
        var floatingItem = $("#floatingItem");
        // Set floating item position to below the button
        floatingItem.css({
            "top": buttonPosition.top + buttonHeight + 30 // Adjust as needed
        });
    }
});


$(document).on("click", function(event) {
    var floatingItem = $("#floatingItem");
    // Check if the click target is outside the floating item and hide it
    if (
        !floatingItem.is(event.target) &&
        !floatingItem.has(event.target).length &&
        !$("#hideAll").is(event.target) &&
        !$("#hideAll").has(event.target).length
    ) {
        floatingItem.css({ "display": "none" });
        $(".floatingItemTwo").css({ "display": "none" });
    }
});


$(".remove-floating").on("mouseenter", function(event) {
    var floatingItem = $("#floatingItem");
    floatingItem.css({ "display": "none" });
    $(".floatingItemTwo").css({ "display": "none" });
});

// $("#searchInput").on("mouseenter", function(event) {
//     var floatingItem = $("#floatingItem");
//     floatingItem.css({ "display": "none" });
//     $(".floatingItemTwo").css({ "display": "block" });
// });

   
   /*
=============================================================================================================================================
This marks the end of floating service and company pages
=============================================================================================================================================
*/  


/*
=============================================================================================================================================
This marks the end of search bar
=============================================================================================================================================
*/  

$(document).ready(function() {
    $('#searchInput').on('keyup', function() {
       
        var searchText = $(this).val().toLowerCase();
        $('#searchResults').empty();
        
        // Array of PHP page URLs
        var pageURLs = ['index', 'blog', 'services', 'career','data','job-board','cloud','ai','case study', 'contact-us','customer-stories'];
        var resultsCount = 0;
        // Loop through each page URL
        pageURLs.forEach(function(pageURL) {
            // Fetch the content of each PHP page using AJAX
            $.ajax({
                url: pageURL,
                success: function(response) {
                    var pageContent = $(response).text().toLowerCase();
                    var matches = pageContent.match(new RegExp(searchText, 'gi'));
                    $(".floatingItemTwo").css("display","block");
                    var buttonPosition = $("#hideAll").position(); // Get button position
                    var buttonHeight = $("#hideAll").outerHeight();
                      $(".floatingItemTwo").css({
                      "top": buttonPosition.top + buttonHeight + 30// Adjust as needed
                    });
                    if (matches && resultsCount < 5) {
                        // If content found, display a link to the page with relevant snippets
                        var pageTitle = $(response).filter('title').text();
                        var snippets = getSnippets(pageContent, searchText);
                        $('#searchResults').append('<div>' + snippets + '<a href="' + pageURL + '"> Click here to access the content</a></div><hr>');
                         resultsCount++;
                    }
                }
            });
        });
        //  // Check if no results were found
        // if (resultsCount === 0) {
        //     $('#searchResults').append('<div>No results found</div>');
        // }
    });
});

// Function to get snippets of content surrounding the matched search term
function getSnippets(content, searchText) {
    var maxSnippetLength = 200; // Maximum length of each snippet
    var snippetCount = 3; // Number of snippets to display
    
    var snippets = [];
    var regex = new RegExp('(?:\\s|^)(.{0,' + maxSnippetLength + '}\\b' + searchText + '\\b.{0,' + maxSnippetLength + '})(?=\\s|$)', 'gi');
    var match;
    var snippetIndex = 0;
    
    while ((match = regex.exec(content)) !== null && snippetIndex < snippetCount) {
        snippets.push(match[1]);
        snippetIndex++;
    }
    
    return snippets.join(' ... ');
}
/*
=============================================================================================================================================
This marks the end of searchbar
=============================================================================================================================================
*/  

/*
=============================================================================================================================================
This marks the start of get the current page and underline the menu item
=============================================================================================================================================
*/  

$(document).ready(function() {
    // Get the current page's URL
    var currentPageUrl = window.location.href;
    
    // Loop through each navigation link
    $('.navbar-nav .nav-link').each(function() {
        var linkUrl = $(this).attr('href');
        //alert(linkUrl)
        
        // Check if the current page's URL contains the link's URL
        if (currentPageUrl.indexOf(linkUrl) != -1) {
            // Apply a CSS class to indicate the active link
             $(this).removeClass("text-dark");
             $(this).addClass("text-primary");
            $(this).css({"text-decoration":"underline",'color': 'red !important'});

        }
    });
});
/*
=============================================================================================================================================
This marks the end of get the current page and underline the menu item
=============================================================================================================================================
*/  

$(document).ready(function() {
    let speechSynthesis = window.speechSynthesis;
    let voices = speechSynthesis.getVoices();
    let isSpeaking = false;
    let isPaused = false;
    let words;
    let currentIndex = 0;
    let currentUtterance;

    $('#toggleSpeech').click(function() {
        if (!isSpeaking) {
            speak();
        } else if (!isPaused) {
            pause();
        } else {
            resume();
        }
    });

    function speak() {
        let text = $('#content').text();
        words = text.split(/\s+/);
        currentIndex = 0;
        speakChunk();
    }

    function speakChunk() {
        let endIndex = currentIndex;
        let chunk = '';
        while (endIndex < words.length && !/[.!?]/.test(words[endIndex])) {
            endIndex++;
        }
        chunk = words.slice(currentIndex, endIndex + 1).join(' ');
        let utterance = new SpeechSynthesisUtterance(chunk);
        utterance.voice = voices[0]; // Set the voice
        utterance.onstart = function(event) {
            highlightCurrentWord(currentIndex, endIndex);
        };
        utterance.onend = function(event) {
            currentIndex = endIndex + 1;
            if (currentIndex < words.length && !isPaused) {
                speakChunk();
            } else {
                isSpeaking = false;
                isPaused = false;
                
            }
        };
        currentUtterance = utterance;
        isSpeaking = true;
        isPaused = false;
        $('#volume-icons').removeClass('fa fa-volume-high');
        $('#volume-icons').addClass('fa fa-volume-xmark');

        speechSynthesis.speak(utterance);
    }

    function pause() {
        if (speechSynthesis.speaking) {
            speechSynthesis.pause();
            isPaused = true;
            $('#volume-icons').removeClass('fa fa-volume-xmark');
            $('#volume-icons').addClass('fa fa-volume-high');
            
        }
    }

    function resume() {
        if (isPaused) {
            speechSynthesis.resume();
            isPaused = false;
             $('#volume-icons').removeClass('fa fa-volume-high');
             $('#volume-icons').addClass('fa fa-volume-xmark');
        }
    }

    function highlightCurrentWord(startIndex, endIndex) {
        let highlightedWords = words.slice(startIndex, endIndex + 1);
        let highlightedText = $('#content').text().replace(highlightedWords.join(' '), '<span class="highlight">' + highlightedWords.join(' ') + '</span>');
        $('#content').html(highlightedText);
    }
});



$(document).ready(function(){
  // Read more button click event
  $(".read-more-btn").click(function(){
    var $truncatedText = $(this).prev(".truncated-text");
    if ($truncatedText.hasClass("text-truncate")) {
      $truncatedText.text($truncatedText.attr("data-full-text"));
      $truncatedText.removeClass("text-truncate");
      $(this).text("Read Less");
    } else {
      $truncatedText.text($truncatedText.attr("data-truncated-text"));
      $truncatedText.addClass("text-truncate");
      $(this).text("Read More");
    }
  });

  // Initialize truncated text
  $(".truncated-text").each(function() {
    var content = $(this).text();
    if (content.length > 200) {
      var truncatedContent = content.slice(0, 200) + '...';
      $(this).attr("data-full-text", content);
      $(this).attr("data-truncated-text", truncatedContent);
      $(this).text(truncatedContent);
      $(this).next(".read-more-btn").show();
    }
  });
});


//advert pop up
$('.dismiss-icon').click(function() {
      $('.badged-container').css("display","none");
    });

// Automatically show the snackbar after a delay (for demonstration purposes)
setTimeout(function() {
    $('#snackbar').addClass('show');
}, 1000);

// Close button functionality
$('.btn-close').click(function() {
    $('#snackbar').removeClass('show');
});


$("img").addClass("lazyload");
$("video").addClass("lazyload");



/*
=============================================================================================================================================
This marks the start of read more for see our works
=============================================================================================================================================
*/  
var maxLength = 100;

$('.textContent').each(function() {
    var text = $(this).text(); // Use $(this) to access the current element
    if (text.length > maxLength) {
        var truncatedText = text.substring(0, maxLength) + '... <a href="case study">Read More</a>';
        $(this).html(truncatedText);
    }
});
