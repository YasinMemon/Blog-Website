<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Form</title>
    <link rel="stylesheet" href="post.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
        $toastMessage = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['des'];

            if (isset($_FILES['img']) && $_FILES['img']['error'] == UPLOAD_ERR_OK) {
                $img = $_FILES['img'];
                $imgName = basename($img['name']);
                $imgPath = 'uploads/' . $imgName;

                if (move_uploaded_file($img['tmp_name'], $imgPath)) {
                    $toastMessage = 'Post created successfully with image!';
                } else {
                    $toastMessage = 'Failed to upload image.';
                }
            } else {
                $toastMessage = 'Post created successfully without image!';
            }
        }
    ?>

    <?php if ($toastMessage): ?>
        <div class="toast align-items-center text-bg-primary border-0 show" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 20px; right: 20px;">
            <div class="d-flex">
                <div class="toast-body">
                    <?php echo $toastMessage; ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    <?php endif; ?>

    <main class="container">
        <div class="back">
            <a href="index.php">
                <p class="lt">&lt;</p>
            </a>
        </div>
        <form action="./post.php" method="post" enctype="multipart/form-data">
            <label for="title">Title</label>
            <input name="title" type="text" required>
            <label for="des">Description</label>
            <textarea name="des" id="des" rows="6" cols="10" required></textarea>
            <label for="img">Image</label>
            <input type="file" id="img" name="img" accept="image/*">
            <button type="submit">Post</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
