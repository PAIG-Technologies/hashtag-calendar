<!-- Fullwidth Section -->


<section class="fullwidth margin-top-0 offer-section py-24" data-background-color="#fff" id="what-we-do">
    <!-- Content -->

    <div class="container pt-10">

        <div class="row">
            <div class="col-md-12 col-sm-12">

                <!-- Icon Box -->
                <div class="content">
                    <p class="text-justify mb-0">
                        <?php
                        $post_id = get_option('page_on_front');
                        $about_content = get_post_meta($post_id, 'what_we_do_desc', true);
                        echo $about_content;
                        ?>
                    </p>

                </div>
            </div>

        </div>
    </div>
</section>