<?php get_header();
get_template_part("pic") ;
?>

<div id="content" class="content_out <?php if(get_option('mytheme_big_pic_nav_m')||get_option('mytheme_big_pic_nav_m')){echo "content_top";} ?>">
     <?php dynamic_sidebar('index_content');?>
 </div>
<?php get_footer(); ?>
