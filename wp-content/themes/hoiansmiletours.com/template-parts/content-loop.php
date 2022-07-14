<?php
$new_bg = $args['new_bg']; // lấy giá trị biến được truyền qua tham số $args của hàm get_template_part
$is_circle = $args['is_circle']; // lấy giá trị biến được truyền qua tham số $args của hàm get_template_part
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="<?php echo $new_bg?> <?php echo $is_circle?>">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
</article>