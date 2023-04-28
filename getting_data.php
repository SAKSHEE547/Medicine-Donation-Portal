<!DOCTYPE html>
<html>
    
<head>
    
    <link rel="stylesheet" type="text/css" href="style.css" />
    
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
  width:11%;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body style="background:#f5f4ef">
    <script src="header.js"></script>

    <h2 style="padding-top: 7rem;text-align: center;">NGO's list</h2>



</body>
</html>

<?php


// making connection
    include_once('db.php');

    // query firing to get the data from the table
    $query="SELECT `fname`, `address`, `email` FROM `users` order by id ASC";

    $queryfire=mysqli_query($conn,$query);

    $num=mysqli_num_rows($queryfire);


    echo "
    <div style='
    padding: 3rem'>
            <div>
            <table>
<tr>
    <th>NGO's</th>
    <th>Address</th>
    <th>Location</th>
    
  </tr>";
    if($num > 0){
        while($details=mysqli_fetch_array($queryfire)){
            ?>
           

  <tr>
    <td>
        <?php
            echo $details['fname'];
        ?>
    </td>
    <td>
        <?php
            echo $details['address'];
        ?>
    </td>
    <td>
        <?php
            echo $details['email'];
            ?>
        </td>
        <td>
        <?php
            echo '<button
            type="submit"
            name="register"
            class="btn btn-primary rounded submit"
            style="background:green"
          >
            <a href="med_donation_form.php">Donate</a>
          </button>';
            ?>
         </td>
            <?php
        }
        
    }
    

    echo "</tr>
    </table>
    
       
        </div>
    </div>";
    








