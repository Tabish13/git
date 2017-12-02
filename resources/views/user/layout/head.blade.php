<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ecom demo</title>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/fwslider.js')}}"></script>
<!--end slider -->
<script type="text/javascript">
$(document).ready(function() {
  $(".dropdown img.flag").addClass("flagvisibility");

  $(".dropdown dt a").click(function() {
    $(".dropdown dd ul").toggle();
  });

  $(".dropdown dd ul li a").click(function() {
    var text = $(this).html();
    $(".dropdown dt a span").html(text);
    $(".dropdown dd ul").hide();
    $("#result").html("Selected value is: " + getSelectedValue("sample"));
  });

  function getSelectedValue(id) {
    return $("#" + id).find("dt a span.value").html();
  }

  $(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (! $clicked.parents().hasClass("dropdown"))
    $(".dropdown dd ul").hide();
  });


  $("#flagSwitcher").click(function() {
    $(".dropdown img.flag").toggleClass("flagvisibility");
  });
});
</script>
