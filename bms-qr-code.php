<?php  
/* 
Plugin Name: BMS-QR Code
Plugin URI: http://bmsplugins.blogspot.com/
Version: 1.0
Author: Bijon Krishna Bairagi
Description: Make a QR code for your link!
Author URI: https://bijonkrishnabairagi.blogspot.com/
*/  
//[qr-code]
function pbl_qrcode_func( $atts ){
	$element=pbl_form_build();
	return $element;
}
add_shortcode( 'qr-code', 'pbl_qrcode_func' );

function pbl_form_build(){
	?>
	<fieldset>
  <legend>QR Code Qenerator:</legend>
	<input id="qr-value" placeholder="Pleace enter your url" type="text" name="link" />
	<button type="submit" id="qr-btn">Submit</button>
	<div id="qr-code"></div>
</fieldset>


<style type="text/css">
	#qr-code{
		padding: 20px;
	}
</style>
			<script>
			jQuery(document).ready(function($){

				$("#qr-btn").click(function(){
					var qrval=$("#qr-value").val();
					var genqr="https://chart.googleapis.com/chart?chs=500x500&chld=L|0&cht=qr&chl="+qrval+"&chld=L|1&choe=UTF-8";
					$( "#qr-code" ).html( "<img src="+genqr+" />" );
				});

			});
		</script>
	<?php
}
?>  