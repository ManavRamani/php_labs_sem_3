<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Upload Multiple Images</h2>
        <form action="" method="post" enctype="multipart/form-data" class="mb-4">
            <div class="form-group">
                <input type="file" class="form-control-file" name="upload_data[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="submit">Upload Files</button>
        </form>

        <!-- Uploaded Images Section -->
        <div class="row mt-4" id="uploaded-images">
            <?php
            if (isset($_FILES['upload_data'])) {
                $file_names = $_FILES['upload_data']['name'];
                $file_tmp_addresses = $_FILES['upload_data']['tmp_name'];

                if (!file_exists('./upload_file')) {
                    mkdir("./upload_file", 0777, true);
                    echo "<div class='alert alert-success col-12'>New Folder Created</div>";
                }

                foreach ($file_names as $index => $file_name) {
                    $file_tmp_address = $file_tmp_addresses[$index];
                    if (move_uploaded_file($file_tmp_address, "upload_file/" . $file_name)) {
                        echo "<div class='col-md-4'>
                                <div class='card mb-4'>
                                    <img class='card-img-top w-100' src='upload_file/$file_name' alt='$file_name' style='height: 350px; object-fit: fill;'>
                                    <div class='card-body'>
                                        <p class='card-text text-center'>$file_name</p>
                                    </div>
                                </div>
                              </div>";
                    } else {
                        echo "<div class='alert alert-danger coll-12'>Error uploading $file_name</div>";
                    }
                }
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>