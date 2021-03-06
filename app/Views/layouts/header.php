<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS FILE -->
    <link href="<?= css_url('templates/header') ?>" type="text/css" rel="stylesheet" />
    <link href="<?= css_url('front/accueil') ?>" type="text/css" rel="stylesheet" />
    <link href="<?= css_url('templates/footer') ?>" type="text/css" rel="stylesheet" />
    <title>Portfolio</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dar bg-dark fixed-top nav">
        <div class="container-fluid">
            <a class="navbar-brand text-white ms-3" href="#">Julian <span class="text-muted">| Portfolio</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="menu-icon">
                    <div class="icon_span"></div>
                    <svg x="0" y="0" width="40px" height="40px" viewBox="0 0 54 54">
                        <path d="M16.500,27.000 C16.500,27.000 24.939,27.000 38.500,27.000 C52.061,27.000 49.945,15.648 46.510,11.367 C41.928,5.656 34.891,2.000 27.000,2.000 C13.193,2.000 2.000,13.193 2.000,27.000 C2.000,40.807 13.193,52.000 27.000,52.000 C40.807,52.000 52.000,40.807 52.000,27.000 C52.000,13.000 40.837,2.000 27.000,2.000"></path>
                    </svg>
                </div>
            </button>
            <div class="collapse navbar-collapse justify-content-end me-5-md" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-secondary hover-white" aria-current="page" href="#"><i class="bi bi-file-earmark-person"></i>A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary hover-white" href="#"><i class="bi bi-braces"></i>Mes projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary hover-white" href="#"><i class="bi bi-mortarboard"></i>Dipl??mes / Certificats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary hover-white" href="#"><i class="bi bi-envelope"></i>Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>