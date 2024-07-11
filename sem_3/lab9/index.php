<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="upload_data">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>

</html>


<?php

if ($_FILES) {
    // print_r($_FILES);

    /*
        Array ( 
        [upload_data] => Array ( 
        [name] => Doraemon_character.png 
        [type] => image/png 
        [tmp_name] => G:\Xampp\tmp\php9E9F.tmp 
        [error] => 0 
        [size] => 15391 ) )
    */

    $file_name = $_FILES['upload_data']['name'];
    $file_tmp_address = $_FILES['upload_data']['tmp_name'];
    $file_type = $_FILES['upload_data']['type'];

    if (file_exists('./upload_file')) {
        if (move_uploaded_file($file_tmp_address, "upload_file/" . $file_name)) {
            move_uploaded_file($file_tmp_address, "upload_file/" . $file_name);
            
            echo "Profile Pic Display....<br>";
            
            ?>
                <img src="./upload_file/<?php echo $file_name; ?>" alt="image1" srcset="" style="border-radius: 100%;">
            <?php

            echo "File Uploaded Successfully";
        } else {
            ?>
            <img src="./upload_file/dore.jpg" alt="image1" srcset="" style="border-radius: 100%;">
        <?php    
            echo "First Select File To Be Upload";
        }
    } else {
        $create = mkdir("./upload_file", 0777, true);
        echo "New Folder Create : $create";
    }
}else{
    ?>
        <img src="./upload_file/dore.jpg" alt="image1" srcset="" style="border-radius: 100%;">
    <?php    
}

?>

