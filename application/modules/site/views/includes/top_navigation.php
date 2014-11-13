<?php
//get page data
$all_children = $this->categories_model->all_child_categories();
$parent_categories = $this->categories_model->all_parent_categories();
?>
<!-- Fixed navbar start -->
<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
  <div class="navbar-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
        
        <div class="pull-left ">
            <ul class="userMenu ">
              <li> <a href="#"> <span class="hidden-xs">HELP</span><i class="glyphicon glyphicon-info-sign hide visible-xs "></i> </a> </li>
              <li class="phone-number"> 
              <a  href="callto:+254705925498"> 
              <span> <i class="glyphicon glyphicon-phone-alt "></i></span> 
              <span class="hidden-xs" style="margin-left:5px"> +254 705 925 498 </span> </a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
          <div class="pull-right">
            <ul class="userMenu">
            	<?php
				//user has logged in
				if($this->login_model->check_login())
				{
					echo ' <li> <a href="'.site_url().'account"><span class="hidden-xs"> My Account</span> <i class="glyphicon glyphicon-user hide visible-xs "></i></a> </li>';
				}
				
				//user has not logged in
				else
				{
					echo '<li> <a href="#"  data-toggle="modal" data-target="#ModalLogin"> <span class="hidden-xs">Sign In</span> <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a> </li>
					<li class="hidden-xs"> <a href="#"  data-toggle="modal" data-target="#ModalSignup"> Create Account </a> </li>';
				}
				?>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.navbar-top-->
  
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> <span class="icon-bar"> </span> </button>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart"> <i class="fa fa-shopping-cart colorWhite"> </i> <span class="cartRespons colorWhite" id="menu_cart_total"> Cart (KES <?php echo $this->load->view('cart/cart_total', '', TRUE);?>) </span> </button>
      <a class="navbar-brand " href="<?php echo site_url()."home";?>"> I2S </a> 
      
      <!-- this part for mobile -->
      <div class="search-box pull-right hidden-lg hidden-md hidden-sm">
        <div class="input-group">
          <button class="btn btn-nobg" type="button"> <i class="fa fa-search"> </i> </button>
        </div>
        <!-- /input-group --> 
        
      </div>
    </div>
    
    <?php echo $this->load->view('cart/menu_cart', '', TRUE);?>
    
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li > <a href="<?php echo site_url()."home";?>"> Home </a> </li>
        <li > <a href="<?php echo site_url()."shop";?>"> Shop </a> </li>
        <!--<li class="dropdown megamenu-fullwidth"> <a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo site_url()."products/new-products/";?>"> New Products <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content ">
              <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                <li class="no-border">
                  <p class="promo-1"> <strong> NEW COLLECTION </strong> </p>
                </li>
                <li> <a href="<?php echo site_url()."products/new-products/";?>"> ALL NEW PRODUCTS </a> </li>
                <li> <a href="<?php echo site_url()."products/new-category/";?>"> NEW BY CATEGORY </a> </li>
                <li> <a href="<?php echo site_url()."products/new-brand/";?>"> NEW BY BRAND </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                <li> <a class="newProductMenuBlock" href="<?php echo site_url()."products/category/7";?>"> <img class="img-responsive" src="<?php echo base_url()."assets/themes/tshop/";?>images/site/promo1.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> TROUSERS </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href="<?php echo site_url()."products/category/5";?>"> <img class="img-responsive" src="<?php echo base_url()."assets/themes/tshop/";?>images/site/promo2.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> DRESS </span> </a> </li>
              </ul>
              <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                <li> <a class="newProductMenuBlock" href="<?php echo site_url()."products/category/4";?>"> <img class="img-responsive" src="<?php echo base_url()."assets/themes/tshop/";?>images/site/promo3.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span> </a> </li>
              </ul>
            </li>
          </ul>
        </li>-->
        
        <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
        <li class="dropdown megamenu-80width "> <a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo site_url()."products/all-products";?>"> PRODUCTS <b class="caret"> </b> </a>
          <ul class="dropdown-menu">
            <li class="megamenu-content"> 
              
              <!-- megamenu-content -->
              
              	<?php
                	if($parent_categories->num_rows() > 0)
					{
						$count = 0;
						$parents = $parent_categories->result();
						
						foreach($parents as $par)
						{
							$count++;
							$category_id = $par->category_id;
							$category_name = $par->category_name;
							$total_products = $this->users_model->count_items('product, category', 'product.category_id = category.category_id AND (category.category_id = '.$category_id.' OR category.category_parent = '.$category_id.')');
							$total_children = $this->users_model->count_items('category', 'category_parent = '.$category_id);
							
							if($count == 1)
							{
								$no_margin_left = 'noMarginLeft';
							}
							
							else
							{
								$no_margin_left = '';
							}
							
							echo
							'
								<ul class="col-lg-2  col-sm-2 col-md-2  unstyled '.$no_margin_left.'">
									<li>
									  <p> <strong> '.$category_name.' ('.$total_products.')</strong> </p>
									</li>
									<li> <a href="'.base_url().'products/category/'.$category_id.'"> All '.$category_name.' ('.$total_products.') </a> </li>
							';
							
							if($total_children > 0)
							{
								if($all_children->num_rows() > 0)
								{
									$children = $all_children->result();
									
									foreach($children as $child)
									{
										$parent_id = $child->category_parent;
										
										if($parent_id == $category_id)
										{
											$child_id = $child->category_id;
											$child_name = $child->category_name;
											$total_child_products = $this->users_model->count_items('product, category', 'product.category_id = category.category_id AND (category.category_id = '.$child_id.' OR category.category_parent = '.$child_id.')');
											
											echo '<li> <a href="'.base_url().'products/category/'.$child_id.'">'.$child_name.' ('.$total_child_products.')</a></li>';
										}
										
									}
								}
							}
							
							echo '</ul>';
						}
					}
				?>
            </li>
          </ul>
        </li>
        <!--<li> <a href="<?php echo site_url()."cart";?>"> Cart </a> </li>
        <li> <a href="<?php echo site_url()."checkout";?>"> Checkout </a> </li>-->
        <li> <a href="<?php echo site_url()."blog";?>"> Blog </a> </li>
        <li> <a href="<?php echo site_url()."about";?>"> About </a> </li>
        <li> <a href="<?php echo site_url()."contact";?>"> Contact </a> </li>
      </ul>
      
      <?php echo $this->load->view('cart/mini_cart', '', TRUE);?>
        
        <div class="search-box">
          <div class="input-group">
            <button class="btn btn-nobg" type="button"> <i class="fa fa-search"> </i> </button>
          </div>
          <!-- /input-group --> 
          
        </div>
        <!--/.search-box --> 
      </div>
      <!--/.navbar-nav hidden-xs--> 
    </div>
    <!--/.nav-collapse --> 
    
  </div>
  <!--/.container -->
  
  <div class="search-full text-right"> <a class="pull-right search-close"> <i class=" fa fa-times-circle"> </i> </a>
    <div class="searchInputBox pull-right">
    <?php echo form_open('products/search');?>
      <input type="search"  data-searchurl="search?=" name="search_item" placeholder="start typing and hit enter to search" class="search-input">
      <button class="btn-nobg search-btn" type="submit"> <i class="fa fa-search"> </i> </button>
      <?php echo form_close();?>
    </div>
  </div>
  <!--/.search-full--> 
  
</div>
<!-- /.Fixed navbar  -->