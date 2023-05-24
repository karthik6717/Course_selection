<?php
$servername = "localhost";
$username = "root";
$passwword = "";
$database = "students_data";

// create connection
$conn = mysqli_connect($servername,$username,$passwword,$database);

//Check the connection 
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}

function randfilename(){
    include("./connection.php");

    // create connection
    $img1 = basename($_FILES['file']['name']);
    $file_extension = pathinfo($img1, PATHINFO_EXTENSION); 
    
    $year = date("Y");
    $un = rand(1000000, 9999999);
    $ur = $un.$file_extension;
    $user_check_query = "SELECT * FROM `data` WHERE receipt='$un' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
      if ($user['receipt'] === $ur) {
        randfilename();
      }
    } else {
      return $ur;
    }
  }
$name = $_POST['name'];
$rollno = $_POST['rollno'] ;
$course1 = $_POST['Course'];
$year = $_POST['year'];
$sem = $_POST['sem'] ;
$branch = $_POST['branch'] ;
$target_dir = "./recipts/";
$_FILES['file']['name'] = randfilename();
$target_file = $target_dir.basename($_FILES['file']['name']);
$img = basename($_FILES['file']['name']);
$upiref = $_POST['Upiref'];
$selected_course = array();
if(isset($_POST['course_code']))
{
  foreach($_POST['course_code'] as $course)
  {
    $selected_course[] =$course;
  }
}
$courses = implode(",", $selected_course);
//$lang = $_POST['lan'] ;
// $address = $_POST['addtext'] ;

$sql = "INSERT INTO `data` VALUES('$name','$rollno','$course1','$year','$sem','$branch','$courses','$img','$upiref',NULL)";


if($conn -> multi_query($sql) == TRUE)
{    
    move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
  echo "<script>iziToast.show({
    title: 'Successfully Submitted',
    message: '***Please Submit Hard copy to HoD***'
});</script>";
}
else
{
    echo "Error while inserting:".$conn->error;
}
mysqli_close($conn);
?>