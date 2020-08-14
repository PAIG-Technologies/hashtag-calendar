<?php
$post_id = get_option('page_on_front');
$offer_arr = getOfferMetaValues($post_id);

?>
<!-- Fullwidth Section -->
<section class="fullwidth margin-top-0 offer-section why-choose-us py-24"  id="what-we-offer">
    <!-- Box Headline -->
    <!-- Content -->
    <div class="container">

        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="section-title pb-10">
                    <h4>What We Offer</h4>
                </div>
            </div>
        </div>

        <div class="row flex flex-wrap">
            <?php foreach ($offer_arr as $offer) : ?>

                <div class="md:w-1/3 w-full flex">
                    <!-- Icon Box -->
                    <div class="icon-box-1 w-full">
                        <?php if (!empty($offer['iconClass'])): ?>
                            <div class="icon-container">
                                <i class="<?php echo $offer['iconClass']; ?>"></i>

                            </div>

                        <?php endif; ?>
                        <h3><?php echo isset($offer['title']) ? $offer['title'] : ""; ?></h3>
                        <p><?php echo isset($offer['content']) ? $offer['content'] : ""; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Fullwidth Section / End -->