<!DOCTYPE html>
<html>

<head>
  <title>Insert Page page</title>
</head>

<body>
  <center>
    <?php

    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
   $conn = mysqli_connect("sdb-58.hosting.stackcp.net", "student25-35303137bd4b", "ua92-studentAc", "student25-35303137bd4b");
    
    // Check connection
    if($conn === false){
      die("ERROR: Could not connect. "
        . mysqli_connect_error());
    }
    
    // Taking all 5 values from the form data(input)
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $number1 = $_REQUEST['number1'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $medical_info = $_REQUEST['medical_info'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];

  
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO student (fname,lname,number1,email,address,medical_info,gender,dob) VALUES ('$fname',
      '$lname','$number1','$email','$address','$medical_info','$gender','$dob')";
    
    if(mysqli_query($conn, $sql)){
       echo "data added sucessful";
      header("Location: allstudents.php", true, 301);
    } else{
      echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);
    ?>
  </center>
</body>

</html>
