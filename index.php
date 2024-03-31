<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main data-barba="container" data-barba-namespace="home">
  <section data-section="home-hero">
    <div class="container">
      <div class="contxt">
        <h2 class="fluid-heading-1">redefining<br />energy</h2>
        <p class="fluid-body">As market leaders for 20 years, we are experts in energy efficiency, providing tailored, concrete solutions to meet your needs.</p>
        <a href="<?php $root; ?>portfolio.php" class="btn fluid-txt">View our Portfolio</a>
      </div>
    </div>
    <div class="hero-img">
      <figure>
        <img src="<?php $root; ?>assets/media/banner-1.png" alt="">
      </figure>
    </div>
  </section>
  <section data-section="home-expertise">
    <h2 class="fluid-heading-2">Areas of Expertise</h2>
    <p class="fluid-body">Whether for small or large-scale projects, we are committed to delivering cutting-edge results, contributing to a more sustainable and innovative energy future.</p>
    <div class="scrolling-ctn">
      <div class="grid-expertise">
        <?php for ($i = 0; $i < 4; $i++) : ?>
          <div class="expertise-item">
            <figure>
              <img src="<?php $root; ?>assets/media/slide-<?php echo $i + 1 ?>.png" alt="Our Expertise">
            </figure>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </section>
  <section data-section="left-contxt">
    <p class="fluid-body">Leading the market for two decades, we have been experts in energy efficiency. With an unwavering commitment to innovation, we offer tailored solutions for projects of all sizes. From LED lighting to photovoltaic energy and electric mobility, our dedicated team works tirelessly to deliver cutting-edge results. We are committed to shaping a more sustainable and efficient energy future.</p>
    <div class="learnmore-section">
      <div class="wrapper">
        <img src="<?php $root; ?>assets/media/section-desc.png" alt="">
        <div class="context">
          <h2 class="fluid-heading-2">Deep knowledge in the field</h2>
          <p class="fluid-body">Our extensive experience and deep expertise in the energy sector have positioned us as leaders in the industry. With two decades of market leadership, we have honed our knowledge in energy efficiency, LED lighting, photovoltaic energy, and electric mobility to a level that sets us apart. Our team's profound understanding of these domains enables us to provide innovative, tailored solutions that not only meet but exceed the expectations of our clients.</p>
          <a href="btn-2">Learn more</a>
        </div>
      </div>

    </div>
    <div class="get-in-touch">
      <h2 class="fluid-heading-2">Get in touch with us</h2>
      <p class="fluid-body">If you're ready to explore how our expertise in energy efficiency, LED lighting, photovoltaic energy, and electric mobility can benefit your projects, don't hesitate to reach out. We're here to listen, collaborate, and provide you with tailored solutions that align with your specific needs and goals.</p>
      <a href="contact.php" class="btn-2">Contact us</a>
    </div>
  </section>
</main>
<?php include($root . "footer.php"); ?>