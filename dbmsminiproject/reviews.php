<?php
$conn = new mysqli('localhost','root','','dbmsminiproject');
if(!$conn){
  die('Could not Connect My Sql:' .mysql_error());
 }
$result = mysqli_query($conn,"SELECT * FROM customerinfo");
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
    <td>Customer Name</td>
    <td>Restaurant Name</td>
    <td>Food</td>
    <td>Rating</td>
    <td>Feedback</td>
    <td>Suggestions</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["customername"]; ?></td>
    <td><?php echo $row["resname"]; ?></td>
    <td><?php echo $row["food"]; ?></td>
    <td><?php echo $row["rating"]; ?></td>
    <td><?php echo $row["feedback"]; ?></td>
    <td><?php echo $row["suggestions"]; ?></td>
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