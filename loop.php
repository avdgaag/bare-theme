<?php if(have_posts()): ?>

    <?php while(have_posts()): the_post(); include('partials/archived_post.php'); endwhile; ?>

<?php endif; ?>
