<?php
function uploadNewBlog(){
    include '../php/config.php';
   if (isset($_POST['submitBlogBtn'])) {
    if($_FILES["blog_image"]["error"] == UPLOAD_ERR_OK) {
    // Sanitize and validate user input
    $blog_title = mysqli_real_escape_string($conn,$_POST['blog_title']);
    $blog_image = mysqli_real_escape_string($conn,$_FILES['blog_image']['name']);  
    $new_path = "images/blogs/". $blog_image;  
    $body = mysqli_real_escape_string($conn,$_POST['blog_body']);
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
}

function displayJobApplicantsTable(){
    function cheIfNull($role){
        if ($role==="") {
                return "Data Analysis | Data Management | Business";
            }else{
                return $role;
            }
    }
include '../php/config.php';
$numbering=1;
$select = $conn->query("SELECT * FROM job_applications ORDER BY ID DESC");
if ($select->num_rows>0) {
    while ($row=$select->fetch_assoc()) {
        echo  ' <tr class="'.highlightStatus($row['status']).'" id="'.$row['id'].'">
                    <td>'.$numbering++.'</td>
                    <td>'.cheIfNull($row['role']).'</td>
                    <td> '.$row['name'].'</td>
                    <td> <a href="mailto:'.$row['email'].'">'.$row['email'].'</a></td>
                    <td> '.$row['address'].'</td>
                    <td> <a href="tel:'.$row['phone'].'">'.$row['phone'].'</a></td>
                    <td> <a href="../pdf/'.$row['cv'].'" target="_blank">Click here to Preview Cv</a></td>
                    <td>
                     <div class="d-flex">
                      '.revokeShortlisted($row['status'],$row['id']).'
                      <a class="btn btn-danger me-2" href="?deletionId='.$row['id'].'">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>

                    </td> 
                  </tr>';
    }
}
if (isset($_GET['aplicationId'])) {
        $id = mysqli_real_escape_string($conn,$_GET['aplicationId']);
        $update_status = $conn->query("UPDATE job_applications SET status='2' WHERE id='$id'");
        if ($update_status) {
            echo "<script>window.location.assign('career#".$id."')</script>";
        }else{
            echo "<script>alert('Could not finish the operation!')</script>";
        }
    }
    if (isset($_GET['revokeId'])) {
        $id = mysqli_real_escape_string($conn,$_GET['revokeId']);
        $update_status = $conn->query("UPDATE job_applications SET status='1' WHERE id='$id'");
        if ($update_status) {
            echo "<script>window.location.assign('career#".$id."')</script>";
        }else{
            echo "<script>alert('Could not finish the operation!')</script>";
        }
    }
}

function highlightStatus($status){
    if ($status==="1") {
       return "table-light";
    }else{
        return "table-success";
    }
}
function revokeShortlisted($status,$id){
     if ($status==="1") {
       return '<a class="btn btn-primary me-2" href="?aplicationId='.$id.'"><i class="fas fa-check"></i></a>';
    }else{
        return '<a class="btn btn-danger me-2" href="?revokeId='.$id.'">
                        <i class="fas fa-times"></i>
                      </a>';
    }
}

function returnAllLocation(){
    include '../php/config.php';
    $select = $conn->query("SELECT address FROM job_applications");
    if ($select->num_rows>0) {
        while ($row=$select->fetch_assoc()) {
            echo "<option>".$row['address']."</option>";
        }
    }else{
            echo "<option> disabled>No location found!</option>";
        }
}


function displayShortlistedCandidates(){
    function cheIfNullTwo($role){
        if ($role==="") {
                return "Data Analysis | Data Management | Business";
            }else{
                return $role;
            }
    }
include '../php/config.php';
$numbering=1;
$select = $conn->query("SELECT * FROM job_applications WHERE status='2' ORDER BY ID DESC ");
if ($select->num_rows>0) {
    while ($row=$select->fetch_assoc()) {
        echo  ' <tr class="'.highlightStatus($row['status']).'" id="'.$row['id'].'">
                    <td>'.$numbering++.'</td>
                    <td>'.cheIfNullTwo($row['role']).'</td>
                    <td> '.$row['name'].'</td>
                    <td> <a href="mailto:'.$row['email'].'">'.$row['email'].'</a></td>
                    <td> '.$row['address'].'</td>
                    <td> <a href="tel:'.$row['phone'].'">'.$row['phone'].'</a></td>
                    <td> <a href="../pdf/'.$row['cv'].'" target="_blank">Click here to Preview Cv</a></td>
                    <td>
                     <div class="d-flex">
                      '.revokeShortlisted($row['status'],$row['id']).'
                      <a class="btn btn-danger me-2" href="?deletionId='.$row['id'].'">
                        <i class="fa fa-trash"></i>
                      </a>
                    </div>

                    </td> 
                  </tr>';
    }
}
if (isset($_GET['aplicationId'])) {
        $id = mysqli_real_escape_string($conn,$_GET['aplicationId']);
        $update_status = $conn->query("UPDATE job_applications SET status='2' WHERE id='$id'");
        if ($update_status) {
            echo "<script>window.location.assign('career#".$id."')</script>";
        }else{
            echo "<script>alert('Could not finish the operation!')</script>";
        }
    }
    if (isset($_GET['revokeId'])) {
        $id = mysqli_real_escape_string($conn,$_GET['revokeId']);
        $update_status = $conn->query("UPDATE job_applications SET status='1' WHERE id='$id'");
        if ($update_status) {
            echo "<script>window.location.assign('career#".$id."')</script>";
        }else{
            echo "<script>alert('Could not finish the operation!')</script>";
        }
    }
}


function displayJobsPosted(){
    include '../php/config.php';
    $numbering =1;
    $select = $conn->query("SELECT * FROM career");
     function readMore($text,$id){
        if (strlen($text) > 100) {
        // Trim the text to the maximum length and append the additional text
        return substr($text, 0, 100) . "<a href='?readMoreId=".$id."'>..Read More</a>";
    }
   
    }

    if ($select->num_rows>0) {
        while ($row=$select->fetch_assoc()) {
        echo  ' <tr id="'.$row['id'].'">
                <td>'.$numbering++.'</td>
                <td>'.$row['job_title'].'</td>
                <td> '. readMore($row['job_description'],$row['job_id']).'</td>
                <td> '.$row['job_deadline'].'</td>
                <td> '.$row['job_type'].'</td>
                <td> '.$row['job_location'].'</td>
                <td> <a href="../'.$row['job_image_path'].'"><img src=../'.$row['job_image_path'].'/></a></td>
                <td>
                 <div class="d-flex">
                  <a class="btn btn-danger me-2" href="?editJobId='.$row['job_id'].'">
                    <i class="fa fa-pen-to-square"> Close</i>
                  </a>
                  <a class="btn btn-danger me-2" href="?deletionJobId='.$row['job_id'].'">
                    <i class="fa fa-trash"></i>
                  </a>
                </div>

                </td> 
                  </tr>';
        }
    }
   
}
?>