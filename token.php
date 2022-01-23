<?php
if (empty($_GET['token'])):
die('<h2 style="text-align:center; margin:2% auto;">You Can"t access directly this page without a Valid token.</h2><hr>
<div class="row" style="text-align:center;"> <p> Make sure the you have started right way.<br><br> <a href="/">Re-Start Again</a></p></div>
');
endif;
if (isset($_GET['token'])):
$post_token = $_GET['token'];
if($post_token !== $token):
die('<h2 style="text-align:center; margin:2% auto;">In valid Token.</h2><hr>
<div class="row" style="text-align:center;"> <p> Make sure the url you are trying to access is correct. <br><br> <a href="/">Re-Start Again</a></p></div>
');
endif;
endif;