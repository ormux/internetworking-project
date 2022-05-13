<?php require_once "database.php"; ?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>SQLIA Dummy</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
   <h1 align="center">Tatum Super Secure Web App *Wink Wink*</h1>
   <div class="container">
   <form method="GET">
      <label for="pname">product name</label>
      <input class="form-control" type="text" id="pname" name="pname">

      <label for="price">product price</label>
      <input class="form-control" type="text" id="price" name="price"><br>

      <button class="btn btn-primary" type="submit" value="submit">search</button>
   </form>
   </div>

   <div class="container">
   <table class="table">
      <thead>
         <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
         </tr>
      </thead>
      <tbody>
      <? 
         $pname  = $_GET['pname'] ?? '';
         $price = $_GET['price'] ?? '';
         //$query = "INSERT INTO products(name, price) VALUES ('{$_GET['pname']}', '{$_GET['price']}')";
         $query = "INSERT INTO products(name, price) VALUES ('" . $_GET['pname'] . "', '" . $_GET['price'] . "');";
         print $query . "\n";
         if( !empty($pname) || !empty($price)) {
            //$result = $db->query($query) or die(mysqli_error($db));
            $result = mysqli_query($db, $query);// or die(mysqli_error($db));
            var_dump($result);
         } else {
            print "fields cannot be empty!\n";
         }

         $query = "SELECT * FROM products";
         $result = $db->query($query) or die(mysqli_error($db));
         while($row = mysqli_fetch_array($result)) { ?>
            <tr>
               <th scope="row"><? print $row[0]; ?></td>
               <td><? print $row[1]; ?></td>
               <td><? print $row[2]; ?></td>
            </tr>
      <? } ?>
      </tbody>
   </table>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
