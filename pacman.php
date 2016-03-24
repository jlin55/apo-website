<?php
require_once ('session.php');
?>
<!doctype html>
<html>
<head>
    <?php require 'head.php';?>
      #pacman {
        height:450px;
        width:342px;
        margin:20px auto;
      }
      #shim { 
        font-family: BDCartoonShoutRegular; 
        position:absolute;
        visibility:hidden
      }
      h1 { font-family: BDCartoonShoutRegular; text-align:center; }
      body { width:342px; margin:0px auto; font-family:sans-serif; }
      a { text-decoration:none; }
    </style>

</head>

<body>
  
  <div id="shim">shim for font face</div>

  <h1>HTML5 Pacman</h1>

  <a href="http://arandomurl.com/">Writeup</a> |
  Code on <a href="http://arandomurl.com/">Github</a>

  <div id="pacman"></div>
  <script src="pacman.js"></script>
  <script src="modernizr-1.5.min.js"></script>

  <script>
    var el = document.getElementById("pacman");
    if (Modernizr.canvas && Modernizr.localstorage && 
        Modernizr.audio && (Modernizr.audio.ogg || Modernizr.audio.mp3)) {
      window.setTimeout(function () { PACMAN.init(el, "./"); }, 0);
    } else { 
      el.innerHTML = "Sorry, needs a decent browser<br /><small>" + 
        "(firefox 3.6+, Chrome 4+, Opera 10+ and Safari 4+)</small>";
    }
  </script>

</body>
</html>
