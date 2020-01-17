#!/usr/bin/php
<?php
function epur_str($str)
{
	$out = preg_replace('/ +/', ' ', $str);
	$out = preg_replace('/^ | $/', '', $out);
	return ($str);
}
$str = implode(' ', array_slice($argv, 1));
$out = explode(' ', epur_str($str));
sort($out);
foreach($out as $elem)
	echo $elem."\n";
?>

#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$i = 1;
	while($i < $argc)
	{
		$string .= " ".$argv[$i]." ";
		$i++;
	}
	$trimmed = trim($string);
	while ((strpos($trimmed, "  ")) == TRUE)
		$trimmed = str_replace("  ", " ", $trimmed);
	$tab = explode(" ", $trimmed);
	sort($tab);
	foreach ($tab as $elem)
		echo "$elem\n";
}
?>

#!/usr/bin/php
<?PHP
    if ($argc > 1)
    {
        $tab = [];
        $i = 1;
        while ($i < $argc)
        {
            $split = preg_split("/\s+/", trim($argv[$i]));
            $tab = array_merge($split, $tab);
            $i++;
        }
        sort($tab);
		foreach ($tab as $t)
		{
			$t = trim($t) . "\n";
			if ($t != "\n")
				echo $t;
		}
}
?>
