<html>
  <head>
    <title>texresume.com</title>
    <link rel="stylesheet" type="text/css" href="/styles/tex_style.css">
  </head>
  <body>
    <?php include 'header.php';?>
    
    <div class="main-body">
      
      <div class="new-user" id="left">
        <h3> A new user???</h3>
        <h4> Enter your email to register and proceed!!!<h4>
        <form action="build_new_resume.php" method="post">
          E-mail: <input type="text" name="email">
          <input type="submit" class="button" id="newUser" value="Proceed"/>
        </form>
      </div>
      
      <div class="reg-user" id="right">
        <h3> Already a registered user???</h3>
        <h4> Enter your email and password!!!<h4> 
      </div>
    
    </div>
    
    <?php include 'footer.php';?>
  </body>
</html>
