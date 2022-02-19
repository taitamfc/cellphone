<?php
function theme_tra_gop(){
    global $product;
    ob_start();
    include_once 'tragop/form.php';
    echo ob_get_clean();
}