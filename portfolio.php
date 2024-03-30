<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main>
    <section data-section="port-hero" class="header">
        <div class="container">
            <div class="contxt">
                <h2 class="fluid-heading-1">Portfolio</h2>
                <p class="fluid-body">Explore our portfolio of remarkable projects where innovation and<br />sustainability converge.</p>
            </div>
        </div>
    </section>
    <section data-section="portfolio-info">
        <div class="container">
            <h2 class="fluid-heading-2">The distinction that sets us Apart in the industry</h2>
            <p class="fluid-body">In a highly competitive industry, what distinguishes a company is not just its offerings but its unwavering commitment to excellence and innovation. At Oakland C.E., we understand that to rise above the competition, we must constantly strive for distinction in every aspect of our business. Our journey in the energy sector has been defined by innovation and expertise.</p>
            <div class="iconlist">
                <div class="iconitem">
                    <div class="icon-ctn">
                        <i class="ic ic-graph"></i>
                    </div>
                    <p class="fluid-heading-3">Inovation</p>
                </div>
                <div class="iconitem">
                    <div class="icon-ctn">
                        <i class="ic ic-people"></i>
                    </div>
                    <p class="fluid-heading-3">Expertise</p>
                </div>
                <div class="iconitem">
                    <div class="icon-ctn">
                        <i class="ic ic-star"></i>
                    </div>
                    <p class="fluid-heading-3">Quality</p>
                </div>
            </div>
        </div>
    </section>
    <section data-section="portfolio-list">
        <div class="filter-tab">
            <button class="btn tab active">All</button>
            <button class="btn tab">LED Lighting</button>
            <button class="btn tab">Energy Efficiency</button>
            <button class="btn tab">Electric Mobility</button>
        </div>
        <div class="tab-content">
            <a href="#" class="port-item">
                <figure>
                    <img src="<?php $root; ?>assets/media/item-1.png" alt="">
                </figure>
                <div>
                    <p class="fluid-body">Delloite Building, London</p>
                    <p class="fluid-label">Energy Efficiency, LED Lighting</p>
                </div>
            </a>
            <a href="#" class="port-item">
                <figure>
                    <img src="<?php $root; ?>assets/media/item-1.png" alt="">
                </figure>
                <div>
                    <p class="fluid-body">Delloite Building, London</p>
                    <p class="fluid-label">Energy Efficiency, LED Lighting</p>
                </div>
            </a>
            <a href="#" class="port-item">
                <figure>
                    <img src="<?php $root; ?>assets/media/item-1.png" alt="">
                </figure>
                <div>
                    <p class="fluid-body">Delloite Building, London</p>
                    <p class="fluid-label">Energy Efficiency, LED Lighting</p>
                </div>
            </a>
            <a href="#" class="port-item">
                <figure>
                    <img src="<?php $root; ?>assets/media/item-1.png" alt="">
                </figure>
                <div>
                    <p class="fluid-body">Delloite Building, London</p>
                    <p class="fluid-label">Energy Efficiency, LED Lighting</p>
                </div>
            </a>
        </div>
    </section>
    <section data-section="left-contxt">
        <div class="get-in-touch">
            <h2 class="fluid-heading-2">Get in touch with us</h2>
            <p class="fluid-body">If you're ready to explore how our expertise in energy efficiency, LED lighting, photovoltaic energy, and electric mobility can benefit your projects, don't hesitate to reach out. We're here to listen, collaborate, and provide you with tailored solutions that align with your specific needs and goals.</p>
            <a href="contact.php" class="btn-2">Contact us</a>
        </div>
    </section>
</main>
<?php include($root . "footer.php"); ?>