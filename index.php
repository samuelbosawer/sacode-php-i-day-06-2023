<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaCode - Berita</title>

    <!-- CDN Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- HEADER START -->
    <?php include('include/header.php'); ?>
    <!-- HEADER END -->


    <!-- NAV START -->
    <?php include('include/nav.php') ?>
    <!-- NAV END -->


    <!-- CONTENT START -->
    <?php
        // var_dump($_GET['page']);
    ?>
    <?php
    if(isset($_GET['kategori']))
    {
        include('pages/kategori.php');
    } else{
        include('pages/beranda.php');
    }
    ?>
    <!-- CONTENT END -->


    <!-- FOOTER START -->
    <?php include('include/footer.php') ?>
    <!-- FOOTER END -->
</body>
</html>