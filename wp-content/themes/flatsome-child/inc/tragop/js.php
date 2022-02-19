<script>
function number_format (number, decimals, dec_point, thousands_sep) {
    // Strip all characters but numerical ones.
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}
jQuery(document).ready(function () {
    var product_price   = jQuery('#product_price').data('price');
    var procent         = jQuery('#procent');
    var firstPay        = jQuery('#first-pay');
    var monthly         = jQuery('#monthly');
    var bankProcent     = jQuery('#bank-procent');
    var autoCaculate     = jQuery('#auto-caculate');
    var timeVay         = 3;
    var firstPayValue   = 0;
    var procentValue   = 0;

    function handleMoney(procentValue,timeVay){
        //phan tram tra truoc
        procent.html(procentValue);

        //FE: so tien tra truoc
        firstPayValue =  product_price * ( procentValue / 100 );
        firstPay.html( number_format(firstPayValue) );

        //FE: so tien tra hang thang
        monthlyValue = ( (product_price - firstPayValue) / timeVay ) * 1,1;
        monthly.html( number_format(monthlyValue) );

        //BANK: Số tiền trả trước
        bankProcent.html( number_format(firstPayValue) );

        //BANK: so tien tra hang thang
        //autoCaculate.html();

    }

    //thoi han vay
    jQuery(".month-pay")
    .slider({
        min: 3,
        max: 12,
        //step:10,
        change: function( event, ui ) {
            timeVay = ui.value;
            handleMoney(procentValue,timeVay)
        }
    })
    .slider("pips", {
        rest: "label",
        //suffix: "%"
    });


    jQuery(".price-procent")
    .slider({
        min: 0,
        max: 70,
        step:10,
        change: function( event, ui ) {
            procentValue = ui.value;
            handleMoney(procentValue,timeVay)
        }
    })
    .slider("pips", {
        rest: "label",
        suffix: "%"
    });

    jQuery('#bankId').find('option:first-child').prop('selected',true);
    jQuery('#cardType').prop('disabled',true);
    jQuery('#bankId').on('change',function(){
        var bankId = jQuery(this).val();
        if( bankId ){
            jQuery('#cardType').prop('disabled',false);
        }else{
            jQuery('#cardType').find('option:first-child').prop('selected',true);
            jQuery('#cardType').prop('disabled',true);
        }
    });
});
/*
- thay hinh bia: cho hinh bia
- cac dong xe cung cap -> tin tuc
- thong tin: thay video
- ket noi chung toi - facebook - youtube
- logo xuong footer - xoa logo cu
- xoa website footer
- 36 giuong - bo xe giua
- phan ben trai menu thay mau
- noi that - ngoai that - dong co - nho? + ko be?
- showrom bac trung nam doi mau
*/
</script>
