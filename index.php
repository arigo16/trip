<?php
session_start();

if (empty($_SESSION['username'])) {
    header("location:login.php");
}else{
if (isset($_SESSION['username'])) {
    $user = trim($_SESSION['username']);
}
if (isset($_SESSION['level'])) {
    $level = trim($_SESSION['level']);
}
require_once('include/config.php');
$base_url = ('http://'.$_SERVER['HTTP_HOST'].'/trip/index.php');

isset ($_GET['page']) ? $page = $_GET['page'] : $page = 'home';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PT HINO MOTORS SALES INDONESIA</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>

    <?php
        include ('include/header.php');
        include ('include/sidebar.php');
    ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"><?php echo $page; ?></li>
			</ol>
		</div>

        <div class="row">
            <div class="col-lg-12">
                <?php

                if(isset($_SESSION['pesan'])){echo $_SESSION['pesan']; unset($_SESSION['pesan']);}

                if(file_exists('page/'.$page.'.php')){
                    include ('page/'.$page.'.php');
                }else{
                    echo '<div class="well">Error : Aplikasi tidak menemukan adanya file <b>'.$page.'.php </b> pada direktori <b>app/..</b></div>';
                }

                ?>
            </div>
        </div>

	</div>	<!--/.main-->

	<script src="js/jquery-2.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/trip.js"></script>
	
	<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"> -->
	<link rel="stylesheet" href="js/jquery-ui.css">
	<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
	<script src="js/jquery-1.10.2.js"></script>
	<!-- <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->
	<script src="js/jquery-ui.js"></script>

	<script type="text/javascript">
		$(function() {
			$("#nik").autocomplete({
				source: 'act/search.php'
			});
		});
	</script>
	<script type="text/javascript">
		$(function() {
			$("#nik2").autocomplete({
				source: 'act/search.php'
			});
		});
	</script>
	

	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>
</html>
<?php
}
?>