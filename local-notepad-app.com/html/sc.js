$(document).ready(function () {
  // Hide all the product lists by default
  $("#category1 ul, #category2 ul").hide();

  // Show the product list when the category name is clicked
  $("#category1 h2").click(function () {
    $("#category1 ul").slideToggle();
  });

  $("#category2 h2").click(function () {
    $("#category2 ul").slideToggle();
  });
  $("#customer-form").hide();
  $("#submit-btn").click(function () {
    $("#customer-form").slideToggle();
  });
});
