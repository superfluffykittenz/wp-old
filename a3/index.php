<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Assignment 3</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link type="text/css" rel="stylesheet" href="../wireframe.css"/>
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>
  <style>
    <?php
      // This PHP code inserts CSS to style the "current page" link in the nav area
      $here = $_SERVER['SCRIPT_NAME']; 
      $bits = explode('/',$here); 
      $filename = $bits[count($bits)-1]; 
      echo "nav a[href$='$filename'] {
      box-shadow: 1px 1px 1px 2px navy;
    }";
    ?>
    
  </style>
  </head>

  <body>

    <header>
      <div>Put company logo and name here</div>
    </header>

    <nav>
      <div>Put website navigation links here</div>
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div>Maintain links to your working <a href='../style-guide.php'>style guide</a>, your <a href='../products.txt'>products spreadsheet</a> and <a href='../orders.txt'>orders spreadsheet</a> here.</div>
    </footer>
    

  </body>

</html>