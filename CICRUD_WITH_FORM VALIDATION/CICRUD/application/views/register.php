<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<!DOCTYPE html>
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

<body style="background-color: #0e6091c2;">
    <br>
    <!-- <a class="btn btn-success" href=""></a> -->
    <button class="btn btn-success" onclick="history.back()">Go Back</button>
    <br><br>
<table>
 <tr>
    <td>ID</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Password</td>
    <td>Confirm password</td>
    <td>Email</td>
    <td>Phone Number</td>
    <td>Address</td>
    <td>Update</td>
    <td>Delete</td>
    
  </tr>
  <tr>
  <?php 
    foreach ($data as $row) 
    {
       
    ?> 
        <tr>
         <td><?php echo $row["Id"]; ?>
             <!-- <input type="hidden" name="id" value=" "> -->
         </td>
        <td><?php echo $row["fname"]; ?></td>
        <td><?php echo $row["lname"]; ?></td>
        <td><?php echo $row["password"]; ?></td>
        <td><?php echo $row["conpassword"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["address"]; ?></td>
        <td><a class="btn btn-primary" href="<?php echo base_url('CRUD/GETID_Process?Id='.$row["Id"]); ?>">Edit
        </a>
        <!-- <td><a href="CRUD/GETID_Process?Id=<?php echo $row["Id"]; ?>">Update</a></td> -->
        
            </td> 
            <td><a class="btn btn-danger" href="<?php echo base_url('CRUD/DELETE_Process?Id='.$row["Id"]); ?>" >DELETE</a></td>
    </tr>
    <?php
    }
?>

  </tr>
</table>

</body>
</body>
</html>
</html>
