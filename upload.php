<?php
if(isset($_REQUEST['submit']))
{
  $filename=  $_FILES["imgfile"]["name"];
  if ((($_FILES["imgfile"]["type"] == "image/gif")|| ($_FILES["imgfile"]["type"] == "image/jpeg") || 
		($_FILES["imgfile"]["type"] == "image/png")  || 
		($_FILES["imgfile"]["type"] == "image/pjpeg")) && ($_FILES["imgfile"]["size"] < 200000))
  {
    if(file_exists($_FILES["imgfile"]["name"]))
    {
      echo "File name exists.";
    }
    else
    {
      move_uploaded_file($_FILES["imgfile"]["tmp_name"],"uploads/$filename");
      echo "Upload Successful ";
    }
  }
  else
  {
    echo "invalid file.";
  }
}
else
{
?>
<form method="post" enctype="multipart/form-data"><center>
<h2>Change Profile Image</h2>
<input type="file" name="imgfile"><br><br>
<input type="submit" name="submit" value="submit" align="left">
<input type="reset" name="reset" value="Reset" align="right"></center>
</form>
<?php
}
?> 

