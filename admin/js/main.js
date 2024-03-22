$(document).ready(function() {
 //toggle through the tables 
  $(".tables").hide();
  $("#table-one").show();


  $("#link-one").click(function(e) {
    $(".tables").hide();
    // Hide all paragraphs
    $("#table-one").show(); // Show the corresponding paragraph
  });

  $("#link-two").click(function(e) {
    $(".tables").hide();
     // Hide all paragraphs
    $("#table-two").show(); // Show the corresponding paragraph
  });

  $("#link-three").click(function(e) {
    $(".tables").hide();
     // Hide all paragraphs
    $("#table-three").show(); // Show the corresponding paragraph
  });


  //toggle through the forms 
  $(".forms").hide();
  $("#form-one").show();
  $("#action-title").text($(".form-link-one").text())


  $(".form-link-one").click(function(e) {
    $(".forms").hide();
    $("#action-title").text($(e.target).text())
    // Hide all paragraphs
    $("#form-one").show(); // Show the corresponding paragraph
  });

  $(".form-link-two").click(function(e) {
    $(".forms").hide();
    $("#action-title").text($(e.target).text())
    // Hide all paragraphs
    $("#form-two").show(); // Show the corresponding paragraph
  });

  $(".form-link-three").click(function(e) {
    $(".forms").hide();
    $("#action-title").text($(e.target).text())
    // Hide all paragraphs
    $("#form-three").show(); // Show the corresponding paragraph
  });
  $(".form-link-four").click(function(e) {
    $(".forms").hide();
    $("#action-title").text($(e.target).text())
    // Hide all paragraphs
    $("#form-four").show(); // Show the corresponding paragraph
  });
  $(".form-link-five").click(function(e) {
    $(".forms").hide();
    $("#action-title").text($(e.target).text())
    // Hide all paragraphs
    $("#form-five").show(); // Show the corresponding paragraph
  });
  $(".form-link-six").click(function(e) {
    $(".forms").hide();
    $("#action-title").text($(e.target).text())
    // Hide all paragraphs
    $("#form-six").show(); // Show the corresponding paragraph
  });
  $(".form-link-seven").click(function(e) {
    $(".forms").hide();
    $("#action-title").text($(e.target).text())
    // Hide all paragraphs
    $("#form-seven").show(); // Show the corresponding paragraph
  });
});