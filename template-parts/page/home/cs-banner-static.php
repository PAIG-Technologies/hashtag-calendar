<?php
$banner_text=isset($banner_text)?$banner_text:"Find Properties";
$banner_btn_text=isset($banner_btn_text)?$banner_btn_text:"Browse Properties";
$banner_image=isset($banner_image)?$banner_image:"https://www.hashtagportal.com/";
$banner_url=isset($banner_url)&&!empty($banner_url)?$banner_url:get_site_url()."/search_properties/";
$primary_color= getCustomThemeValue("primary_color", "#000000");
?>
<style>
    .z-999{
        z-index:999;
    }
    .absolute-center {
        width: 50%;
        height: 50%;
        overflow: auto;
        margin: auto;
        position: absolute;
        top: 0; left: 0; bottom: 0; right: 0;
    }
</style>
<a href="<?php echo $banner_url?>" class=" flip-banner py-20"
   data-background="<?php echo $banner_image ?>"
   data-color="<?php echo $primary_color; ?>"
   data-color-opacity="0"
   data-img-width="2500"
   data-background-size="cover"
   data-img-height="300"
   style="
        background-image: url(<?php echo $banner_image ?>);
        background-color: #ddd;
        background-size:cover;
        background-position:center;
        height:20em;"
>
    <div class="absolute z-999 absolute-center flex flex-wrap items-center justify-center">
        <button class="text-white btn-paig px-5 py-5" style="background-color:<?php echo $primary_color ?>">
          <i class="fa fa-home"></i>  <?php echo $banner_btn_text; ?>
        </button>
    </div>
</a>