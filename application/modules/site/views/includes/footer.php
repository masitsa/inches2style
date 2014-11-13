<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
          <h3> Support </h3>
          <ul>
            <li class="supportLi">
              <p> Contact us at </p>
              <h4> <a class="inline" href="callto:+254705925498"> <strong> <i class="fa fa-phone"> </i> +254 705 925 498 </strong> </a> </h4>
              <h4> <a class="inline" href="mailto:inches2style@gmail.com"> <i class="fa fa-envelope-o"> </i> inches2style@gmail.com </a> </h4>
            </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Links </h3>
          <ul>
            <li> <a href="<?php echo site_url().'home';?>"> Home </a> </li>
            <li> <a href="<?php echo site_url().'shop';?>"> Shop </a> </li>
            <li> <a href="<?php echo site_url().'blog';?>"> Blog </a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> Information </h3>
          <ul>
            <li> <a href="<?php echo site_url().'about';?>"> About </a> </li>
            <li> <a href="<?php echo site_url().'contact';?>"> Contact </a> </li>
          </ul>
        </div>
        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
          <h3> My Account </h3>
          <ul>
            <li> <a href="#"> Account Login </a> </li>
            <li> <a href="#"> My Account </a> </li>
          </ul>
        </div>
        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
          <h3> Stay in touch </h3>
          
          <ul class="social">
            <li> <a href="http://facebook.com/InchesToStyle" target="_blank"> <i class=" fa fa-facebook"> &nbsp; </i> </a> </li>
            <li> <a href="http://twitter.com/InchesToStyle" target="_blank"> <i class="fa fa-twitter"> &nbsp; </i> </a> </li>
            <li> <a href="https://plus.google.com/+AudreyMasitsa?prsrc=5" target="_blank"> <i class="fa fa-google-plus"> &nbsp; </i> </a> </li>
            <li> <a href="http://pinterest.com/audreym23" target="_blank"> <i class="fa fa-pinterest"> &nbsp; </i> </a> </li>
          </ul>
        </div>
      </div>
      <!--/.row--> 
    </div>
    <!--/.container--> 
  </div>
  <!--/.footer-->
  
  <div class="footer-bottom">
    <div class="container">
      <p class="pull-left"> &copy; Inches To Style <?php echo date('Y');?>. All right reserved. </p>
      <!--<div class="pull-right paymentMethodImg"> <img height="30" class="pull-right" src="<?php echo base_url()."assets/themes/tshop/";?>images/site/payment/master_card.png" alt="img" > <img height="30" class="pull-right" src="<?php echo base_url()."assets/themes/tshop/";?>images/site/payment/paypal.png" alt="img" > <img height="30" class="pull-right" src="<?php echo base_url()."assets/themes/tshop/";?>images/site/payment/american_express_card.png" alt="img" > <img  height="30" class="pull-right" src="<?php echo base_url()."assets/themes/tshop/";?>images/site/payment/discover_network_card.png" alt="img" > <img  height="30" class="pull-right" src="<?php echo base_url()."assets/themes/tshop/";?>images/site/payment/google_wallet.png" alt="img" > </div>-->
    </div>
  </div>
  <!--/.footer-bottom--> 
</footer>

<!-- Le javascript
================================================== --> 

<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url()."assets/themes/tshop/";?>bootstrap/js/bootstrap.min.js"></script> 

<!-- include jqueryCycle plugin --> 
<script src="<?php echo base_url()."assets/themes/tshop/";?>js/jquery.cycle2.min.js"></script> 
<!-- include easing plugin --> 
<script src="<?php echo base_url()."assets/themes/tshop/";?>js/jquery.easing.1.3.js"></script> 

<!-- include  parallax plugin --> 
<script type="text/javascript"  src="<?php echo base_url()."assets/themes/tshop/";?>js/jquery.parallax-1.1.js"></script> 

<!-- optionally include helper plugins --> 
<script type="text/javascript"  src="<?php echo base_url()."assets/themes/tshop/";?>js/helper-plugins/jquery.mousewheel.min.js"></script> 

<!-- include mCustomScrollbar plugin //Custom Scrollbar  --> 

<script type="text/javascript" src="<?php echo base_url()."assets/themes/tshop/";?>js/jquery.mCustomScrollbar.js"></script> 

<!-- include checkRadio plugin //Custom check & Radio  --> 
<script type="text/javascript" src="<?php echo base_url()."assets/themes/tshop/";?>js/ion-checkRadio/ion.checkRadio.min.js"></script> 

<!-- include grid.js // for equal Div height  --> 
<script src="<?php echo base_url()."assets/themes/tshop/";?>js/grids.js"></script> 

<!-- include carousel slider plugin  --> 
<script src="<?php echo base_url()."assets/themes/tshop/";?>js/owl.carousel.min.js"></script> 

<!-- jQuery minimalect // custom select   --> 
<script src="<?php echo base_url()."assets/themes/tshop/";?>js/jquery.minimalect.min.js"></script> 

<!-- include touchspin.js // touch friendly input spinner component   --> 
<script src="<?php echo base_url()."assets/themes/tshop/";?>js/bootstrap.touchspin.js"></script> 

<!-- include custom script for site  --> 
<script src="<?php echo base_url()."assets/themes/tshop/";?>js/script.js"></script>

<script type="text/javascript">
//Add to cart
$(document).on("click","a.add_to_cart",function()
{
	var product_id = $(this).attr('href');
	
	$.ajax({
		type:'POST',
		url: '<?php echo site_url();?>site/cart/add_item/'+product_id,
		cache:false,
		contentType: false,
		processData: false,
		dataType: 'json',
		success:function(data){
			
			if(data.result == "success")
			{
				var total = 'Cart (KES '+data.cart_total+')';
				var sub_total = 'Subtotal: KES '+data.cart_total;
				
				$("#menu_cart_total").html(total);
				$("#menu_cart_sub_total").html(sub_total);
				
				$("#mini_menu_cart_total").html(total);
				$("#mini_menu_cart_sub_total").html(sub_total);
				
				$("#menu_cart").html(data.cart_items);
				$("#mini_menu_cart").html(data.cart_items);
			}
			else
			{
				alert('Could not add items to cart');
			}
		},
		error: function(xhr, status, error) {
			alert("XMLHttpRequest=" + xhr.responseText + "\ntextStatus=" + status + "\nerrorThrown=" + error);
		}
	});
	
	return false;
});

//Delete from cart
$(document).on("click","a.delete_cart_item",function()
{
	var row_id = $(this).attr('href');
	
	$.ajax({
		type:'POST',
		url: '<?php echo site_url();?>site/cart/delete_cart_item/'+row_id,
		cache:false,
		contentType: false,
		processData: false,
		dataType: 'json',
		success:function(data){
			
			if(data.result == "success")
			{
				var total = 'Cart (KES '+data.cart_total+')';
				var sub_total = 'Subtotal: KES '+data.cart_total;
				
				$("#menu_cart_total").html(total);
				$("#mini_menu_cart_total").html(total);
				$("#cart_sub_total").html(sub_total);
				
				$("#menu_cart").html(data.cart_items);
				$("#mini_menu_cart").html(data.cart_items);
			}
			else
			{
				alert('Could not add items to cart');
			}
		},
		error: function(xhr, status, error) {
			alert("XMLHttpRequest=" + xhr.responseText + "\ntextStatus=" + status + "\nerrorThrown=" + error);
		}
	});
	
	return false;
});
</script>