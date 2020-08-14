<?php
$post_id = get_option('page_on_front');
$offer_arr = getOfferMetaValues($post_id);
$i = 0;
$class_name = "col-md-4";
?>
<?php if(is_array($offer_arr)): ?>
<!-- Fullwidth Section -->
<section class="fullwidth margin-top-0 offer-section why-choose-us py-24" data-background-color="#ffffff" id="what-we-offer">
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="section-title pb-10">
                    <h4>What We Offer</h4>
                </div>
            </div>
        </div>
        <div class="row">

            <?php foreach ($offer_arr as $index => $offer):
                if ($i !== 0 && $i < 3) {
                    $class_name = "col-md-8";
                } else if ($i <= 4) {
                    $class_name = "col-md-4";
                }
                $i == 4 ? $i = 1 : $i++;
//                var_dump($offer["url"]);
                $offer["url"]=!empty($offer["url"])?$offer["url"]:get_site_url()."/search_properties";
                ?>
                <div class="<?php echo $class_name ?>">
                    <!-- Image Box -->
                    <a href="<?php echo $offer["url"] ?>" class="img-box" data-background-image="<?php echo $offer['icon']; ?>">
                        <!-- Badge -->
                        <div class="img-box-content visible">
                            <h4><?php echo $offer['title']; ?></h4>
                        </div>
                    </a>

                </div>

            <?php endforeach; ?>


        </div>
    </div>
</section>
<?php endif; ?>