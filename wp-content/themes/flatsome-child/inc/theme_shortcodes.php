<?php
add_shortcode('product_technicalInfoModal','product_technicalInfoModal');
function product_technicalInfoModal(){
    ob_start();
    ?>
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Thông số kỹ thuật</h4>
        <button type="button" class="close" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="12"
                height="12" viewBox="0 0 12 12">
                <path id="cross"
                    d="M11.89,9.64h0L8.249,6l3.64-3.64h0a.376.376,0,0,0,0-.53L10.17.109a.376.376,0,0,0-.53,0h0L6,3.749,2.359.109h0a.376.376,0,0,0-.53,0L.109,1.829a.376.376,0,0,0,0,.53h0L3.75,6,.109,9.64h0a.38.38,0,0,0-.086.134.374.374,0,0,0,.086.4l1.72,1.72a.376.376,0,0,0,.53,0h0L6,8.249l3.64,3.64h0a.376.376,0,0,0,.53,0l1.72-1.72a.376.376,0,0,0,0-.53Z"
                    transform="translate(0 0)" fill="#fff"></path>
            </svg>&nbsp;Đóng</button>
    </div>
    <div class="modal-body">
        <div class="box-table">
            <div class="item-box-table Màn hình">
                <div class="box-title">
                    <p class="box-title__title">Màn hình</p>
                </div>
                <div class="box-content">
                    <table>
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
                                <th>Độ phân giải màn hình</th>
                                <th>2778 x 1284 pixel</th>
                            </tr>
                            <tr>
                                <th>Tính năng màn hình</th>
                                <th>120Hz, Super Retina XDR với ProMotion 6.1‑inch, OLED, 458 pp, HDR display, True
                                    Tone, Wide color (P3), Haptic Touch</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="item-box-table Camera sau">
                <div class="box-title">
                    <p class="box-title__title">Camera sau</p>
                </div>
                <div class="box-content">
                    <table>
                        <tbody>
                            <tr>
                                <th>Camera sau</th>
                                <th>Camera góc rộng: 12MP, ƒ/1.5 <br> Camera góc siêu rộng: 12MP, ƒ/1.8 <br> Camera tele
                                    : 12MP, /2.8</th>
                            </tr>
                            <tr>
                                <th>Quay video</th>
                                <th>4K @24 fps/25 fps/30 fps/ 60 fps <br> 1080p HD @25 fps/30 fps/60 fps <br> 720p HD@
                                    30 fps</th>
                            </tr>
                            <tr>
                                <th>Tính năng camera</th>
                                <th>Chạm lấy nét <br> HDR <br> Nhận diện khuôn mặt <br> Quay chậm (Slow Motion) <br>
                                    Toàn cảnh (Panorama) <br> Tự động lấy nét (AF) <br> Xóa phông <br>Nhãn dán (AR
                                    Stickers) <br> Nhận diện khuôn mặt</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="item-box-table Camera trước">
                <div class="box-title">
                    <p class="box-title__title">Camera trước</p>
                </div>
                <div class="box-content">
                    <table>
                        <tbody>
                            <tr>
                                <th>Camera trước</th>
                                <th>12MP, ƒ/2.2</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="item-box-table Vi xử lý &amp; đồ họa">
                <div class="box-title">
                    <p class="box-title__title">Vi xử lý &amp; đồ họa</p>
                </div>
                <div class="box-content">
                    <table>
                        <tbody>
                            <tr>
                                <th>Chipset</th>
                                <th>Apple A15</th>
                            </tr>
                            <tr>
                                <th>GPU</th>
                                <th>GPU 5 nhân</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="item-box-table RAM &amp; lưu trữ">
                <div class="box-title">
                    <p class="box-title__title">RAM &amp; lưu trữ</p>
                </div>
                <div class="box-content">
                    <table>
                        <tbody>
                            <tr>
                                <th>Dung lượng RAM</th>
                                <th>6 GB</th>
                            </tr>
                            <tr>
                                <th>Bộ nhớ trong</th>
                                <th>128 GB</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="item-box-table Thông số kỹ thuật">
                <div class="box-title">
                    <p class="box-title__title">Thông số kỹ thuật</p>
                </div>
                <div class="box-content">
                    <table>
                        <tbody>
                            <tr>
                                <th>Pin</th>
                                <th>4,325mAh</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="item-box-table Giao tiếp &amp; kết nối">
                <div class="box-title">
                    <p class="box-title__title">Giao tiếp &amp; kết nối</p>
                </div>
                <div class="box-content">
                    <table>
                        <tbody>
                            <tr>
                                <th>Thẻ SIM</th>
                                <th>2 SIM (nano‑SIM và eSIM)</th>
                            </tr>
                            <tr>
                                <th>Hệ điều hành</th>
                                <th>iOS15</th>
                            </tr>
                            <tr>
                                <th>Jack tai nghe 3.5</th>
                                <th>Không</th>
                            </tr>
                            <tr>
                                <th>Công nghệ NFC</th>
                                <th>Có</th>
                            </tr>
                            <tr>
                                <th>Hỗ trợ mạng</th>
                                <th>5G</th>
                            </tr>
                            <tr>
                                <th>Wi-Fi</th>
                                <th>WiFi 6E</th>
                            </tr>
                            <tr>
                                <th>Bluetooth</th>
                                <th>v5.0</th>
                            </tr>
                            <tr>
                                <th>GPS</th>
                                <th>GPS, GLONASS, Galileo, QZSS, and BeiDou</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="item-box-table Thiết kế &amp; Trọng lượng">
                <div class="box-title">
                    <p class="box-title__title">Thiết kế &amp; Trọng lượng</p>
                </div>
                <div class="box-content">
                    <table>
                        <tbody>
                            <tr>
                                <th>Kích thước</th>
                                <th>160.8 x 78.1 x 7.65mm</th>
                            </tr>
                            <tr>
                                <th>Trọng lượng</th>
                                <th>240g</th>
                            </tr>
                            <tr>
                                <th>Chất liệu mặt lưng</th>
                                <th>Kính</th>
                            </tr>
                            <tr>
                                <th>Chất liệu khung viền</th>
                                <th>Kim loại</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="item-box-table Pin &amp; công nghệ sạc">
                <div class="box-title">
                    <p class="box-title__title">Pin &amp; công nghệ sạc</p>
                </div>
                <div class="box-content">
                    <table>
                        <tbody>
                            <tr>
                                <th>Công nghệ sạc</th>
                                <th>Sạc nhanh 20W, Sạc không dây, Sạc ngược không dây 15W, Sạc pin nhanh, Tiết kiệm pin
                                </th>
                            </tr>
                            <tr>
                                <th>Cổng sạc</th>
                                <th>Lightning</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="item-box-table last">
                <div class="box-title">
                    <p class="box-title__title">Thông số khác</p>
                </div>
                <div class="box-content">
                    <table>
                        <tbody>
                            <tr>
                                <th>Chỉ số kháng nước, bụi</th>
                                <th>IP68</th>
                            </tr>
                            <tr>
                                <th>Kiểu màn hình</th>
                                <th>Tai thỏ</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="item-box-table Tiện ích khác">
                <div class="box-title">
                    <p class="box-title__title">Tiện ích khác</p>
                </div>
                <div class="box-content">
                    <table>
                        <tbody>
                            <tr>
                                <th>Các loại cảm biến</th>
                                <th>Cảm biến ánh sáng, Cảm biến áp kế, Cảm biến gia tốc, Cảm biến tiệm cận, Con quay hồi
                                    chuyển</th>
                            </tr>
                            <tr>
                                <th>Tính năng đặc biệt</th>
                                <th>Hỗ trợ 5G, Kháng nước, kháng bụi, Sạc không dây, Nhận diện khuôn mặt</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a type="button" class="btn-close" data-dismiss="modal">Đóng</a>
    </div>
</div>
<?php
    return ob_get_clean();
}