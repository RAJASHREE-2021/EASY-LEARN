<?php
$hname = "localhost";
$uname = "root";
$pass = "";
$db = "studyhunt";

//frontend data
// define('SITE_URL', 'http://127.0.0.1/home_stay_website/');
//     define('ABOUT_IMG_PATH', SITE_URL.'images/about/');
//     define('CAROUSEL_IMG_PATH', SITE_URL.'images/carousel/');
//     define('FACILITIES_IMG_PATH', SITE_URL.'images/facilities/');
//     define('ROOMS_IMG_PATH',SITE_URL.'images/rooms/');
//     define('USERS_IMG_PATH',SITE_URL.'images/users/');

// //backend data
// define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/home_stay_website/images/');
// define('ABOUT_FOLDER','about/');
// define('CAROUSEL_FOLDER', 'carousel/');
//     define('FACILITIES_FOLDER', 'facilities/');
//     define('ROOMS_FOLDER','rooms/');
//     define('USERS_FOLDER','users/');

$conn = mysqli_connect($hname, $uname, $pass, $db);
if (!$conn) {
  die("connection   
 failed: " . mysqli_connect_error());
}
//else {
//     echo "connnection successful";
// }


function filteration($data)
{
  foreach ($data as $key => $value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);

    $data[$key] = $value;
  }
  return $data;
}

function adminlogin(){
  session_start();
  if(!(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']==true)){
      echo"<script>
          window.location.href='index.php';
      </script>";
       exit; 
  }
  // session_regenerate_id(true);
}

function selectAll($table){
  $conn = $GLOBALS['conn'];
  $res = mysqli_query($conn, "SELECT * FROM $table");
  return $res;
}
function select($sql, $values, $datatypes)
{
  $conn = $GLOBALS['conn'];
  if ($stmt = mysqli_prepare($conn, $sql)) {
    mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
    if (mysqli_stmt_execute($stmt)) {
      $res = mysqli_stmt_get_result($stmt);
      mysqli_stmt_close($stmt);
      return $res;
    } else {
      mysqli_stmt_close($stmt);
      die("Query cannot be executed- select: ");
    }
  } else {
    die("Query cannot be prepared- select: ");
  }
}

function update($sql, $values, $datatypes)
{
  $conn = $GLOBALS['conn'];
  if ($stmt = mysqli_prepare($conn, $sql)) 
  {
    mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
    if (mysqli_stmt_execute($stmt)) {
      $res = mysqli_stmt_affected_rows($stmt);
      mysqli_stmt_close($stmt);
      return $res;
    } else {
      mysqli_stmt_close($stmt);
      die("Query cannot be executed- update ");
    }
  } else {
    die("Query cannot be prepared- update  ");
  }
}
function insert($sql, $values, $datatypes){
  $conn = $GLOBALS['conn'];
  if($stmt = mysqli_prepare($conn, $sql)){
      mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
      if(mysqli_stmt_execute($stmt)){
          $res = mysqli_stmt_affected_rows($stmt);
          mysqli_stmt_close($stmt);
          return $res;
      }
      else{
          mysqli_stmt_close($stmt);
          die("Query cannot be executed - Insert");  
      }
  }
  else{
      die("Query cannot be prepared - Insert");
  }
}

function delete($sql, $values, $datatypes){
  $conn = $GLOBALS['conn'];
  if($stmt = mysqli_prepare($conn, $sql)){
      mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
      if(mysqli_stmt_execute($stmt)){
          $res = mysqli_stmt_affected_rows($stmt);
          mysqli_stmt_close($stmt);
          return $res;
      }
      else{
          mysqli_stmt_close($stmt);
          die("Query cannot be executed - Delete");  
      }
  }
  else{
      die("Query cannot be prepared - Delete");
  }
}


function redirect($url){
  echo"<script>
      window.location.href='$url';
  </script>";
   exit; 
}





function alert($type, $msg){
  $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
  echo <<<alert
      <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
          <strong class="me-3">$msg</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  alert;
}


?>