<?php
//for wikipedia example

// include('./simple_html_dom.php');

// $html = file_get_html('https://en.wikipedia.org/wiki/India');

// echo $html->find('table',0)->find('div',0)->innertext;

?>
<!-- <br>
<img src="<?php //echo $html->find('table',0)->find('img',0)->src ?>" alt="" srcset="">
<br> -->

<!-- --------------------------------------------------------------------------------------------------------------------------------- -->
<?php

session_start();

$username = $_SESSION['username'];

// include('./simple_html_dom.php');

// $html = file_get_html('https://www.instagram.com');
// echo $html;

// echo "<br>$username</br>";
//-------------------------------------------------------------------------------------------------------------------------------------

use Phpfastcache\Helper\Psr16Adapter;
require __DIR__ . '/../vendor/autoload.php';

//with cred.
// $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'username', 'password', new Psr16Adapter('Files'));
// $instagram->setUserAgent('User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0');
// $instagram->login(false, true);
// $instagram->saveSession();

//without cred.
$instagram = new \InstagramScraper\Instagram(new \GuzzleHttp\Client());

$account = $instagram->getAccount('kevin');

echo $account->getFullName();