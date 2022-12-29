<?php
//for wikipedia example

// include('./simple_html_dom.php');

// $html = file_get_html('https://en.wikipedia.org/wiki/India');

// echo $html->find('table',0)->find('div',0)->innertext;

?>
<!-- <br>
<img src="<?php //echo $html->find('table',0)->find('img',0)->src ?>" alt="" srcset="">
<br> -->
<?php

session_start();

include('./simple_html_dom.php');

$username = $_SESSION['username'];

$html = file_get_html('https://en.wikipedia.org/wiki/India');
echo $html;

echo "<br>$username</br>";