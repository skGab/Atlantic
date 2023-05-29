<?php
$current_page =  $_SERVER['REQUEST_URI'];
$root = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="description" content=""> -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
    <title>AtlanticHub</title>

    <!-- STYLE -->
    <link rel="stylesheet" href="/assets/css/compressed/style.min.css">

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- FONT-FAMALY -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet preload" as="style"> -->
</head>

<body>

    <!-- HEADER -->
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4">
                <figure class="mb-0">
                    <!-- <a class="navbar-brand" href="/"><img src="/assets/images/logo.svg" class="img-fluid" alt="Logo Maapi"></a> -->
                </figure>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == '/') ? 'active' : '' ?>" href="/">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main id="main">
        <!-- MAIN BANNER -->
        <section id="main_banner">
            <div class="container px-4">
                <div class="row">
                    <div class="col">
                    </div>
                </div>
            </div>
        </section>