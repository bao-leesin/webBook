<head>
    <link rel="stylesheet" href="../css/style.css">
    <!-- <script src="../js/slide_pay.js"></script> -->
</head>

<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step current"> <span> <a href="#" >1</a></span> </div>
    <div class="step"> <span><a href="#" >2</a></span> </div>
    <div class="step"> <span><a href="#" >3</a><span> </div>
    <div class="step"> <span><a href="#" >4</a><span> </div>
    <div class="step"> <span><a href="#" >5</a><span> </div>
  </div>
  <!-- end Responsive Arrow Progress Bar -->
  <div class="nav clearfix">
    <a href="#" class="prev">Previous</a> |
    <a href="#" class="next pull-right">Next</a>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {

var back = $(".prev");
var next = $(".next");
var steps = $(".step");

next.bind("click", function() {
  $.each(steps, function(i) {
    if (!$(steps[i]).hasClass('current') && !$(steps[i]).hasClass('done')) {
      $(steps[i]).addClass('current');
      $(steps[i - 1]).removeClass('current').addClass('done');
      return false;
    }
  })
});
back.bind("click", function() {
  $.each(steps, function(i) {
    if ($(steps[i]).hasClass('done') && $(steps[i + 1]).hasClass('current')) {
      $(steps[i + 1]).removeClass('current');
      $(steps[i]).removeClass('done').addClass('current');
      return false;
    }
  })
});

})
</script>


