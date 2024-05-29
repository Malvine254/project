$('#addBlogTable').submit(function(event) {
    event.preventDefault(); // Prevent the default form submission

    var formData = new FormData();
    // Retrieve the form data
    var editorData = CKEDITOR.instances.blogBody.getData();
    formData.append("body", editorData);

    // Perform an AJAX request to submit the form data
    $.ajax({
      type: 'POST',
      url: 'php/uploads', // Replace with your actual server-side endpoint
      data: formData,
      contentType: false, // Required for FormData
      processData: false, // Required for FormData
      success: function(response) {
        // Handle the success response
        if (response === "1") {
          Swal.fire({
            title: 'Success!',
            text: "Message was sent successfully",
            confirmButtonColor: 'rgb(47,85,151)', 
            icon: 'success',
          });
          $("#addBlogTable")[0].reset(); // Reset the form
          CKEDITOR.instances.blogBody.setData(''); // Reset the CKEditor
        } else {
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
        Swal.fire({
          title: 'Error',
          text: 'An error occurred while submitting the form.',
          icon: 'error',
          confirmButtonText: 'OK',
          confirmButtonColor: 'rgb(47,85,151)'
        });
      }
    });
});
