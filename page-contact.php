<?php
get_header(); ?>

<main class="page-contact">
    <section class="hero">
        <div class="container">
            <h1 class="section-title">
                Drop me a message
                <span class="watermark">Have a project?</span>
            </h1>
        </div>
    </section>

    <section class="contact-form">
        <div class="container">
            <?php echo do_shortcode('[ninja_form id=3]'); ?>
        </div>
	</section>
</main>

<?php
get_footer();