<?php
setcookie('sessionid', 'ASWa321', time() + 3600);
setcookie('sessionid', 'BBBNNC1');
echo $_COOKIE['sessionid'];
unset($_COOKIE['sessionid']);
echo $_COOKIE['sessionid'];
?>