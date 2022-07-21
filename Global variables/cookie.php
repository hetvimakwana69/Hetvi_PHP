<?php
setcookie("user","cookie var",time()+(10));
echo $_COOKIE['user'];

setcookie("user","cookie var",time() -(30));
?>