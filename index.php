<?php
require_once "vendor/autoload.php";

use Matematika\Factory\LogikaFactory;
$baru = new LogikaFactory;
$a = $baru->konjungsi();
echo'<pre>';
print_r($a->hasil());
echo'</pre>';
 ?>
