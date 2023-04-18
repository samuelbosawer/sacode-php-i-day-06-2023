<section class="border border-gray-600 container mx-auto p-6">
    <?php
    if(isset($_GET['kategori']))
    {
        $judul = $_GET['kategori']  ;
    }
    ?>
        <h1 class="text-4xl">Kategori <?= $judul?> </h1>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore quae quas dolorum eveniet molestias sed deleniti dolore expedita, aliquid tenetur?
        </p>
</section>