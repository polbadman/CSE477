<?php
require 'lib/site.inc.php';
$view = new Noir\MovieView($site, $_GET, $_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $view->head(); ?>
</head>
<body>
<?php
echo $view->header();
echo $view->present();
echo $view->footer();
?>

</body>
</html>