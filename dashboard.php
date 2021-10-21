<!-- <!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inventories</title>
</head>



<body>

<div class="container">

    <div class="row">

        <div class="col md-12">



            <button type="button" class="btn btn-success my-5 pull-right" data-toggle="modal" data-target="#myModal">Add Student Data</button>
          </div>
        </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Measurement</th>
      <th scope="col">Original Price</th>
      <th scope="col">Profit</th>
      <th scope="col">selling Price</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

<?php

include "db.php"; 

$records = mysqli_query($db,"select * from inventory_details"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  
    <td><?php echo $data['product_id']; ?></td>
    <td><?php echo $data['product_name']; ?></td>
    <td><?php echo $data['quantity']; ?></td>
    <td><?php echo $data['measurement']; ?></td>
    <td><?php echo $data['original_price']; ?></td>
    <td><?php echo $data['profit']; ?></td>
    <td><?php echo $data['selling_price']; ?></td>

     echo ' <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$productname.'</td>
      <td>'.$quantity.'</td>
      <td>'.$measurement.'</td>
      <td>'.$original_price.'</td>
      <td>'.$profit.'</td>
      <td>'.$selling_price.'</td>
      <td>'.$supplier.'</td>
      <td>

        <button class="btn btn-primary"><a href="update.php" class="text-light">Update</a></button>

        <button class="btn btn-danger"><a href="delete.php? deleteid=" class="text-light">
        Delete</a></button>
      </td>
   
       
    </tr>';

  
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html> -->