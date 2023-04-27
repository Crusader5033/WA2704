<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <header>
<?php 
		session_start();
		if(isset($_SESSION['email'])){
      $strLog = "<nav>
<a href='index.php'>Home</a> 
<a href='data.php'>Data</a> 
<a href='#'>Logout</a> 
</nav>";
echo $strLog;

		} else {
      $strNot = "<nav>
<a href='index.php'>Home</a> 

<a href='loginForm.php'>Login</a> 
</nav>";
echo $strNot;
		}
	?>


  </header>
<main>
           
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et consectetur repudiandae, nisi laborum error quidem asperiores, illum doloremque, recusandae aut quas voluptas eius reprehenderit nostrum inventore provident cum eum temporibus?
         Aut sit sint, voluptates praesentium natus a aspernatur fugit omnis quia dolore nostrum laudantium deserunt animi quaerat ea tempora eaque soluta eligendi, commodi et modi, officia iure corrupti? Consequuntur, quas?
         Totam consectetur adipisci ullam sequi, accusamus aspernatur odio voluptate eaque tenetur provident. Similique repellat voluptatum alias a, facilis quas magni tempora dignissimos minima id? Eum adipisci illo magnam ipsam sunt.
         Iusto possimus dicta ea similique aliquid maiores doloribus rem nihil dolorum optio repudiandae aut voluptate eveniet, dolor, numquam voluptates non accusamus dolorem ipsa totam saepe sit. Consequuntur illum ullam praesentium.
         Officiis velit delectus ipsum quidem cumque tenetur quae blanditiis, fugiat veniam. Labore dolorum quia repellat alias nemo culpa ex adipisci, veniam maxime sapiente consequuntur asperiores iusto dolores. Dolor, iusto illum!</p>  
</main>
           
<footer>



</footer>


</body>
</html>