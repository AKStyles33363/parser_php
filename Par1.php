<?php 
header("Content-Type: text/html; charset=utf-8");
require_once("vendor/autoload.php");
function Parse(&$p1, $p2, $p3) {
    $num1 = strpos($p1, $p2);
    if ($num1 === false) return 0;
    $num2 = substr($p1, $num1);
    $num3 = strpos($num2, $p3);
    if ($num3 === false) {
        return 0;
    }
    $p1 = substr($num2, $num3 + strlen($p3) );    
    return strip_tags(substr($num2, 0, $num3));
}
$String = file_get_contents('https://www.behance.net/search?field=branding&sort=appreciations');

$doc = phpQuery::newDocument($String);
?>

<b><p><?php echo '<br>'.Parse($doc,'<span data-ut="outline-dropdown-button-value" class="OutlinedDropdownButton-filterText-24Z">','</span>');?></p></b>

<?
while (($result = Parse($doc, '<span class="TitleOwner-limitHeight-2_Y">','</a>')) &  ($result2 = Parse($doc, '<div class="Stats-stats-1iI">','</span>'))) {
//$Result = $result.$result2;
echo '<br>'.$result.' - '.$result2; 
}

$String2 = file_get_contents('https://www.behance.net/search?field=web%20design&sort=appreciations');

$doc2 = phpQuery::newDocument($String2);
?>

<b><p><?php echo '<br>'.Parse($doc2,'<span data-ut="outline-dropdown-button-value" class="OutlinedDropdownButton-filterText-24Z">','</span>');?></p></b>

<?
while (($result3 = Parse($doc2, '<span class="TitleOwner-limitHeight-2_Y">','</a>')) &  ($result4 = Parse($doc2, '<div class="Stats-stats-1iI">','</span>'))) {
//$Result = $result.$result2;
echo '<br>'.$result3.' - '.$result4; 
}

$String3 = file_get_contents('https://www.behance.net/search?field=graphic%20design&sort=appreciations');

$doc3 = phpQuery::newDocument($String3);
?>

<b><p><?php echo '<br>'.Parse($doc3,'<span data-ut="outline-dropdown-button-value" class="OutlinedDropdownButton-filterText-24Z">','</span>');?></p></b>

<?
while (($result5 = Parse($doc3, '<span class="TitleOwner-limitHeight-2_Y">','</a>')) &  ($result6 = Parse($doc3, '<div class="Stats-stats-1iI">','</span>'))) {
//$Result = $result.$result2;
echo '<br>'.$result5.' - '.$result6; 
}

$String4 = file_get_contents('https://www.behance.net/search?field=ui%2Fux&sort=appreciations');

$doc4 = phpQuery::newDocument($String4);
?>

<b><p><?php echo '<br>'.Parse($doc4,'<span data-ut="outline-dropdown-button-value" class="OutlinedDropdownButton-filterText-24Z">','</span>');?></p></b>

<?
while (($result7 = Parse($doc4, '<span class="TitleOwner-limitHeight-2_Y">','</a>')) &  ($result8 = Parse($doc4, '<div class="Stats-stats-1iI">','</span>'))) {
//$Result = $result.$result2;
echo '<br>'.$result7.' - '.$result8; 
}

$String5 = file_get_contents('https://www.behance.net/search?field=interaction%20design&sort=appreciations');

$doc5 = phpQuery::newDocument($String5);
?>

<b><p><?php echo '<br>'.Parse($doc5,'<span data-ut="outline-dropdown-button-value" class="OutlinedDropdownButton-filterText-24Z">','</span>');?></p></b>

<?
while (($result9 = Parse($doc5, '<span class="TitleOwner-limitHeight-2_Y">','</a>')) &  ($result10 = Parse($doc5, '<div class="Stats-stats-1iI">','</span>'))) {
//$Result = $result.$result2;
echo '<br>'.$result9.' - '.$result10; 
}
?>