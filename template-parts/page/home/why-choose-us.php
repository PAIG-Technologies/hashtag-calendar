<?php
    $post_id = get_option('page_on_front');
    $service_arr=getServiceMetaValues($post_id);
?>
<section class="why-choose-us py-24" id="why-choose-us">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="section-title pb-10">
                    <h4>Why Choose Us</h4>
                </div>
            </div>
        </div>
        <div class="row flex flex-wrap">
            <?php
            $i = 0;
            foreach ($service_arr as $service) :
               if($i<3):
                ?>
                <div class="md:w-1/3 w-full p-5 flex">
                    <!-- Single Service -->
                    <div class="single-service w-full">
                        <i class="<?php echo $service['iconClass']; ?>"></i>
                        <h4><?php echo isset($service['title']) ? $service['title'] : ""; ?> </h4>
                        <p><?php echo isset($service['content']) ? $service['content'] : ""; ?></p>
                    </div>
                </div>

            <?php $i++; endif; endforeach; ?>
        </div>
    </div>
</section>