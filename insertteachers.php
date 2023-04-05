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
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $phone_no = $_REQUEST['phone_no'];
    $course = $_REQUEST['course'];
    $salary = $_REQUEST['salary'];
   

  
    
    // Performing insert query execution
    // here our table name is college
    $sql = "INSERT INTO teachers (name,address,phone_no,course,salary) VALUES ('$name',
      '$address','$phone_no','$course','$salary')";
    
    if(mysqli_query($conn, $sql)){
      echo "data added sucessful";
      header("Location: allteachers.php", true, 301);
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
