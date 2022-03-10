<?php 
$logos = get_field('logos');
if($logos):?>
			<div class="container">

					<div class="row py-5 my-5">

						<div class="col">

					

							<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<?php foreach($logos as $logo):?>
								<div>
									<?php if($logo['link']):?>
									<a href="<?php echo $logo['link']; ?>"><img class="img-fluid opacity-2" src="<?php echo $logo['image']; ?>" alt=""></a>
									<?php else:?>
									<img class="img-fluid opacity-2" src="<?php echo $logo['image']; ?>" alt="">
									<?php endif;?>
								</div>
								<?php endforeach;?>

							</div>

							

						</div>

					</div>

				</div>
<?php endif;?>