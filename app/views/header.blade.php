<!DOCTYPE HTML>
<html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:svg="http://www.w3.org/2000/svg">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<meta name="keywords" content="eyelash extensions, charlotte north carolina, lash, beauty, spa, volume lashes, eye lash extensions, lake norman, Cornellius, Charlotte eyelash extensions ">

	<meta content="Fabulash is the premier Lash Boutique in Charlotte, NC. We specialize in the highest quality volume eyelash extensions at an incredible rate. Our Eyelash Extension artists are the best in Charlotte, top quality lash extensions." name="description">

	<meta content="index, follow" name="robots">
	<meta content="Eyelash | Charlotte, NC" property="og:site_name">
	<meta content="website" property="og:type">
	<meta content="en_US" property="og:locale">
	<meta content="Eyelash Extensions Charlotte, NC" property="og:title">
	<meta content="Fabulash is the premier Lash Boutique in Charlotte, we specialize in the highest quality volume eyelash extensions at an incredible rate." property="og:description">
	<meta content="fabulashcharlotte.com" property="og:url">

	<title>Fabulash Charlotte | Eyelash Extensions Charlotte, NC</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script async type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script async type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script async type="text/javascript" src="js/js.js"></script>
	<script async type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<script type="text/javascript" src="js/angular/app.js"></script>
	<script type="text/javascript" src="js/angular/controllers/usersController.js"></script>

	<script async type="text/javascript" src="js/waypoints.min.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">

	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">-->

	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/custom.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="icon" type="image/png" href="favicon.png">

	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,700' rel='stylesheet' type='text/css'>



	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-47995768-3', 'auto');
		ga('send', 'pageview');

	</script>


	<script type="text/javascript">
		$(document).ready(function(){
			$("#ajax-contact-form").submit(function() {
				var str = $(this).serialize();
				$.ajax({
					type: "POST",
					url: "contact_form/contact_process.php",
					data: str,
					success: function(msg) {
						if(msg == '<div class="notification_ok">Your message has been sent. Thank you!</div>') {
							result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
							$("#fields").hide();
						} else {
							result = msg;
						}
						$('#note').html(result);
					}
				});
				return false;
			});

		});
	</script>

</head>
<body ng-app="app" ng-controller="usersController">