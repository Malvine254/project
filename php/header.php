<?php 
echo "<nav class='navbar navbar-expand-lg navbar-dark fixed-top pt-3 pb-3 '>
   
    <div class='container col-md-11'>
      <a class='navbar-brand link' href='index'><h1 class='armely-logo-font defaut-color logo-size h1'>armely</h1></a>
       <button style='background-color:rgb(47,85,151)' class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse justify-content-center text-center' id='navbarNav'>
      <ul class='navbar-nav mx-auto '>
                <li class='nav-item'>
          <a  class='nav-link text-dark link' href='company'>WHY ARMELY</a>
        </li>
        <li class='nav-item active'>
        
          <a  class='nav-link text-dark link myButton' id='myButton' >SERVICES <span class='sr-only myButton'>(current)</span></a>
          <a  href='services' class='nav-link text-dark link myButtonTwo'>SERVICES <span class='sr-only'>(current)</span></a>

        </li>
        <li class='nav-item'>
          <a class='nav-link text-dark link' href='customer-stories'>CUSTOMER STORIES</a>
        </li>

        <li class='nav-item'>
          <a class='nav-link text-dark link' href='contact-us' target='_parent' rel='noopener noreferrer'>CONTACT US</a>
        </li>
         <li class='nav-item'>
          <a class='nav-link text-dark link' href='career'>CAREERS</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link text-dark link' href='blog'>BLOGS</a>
        </li>
  
      </ul>
      <!-- Search Bar -->
     
      <form class='form-inline my-2 my-lg-0'>
        <div class='input-group' style='width: 350px;'>
            <input class='form-control py-2 border-right-0 border col-md-12 bg-transparent' type='search' placeholder='Search...' id='example-search-input'>
            <span class='input-group-append'>
                <button class='btn btn-outline-secondary border-left-0 border' type='button' style='outline: none;'>
                    <i class='fa fa-search'></i>
                </button>
            </span>
        </div>
    </form>
    
    
      <a id='toggleDarkMode' class='nav-link link' ><i class='icon fa fa-moon icon'></i></a>
    </div>
  </nav><br><br>";

 ?>