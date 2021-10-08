<?php get_header() ?>
    <div class="container mt-5">
        <main class="row" id="home">
            <section class="col-12">
                <?php while(have_posts()): the_post() ?>
                    <h1><?php the_title() ?></h1>
                    <p><?php the_content() ?></p>
                <?php endwhile ?>
            </section>
        </main>
    </div>
<?php get_footer() ?>