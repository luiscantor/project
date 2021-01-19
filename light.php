<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body >

<form method="get" action="light.php">

<div class="alert alert-warning">
  <center> <strong>Luz Principal</strong> </center>
</div>


<div class="container">
<center>
  <button type="submit" name="on"  class="btn btn-success btn-lg">Encender</button>
  <button type="submit" name="off" class="btn btn-danger btn-lg">Apagar</button>
</center>
</div>
</form>

         <?php
          if(isset($_GET['on'])){
                 //exec('sudo python /var/www/html/home/relay_on.py');
                 system("gpio mode 0 out");
                 system("gpio write 1 1");
         }
         else if(isset($_GET['off'])){
                // exec('sudo /usr/bin/python /var/www/html/home/relay_off.py');
                 system("gpio write 1 0");
         }
         ?>

</body>
</html>
