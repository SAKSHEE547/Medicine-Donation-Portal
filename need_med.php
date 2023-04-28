<?php

if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $address=$_POST['address'];
  $med_name=$_POST['med_name'];
  $company=$_POST['company'];
  $unit=$_POST['unit'];
  $file=$_FILES['file']['name'];
  $tm=$_FILES['file']['tmp_name'];
  // move_uploaded_file($tm,"med_imgs/".$file);

  if($fname!='' && $lname!='' && $mobile!='' &&  $email!='' && $state!='' && $city!='' && $address!='' && $med_name!='' && $company!='' &&  $unit!='' && $file!='')
  {
    $sql="INSERT INTO need_med(fname,lname,mobile,email,state,city,address,med_name,company,unit,file) VALUES ('$fname','$lname','$mobile','$email','$state','$city','$address','$med_name','$company','$unit','$file')";
    include_once('db.php');
    
    $qry=mysqli_query($conn,$sql) or die("Data insert Error");
    if($qry)
    {
      $sql1="INSERT INTO need_med(fname,lname,mobile,email,state,city,address,med_name,company,unit,file) VALUES ('$fname','$lname','$mobile','$email','$state','$city','$address','$med_name','$company','$unit','$file')";
      $qry1=mysqli_query($conn,$sql1) or die("Data insert Error");
      if($qry1)
      {
        echo '<div class="alert alert-success" role="alert">
        your details received successfully ! NGOs member will come to give medicine
    </div>';
      echo "";
      }
    }
  }
  else
    {
        echo '<div class="alert alert-success" role="alert">
        Please fill all Fields!
      </div>';
    }
  
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=\, initial-scale=1.0" />
    <title>Document</title>
    
    <script
      src="https://kit.fontawesome.com/41b051ed13.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="med_donation_form.css" />
  </head>
  <body>
    <script src="./header.js"></script>
    <div class="container">
      <h1 style="padding-top: 10%">Personal Details</h1>

      <form action="" method="POST" enctype="multipart/form-data">
        <div>
          <p>
            <label>
              First Name<br />
              <input type="text" name="fname" placeholder="aaa" />
            </label>
          </p>
          <p>
            <label>
              Last Name<br />
              <input type="text" name="lname" placeholder="bbb" />
            </label>
          </p>
          <p>
            <label>
              Mobile no<br />
              <input type="number" name="mobile" placeholder="123456789" />
            </label>
          </p>
          <p>
            <label>
              email<br />
              <input type="email" name="email" placeholder="something@email.com" />
            </label>
          </p>
          <p>
            <label>
              State<br />
              <input type="text" name="state" placeholder="Maharashtra" />
            </label>
          </p>
          <p>
            <label>
              city<br />
              <input type="text" name="city" placeholder="Pune" />
            </label>
          </p>
          <p>
            <label>
              Address<br />
              <textarea
              name="address"
                style="width: 35rem; height: 5rem"
                rows="5"
                cols="40"
                placeholder="Your message. I'm afraid I still don't understand, sir. Maybe if we felt any human loss as keenly as we feel one of those close to us, human history would be far less bloody."
              ></textarea>
            </label>
          </p>
          
        </div>
      

      <h1>Medicine Details</h1>
    
        <div>
          <p>
            <label>
              Medicine Name<br />
              <input type="text" name="med_name" placeholder="aaa" />
            </label>
          </p>
          <p>
            <label>
              Company<br />
              <input type="rext" name="company" placeholder="bbb" />
            </label>
          </p>
          <p>
            <label>
              Unit<br />
              <input type="number" name="unit" placeholder="123456789" />
            </label>
          </p>
          
          <p>
            <input type="file" name="file" id="file" />
          </p>
          <p>
            <input type="submit" name="submit" />
          </p>
        </div>
      </form>
    </div>

    <script src="./footer.js"></script>
  </body>
</html>
