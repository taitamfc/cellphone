<?php
//them tab phu kien va san pham lien quan
add_filter( 'woocommerce_product_tabs', 'filter_woocommerce_product_tabs', 10, 1 ); 

//boc the html cho rating
add_filter( 'woocommerce_product_get_rating_html','theme_woocommerce_product_get_rating_html',10,3 );

function theme_woocommerce_product_get_rating_html($html, $rating, $count){
  global $product;
  return '<div class="star-rating-wrapper">'.$html.' '.$product->get_rating_count().' đánh giá</div>';
}

function filter_woocommerce_product_tabs( $tabs ) { 
    // make filter magic happen here...
    // echo '<pre>';
    // print_r($tabs);
    // echo '</pre>';
  
    unset($tabs['additional_information']);
    unset($tabs['reviews']);
    unset($tabs['description']);

    $tabs = [];
  
    $tabs['phu_kien'] = [
      'title' => 'Phụ kiện mua cùng',
      'priority' => 20,
      'callback' => 'woocommerce_output_related_products'
    ];
  
    $tabs['sp_tuongtu'] = [
      'title' => 'Sản phẩm tương tự',
      'priority' => 20,
      'callback' => 'woocommerce_output_related_products'
    ];

    $tabs['tra_gop'] = [
      'title' => 'Trả góp',
      'priority' => 20,
      'callback' => 'theme_tra_gop'
    ];
  
    return $tabs; 
  }; 
             
  // add the filter 
  
  