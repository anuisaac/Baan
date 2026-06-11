
<!doctype html>

<html lang="en">

<head>

    <title>Baan</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/app.css" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light pl-5" >

        <img src="/images/logo.webp" height= "20px" width=""20px />
    <a class="navbar-brand font-14 pl-1" href="/post" style="color:#e9d5ff;">Baan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link font-14" href="/" style="color:white">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link font-14" href="/about" style="color:white">About</a>
        </li>
        </ul>
    </div>
    </nav>
   
    <?php echo $slot ?>

    <footer class="footer">
        <p class="font-14 mt-4 text-center p-2">Powered by Laravel</p>
    </footer>

</body>

</html>