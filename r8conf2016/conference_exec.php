<?php
require_once ('session.php');
require_once ('../mysql_access.php');
require_once ('../get_photo.php');
?>
<!doctype html>
<html>
<head>
    <?php require 'head.php';?>
</head>

<body class="slide" data-type="background" data-speed="5">
    <nav id="nav" role="navigation"></nav>
    <div id="header"></div>
    <div class="row">
    <ul class="large-block-grid-2 small-block-grid-1">

      <div class="row">
        <div class="small-12 columns">
          <h1 class="text-center">Header</h1>
        </div>

        <ul class="small-block-grid-3 text-center">
      		<li style="float: none; display: inline-block;">
            <div class="small-12 columns">
          		<img src="" width="125" style="display: block; margin-left: auto; margin-right: auto;">
          		<h4 class="text-center">
                <br>
              </h4>
            </div>
          </li>
        </ul>

        <div class="small-12 columns">
          <p class="text-center">
            <a href="mailto:">
            </a>
          </p>
        </div>
      </div>
</ul>
</div>
    <!-- Javascript method to include footer -->
    <div id="footer"><?php include 'footer.php';?></div>
    <!-- PHP method to include footer -->
</body>
</html>