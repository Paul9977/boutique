<?php

include("traitement/verification_droit.php");

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}

$tbl_classes = scandir('classes');
  foreach ($tbl_classes as $oneclass) {
  if($oneclass != '.' && $oneclass != '..') include("classes/".$oneclass);
}


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous">
		</script>

	<title> IT-Store </title>
</head>


<body>

  <!-- Les conditions -->
  <div id="form_enter">
    <h3>Conditions Générales d'utilisation</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed vulputate turpis. Nunc in mollis tortor, id efficitur sapien. Cras ex ex, congue et aliquam eu, sodales sit amet nisl. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque eu turpis vitae nisl ullamcorper semper. Vestibulum scelerisque gravida laoreet. Nullam velit magna, porta eu consectetur id, convallis non libero. Praesent in pellentesque odio. Nam mollis risus efficitur, mollis urna eu, gravida tortor. Nam elementum, arcu ac egestas fringilla, ipsum lorem venenatis neque, at placerat lectus odio vitae urna. Duis sed massa dignissim, molestie dolor ut, ultrices justo. Nullam finibus tempor quam aliquet tempor.

      Proin commodo, odio vitae blandit dapibus, arcu orci iaculis erat, nec sodales nibh dolor quis felis. In in nisi non ante eleifend mattis. Nulla consectetur, neque ac porttitor egestas, felis neque iaculis magna, id cursus orci erat eu mi. Mauris volutpat tincidunt libero. Nunc congue orci ut ligula ultrices, vel volutpat justo pulvinar. Donec vel sagittis lorem, ac tristique felis. Nullam turpis lacus, interdum hendrerit vehicula eu, venenatis id enim. Morbi aliquam finibus ante, a dictum turpis tincidunt quis. Donec sit amet consequat quam. Integer consectetur, quam non aliquet dapibus, ligula nisi consectetur nisi, id suscipit dolor nibh id dolor. Integer facilisis, nunc sed volutpat tincidunt, tellus leo molestie nisl, vel molestie lacus ante at turpis. Nunc consectetur tempus nisi non porta.

      Etiam tincidunt libero et tellus ultrices, vel ultrices risus volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed at malesuada enim, hendrerit dignissim dui. Morbi commodo, massa nec consequat tincidunt, mi metus laoreet risus, a volutpat eros mauris id massa. Praesent eleifend vestibulum porttitor. Pellentesque posuere orci eu massa accumsan dapibus. Pellentesque consectetur lectus id dui lobortis pretium. Donec porttitor nisl erat, egestas pulvinar justo finibus in.
    </p>
  </div>
	<div id="cache_noir"><Button style="margin-left:20px; margin-top:5px;" id="close" class="btn btn-success">fermer</Button></div>
  <!-- end conditions -->

	<header id="top">
		<?php include('menu.php'); ?>
	</header>

	<div id="contenu">
		<?php include($page.'.php'); ?>
	</div>

	<footer>
		<?php include('footer.php'); ?>
	</footer>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/carousel.js"></script>

    <script type="text/javascript">
		
		function closebox(){
			$('#form_enter').hide(); 
			$('#cache_noir').hide();
		}

		function openBox(){
			$('#form_enter').show();
			$('#cache_noir').show();

    }

      document.getElementById('cgt').onclick = openBox;
      document.getElementById('close').onclick = closebox;

  	</script>

</body>
</html>