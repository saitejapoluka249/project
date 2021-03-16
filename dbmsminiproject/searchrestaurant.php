<?php
$conn = new mysqli('localhost','root','','dbmsminiproject');
if(!$conn){
  die('Could not Connect My Sql:' .mysql_error());
 }
$res = $_POST['res'];
$result = mysqli_query($conn,"SELECT * FROM restaurant where name='$res'");
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
<body style="text-align:center";>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  
  
  
<table>
  
  <tr style="background-color:#FFFFE0;">
    <td>Id</td>
    <td>Restaurant Name</td>
    <td>Special Item</td>
    <td>PinCode</td>
    <td>Area</td>
    <td>Book</td>
  </tr>
  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
    <tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["special"]; ?></td>
    <td><?php echo $row["pin"]; ?></td>
    <td><?php echo $row["area"]; ?></td>
    <td><a href="book.html">BOOK</a></td>
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