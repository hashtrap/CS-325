<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sun Hill Reservations</title>
    <link rel="stylesheet" href="../css/authentication.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/general.css">

</head>
<body>
<?php
  if(!isset($_POST['submit']))
  {

?>
   
<header> <h1>Confirm your identity</h1></header>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div class="mb-3">
    <label  class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"><p>We'll never share your email with anyone else.</p></div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    <?php
  }

  else
  {
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    
    $mysqli = new mysqli("localhost", "root", "root", "final_project");
    if ($mysqli === false) 
    {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    
    $sql = "SELECT username, password FROM users";
    if ($result = $mysqli->query($sql)) 
    {
      if ($result->num_rows > 0) 
      {
        while($row = $result->fetch_array()) 
        {
          if($)
          {

          }
         echo $row[0] . ":" . $row[1] . "\n";
        }
       $result->close();
      } 
      else 
      {
        echo "No records matching your query were found.";
      }
    } 
    else 
    {
      echo "ERROR: Could not execute $sql. " . $mysqli->error;
    }


    $mysqli->close();
    
  }
    ?>
</body>

<script>
</script>
</html>