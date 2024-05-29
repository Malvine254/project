<?php
require 'config.php'; 
function submitContactForm(){
	global $conn;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$organization = $_POST['organization'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	// Prepare and bind the SQL statement
	$stmt = $conn->prepare("INSERT INTO contacts (name, email, organization, phone, message) VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $name, $email, $organization, $phone, $message);
	
	// Execute the statement
	if ($stmt->execute()) {
		echo "<script>alert('Message was sent Successfully')</script>";
	} else {
		echo "<script>alert('Failed')</script>";
	}
	
	// Close the statement
	$stmt->close();
}

function scheduleConsultant(){
    global $conn;
	$name = $_POST['name'];
	$email = $_POST['email'];
	$organization = $_POST['organization'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$service_name = $_POST['service_name'];
	
	// Prepare and bind the SQL statement
	$stmt = $conn->prepare("INSERT INTO consultation (name, email, organization, phone, message, service_name) VALUES (?, ?, ?, ?, ?,?)");       
	$stmt->bind_param("ssssss", $name, $email, $organization, $phone, $message,$service_name);
	
	// Execute the statement
	if ($stmt->execute()) {
		echo "<script>alert('Message was sent Successfully')</script>";
	} else {
		echo "<script>alert('Failed')</script>";
	}
	
	// Close the statement
	$stmt->close();
}

if (isset($_POST['submit_form'])) {
	submitContactForm();
}
if (isset($_POST['consultation_btn'])) {
	scheduleConsultant();
}

if (isset($_POST['submit_form'])) {
	submitContactForm();
}

function displayHeader(){
	include 'config.php';
	$select = $conn->query("SELECT * FROM header_footer_contents LIMIT 1");
	if ($select->num_rows>0) {
		while ($row=$select->fetch_assoc()) {
			return  $row['header'];
		}
	}
	
}
function displayFooter(){
	include 'config.php';
	$select = $conn->query("SELECT * FROM header_footer_contents LIMIT 1");
	if ($select->num_rows>0) {
		while ($row=$select->fetch_assoc()) {
			return  $row['footer'];
		}
	}
}

function displayFloatingButton(){
	return "<div class='d-flex justify-content-center'>
  <div  id='floatingItem' class='floating-item container col-md-12 shadow'>
    <div class='m-5'>
      <div class=''>  
          <h3 class='mt-0'>The Armely Ecosystem</h3>
          <p class='col-6  mb-5'>An integrated ecosystem of cutting-edge services, with our state-of-the-art technology at the core of Armely's offerings.</p>
      </div>
       <div class='row'>
        <div class='col-sm-4 mb-4'>
         <a href='professional-services' class='text-muted'>
         <div class='card transparent-card shadow'>
            <div class='card-body'>
               <i class='fa fa-briefcase fa-3x'></i>
                <h5 class='card-title mt-2'>Professional Services</h5>
                <p class='card-text'>Explore a range of career opportunities.</p>
            </div>
          </div>
          </a>
        </div>
        <div class='col-sm-4 mb-4'>
        <a href='advisory-services' class='text-muted'>
          <div class='card transparent-card shadow'>
            <div class='card-body'>
              <div class=''>
                <i class='fas fa-users-line fa-3x'></i>
              </div>
                <h5 class='card-title mt-2'>Advisory Services</h5>
                <p class='card-text'>Explore a range of career opportunities.</p>
            </div>
          </div>
           </a>
        </div>
         <div class='col-sm-4 mb-4'>
         <a href='managed-services' class='text-muted'>
          <div class='card transparent-card shadow'>
            <div class='card-body'>
               <i class='fas fa-hand-holding fa-3x mb-3'></i>
                <h5 class='card-title'>Managed Services</h5>
                <p class='card-text'>Explore a range of career opportunities.</p>
            </div>
          </div>
          </a>
        </div>
    </div>
    <div class='mt-0 '>
      <a href='services' class='default-button-color shadow mt-4'>SEE ALL SERVICES</a> 
    </div>
   
    </div>
  </div>
</div>

<div class='d-flex justify-content-center'>
  <div style='overflow: hidden;' id='floatingItem' class='floating-item floatingItemTwo container col-md-12 shadow bg-light'>
    <div class='m-5 '>
      <div class=''>  
        <h4>Search Results</h4>
         <div id='searchResults'></div>
      </div>
       
   
    </div>
  </div>
</div>
";
}

function displayBlogs(){
	function stringLength($length){

	if (strlen($length)===1) {
		return "0".$length;
	}else{
		return $length;
	}
}
function hightlightSelectedBlog($checkingId){
   
 if (isset($_GET['blogId'])) {
   if ($_GET['blogId']===$checkingId) {
    return "bg-warning p-1";
  }
	}

}


function estimateReadingTime($htmlText) {
    $wordsPerMinute = 200;
    // Strip HTML tags from the text
    $plainText = strip_tags($htmlText);

    // Count the number of words in the plain text
    $wordCount = str_word_count($plainText);

    // Calculate the reading time in minutes
    $readingTime = ceil($wordCount / $wordsPerMinute);

    return $readingTime;
}
	
function selectFromBlog($condition){
	require 'config.php';
	$numbering = 1;
	$select = $conn->query("SELECT * FROM blogs $condition");
	if ($select->num_rows>0) {
		while ($row=$select->fetch_assoc()) {
			echo "
			<div class='row align-items-center'>
	            <div class='col-2'>
	            <h6 class='lead h1 text-muted text-center'>".stringLength($numbering++)."</h6>
	          </div>
	          <a  href='?blogId=".$row['blog_id']."' >
	          <div class='col-10 '>
	             <span class='text-muted title-new ".hightlightSelectedBlog($row['blog_id'])."'><strong>".$row['title']."</strong></span>
	           <div>
	           </a>
	              <p style='font-size: 14px;' class='mt-0 text-sm text-muted'>".$row['author']."
	                <br><span class='text-muted'>".$row['date']." • ".estimateReadingTime($row['body'])." min read</span>
	              </p>
	          </div>
	        </div>

	      </div></span>";
		}
	}else{
		echo "<div class='row align-items-center'>
	            <div class='col-2'>
	            <h6 class='lead h1 text-muted text-center'></h6>
	          </div>
	          <div class='col-10 '>
	             <span class='text-muted title-new '><strong>No data was found! </strong></span>
	           <div>
	              <p style='font-size: 14px;' class='mt-0 text-sm text-muted'>
	                <br><span class='text-muted'></span>
	              </p>
	          </div>
	        </div>

	      </div></span>";
	}
	}
	if (isset($_POST['see_all_blogs_btn'])) {
	   selectFromBlog("");
	 } else{
	  selectFromBlog("ORDER BY id DESC LIMIT 10");
	 }

}

function displayRecentBlogs(){
	require 'config.php';
	function estimateReadingTime($htmlText) {
	$wordsPerMinute = 200;
	// Strip HTML tags from the text
	$plainText = strip_tags($htmlText);

	// Count the number of words in the plain text
	$wordCount = str_word_count($plainText);

	// Calculate the reading time in minutes
	$readingTime = ceil($wordCount / $wordsPerMinute);

	return $readingTime;
	}
	$numbering = 1;
	$select = $conn->query("SELECT * FROM blogs ORDER BY id DESC LIMIT 3");
	if ($select->num_rows>0) {
		while ($row=$select->fetch_assoc()) {
			echo "<div class='col-md-4'>
	        <div class='card bg-primary mb-3 transparent-card'>
	          <img style='max-height: 250px;' class='card-img-top img-fluid' src='".$row['image_path']."' alt='Card image cap'>
	          <div class='card-body'>
	              <h6 class='text-muted'>".$row['title']."</h6>
	             <p style='font-size: 14px;' class='mt-0 text-sm'>".$row['author']."
	                <br><span class='text-muted'>".$row['date']." • ". estimateReadingTime($row['body'])." min read</span>
	                 <a href='blog?blogId=".$row['blog_id']."' class='btn btn-outline-primary ml-2'>Read more</a>
	              </p>
	          </div>
	      </div> 
	      </div>";
		}
	}else{
		echo "<div class='shadow align-items-center blog-id'>
			<div class='alert alert-danger'>
				<p>No data was found</a>
			</div>
		</div>";
	}

}


function readMore(){
	require 'config.php';
	$select = $conn->query("SELECT * FROM career ");
	if ($select->num_rows>4) {
		echo " <div class='mt-3 row justify-content-center'>
	    <button type='button' id='see_all_btn' class='btn btn-outline-primary'>Browse all Jobs</button>
	    <button style='display: none;' type='button' id='see_less_btn' class='btn btn-outline-primary'>Browse Less Jobs</button>
	  </div>";
	}else{
		echo "";
	}
}

//display see our work



?>
