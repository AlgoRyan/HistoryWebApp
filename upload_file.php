<?php
error_reporting(E_ALL ^ E_NOTICE); // turns off all the notices showing in browser
$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/JPG"))
&& ($_FILES["file"]["size"] < 1000000)
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . C;
    if (file_exists("upload/" . $_FILES["file"]["name"])) {
      echo $_FILES["file"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      __DIR__ . "/uploads/". $_FILES["file"]["name"]);
      echo "Stored in: " . __DIR__ . "/uploads/" . $_FILES["file"]["name"];
    }
  }
} else {
  echo "Invalid file";
}


echo "<script>window.location = 'add-content.html'</script>";
/* to see details of the uploaded file
echo "<pre>";
echo "POST:";
print_r($_POST);
echo "FILES:";
print_r($_FILES);
echo "</pre>";

*/

// old path "/Users/cornelisbosua/HistoryWebApp/uploads/"

?>

