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
  $donate_dt=$_POST['donate_dt'];
  $med_name=$_POST['med_name'];
  $company=$_POST['company'];
  $unit=$_POST['unit'];
  $manf_dt=$_POST['manf_dt'];
  $exp_dt=$_POST['exp_dt'];
  $file=$_FILES['file']['name'];
  $tm=$_FILES['file']['tmp_name'];
  // move_uploaded_file($tm,"med_imgs/".$file);
  include("mpdf/mpdf.php");
  if($fname!='' && $lname!='' && $mobile!='' &&  $email!='' && $state!='' && $city!='' && $address!='' && $donate_dt!='' && $med_name!='' && $company!='' &&  $unit!='' && $manf_dt!='' && $exp_dt!='' && $file!='')
  {
    $sql="INSERT INTO donation(fname,lname,mobile,email,state,city,address,donate_dt,med_name,company,unit,manf_dt,exp_dt,file) VALUES ('$fname','$lname','$mobile','$email','$state','$city','$address','$donate_dt','$med_name','$company','$unit','$manf_dt','$exp_dt','$file')";
    include_once('db.php');
    
    $qry=mysqli_query($conn,$sql) or die("Data insert Error");
    if($qry)
    {
      echo "$fname your donations details received successfully ! NGO's member will come to take medicine";
      header("Location: history.php");
    }
    
    
    
  }
  else
    {
      echo "Please fill all the fields";
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
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="med_donation_form.css" />
  </head>
  <body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

  <script>
    var form = document.getElementById("form")
    form.addEventListener('submit',function(event)
    {
      event.preventDefault()
      var text = document.getElementById('text').value
      var fontsize = document.getElementById('fontsize').value

      var doc = new jspdf()
      doc.setFontSize(fontsize);
      doc.text(text,20,20)
      doc.save("output.pdf")
    })
  </script>
    <script src="./header.js"></script>
    <div class="container"  >
      <h1 style="padding-top: 10%">Personal Details</h1>

      <form id="form" action="" method="POST" enctype="multipart/form-data">
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
          <p>
            <label style="margin-left: 2rem">
              When to donate<br />
              <input type="date" name="donate_dt" />
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
            <label>
              Manufacturing Date<br />
              <input type="date" name="manf_dt"/>
            </label>
          </p>
          <p>
            <label>
              Expairy Date<br />
              <input type="date" name="exp_dt" />
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
