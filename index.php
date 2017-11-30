<?php
require_once 'rss_php.php';

$rss = new rss_php;
$rss->load('http://eprints.cdu.edu.ua/cgi/latest_tool?output=RSS2');
$items = $rss->getItems();

$html = '';
foreach($items as $index => $item) {
    $html .= '<p><a href="'.$item['link'].'" title="'.$item['title'].'"><strong>'.$item['title'].'</strong></a><br />
                    '.$item['description'].'<br />
                    </p>';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Lab6</title>
</head>

<body>
<?php
echo $html;
?>
</body>
</html>