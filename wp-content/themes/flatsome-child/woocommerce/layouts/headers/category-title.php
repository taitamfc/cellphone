<?php
	$sub_product_cats = false;
    $term_id  = get_queried_object_id();
    if( isset( $_GET['really_curr_tax'] ) ){
        $term_id  = $_GET['really_curr_tax'];
        $term_id  = current( explode('-',$term_id) );
    }
    $taxonomy = 'product_cat';
    // Get subcategories of the current category
    $sub_product_cats    = get_terms([
        'taxonomy'    => $taxonomy,
        'hide_empty'  => true,
        'parent'      => $term_id
    ]);
?>
<div class="shop-page-title category-page-title page-title <?php flatsome_header_title_classes() ?>">
    <div class="block-breadcrumbs container">
        <?php do_action('flatsome_category_title') ;?>
    </div>
</div>
<div class="category-banner">
    <?php echo do_shortcode('[block id="category-header"]');?>
</div>
<?php if( $sub_product_cats && count($sub_product_cats) ):?>
<div class="category-sub">
    <div class="row row-small">
        <div class="col medium-12 small-12 large-12">
            <div class="filter__block-list-subcate">
                <div class="box-list-subcate">
                    <div class="list-subcate">
						<?php foreach( $sub_product_cats as $sub_product_cat ):
							$term_link = get_term_link( $sub_product_cat, $taxonomy );	
							?>
                        	<a href="<?= $term_link; ?>" class="item-subcate subcate-927"> <?= $sub_product_cat->name; ?> </a>
						<?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>

<div class="category-filters">
    <div class="row row-small">
        <div class="col medium-12 small-12 large-12">
            <?php if( isset( $_GET['really_curr_tax'] ) ):?>
            <div class="filter__block-item">
                <div class="box-title">
                <h4 class="box-title__title">Đang lọc theo</h4>
                </div>
                <div class="box-list-wrapper">
                <?php echo do_shortcode('[woof_search_options]');?>
                </div>
            </div>
            <?php endif;?>

            
            <div class="filter__block-item">
                <div class="box-title">
                <h4 class="box-title__title">Chọn theo tiêu chí</h4>
                </div>
                <div class="box-list-wrapper">
                    <?php echo do_shortcode('[woof]');?>
                </div>
            </div>

            <div class="filter__block-item">
                <div class="box-title">
                    <h4 class="box-title__title">Sắp xếp theo</h4>
                </div>
                <div class="box-list-wrapper">
                    <div class="list-filter">
                        <a id="sortDesc" class="btn-filter 
                            <?= ( @$_GET['orderby'] == 'price-desc' ) ? 'filter-active' : '';?>
                        " onclick="customSetOrder('orderby','price-desc')">
                            <i class="icon-angle-up"></i>&ensp;Giá cao</a>
                        <a id="sortAsc" class="btn-filter 
                            <?= ( @$_GET['orderby'] == 'price' ) ? 'filter-active' : '';?>
                        " onclick="customSetOrder('orderby','price')">
                            <i class="icon-angle-down"></i>&ensp;Giá thấp</a>
                        <!-- <a class="btn-filter item-filter"><i class="fas fa-star"></i>&ensp;Đánh giá tốt</a> -->
                        <a id="sortPromotion" class="btn-filter 
                            <?= ( @$_GET['orderby'] == 'promotion_percent' ) ? 'filter-active' : '';?>
                        " onclick="customSetOrder('orderby','promotion_percent')">
                            <i class="fas fa-percent"></i>&ensp;Khuyến mãi hot</a>
                        <a id="sortTragop" class="btn-filter 
                            <?= ( @$_GET['orderby'] == 'tragop' ) ? 'filter-active' : '';?>
                        " onclick="customSetOrder('orderby','tragop')">
                            <i class="fas fa-hand-holding-usd"></i>&ensp;Trả góp 0%</a>
                        <a id="sortViewCount" class="btn-filter 
                        <?= ( @$_GET['orderby'] == 'popularity' ) ? 'filter-active' : '';?>
                        " onclick="customSetOrder('orderby','popularity')">
                            <i class="fas fa-eye"></i>&ensp;Xem nhiều</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function customSetOrder(key,value){
        const urlParams = new URLSearchParams(window.location.search);
        urlParams.set(key, value);
        window.location.search = urlParams;
    }
</script>