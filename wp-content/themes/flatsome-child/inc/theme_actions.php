<?php
//add buttons bellow add to cart
add_action('woocommerce_after_add_to_cart_button','theme_show_add_to_cart',30);

//remove related product
remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products',20);

//add khuyen mai section
add_action('woocommerce_after_variations_table','theme_show_khuyen_mai',30);

//hien thi phien ban khac cua san pham
add_action('woocommerce_single_product_summary','theme_show_phien_ban_khac',12);

/* single product */
/* xóa title và rating để di chuyển sang chổ khác */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

//hien thi thong tin tra gop
add_action('woocommerce_single_product_summary','theme_show_tra_gop',5);

//xoa hien thi mo ta danh muc
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );

//di chuyen mo ta danh muc sang noi khac
add_action( 'flatsome_products_after', 'theme_flatsome_products_after',10 );

//Move rating to the bottom
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
add_action( 'flatsome_product_box_after', 'woocommerce_template_loop_rating',99 );

add_action('woocommerce_after_single_product_summary','theme_show_desc_and_info');

function theme_show_desc_and_info(){
    ob_start();
    ?>
    <div class="row">
        <div class="col large-8">
            <div class="block-blog-content">
                <div class="blog-content__box-content">
                    <div class="box-outstanding-features">
                        <div class="box-title">
                            <h2>ĐẶC ĐIỂM NỔI BẬT</h2>
                        </div>
                        <div class="box-content">
                            <ul><li> Hiệu năng vượt trội - Chip Apple A15 Bionic mạnh mẽ, hỗ trợ mạng 5G tốc độ cao</li><li> Không gian hiển thị sống động - Màn hình 6.7" Super Retina XDR độ sáng cao, sắc nét</li><li> Trải nghiệm điện ảnh đỉnh cao - Cụm 3 camera kép 12MP, hỗ trợ ổn định hình ảnh quang học</li><li> Tối ưu điện năng - Sạc nhanh 20 W, đầy 50% pin trong khoảng 30 phút</li><ul>								</ul></ul>
                        </div>
                    </div>
                    <div class="blog-content" style="height: 400px;overflow: hidden;">
                        <?php the_content();?>
                    </div>
                    <div class="box-btn-show-more">
                        <a class="btn-show-more cta-xem-them-bai-viet">Xem thêm <i class="fas fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col large-4">
            <div id="id_33485" class="block-technical-info">
                <div class="box-title">
                    <h2 class="box-title__title">Thông số kỹ thuật</h2>
                </div>
                <div class="box-content">
                    <table id="tskt">
                        <tbody>
                            <tr>
                                <th>Kích thước màn hình</th>
                                <th>6.7 inches</th>
                            </tr>
                            <tr>
                                <th>Công nghệ màn hình</th>
                                <th>OLED</th>
                            </tr>
                            <tr>
                                <th>Camera sau</th>
                                <th>Camera góc rộng: 12MP, ƒ/1.5 <br> Camera góc siêu rộng: 12MP, ƒ/1.8 <br> Camera tele : 12MP, /2.8</th>
                            </tr>
                            <tr>
                                <th>Camera trước</th>
                                <th>12MP, ƒ/2.2</th>
                            </tr>
                            <tr>
                                <th>Chipset</th>
                                <th>Apple A15</th>
                            </tr>
                            <tr>
                                <th>Dung lượng RAM</th>
                                <th>6 GB</th>
                            </tr>
                            <tr>
                                <th>Bộ nhớ trong</th>
                                <th>128 GB</th>
                            </tr>
                            <tr>
                                <th>Pin</th>
                                <th>4,325mAh</th>
                            </tr>
                            <tr>
                                <th>Thẻ SIM</th>
                                <th>2 SIM (nano‑SIM và eSIM)</th>
                            </tr>
                            <tr>
                                <th>Hệ điều hành</th>
                                <th>iOS15</th>
                            </tr>
                            <tr>
                                <th>Độ phân giải màn hình</th>
                                <th>2778 x 1284 pixel</th>
                            </tr>
                            <tr>
                                <th>Kích thước</th>
                                <th>160.8 x 78.1 x 7.65mm</th>
                            </tr>
                                <tr>
                                <th>Trọng lượng</th>
                                <th>240g</th>
                            </tr>
                            <tr>
                                <th>Bluetooth</th>
                                <th>v5.0</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-btn-show-more" id="more-specific">
                    <a href="javascript:void(0)" class="btn-show-more cta-xem-cau-hinh" data-toggle="modal" data-target="#technicalInfoModal">Xem cấu hình chi tiết <i class="fas fa-chevron-down"></i></a>
                </div>
            </div>
            <div class="block-news">
                <div class="block-news__box-title">
                    <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 20 15"><path id="newspaper" d="M17.5,6.5V4H0V17.75A1.25,1.25,0,0,0,1.25,19H18.125A1.875,1.875,0,0,0,20,17.125V6.5ZM16.25,17.75h-15V5.25h15ZM2.5,7.75H15V9H2.5Zm7.5,2.5h5V11.5H10Zm0,2.5h5V14H10Zm0,2.5h3.75V16.5H10Zm-7.5-5H8.75V16.5H2.5Z" transform="translate(0 -4)" fill="#d70018"></path></svg>&nbsp;Tin tức về sản phẩm</p>
                </div>
                <div class="block-news__box-content">
                    <div class="box-content__list-news">
                        <div class="item-news">
                            <a href="https://cellphones.com.vn/sforum/cap-nhat-gia-iphone-vn-a-truoc-tet-2022-tai-cellphones-iphone-12-va-iphone-11-da-co-gia-hap-dan-hon" class="item-news__box-img">
                                <img class="loaded" src="https://cellphones.com.vn/sforum/wp-content/uploads/2022/01/1536-1024-12-350x250.jpg">
                            </a>
                            <a href="https://cellphones.com.vn/sforum/cap-nhat-gia-iphone-vn-a-truoc-tet-2022-tai-cellphones-iphone-12-va-iphone-11-da-co-gia-hap-dan-hon" class="item-news__box-title">
                                <p>Cập nhật giá iPhone VN/A trước Tết 2022 tại CellphoneS, iPhone 12 và iPhone 11 đã có giá hấp dẫn hơn</p>
                            </a>
                        </div>             
                    </div>
                    <a href="https://cellphones.com.vn/sforum/tag/iphone-13" class="btn-show-more cta-xem-all-bai-viet">Xem tất cả bài viết <i class="fas fa-chevron-down"></i></a>
                </div>
            </div>
        </div>
    </div>
    <?php
    echo ob_get_clean();
}

