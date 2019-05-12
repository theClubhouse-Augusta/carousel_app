<?php

echo "We're working";

// $myfile = fopen('testfile.txt', 'w') or die('Unable to open file!');
// $txt = "new Image\n";
// fwrite($myfile, $txt);
// fclose($myfile);

?>

<form method="post" enctype="multipart/form-data">
File name:<input type="file" name="imgfile"><br>
<input type="submit" name="submit" value="upload">
</form>

<?php
$target_dir = 'uploads/';
$uploadOk = 1;
// Check if image file is a actual image or fake image
if (isset($_POST['submit'])) {
    if (!empty($_FILES)) {
        $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);

        if ($check !== false) {
            echo 'File is an image - '.$check['mime'].'.';
            $uploadOk = 1;
        } else {
            echo 'File is not an image.';
            $uploadOk = 0;
        }
    }
}
?>
