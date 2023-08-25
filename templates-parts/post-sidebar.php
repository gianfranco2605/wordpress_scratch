<a href="<?php the_permalink() ?>">
    <div class="text-center card m-2 shadow border" style="max-width: 280px; min-width: 280px">
        <div class="d-flex align-items-center">
            <div style="flex: 1">
                <?php the_post_thumbnail('post-preview-small') ?>
            </div>
            <div class="card-body" style="flex: 1">
            <h6 class="card-title"><?php the_title() ?></h6> 
            
            </div>
        </div>
    </div>
</a>