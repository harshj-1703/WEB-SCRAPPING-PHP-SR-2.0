<?php

include('./simple_html_dom.php');

$html = file_get_html('https://www.google.com');

echo $html->find('title',0)->plaintext;
