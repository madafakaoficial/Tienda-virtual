<?php function get_toast_sta_premium_advert(){ ?>
 <a class="toast-metabox premium-advert" href="https://www.toastplugins.co.uk/plugins/scroll-triggered-animations-premium/" target="_blank">
		<h4>Get Premium now!</h4>
		<p>Enjoy 40% off premium!</p>
		<div class="checkout-code">XMAS19</div>
		<p>Copy code above and enter it at the checkout.</p>
</a>

<?php } ?>
<?php function toast_sta_christmas_advert(){ ?>

<?php if(!isset($_COOKIE['toast-sta-christmas'])): ?>
<div class="toast-sta-christmas-advert-background">
	<div class="snow-layer-1 snow"></div>
	<div class="snow-layer-2 snow"></div>
</div>

<div class="toast-sta-christmas-advert">
<i class="fas fa-times close"></i>
<div class="table">
<div class="left-side">
<h3>Get 40% Off Premium</h3>
<p>Copy code below and enter it at the checkout.</p>
<div class="checkout-code">XMAS19</div>
<p class="tandc">Offer ends on January 4th 2020</p>
<a href="https://www.toastplugins.co.uk/plugins/scroll-triggered-animations-premium/" target="_blank" class="get-premium">Get premium now!</a>
</div>
<div class="right-side">
<h3>Merry Christmas</h3>
	<div class="count-dount"><span class="days"></span> <p>Days left to claim your discount.</p></div>
</div>
</div>
</div>

<script>
jQuery(window).ready(function(){

var date1 = new Date(); 
var date2 = new Date("01/04/2020"); 
  
var Difference_In_Time = date2.getTime() - date1.getTime(); 
  
var Difference_In_Days = Math.round(Difference_In_Time / (1000 * 3600 * 24)); 
  
jQuery('.count-dount .days').html(Difference_In_Days);

//ACTIVATE CHRISTMAS POPUP
setTimeout(function(){

document.cookie = 'toast-sta-christmas=1';
jQuery('.toast-sta-christmas-advert-background, .toast-sta-christmas-advert').addClass('active');

}, 5000)

//CLOSE POPUP
jQuery('.toast-sta-christmas-advert .close').on('click', function(){

jQuery('.toast-sta-christmas-advert, .toast-sta-christmas-advert-background').remove();

})

})
</script>
<?php endif; ?>

<?php } ?>