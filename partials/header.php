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
    <link rel="shortcut icon" href="/assets/icons/fav-icon.png" type="image/x-icon">
    <title>Atlantic Hub</title>

    <!-- BOOTSTRAP 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- STYLE -->
    <link rel="stylesheet" href="/assets/css/compressed/style.min.css">
</head>

<body>
    <!-- HEADER -->
    <header id="cotacao" class="bg-secondary">
        <div class="container px-4">
            <div class="row">
                <div class="col">
                    <strong>
                        € Cotação
                    </strong>
                    R$5,56489
                </div>

                <div class="col">
                    <button>
                        <strong>
                            Horário de Lisboa
                        </strong>
                        14:50
                    </button>
                </div>
            </div>
        </div>
    </header>

    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4">
                <figure class="mb-0">
                    <a class="navbar-brand" href="/"><img src="/assets/images/atlantic_logo.png" class="img-fluid" alt="Logo Atlantic Hub"></a>
                </figure>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == '/') ? 'active' : '' ?>" href="/">Home</a>
                            <a class="nav-link <?php echo ($current_page == '/pages/quem-somos.php') ? 'active' : '' ?>" href="/pages/quem-somos.php">Quem Somos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main id="main">