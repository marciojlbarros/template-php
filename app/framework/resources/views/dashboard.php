<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/global.css">
    <?php $this->section('css'); ?>  <!-- Referência do CSS Global -->
    <title><?php echo $title; ?></title>
</head>
<body>
<section class="container-dashboard">
        <aside class="container-aside" id="container-aside">    
            <?php require 'partials/sidebar.php'; ?>
        </aside>

        <section class="container-section-principal">
            <i data-feather="menu" id="menuMobile"></i>
            <article class="container-section-principal-header">
                <?php require 'partials/header.php'; ?>
            </article>

            <main class="container-section-principal-content">
                <?php echo $this->load(); ?>
            </main>

        </section>
    </section>
</body>
</html>