<?php
    $banner_text=isset($banner_text)?$banner_text:"Find Properties";
    $banner_btn_text=isset($banner_btn_text)?$banner_btn_text:"Browse Properties";
    $banner_image=isset($banner_image)?$banner_image:"https://www.hashtagportal.com/";
    $banner_url=isset($banner_url)&&!empty($banner_url)?$banner_url:get_site_url()."/search_properties/";
?>
<a href="<?php echo $banner_url?>" class="parallax flip-banner py-20"
   data-background="<?php echo $banner_image ?>"
   data-color="<?php echo getCustomThemeValue("primary_color", "#000000"); ?>"
   data-color-opacity="0"
   data-img-width="2500"
   data-background-size="cover"
   data-img-height="300"
   style="
           background-image: url(<?php echo $banner_image ?>);
           background-color: #dddddd;
           background-size:cover;
           backround-position:center;
           height:20em;"
>
    <div class="flip-banner-content">
        <h2 class="flip-visible"><?php echo $banner_text; ?></h2>
        <h2 class="flip-hidden"><i class="fa fa-home"></i>  <?php echo $banner_btn_text ?> <i class="sl sl-icon-arrow-right"></i></h2>
    </div>
</a>