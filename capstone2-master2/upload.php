<?php

// while ($row = mysqli_fetch_assoc($result)) {
//     extract($row);
//     $_SESSION['id'] = $userid;
// }
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$pic = ($_FILES['fileToUpload']['name']);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        
    header('location:index.php');
        require 'connection.php';
        require 'login.php';
        require 'signup.php';
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
       $sql = "INSERT INTO image(img,user_id,img_username)
            VALUES('$pic',$id,'$username')";


        mysqli_query($conn,$sql);

       
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<?php
    // $watermark = '&copy;' . $_SESSION['username']; 
    // $stamp = imagecreatefromstring($watermark);
    // $im = imagecreatefromjpeg($target_file) || imagecreatefrompng($target_file);
    // if(imagesx($im) < 500 || imagesy ($im) < 500)
    // {
    //     echo 'images size is too low';
    //     exit;
    // }
    // $marge_right = 0;
    // $marge_bottom = 0;
    // $sx = imagesx($stamp);
    // $sy = imagesy($stamp);

    // imagecopy($im,$stamp,0, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx, imagesy($stamp));

    // $out="uploads/" . $_FILES['fileToUpload']['name'];
    // imagejpeg($im,$out);
    // imagedestroy($im);
    // echo "<img src=$out>";

    header('Content_type: image/jpeg');
    
?>