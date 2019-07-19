<?php
//********** Page Details [start] **********//
$html_title = 'Surf'; // Page Title
$html_desription = 'Surf Test Website'; // Page Description 
$pageCategory   = "Home";
$pageTitle      = "Home Page";
$pageSubTitle   = "";
$templateType   = "Home Page";
//********** Page Details [end] **********//
?>

<?php

//********** Header [start] **********//
include ('./template/pageHeader.php');
include ('./template/globalHeader.php');
//********** Header [end] **********//
?>

<?php 
//********** Page Content [start] **********//
include ('./page/intro.php');
//********** Page Content [end] **********//
 ?>



	<?php 
    //********** Home Page Content [start] **********//
    include ('./page/quote.php');
    ?>
	<div class="background1">
	<?php 
    include ('./page/blog.php');
    include ('./page/shop.php');
    ?>
	</div>
	<div class="background2">
	<?php 
    include ('./page/news.php');
    include ('./page/register.php');
    include ('./page/address.php');
    //********** Home Page Content [end] **********//
    ?>
    </div>

</div>

<?php 
//********** Page Footer [start] **********//
include ('./template/globalFooter.php');
include ('./template/pageFooter.php');
//********** Page Footer [end] **********//
?>















