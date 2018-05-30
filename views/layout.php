<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-tarnsitional.dtd">

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charaset=utf-8">
	<title><?php íf (isset($title)): echo $this->escape(Stitle) . ' - ';endif;?>Mini Blog</title>

</head>
<body>

	<div id ="header">
		<h1><href=" <?php echo $base_url; ?>/">Mini Blog</a></h1>
	</div>

	<div id="main">
		<?php echo $_content;?>
	</div>

</body>


</html>
