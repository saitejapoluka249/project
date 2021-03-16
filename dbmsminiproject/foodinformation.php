<?php
$conn = new mysqli('localhost','root','','dbmsminiproject');
if(!$conn){
  die('Could not Connect My Sql:' .mysql_error());
 }
$result = mysqli_query($conn,"SELECT * FROM foodinfo");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
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
    background-color: white;
}
</style>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr style="background-color:#FFFFE0;">
    <td>Id</td>
    <td>Cuisine</td>
    <td>Snacks</td>
    <td>Non-Veg Item</td>
    <td>Veg Item</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["cuisine"]; ?></td>
    <td><?php echo $row["snacks"]; ?></td>
    <td><?php echo $row["nonveg"]; ?></td>
    <td><?php echo $row["veg"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>