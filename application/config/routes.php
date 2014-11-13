<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "site";
$route['404_override'] = '';

/*
*	Site Routes
*/
$route['home'] = 'site/cover';
$route['shop'] = 'site/home_page';
$route['about'] = 'site/about';
$route['contact'] = 'site/contact';

/*
*	Products Routes
*/
$route['products/new-products'] = 'site/products/__/0/0/created/1';
$route['products/new-category'] = 'site/products/__/0/0/created/0/1';
$route['products/new-brand'] = 'site/products/__/0/0/created/0/0/1';
$route['products/category/(:num)'] = 'site/products/__/$1';
$route['products/brand/(:num)'] = 'site/products/__/0/$1';
$route['products/category'] = 'site/products/__/0';
$route['products/brand'] = 'site/products/__/0';
$route['products/brand/(:num)'] = 'site/products/__/0/$1';
$route['products/all-products'] = 'site/products/__/0';
$route['products'] = 'site/products/__/0';
$route['products/search'] = 'site/search';
$route['products/search/(:any)'] = 'site/products/$1';
$route['products/price-range/(:any)'] = 'site/products/__/0/0/created/0/0/0/$1';
$route['products/filter-brands/(:any)'] = 'site/products/__/0/0/created/0/0/0/__/$1';
$route['products/filter-brands'] = 'site/filter_brands';
$route['products/sort-by/(:any)'] = 'site/products/__/0/0/$1';
$route['products/view-product/(:num)'] = 'site/view_product/$1';

/*
*	Cart Routes
*/
$route['cart'] = 'site/cart/view_cart';
$route['cart/delete-item/(:any)/(:num)'] = 'site/cart/delete_cart_item/$1/$2';
$route['cart/update-cart'] = 'site/cart/update_cart';

/*
*	Account Routes
*/
$route['account'] = 'site/account/my_account';
$route['account/orders-list'] = 'site/account/orders_list';
$route['account/my-details'] = 'site/account/my_details';
$route['account/wishlist'] = 'site/account/wishlist';
$route['account/update-details'] = 'site/account/update_account';
$route['account/update-password'] = 'site/account/update_password';
$route['account/sign-out'] = 'login/logout_user';

/*
*	Checkout Routes
*/
$route['checkout'] = 'site/checkout/checkout_user';
$route['checkout/register'] = 'site/checkout/register';
$route['checkout/login'] = 'site/checkout/login_user/1';
$route['checkout/my-details'] = 'site/checkout/my_details';
$route['checkout/delivery'] = 'site/checkout/delivery';
$route['checkout/payment'] = 'site/checkout/payment_options';
$route['checkout/order'] = 'site/checkout/order_details';
$route['checkout/add-delivery-instructions'] = 'site/checkout/add_delivery_instructions';
$route['checkout/add-payment-options'] = 'site/checkout/add_payment_options';
$route['checkout/confirm-order'] = 'site/checkout/confirm_order';

$route['forgot-password'] = 'site/checkout/forgot_password';

/*
*	Categories Routes
*/
$route['all-categories'] = 'admin/categories/index';
$route['add-category'] = 'admin/categories/add_category';
$route['edit-category/(:num)'] = 'admin/categories/edit_category/$1';
$route['delete-category/(:num)'] = 'admin/categories/delete_category/$1';
$route['activate-category/(:num)'] = 'admin/categories/activate_category/$1';
$route['deactivate-category/(:num)'] = 'admin/categories/deactivate_category/$1';

/*
*	Orders Routes
*/
$route['all-orders'] = 'admin/orders/index';
$route['add-order'] = 'admin/orders/add_order';
$route['edit-order/(:num)'] = 'admin/orders/edit_order/$1';
$route['delete-order/(:num)'] = 'admin/orders/delete_order/$1';
$route['deactivate-order/(:num)'] = 'admin/orders/deactivate_order/$1';
$route['finish-order/(:num)'] = 'admin/orders/finish_order/$1';
$route['cancel-order/(:num)'] = 'admin/orders/cancel_order/$1';
$route['orders/add-product/(:num)/(:num)/(:num)/(:num)'] = 'admin/orders/add_product/$1/$2/$3/$4';
$route['orders/update-cart/(:num)/(:num)/(:num)'] = 'admin/orders/update_cart/$1/$2/$3';
$route['orders/delete-order-item/(:num)/(:num)'] = 'admin/orders/delete_order_item/$1/$2';

