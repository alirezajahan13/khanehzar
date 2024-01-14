<a href="<?php echo get_the_permalink()?>" id="post-<?php the_ID()?>"  class="projectArchiveBoxContainer">
    <?php the_post_thumbnail();?>
    <div class="projectCard">
        <h4><?php echo get_the_title();?></h4>
    </div> 
</a>