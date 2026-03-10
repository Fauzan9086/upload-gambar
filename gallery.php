<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gallery Foto</title>
</head>

<body class="p-4">
    <div class="container">
        <h2 class="mb-4">Gallery Foto</h2>
        <?php
        if (isset($_GET['upload'])) {
            ?>
            <div class="alert alert-success">
                File berhasil diupload.
            </div>
            <?php
        }
        ?>
        <form action="upload.php">
            <button type="submit" class="btn btn-info mb-4">Upload Gambar</button>
        </form>
        <div class="row">
            <?php
            // tampilkan semua gambar dari folder uploads
            $_FILES = scandir('uploads');
            foreach ($_FILES as $file) {
                if ($file !== '.' && $file !== '..') {
                    echo "
                    <div class='col-md-3 mb-4'>
                    <img src='uploads/$file' class='img-fluid rounded shadow'>  
                    </div>";
                }
            }

            ?>

        </div>
    </div>
</body>

</html>