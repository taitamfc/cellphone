<div class="product-container product-right-sidebar">
    <div class="product-main">
		<div class="detail-product__box-name">
			<div class="row mb-0 content-row">
				<div class="col large-12 no-padding-bottom">
					<div class="cps-container">
						<!-- name product -->
						<div class="box-name__box-product-name">
							<?php woocommerce_template_single_title();?>
						</div>
						<!-- end name product -->

						<!-- raiting  -->
						<div class="box-name__box-raiting">
							<?php woocommerce_template_single_rating();?>
						</div>
						<!-- end raiting  -->

						<!-- like box -->
						<div class="box-info__box-social">

						</div>
						<!-- end like box -->
					</div>
					
				</div>
			</div>
		</div>
		
        <div class="row mb-0 content-row">
            <div class="product-gallery large-<?php echo flatsome_option('product_image_width'); ?> col">
                <?php
				/**
				 * woocommerce_before_single_product_summary hook
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
			?>
            </div>

            <div
                class="product-info summary col-fit col-divided col entry-summary <?php flatsome_product_summary_classes();?>">

                <?php
					/**
					 * woocommerce_single_product_summary hook
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 */
					do_action( 'woocommerce_single_product_summary' );
				?>

            </div>

            <div id="product-sidebar" class="col large-3 hide-for-medium <?php flatsome_sidebar_classes(); ?>">
                <?php
					do_action('flatsome_before_product_sidebar');
					/**
					 * woocommerce_sidebar hook
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
				?>
				<div class="box-warranty-info">
					<div class="box-title">
						<p class="box-title__title">Thông tin máy</p>
					</div>
					<div class="box-content">
						<div class="warranty-info">
							<div class="item-warranty-info">
								<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50"><title>mb</title><image width="35" height="50" transform="translate(7.5)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAyCAYAAADWU2JnAAAABHNCSVQICAgIfAhkiAAAAWRJREFUWEftmcFNw0AQRf+sG6ADoAJCBUAHlJDL7hW7ApIOcrS8PpgKKAHTQaiAlOBcfdhBIxHJRgFpbWT7MHuLtM78efu0hx0CAOfcM4A1gCv5PdVi5oaIamNMluf5gZxzGwASZrbFzHvv/a2E+ZyayLmuQwgPEoZnQ9IvnC0pzHbRYbIQwn6qYzPG7ADcfNfrkxGJyrKspwpjra2J6E7D/CSuZH5zUMkomdj7SZ1RZ9SZWALqTCwxvWfUGXUmloA6E0tM7xl1Rp2JJaDOxBL7855h5hTAZC9XAHZEtDr7WBTb2T/vX/YDY2yzL23bplVVNc65RwCvsX/Q2T+KzLEoiotucWutOPA0MNDwMMz87r2/7xYeOYcYHkZCGGOuZRpyCmStfSOiXsAISluy1h6I6DLio+5WCbIJITTGGBkRiTeD1mmQMfuIB8BHURQrkjbkrJl5PYLQIBoAjsxcJ0mSynF/AXY82KKEipF6AAAAAElFTkSuQmCC"></image></svg>
								<p>Nguyên hộp, đầy đủ phụ kiện từ nhà sản xuất</p>
							</div>
							<div class="item-warranty-info">
								<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50"><title>bh</title><image width="50" height="50" xlink:href="data:image/png;base64,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"></image></svg>
								<p>Bảo hành 12 tháng tại trung tâm bảo hành chính hãng Apple Việt Nam. 1 ĐỔI 1 trong 30 ngày nếu có lỗi phần cứng nhà sản xuất. &nbsp;<a href="https://cellphones.com.vn/chinh-sach-bao-hanh" style="color: red">(xem chi tiết)</a></p>
							</div>
						</div>
					</div>
				</div>
            </div>

        </div>
    </div>

    <div class="product-footer">
        <div class="container">
            <?php
				/**
				 * woocommerce_after_single_product_summary hook
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action( 'woocommerce_after_single_product_summary' );
			?>
        </div>
    </div>
</div>