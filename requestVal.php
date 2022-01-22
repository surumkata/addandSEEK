<?php
require_once("connectDB.php");

$aux = $_GET["m"];
$user = $_GET["u"];

$museu = str_replace('-', ' ', $aux);
$id = $museu.";".$user;
$postID = str_replace(' ','-',$id);

$consult = "SELECT * FROM requests WHERE id = '$id' ";
$result = mysqli_query($connection,$consult);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/request.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {font-family: "Lato", sans-serif}
    .mySlides {display: none}
    </style>
  </head>
  <body style="background-color: #eff4f8">
    <div class="w3-top orange">
      <div class="w3-bar w3-card">
        <a href="index.php">
        <img src="pictures/assets/logo.png" class="w3-bar-item nav-button-img" alt="Logo"> </a>
        <a href="profileUser.php">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="requests.php">
        <img class="w3-bar-item nav-button-img w3-padding-large w3-hide-small" src="pictures/assets/requests.png" width="50" height="50">
        </a>
        <a href="logout.php">
        <img class="w3-bar-item nav-button-img w3-padding-large w3-hide-small w3-right" src="pictures/assets/logout.png" width="50" height="50">
        </a>
      </div>
    </div>

    <div class="container w3-center" style="position:relative;top:10vh;">
      <div>
        <table>
          <?php
           echo "<tr>";
           echo "<th>"."Original name"." </th>";
           echo "<td class=title>".$museu." </td>";
           echo "</tr>";

           echo "<tr>";
           echo "<th>"."Address"." </th>";
           echo "<td class=title>".$row["address"]." </td>";
           echo "</tr>";

           echo "<tr>";
           echo "<th>"."Price"." </th>";
           echo "<td class=title>".$row["price"]." </td>";
           echo "</tr>";

           echo "<tr>";
           echo "<th>"."Categories"." </th>";
           echo "<td class=title>".$row["categories"]." </td>";
           echo "</tr>";

           echo "<tr>";
           echo "<th>"."Contact"." </th>";
           echo "<td class=title>".$row["contact"]." </td>";
           echo "</tr>";

           echo "<tr>";
           echo "<th>"."Website"." </th>";
           echo "<td class=title>".$row["website"]." </td>";
           echo "</tr>";

           echo "<tr>";
           echo "<th>"."Picture"." </th>";
           echo "<td class=title>".$row["picture"]." </td>";
           echo "</tr>";

           echo "<tr>";
           echo "<th>"."New name"." </th>";
           echo "<td class=title>".$row["newName"]." </td>";
           echo "</tr>";

           echo "<tr>";
           echo "<th>"."Description"." </th>";
           echo "<td class=title>".$row["description"]." </td>";
           echo "</tr>";


          ?>

         </table>


         <form action="approve.php" method="post">
           <input type="hidden" name="reqID" value=<?php echo $postID; ?>>
           <input type="image" alt="Approve" src="pictures/assets/yes.png"/>
         </form>

         <form action="reject.php" method="post">
             <input type="hidden" name="reqID" value=<?php echo $postID; ?>>
             <input type="image" alt="Reject" src="pictures/assets/no.png"/>
         </form>




       </div>

    </div>


  </body>
</html>