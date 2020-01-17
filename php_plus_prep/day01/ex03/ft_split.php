<?php

function ft_split($text)
{
	$split = explode(" ", $text);
	$ret = array_filter($split, 'strlen');
	sort($ret);
	return($ret);
}

?>
