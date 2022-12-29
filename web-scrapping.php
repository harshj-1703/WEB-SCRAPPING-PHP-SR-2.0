<?php
session_start();

$username = $_SESSION['username'];

include('./simple_html_dom.php');

// $html = file_get_html('https://www.instagram.com/');
$html = file_get_html('https://en.wikipedia.org/wiki/India');

// echo $html->find('h2._aacl _aacs _aact _aacx _aada',0)->plaintext;

echo $html->find('table',0)->find('div',0)->innertext;
// echo $html->find('table',0)->find('img',0)->src;

?><br>
<img src="<?php echo $html->find('table',0)->find('img',0)->src ?>" alt="" srcset="">
<br>
<?php
echo $username;