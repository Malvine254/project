<?php
if (isset($_POST['upload_blog_btn'])) {
	if($_FILES["blog_image"]["error"] == UPLOAD_ERR_OK) {
   
    include '../php/config.php';
	// Sanitize and validate user input
    $blog_title = mysqli_real_escape_string($conn,$_POST['blog_title']);
	$blog_image = mysqli_real_escape_string($conn,$_FILES['blog_image']['name']);  
	$new_path = "images/blogs/". $blog_image;  
	$body = mysqli_real_escape_string($conn,$_POST['body']);
	$blog_author = "Malvine Owuor";
	$date = date("F jS"); // Get the month and day in "Month DayOrdinal" format
	$date = date("F jS", strtotime($date)); // Ensure proper date parsing
    $blog_id= rand(1000000,10000000000);
    
    $target = "../images/blogs/".$blog_image;     
    if (move_uploaded_file($_FILES['blog_image']['tmp_name'], $target)) {
            // Prepare and bind the SQL statement
            $stmt = $conn->query("INSERT INTO blogs (title, author, body, `date`, image_path,blog_id) VALUES ('$blog_title', '$blog_author', '$body', '$date', '$new_path','$blog_id')");

            // Execute the statement
            if ($stmt) {
                echo "<script>alert('New blog was added successfully')</script>";
            } else {
                // Log the error securely
                error_log('Failed to insert contact form data into the database');

                // Display a generic error message
                echo "Failed to submit the form. Please try again later";
            }

            // Close the statement
           

    } else{
        echo "Failed to upload, try again";
    }

}

}


?>