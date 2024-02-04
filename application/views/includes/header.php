<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== FAVICON ===============-->
   <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/x-icon">

   <!--=============== REMIXICONS ===============-->
   <link href="<?= base_url('assets/remixicon/remixicon.css'); ?>" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="<?= base_url('assets/css/swiper.css'); ?>" />
   <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

   <title><?= WEBSITE_TITLE_PREFIX ?> <?= $title ?></title>

</head>

<body>
   <!--==================== HEADER ====================-->
   <header class="header" id="header">
      <nav class="nav container">
         <a href="#" class="nav__logo">
            Indian Tour&Travels
         </a>
         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <li class="nav__item">
                  <a href="<?= base_url('home'); ?>" class="nav__link">Home</a>
               </li>
               <li class="nav__item">
                  <a href="<?= base_url('packagedetails'); ?>" class="nav__link">Packages</a>
               </li>
               <li class="nav__item">
                  <a href="<?= base_url('about'); ?>" class="nav__link">About</a>
               </li>
               <li class="nav__item">
                  <a href="<?= base_url('Contact'); ?>" class="nav__link">Contact US</a>
               </li>
            </ul>

            <!-- Close button -->
            <div class="nav__close" id="nav-close">
               <i class="ri-close-line"></i>
            </div>
         </div>

         <!-- Toggle button -->
         <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-fill"></i>
         </div>
      </nav>

   </header>