<?php
include_once 'connection.php';
// $query = "select * from 'form1";
//$query = "SELECT * FROM form1";
//$result = mysqli_query($conn,$query);
// print_r($result);exit;
?>
<!-- <!DOCTYPE html> -->
<!-- <html>
 <head>
 <title> Display Records</title>
 </head> -->
 <html>
 <style type="">
 table
  {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}
tr:nth-child(even)
{
    background-color: white;
}
 </style>
<body>
<!-- 
// if (mysqli_num_rows($result) > 0) 
// {
?> -->
  <table>
  
  <tr>
    <td>id</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Password</td>
    <td>Confirm password</td>
    <td>Email</td>
    <td>Phone Number</td>
    <td>Address</td>
  </tr>
<!-- 
// $i=0;
// while($row = mysqli_fetch_array($result)) {
?> --><!-- 
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["lname"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
    <td><?php echo $row["conpassword"];?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["address"]; ?></td>

      <td><a class="btn btn-info" href="update1.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

</tr> -->
<!-- 
// $i++;
// }
?> -->
</table>
<br>         
           
 <!-- 

// }
// else{
//     echo "No result found";
// }
?> -->
 </body>
 </html>

<!-- </html> -->