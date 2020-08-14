<?php
$post_id=get_option('page_on_front');
if(has_post_thumbnail(get_the_ID())){
    $post_id=get_the_ID();
}
$banner_image=has_post_thumbnail($post_id)?get_the_post_thumbnail_url($post_id):"https://www.hashtagportal.com/wp-content/uploads/1/2020/07/houses-scaled.jpg";
?>

<div style="height:275px;background: url(<?php echo $banner_image;?>)"
     class="relative background-center background-cover flex flex-wrap items-center justify-center">
    <div style="background-color:rgba(0,0,0,0.5) ;"
         class="absolute h-full w-full"></div>
    <div class="parallax-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-white"><?php  the_title(); ?></h1>
                </div>
            </div>
        </div>

    </div>
</div>
