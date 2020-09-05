<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <button>Submit</button>
</form>

<?php
$folder = 'uploadedImages';
$tryUpload = true;
$img = $_FILES['image'];
$fileType = trim((pathinfo($img['name'], PATHINFO_EXTENSION)));
if (isset($_FILES['image'])) {
    if ($img['size'] < 1024000) {
        $tryUpload = true;

    } else {
        $tryUpload = false;
        echo 'File needs to be 1MB max!', '<br>';
    }

    if ($fileType != 'jpg' && $img['name'] != '.jpeg' && $img['name'] != '.png') {
        $tryUpload = false;
        echo 'Only .jpg, .jpeg, .png types are allowed', '<br>';
    } else {
        $tryUpload = true;

    }

    if ($tryUpload == false) {
        echo 'File not uploaded';
    } else {
        move_uploaded_file($img['tmp_name'], $folder . DIRECTORY_SEPARATOR . $img['name']);
        echo 'File successfully uploaded!';
    }
}
// var_dump($_FILES['image']);
