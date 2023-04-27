<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
<?php 
		session_start();
		if(isset($_SESSION['user'])){
      $strLog = "<nav>
<a href='index.php'>Home</a> 
<a href='data.php'>Data</a> 
<a href='#'>hhhh</a> 
</nav>";
echo $strLog;

		} else {
      $strNot = "<nav>
<a href='index.php'>Home</a> 
<a href='data.php'>Data</a> 
<a href='loginForm.php'>Login</a> 
</nav>";
echo $strNot;
		}
	?>
</header>
<body>
    
</body>



</html>