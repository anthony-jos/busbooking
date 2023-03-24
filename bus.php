<?php

include 'dbconnection.php';








if(isset($_POST['submit1']))
    {
    $seat_no = $_POST['seat'];
    $fname = $_POST['fname'];
    $phone = $_POST['ph'];

    echo $seat_no;




    $query = "SELECT *  FROM booking WHERE seat_no = '$seat_no'";
    $result = $conn->query($query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('already booked');window.location='index.php'</script>";
            // header("Location: index.php");
        } 
        else {
            
            $sql = "INSERT INTO booking (seat_no,fname,ph) VALUES ('$seat_no','$fname','$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('seat booked');window.location='index.php'</script>";
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }
        }
    } 
    else {
        echo 'Error: ' . mysqli_error();
    }
}



if(isset($_POST['delete1']))
    {
    $id = $_POST['delete1'];
    $query = "delete from booking where seat_no='$id'";
    $result = $conn->query($query);
    header('location:admin.php');
    
    }


// -------------------------------------------------------
// =======================================================
if(isset($_POST['submit2']))
    {
    $seat_no = $_POST['seat'];
    $fname = $_POST['fname'];
    $phone = $_POST['ph'];

    echo $seat_no;


    




    $query = "SELECT *  FROM booking2 WHERE seat_no = '$seat_no'";
    $result = $conn->query($query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('already booked');window.location='index2.php'</script>";
            // header("Location: index.php");
        } 
        else {
            
            $sql = "INSERT INTO booking2 (seat_no,fname,ph) VALUES ('$seat_no','$fname','$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('seat booked');window.location='index2.php'</script>";
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }
        }
    } 
    else {
        echo 'Error: ' . mysqli_error();
    }
}

if(isset($_POST['delete2']))
    {
    $id = $_POST['delete2'];
    $query = "delete from booking2 where seat_no='$id'";
    $result = $conn->query($query);
    header('location:admin.php');
    
    }
    //----------------------------------------------------
    //----------------------------------------------------

if(isset($_POST['submit3']))
    {
    $seat_no = $_POST['seat'];
    $fname = $_POST['fname'];
    $phone = $_POST['ph'];

    echo $seat_no;


    




    $query = "SELECT *  FROM booking3 WHERE seat_no = '$seat_no'";
    $result = $conn->query($query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('already booked');window.location='index3.php'</script>";
            // header("Location: index.php");
        } 
        else {
            
            $sql = "INSERT INTO booking3 (seat_no,fname,ph) VALUES ('$seat_no','$fname','$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('seat booked');window.location='index3.php'</script>";
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }
        }
    } 
    else {
        echo 'Error: ' . mysqli_error();
    }
}

if(isset($_POST['delete3']))
    {
    $id = $_POST['delete3'];
    $query = "delete from booking3 where seat_no='$id'";
    $result = $conn->query($query);
    header('location:admin.php');
    
    }

if(isset($_POST['submit4']))
    {
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT *  FROM login ";
    $result = $conn->query($query);
    if($result)
    {
        echo "window.location='admin.php'";
    }
}    

?>

