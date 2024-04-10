<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'WineShoop' ?></title>


    <link rel="stylesheet" href="<?= base_url('assets/css/homecopy.css') ?>" media="all" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>" media="all" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="<?= base_url('assets/js/bootstrap.js') ?>" media="all" onload="if(media!='all')media='all'">
    <link rel="stylesheet" href="https://wl-apps.yourwebsite.life/social-icons/1.0.24/components/SocialIcons/ssr.css">


</head>

<?= $this->include('templates/header.php') ?>



<body>
    <?= $this->renderSection('content') ?>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-r8prmqEX9GpJDAZuCgiGcnhYVXD0ZbOpv3Qu3QhEGOJ+9mFfd9lrF/8sEIQt5nQz" crossorigin="anonymous"></script>
    <!-- Your custom scripts -->
    <script src="<?php echo base_url('public/assets/js/bootstrap.js') ?>"></script>

    <?= $this->extends('templates/footer.php') ?>

</body>
</html>