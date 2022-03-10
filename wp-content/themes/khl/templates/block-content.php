          <div class="container my-2">

              <div class="row">

                  <div class="col mb-4">

                    <hr class="my-5">

                  </div>

              </div>

              <div class="row">

                  <div class="col-lg-12 text-center appear-animation" data-appear-animation="fadeInUpShorter">
                      <?php if(get_field('content_fields_title')):?>
                      <div class="heading heading-border heading-middle-border heading-middle-border-center heading-border-lg">

                          <h2 class="font-weight-normal"><?php the_field('content_fields_title'); ?></h2>

                      </div>
                      <?php endif;?>
                      <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                          <?php the_field('content_fields_content'); ?>
                      </p>

                  </div>

          </div>

      </div>