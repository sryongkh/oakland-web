<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main data-barba="container" data-barba-namespace="home">
    <section data-section="contact-hero" class="header light">
        <div class="container">
            <div class="contxt">
                <h2 class="fluid-heading-1">Contact us</h2>
                <p class="fluid-body">Our team is here to assist you on your journey towards a sustainable
                    <br />and efficient energy future.
                </p>
            </div>
        </div>
    </section>
    <section data-section="contact-content">
        <div class="content">
            <div class="info">
                <div class="location">
                    <h2 class="fluid-heading-2">Location</h2>
                    <p>Avenida Marta Lopes, Nº2<br />
                        8400-401 Vila Real, Portugal</p>
                </div>
                <div class="opening">
                    <h2 class="fluid-heading-2">Open hours</h2>
                    <p>Weekdays - 9:00am to 6:00pm<br />
                        Weekends - Closed</p>
                </div>
            </div>
            <div class="form">
                <h2 class="fluid-heading-2">Form</h2>
                <div class="row">
                    <input type="text" placeholder="Name" />
                    <input type="text" placeholder="Email" />
                </div>
                <div class="row">
                    <input type="text" placeholder="Phone number" />
                    <input type="text" placeholder="Company (optional)" />
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                <label class="container row checkbox">
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    <p>I consent to Oakland C.E. processing my data for contact purposes.</p>
                </label>
                <button class="btn black">Send</button>
            </div>
        </div>
        <div class="map-container">
            <figure><img src="<?php $root; ?>assets/media/map.png" alt=""></figure>
            <figure><img src="<?php $root; ?>assets/media/section-desc.png" alt=""></figure>
        </div>
    </section>
</main>
<?php include($root . "footer.php"); ?>