function theme_flatsome_products_after(){
  echo '<div class="row row-small">';
    echo '<div class="col large-8">';
      if ( is_product_taxonomy() && 0 === absint( get_query_var( 'paged' ) ) ) {
        $term = get_queried_object();
        if ( $term && ! empty( $term->description ) ) {
        echo '<div class="block-blog-content">';
          echo '<div class="blog-content__box-content">';
            echo '<div class="blog-content term-description" >' . wc_format_content( wp_kses_post( $term->description ) ) . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped  
          echo '<div class="box-btn-show-more">
                  <a class="btn-show-more cta-xem-them-bai-viet">Xem thêm <i class="icon-angle-down"></i></a>
                </div>';
          echo '</div>';
        echo '</div>';
        }
      }  
      echo '<div class="block-comment">';
        echo '<div class="blog-content__box-content">';
          
        echo '</div>';
      echo '</div>';
    echo '</div>';
    echo '<div class="col large-4">';
    echo '</div>';
  echo '</div>';
}

function theme_show_tra_gop(){
  echo '
  <div class="box-info__more-info">
    <p class="tag-installment">Trả góp 0%</p>
    <p class="tag-installment">Hàng 98%</p>
  </div>
  ';
}

function theme_show_phien_ban_khac(){
    global $post;
    $phien_ban_khacs = get_field('phien_ban_khac');
    ob_start();
    ?>
    <div class="box-linked">
        <div class="list-linked">
            <?php foreach($phien_ban_khacs as $phien_ban_khac): 
            $product = wc_get_product( $phien_ban_khac );
            ?>
            <a href="<?= get_the_permalink($phien_ban_khac);?>"
                class="item-linked linked-1 <?= ( $post->ID == $phien_ban_khac ) ? 'active' : '';?>">
                <strong><?= get_post_meta($phien_ban_khac,'ram_luu_tru_bo_nho_trong',true);?></strong>
                <span> <?= number_format($product->get_price());?> ₫</span>
            </a>
            <?php endforeach;?>
        </div>
    </div>
    <div class="box-title">
        <p class="box-title__title">Chọn màu để xem giá và chi nhánh có hàng</p>
    </div>
    <?php
  echo ob_get_clean();
}

