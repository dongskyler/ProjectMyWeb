$('#route-opt-form').submit(function(e) {
  console.log($("#route-opt-input").val());

  // Prevent reload page
  e.preventDefault();
  
  var origin = $("#route-opt-input").val().split('\n');

  console.log(origin);
});
