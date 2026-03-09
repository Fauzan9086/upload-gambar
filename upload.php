<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Gambar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="p-4">
    <div class="container">
        <h2 class="mb-4">Upload Gambar</h2>

        <form action="proses-upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="gambar" class="form-label">Pilih Gambar</label>
                <input class="form-control" type="file" id="gambar" name="gambar" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

    </div>
</body>

</html>