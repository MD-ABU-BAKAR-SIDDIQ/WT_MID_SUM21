<?php
	
	$length = 10;
	$width = 10;

	
if($length === $width)
{
	echo "The shape is a square <br>";
}

	perimeter();
	area();

	function perimeter()

	{
		global $length;
		global $width;
		$perimeter = 2*($length+$width);
		echo "Perimeter of the rectangle is". " " .$perimeter ."<br>";} 

	function area()
	{
		global $length;
		global $width;
		$area = $length+$width;
		echo "area of the rectangle is"." " .$area;
	}
	


?>