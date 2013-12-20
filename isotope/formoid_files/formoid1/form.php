<?php

define('EMAIL_FOR_REPORTS', 'davidguaita@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-cyan.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-cyan.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-metro-cyan" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Contact</h2></div>
	<div class="element-input"  <?frmd_add_class("input")?>><label class="title">Your name<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-email"  <?frmd_add_class("email1")?>><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email1" value="" required="required"/></div>
	<div class="element-textarea"  <?frmd_add_class("textarea")?>><label class="title">Message<span class="required">*</span></label><textarea class="medium" name="textarea" cols="20" rows="5" required="required"></textarea></div>

<div class="submit"><input type="submit" value="Submit"/></div></form>
<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-metro-cyan.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>