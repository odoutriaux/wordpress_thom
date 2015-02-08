<?php
if (in_category(get_category_by_slug('blog')->cat_ID)) {
	include (TEMPLATEPATH . '/single-blog.php');
}else if (in_category(get_category_by_slug('portfolio')->cat_ID)){ 
	include (TEMPLATEPATH . '/single-portfolio.php');
}
?>