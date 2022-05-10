<?php get_header() ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>

    <?php endwhile; ?>

<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>



<?php get_footer() ?>