function theme_show_khuyen_mai(){
  ob_start();
  ?>
    <div class="box-promotion">
        <div class="box-title">
            <p class="box-title__title"><svg xmlns="http://www.w3.org/2000/svg" width="13.125" height="15"
                    viewBox="0 0 13.125 15">
                    <path id="gift"
                        d="M14.656,4.693H2.469A.468.468,0,0,0,2,5.161V9.38a.468.468,0,0,0,.469.469h.469v4.687A.468.468,0,0,0,3.406,15H13.719a.468.468,0,0,0,.469-.469V9.849h.469a.468.468,0,0,0,.469-.469V5.161A.468.468,0,0,0,14.656,4.693ZM7.625,13.6a.468.468,0,0,1-.469.469H4.344a.468.468,0,0,1-.469-.469V9.849a.468.468,0,0,1,.469-.469H7.156a.468.468,0,0,1,.469.469Zm0-5.625a.468.468,0,0,1-.469.469H3.406a.468.468,0,0,1-.469-.469V6.1a.468.468,0,0,1,.469-.469h3.75a.468.468,0,0,1,.469.469ZM13.25,13.6a.468.468,0,0,1-.469.469H9.969A.468.468,0,0,1,9.5,13.6V9.849a.468.468,0,0,1,.469-.469h2.812a.468.468,0,0,1,.469.469Zm.937-5.625a.468.468,0,0,1-.469.469H9.969A.468.468,0,0,1,9.5,7.974V6.1a.468.468,0,0,1,.469-.469h3.75a.468.468,0,0,1,.469.469ZM6.481,4.692h4.312A3.266,3.266,0,0,0,12.314,2.72a1.5,1.5,0,0,0-.645-1.383,1.64,1.64,0,0,0-1.013-.4c-1.07,0-1.675,1.312-2,2.483C8.264,1.926,7.509.005,6.213.005A1.7,1.7,0,0,0,5.092.492a1.886,1.886,0,0,0-.725,1.747A4.185,4.185,0,0,0,6.481,4.692Zm4.176-2.631a.686.686,0,0,1,.386.18c.242.19.228.308.225.347-.045.41-.814,1.055-1.711,1.587.264-1.135.7-2.114,1.1-2.114Zm-4.891-.7a.782.782,0,0,1,.447-.228c.58,0,1.177,1.523,1.525,3-1.1-.584-2.229-1.412-2.33-2.077C5.394,1.965,5.357,1.719,5.766,1.357Z"
                        transform="translate(-2 -0.005)" fill="#d70018"></path>
                </svg>&nbsp;Khuyến Mãi</p>
        </div>
        <div class="box-content">
            <ul class="list-promotions">
                <li class="item-promotion general-promotion"><a href="https://cellphones.com.vn/thu-cu-doi-moi">Thu cũ lên
                        đời - Trợ giá 1 triệu&nbsp;<span class="color-red">(xem chi tiết)</span></a></li>
            </ul>
            <div class="cps-additional-note">
                <p>Hotsales từ ngày <span style="color: #ff0000;">05</span><span style="color: #ff0000;">/02 - 06/02</span>:
                    Giảm sốc chỉ còn <span style="color: #ff0000;">13.250.000</span><span style="color: #ff0000;">đ<span
                            style="color: #888888;">&nbsp;<span style="color: #000000;">(Ưu dãi có hạn, ngày cuối hotsale
                                <span style="color: #ff0000;">chỉ áp dụng thanh toán 100%</span>)</span></span></span></p>
            </div>
        </div>
    </div>
    <?php
    echo ob_get_clean();
}

function theme_show_add_to_cart(){
  ob_start();
  ?>
  <div class="box-action-button">
    <button class="single_add_to_cart_button action-button button-red cta-mua-ngay" onclick="addToCart()"><strong>MUA NGAY</strong><span>(Giao hàng tận
            nơi - Giá tốt - An toàn)</span></button>
    <div class="group-button ">
        <a href="/tragop?p=iphone-13&amp;m=company" class="action-button button-blue cta-tra-gop" style=""><strong>TRẢ
                GÓP 0%</strong><span>(Xét duyệt qua điện thoại)</span></a>
        <a class="action-button button-blue cta-tra-gop-the" onclick="tragop()"><strong>TRẢ GÓP QUA
                THẺ</strong><span>(Visa, Master Card, JCB)</span></a>
    </div>
</div>
  <?php
  echo ob_get_clean();
}