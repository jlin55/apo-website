<?php
require_once ('session.php');
?>
<!doctype html>
<html>
<head>
    <?php require 'head.php';?>
</head>

<body class="slide" data-type="background" data-speed="5">
    <!-- Javascript method to include navigation -->
    <nav id="nav" role="navigation"><?php include 'nav.php';?></nav>
    <!-- PHP method to include navigation -->

    <!-- Javascript method to include header -->
    <div id="header"><?php include 'header.php';?></div>
    <!-- PHP method to include header -->
<div class="row">

<?php
function whoami() {
	echo "<p>Session ID", $_SESSION['sessionID'], "</p>";
	echo "<p>Exec: ", $_SESSION['sessionexec'], "</p>";
	echo "<p>Position: ", $_SESSION['sessionposition'], "</p>";
}

if ($_SESSION['sessionID'] != 426) {
	echo "<p>You need to be a member of the webmaster committee to see this section.</p>";
} else {
	whoami();
}
?>

	</div>
    <!-- Javascript method to include footer -->
    <div id="footer"><?php include 'footer.php';?></div>
    <!-- PHP method to include footer -->
</body>
</html>