<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memon-Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <head>
        <div class="header">
            <h1>MEMON</h1>
            <a href="post.php"><button>Create Post</button></a>
        </div>
        <nav>
            <ul class="options">
                <li>Home</li>
                <li>About</li>
                <li>Article</li>
                <li>Contact us</li>
                <div class="line"></div>
            </ul>
        </nav>
    </head>
    <main>

    </main>
    <section class="blogCards">
        <?php
            for($i=0;$i<27;$i++){
                echo "<a href=\"blog.html\"><div class=\"card\">";
                echo "<img class=\"cover\" src=\"demo.jpg\">";
                echo "<h1 class=\"blogTitle\">Blog title</h1>";
                echo "<p class=\"blogDes\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nostrum eligendi eveniet pariatur voluptates fuga quidem quod, qui nobis quibusdam unde, sapiente laudantium totam....</p>";
               echo  "</div> </a>";
               
            }
        ?> 
        </div>
    </section>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 px-6 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">© 2024 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>