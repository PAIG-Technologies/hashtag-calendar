<?php
    $front_page_id=get_option('page_on_front');
    $banner_image=has_post_thumbnail($front_page_id)?get_the_post_thumbnail_url($front_page_id):"https://www.hashtagportal.com/wp-content/uploads/1/2020/07/houses-scaled.jpg";
?>
<div style="height:275px;background: url(<?php echo $banner_image;?>)"
     class="relative background-center background-cover flex flex-wrap items-center justify-center">
    <div style="background-color:rgba(0,0,0,0.5) ;"
         class="absolute h-full w-full"></div>
</div>

