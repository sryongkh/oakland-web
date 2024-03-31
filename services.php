<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="services" data-barba="container" data-barba-namespace="home">
    <section data-section="service-hero" class="header black">
        <div class="container">
            <div class="contxt">
                <h2 class="fluid-heading-1">Services</h2>
                <p class="fluid-body">Discover our comprehensive range of services tailored to meet your<br />energy efficiency, LED lighting, photovoltaic energy, and much more.</p>
            </div>
        </div>
    </section>
    <section data-section="accordion">
        <button class="accordion">
            <p>Illumination</p>
            <i class="ic ic-arrw-down"></i>
        </button>
        <!-- <div class="panel">
            <p>Lorem Ipsum</p>
        </div> -->
        <button class="accordion">
            <p>Sustainable Energy</p>
            <i class="ic ic-arrw-down"></i>
        </button>
        <!-- <div class="panel">
            <p>Lorem Ipsum</p>
        </div> -->
        <button class="accordion">
            <p>Electric Mobility</p>
            <i class="ic ic-arrw-down"></i>
        </button>
        <!-- <div class="panel">
            <p>Lorem Ipsum</p>
        </div> -->
        <button class="accordion">
            <p>Consulting</p>
            <i class="ic ic-arrw-down"></i>
        </button>
        <!-- <div class="panel">
            <p>Lorem Ipsum</p>
        </div> -->
    </section>
    <section data-section="content" class="services">
        <div class="img-container">
            <p>Sustainable energy consulting<br />
                Portugal. 2023</p>
            <figure>
                <img src="<?php $root; ?>assets/media/service.png" alt="">
            </figure>
        </div>
    </section>
    <section data-section="left-contxt" class="services">
        <div class="view-port">
            <h2 class="fluid-heading-2">Proudly helping businesses</h2>
            <p class="fluid-body">Explore our portfolio of remarkable projects where innovation and sustainability converge. Discover how we've transformed energy landscapes and elevated standards in the industry.</p>
            <a href="portfolio.php" class="btn-2">View our Portfolio</a>
        </div>
    </section>
</main>
<?php include($root . "footer.php"); ?>