<?php 
	include "../lib/url.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=TITLE?> | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
		include "menu/css.html";
	?>
	

	
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
		<?php
			include "menu/mainheader.html";
			include "menu/sidebar.html";
			include "menu/dashboard.html";
		?>

		<?php 
			include "tabel/tabel_edukasi.php";
		?>

		<?php
			include "menu/footer.html";
		?>
	</div>
	<?php
		include "menu/js.html";
	?>	
</body>
</html>
