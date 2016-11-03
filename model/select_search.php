<?php

$q = ($_GET['q']);


 $con = mysqli_connect('localhost','adminnino','kronos2411','myband_');
 if (!$con) {
     die('Could not connect: ' . mysqli_error($con));
 }

 mysqli_select_db($con,"world_");

 $sql="SELECT * FROM tourdates WHERE city LIKE '%$q%'";

 $result = mysqli_query($con,$sql);

 echo "<table>
 <tr><th>Date</th>
 <th>Country</th>
 <th>Venue</th>";

 while($row = mysqli_fetch_array($result)) {
     echo "<tr>";
      echo "<td>" . $row['date'] . "</td>";
     echo "<td>" . $row['city'] . "</td>";
      echo "<td>" . $row['venue'] . "</td>";


     echo "</tr>";
 }
 echo "</table>";
 mysqli_close($con);
 ?>
 
