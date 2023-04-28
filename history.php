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
<!-- <header><script src="header.js"></script></header> -->
<body style="background:#f5f4ef">
    

    <h2 style="padding-top: 7rem;text-align: center; font-size: 24px;">Donation History</h2>



</body>

</html>

<?php


// making connection
    include_once('db.php');

    // query firing to get the data from the table
    $query="SELECT `fname`, `lname`, `med_name`,`unit`,`email` from donation";

    $queryfire=mysqli_query($conn,$query);

    $num=mysqli_num_rows($queryfire);


    echo "
    <div style='
    padding: 3rem'>
            <div>
            <table>
<tr>
    <th>Donor name</th>
    <th>Medicine</th>
    <th>Units</th>
    <th>Email</th>

    
  </tr>";
    if($num > 0){
        while($details=mysqli_fetch_array($queryfire)){
            ?>
           

  <tr>
    <td>
        <?php
            echo $details['fname']." ".$details['lname'] ;
        ?>
    </td>
    <td>
        <?php
            echo $details['med_name'];
        ?>
    </td>
    <td>
        <?php
            echo $details['unit'];
            ?>
        </td>
        <td>
            <?php
            echo $details['email'];
            ?>
        </td>
        
            <?php
        }
        
    }
    

    echo "</tr>
    </table>
    
       
        </div>
    </div>";
    








