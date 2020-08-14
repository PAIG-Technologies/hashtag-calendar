<?php
    $front_page_id=get_option('page_on_front');
    $banner_image=has_post_thumbnail($front_page_id)?get_the_post_thumbnail_url($front_page_id):"https://www.hashtagportal.com/wp-content/uploads/1/2020/07/houses-scaled.jpg";
?>
<div class="parallax" data-background="<?php echo $banner_image;?>"
     data-color="#36383e"
     data-color-opacity="0.45"
     data-img-width="2500"
     data-img-height="1600"
     style="height:200px;"
>
</div>

