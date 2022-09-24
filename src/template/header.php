<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>base</title>

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="assets/ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/ico/favicon-16x16.png" sizes="16x16" />

    <!-- Misc -->
    <meta name="theme-color" content="#36a3f7">

    <!-- Removes iOS format detection -->
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="date=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="format-detection" content="email=no" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./assets/css/app.min.css">
</head>

<body>

<?php
    $menu_items = array(
        "Item do menu",
        "Item do menu",
        "Item do menu",
        "Item do menu",
    );
?>

<header class="main-header-bundle">
    <div class="main-header js-get-main-header-height">
        <div class="container">
        <div class="desktop-menu">
            <div class="container">
                <h1 class="main-header__logo-container">
                    <span class="hide-text">Base</span>
                    <a href="/">
                        <img class="main-header__logo" src="./assets/images/logo.webp" alt="">
                    </a>
                </h1>
                <div class="header-content">
                <nav class="menu-container">
                        <ul class="list-style-remove menu-container__listing">
                            <li><a href="#">Sobre nós</a></li>
                            <li><a href="#">Fale conosco</a></li>
                            <li>
                                <a href="#">Para você</a>
                                <i class="fas fa-chevron-down js-open-submenu-mobile"></i>
                                <ul class="submenu">
                                    <li><a href="#">Opção 1</a></li>
                                    <li><a href="#">Opção 2</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Para o seu negócio</a></li>
                            <li>
                                <a href="#">Artigos</a>
                                <i class="fas fa-chevron-down js-open-submenu-mobile"></i>
                                <ul class="submenu">
                                    <li><a href="#">Opção 1</a></li>
                                    <li><a href="#">Opção 2</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                    <li><a href="#">Opção 3</a></li>
                                </ul>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>
        </div>

        <div class="mobile-menu">
            <h1 class="mobile-logo">
                <span class="hide-text">Base</span>
                <a href="/">
                    <img class="mobile-logo-img" src="./assets/images/index-logo.webp" alt="">
                </a>
            </h1>
            <div class="main-header__mobile-controls">
                <div class="burger-icon-container js-main-menu-mobile-toggle is-animated">
                    <div class="burger-icon primary"></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</header>

<div class="clearance --main-header"></div>
<div class="main-header-clearance"></div>

<?php include 'template-parts/main-menu-mobile.php'; ?>
