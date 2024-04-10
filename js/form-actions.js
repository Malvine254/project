$(document).ready(function() {
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
});