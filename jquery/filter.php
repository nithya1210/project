<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2> Student Details</h2>

<input id="myInput" type="text" placeholder="Search..">
<br><br>

<table>
  <thead>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Email</th>
  </tr>
  </thead>
  <tbody id="myTable">
 
  <?php
  include('connection.php');
  $result="select * from regtbl";
  $query=mysqli_query($mysqli,$result);
  while ($row=mysqli_fetch_assoc($query))
   {
    ?>
    <tr>
    

    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['email']; ?></td>

  <?php }
  ?>
</tr>
  </tbody>
</table>
  


</body>
</html>
