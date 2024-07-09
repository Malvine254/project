$(document).ready(function() {
  
  $('#job-form').submit(function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Create FormData object
    var formData = new FormData();

    // Append file to FormData object
    var file = $('#cv')[0].files[0]; // Assuming 'cv' is the id of your file input
   

    // Append other form fields to FormData object
    formData.append('name', $('#name').val());
    formData.append('email', $('#email').val());
    formData.append('cv', file);
    formData.append('city', $('#city').val());
    formData.append('zip', $('#zip').val());
    formData.append('phone', $('#phone').val());
    formData.append('state', $('#state').val());
    formData.append('address', $('#address').val());
    formData.append('position', $('#position').val());


    // Perform an AJAX request to submit the form data
    $.ajax({
      type: 'POST',
      url: 'php/submit_job_application', // Replace with your actual server-side endpoint
      data: formData,
      processData: false, // Prevent jQuery from automatically processing data
      contentType: false,
      success: function(response) {
        // Handle the success response
        if (response==="1") {
        	Swal.fire({
	        title: 'Success!',
	        text: "Message was sent successfully",
	        confirmButtonColor: 'rgb(47,85,151)', 
	        icon: 'success',
	      });
        	$("#submit_job_application-form")[0].reset();
        }else{
        	Swal.fire({
			  title: 'Warning',
			  text: response,
			  icon: 'warning',
			  confirmButtonText: 'OK',
			   confirmButtonColor: 'rgb(47,85,151)'
			});
        }


         
        console.log(response); // You can do something with the response data
      },
      error: function(error) {
        // Handle the error response
        console.error('Form submission error');
        console.error(error); // You can display an error message or perform other actions
      }
    });
  });


 $('#contact-form').submit(function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Retrieve the form data
    var formData = $(this).serialize();

    // Perform an AJAX request to submit the form data
    $.ajax({
      type: 'POST',
      url: 'php/submit_contact', // Replace with your actual server-side endpoint
      data: formData,
      success: function(response) {
        // Handle the success response
        if (response==="1") {
          Swal.fire({
          title: 'Success!',
          text: "Message was sent successfully",
          confirmButtonColor: 'rgb(47,85,151)', 
          icon: 'success',
        });
          $("#contact-form")[0].reset();
        }else{
          Swal.fire({
        title: 'Warning',
        text: response,
        icon: 'warning',
        confirmButtonText: 'OK',
         confirmButtonColor: 'rgb(47,85,151)'
      });
        }


         
        console.log(response); // You can do something with the response data
      },
      error: function(error) {
        // Handle the error response
        console.error('Form submission error');
        console.error(error); // You can display an error message or perform other actions
      }
    });
  });


 $('#consultation-form').submit(function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Retrieve the form data
    var formData = $(this).serialize();

    // Perform an AJAX request to submit the form data
    $.ajax({
      type: 'POST',
      url: 'php/submit_consultation', // Replace with your actual server-side endpoint
      data: formData,
      success: function(response) {
        // Handle the success response
        if (response==="1") {
          Swal.fire({
          title: 'Success!',
          text: "Message was sent successfully",
          confirmButtonColor: 'rgb(47,85,151)', 
          icon: 'success',
        });
          $("#consultation-form")[0].reset();
        }else{
          Swal.fire({
          title: 'Warning',
          text: response,
          icon: 'warning',
          confirmButtonText: 'OK',
           confirmButtonColor: 'rgb(47,85,151)'
        });
        }


         
        console.log(response); // You can do something with the response data
      },
      error: function(error) {
        // Handle the error response
        console.error('Form submission error');
        console.error(error); // You can display an error message or perform other actions
      }
    });
  });
 /*
=============================================================================================================================================
Start of  blogs listing and actions on click
=============================================================================================================================================
*/
  // default blog view, display the first blog article by default
 // Check if the current page URL ends with "blog.php"
    if (window.location.pathname.endsWith("blog")) {
        // Execute the code only if the current page is "blog.php"
        var default_image_path = $(".default_image_path").html();
        var default_author = $(".default_author").html();
        var default_date = $(".default_date").html();
        var default_body = $(".default_body").html();
        var default_title = $(".default_title").html();

        // Get the first character of the body and make it strong
        var firstLetter = "<strong class='h4'>" + default_body.charAt(0) + "</strong>";
        // Concatenate the strong first letter with the rest of the body
        var modifiedDefaultBody = firstLetter + default_body.slice(1);

        // Set the modified body, title, author, and image path
        $("#blog-body").html(modifiedDefaultBody);
        $("#blog-title").html(default_title);
        $("#blog-author").html(default_author);
        $("#blog-image-path").attr("src", default_image_path);

    }

  $(".blog-id").click(function() {
      var id = $(this).attr("id");
      var title = $("#title"+id).html();
      var body = $("#body"+id).html();
      var date = $("#date"+id).html();
      var author = $("#author"+id).html();
      var image_path = $("#image_path"+id).html()
      $(".blog-id").removeClass("text-primary");
      $("#"+id).addClass("text-primary");

      //alert(title + body + date)

      $("#blog-title").html(title)
      $("#blog-author").html(author)
      $("#blog-image-path").attr("src",image_path)


      // Get the first character of the title and make it strong
      var firstLetter = "<strong class='h4'>" + body.charAt(0) + "</strong>";
      // Concatenate the strong first letter with the rest of the title
      var modifiedBody = firstLetter + body.slice(1);
      $("#blog-body").html(modifiedBody)

      // Function to estimate reading time
    function estimateReadingTime(body, wordsPerMinute) {
        var words = body.split(/\s+/).length; // Count the number of words in the text
        var readingTime = Math.ceil(words / wordsPerMinute); // Calculate reading time in minutes
        return readingTime;
    }
    var wordsPerMinute = 200;
    var readingTime = estimateReadingTime(body, wordsPerMinute);
    $("#blog-date").text(date+ " . " +readingTime+ " min read");
            
  });

  /*
=============================================================================================================================================
End of  blogs listing and actions on click
=============================================================================================================================================
*/
 
  /*
=============================================================================================================================================
Start of recent blogs redirects
=============================================================================================================================================
*/
 // Check if there's a clickedId stored in localStorage
    var clickedId = localStorage.getItem("clickedId");
    
    // If clickedId exists, trigger the click event on the corresponding element
    if (clickedId) {
        $("#" + clickedId).click(); // Trigger click event on the element with the stored id
        localStorage.removeItem("clickedId"); // Remove the stored id
    }

    // Click event handler for elements with the class "recentBlogs"
    $(".recentBlogs").click(function (){
        var id = $(this).attr("id");
        localStorage.setItem("clickedId", id); // Store the id in localStorage
        window.location.assign("blog"); // Redirect to the "blog" page
    });
 /*
=============================================================================================================================================
End of recent blogs redirects
=============================================================================================================================================
*/

$.ajax({
      type: 'POST',
      url: 'php/display_job_listings', // Replace with your actual server-side endpoint
      success: function(e) {
       $("#displayCareerPosts").html(e)
      
        }

});

$("#see_all_btn").click(function(){
  $("#see_all_btn").css("display","none");
  $("#see_less_btn").css("display","block");
  var formData = new FormData();
    formData.append("see_all_btn","")
    $.ajax({
        type: 'POST',
        url: 'php/display_job_listings', // Replace with your actual server-side endpoint
        processData: false, // Prevent jQuery from automatically processing data
        contentType: false,
        data: formData,
        success: function(e) {
          $("#displayCareerPosts").html(e)
        
          }

  })

});

$("#see_less_btn").click(function(){
  $("#see_all_btn").css("display","block");
  $("#see_less_btn").css("display","none");
  $.ajax({
      type: 'POST',
      url: 'php/display_job_listings', // Replace with your actual server-side endpoint
      success: function(e) {
       $("#displayCareerPosts").html(e)
      
        }

});

});







});