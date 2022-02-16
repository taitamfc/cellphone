<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper 123">

	<?php do_action('flatsome_footer'); ?>

</footer>

</div>

<?php wp_footer(); ?>
<script>
	jQuery( document ).ready( function(){
		jQuery('.woof_container_inner h4').append('<i class="icon-angle-down"></i>')
		jQuery('.woof_container_inner').on('click',function(){
			//jQuery('.woof_block_html_items').hide();
			jQuery(this).find('.woof_block_html_items').toggle();
		});
		jQuery('.woof_container_inner input:checked').closest('.woof_container_inner').find('h4').addClass('filter-active');
		jQuery('.woof_container_inner input:checked').closest('.woof_container_stock').find('label').addClass('filter-active');
		jQuery('.woof_reset_button_2').html('Bỏ chọn tất cả').closest('li').appendTo('.woof_products_top_panel_ul');
		jQuery('.woof_products_top_panel_ul li').find('[data-tax="orderby"]').closest('li').remove();
		jQuery('.cta-xem-them-bai-viet').on('click',function(){
			jQuery('.term-description').css('height','auto');
			jQuery(this).closest('.box-btn-show-more').remove();
		});

		/* single product */
		jQuery('.item-linked.active span').clone().appendTo('.ux-swatch__text');
	});
</script>
</body>
</html>