/*
*	Features Routes
*/
$route['all-features'] = 'admin/features/index';
$route['add-feature'] = 'admin/features/add_feature';
$route['edit-feature/(:num)'] = 'admin/features/edit_feature/$1';
$route['delete-feature/(:num)'] = 'admin/features/delete_feature/$1';
$route['activate-feature/(:num)'] = 'admin/features/activate_feature/$1';
$route['deactivate-feature/(:num)'] = 'admin/features/deactivate_feature/$1';

/*
*	Products Routes
*/
$route['all-products'] = 'admin/products/index';
$route['add-product'] = 'admin/products/add_product';
$route['edit-product/(:num)'] = 'admin/products/edit_product/$1';
$route['delete-product/(:num)'] = 'admin/products/delete_product/$1';
$route['activate-product/(:num)'] = 'admin/products/activate_product/$1';
$route['deactivate-product/(:num)'] = 'admin/products/deactivate_product/$1';

/*
*	Brands Routes
*/
$route['all-brands'] = 'admin/brands/index';
$route['add-brand'] = 'admin/brands/add_brand';
$route['edit-brand/(:num)'] = 'admin/brands/edit_brand/$1';
$route['delete-brand/(:num)'] = 'admin/brands/delete_brand/$1';
$route['activate-brand/(:num)'] = 'admin/brands/activate_brand/$1';
$route['deactivate-brand/(:num)'] = 'admin/brands/deactivate_brand/$1';

/*
*	Settings Routes
*/
$route['settings'] = 'admin/settings';
$route['dashboard'] = 'admin/index';

/*
*	Login Routes
*/
$route['login-admin'] = 'login/login_admin';
$route['logout-admin'] = 'login/logout_admin';

/*
*	Users Routes
*/
$route['all-users'] = 'admin/users';
$route['all-users/(:num)'] = 'admin/users/index/$1';
$route['add-user'] = 'admin/users/add_user';
$route['edit-user/(:num)'] = 'admin/users/edit_user/$1';
$route['delete-user/(:num)'] = 'admin/users/delete_user/$1';
$route['activate-user/(:num)'] = 'admin/users/activate_user/$1';
$route['deactivate-user/(:num)'] = 'admin/users/deactivate_user/$1';
$route['reset-user-password/(:num)'] = 'admin/users/reset_password/$1';
$route['admin-profile/(:num)'] = 'admin/users/admin_profile/$1';

/*
*	Admin Blog Routes
*/
$route['posts'] = 'admin/blog';
$route['all-posts'] = 'admin/blog';
$route['blog-categories'] = 'admin/blog/categories';
$route['add-post'] = 'admin/blog/add_post';
$route['edit-post/(:num)'] = 'admin/blog/edit_post/$1';
$route['delete-post/(:num)'] = 'admin/blog/delete_post/$1';
$route['activate-post/(:num)'] = 'admin/blog/activate_post/$1';
$route['deactivate-post/(:num)'] = 'admin/blog/deactivate_post/$1';
$route['post-comments/(:num)'] = 'admin/blog/post_comments/$1';
$route['comments/(:num)'] = 'admin/blog/comments/$1';
$route['comments'] = 'admin/blog/comments';
$route['add-comment/(:num)'] = 'admin/blog/add_comment/$1';
$route['delete-comment/(:num)/(:num)'] = 'admin/blog/delete_comment/$1/$2';
$route['activate-comment/(:num)/(:num)'] = 'admin/blog/activate_comment/$1/$2';
$route['deactivate-comment/(:num)/(:num)'] = 'admin/blog/deactivate_comment/$1/$2';
$route['add-blog-category'] = 'admin/blog/add_blog_category';
$route['edit-blog-category/(:num)'] = 'admin/blog/edit_blog_category/$1';
$route['delete-blog-category/(:num)'] = 'admin/blog/delete_blog_category/$1';
$route['activate-blog-category/(:num)'] = 'admin/blog/activate_blog_category/$1';
$route['deactivate-blog-category/(:num)'] = 'admin/blog/deactivate_blog_category/$1';
$route['delete-comment/(:num)'] = 'admin/blog/delete_comment/$1';
$route['activate-comment/(:num)'] = 'admin/blog/activate_comment/$1';
$route['deactivate-comment/(:num)'] = 'admin/blog/deactivate_comment/$1';

/*
*	Blog Routes
*/
$route['blog'] = 'blog';
$route['blog/(:num)'] = 'blog/index/$1';
$route['blog/(:num)/(:num)'] = 'blog/index/$1/$2';
$route['blog/post/(:num)'] = 'blog/view_post/$1';
$route['blog/category/(:num)'] = 'blog/index/$1';
$route['blog/category/(:num)/(:num)'] = 'blog/index/$1/$2';


/* End of file routes.php */
/* Location: ./application/config/routes.php */