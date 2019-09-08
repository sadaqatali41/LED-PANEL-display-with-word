<!DOCTYPE html>
<html>
<head>
	<title>Vertical LED Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
	<style type="text/css">
		.container{margin-top: 2%;margin-left: 5%;}
		body{background-color: #00ff99;}
		span{
			height: 25px;
  			width: 25px;
			border-radius: 50%;
		}
	</style>
</head>
<body>
<div class="container">
<?php 
	$file = fopen("word.txt", "r");
	$word = fscanf($file, "%s\n");
	echo "Name is : ".strtoupper($word[0])."<br>";
	echo "<a style='text-align:right;' href='Horizontal-LED-star-pattern.php'>Horizontal LED</a><br><br>";

	function print_row(Array $cols)
	{
		for($i = 0; $i <  5; $i++)
		{
			$color = mt_rand(100000,999999);
			if(in_array($i, $cols))
			{
				echo "<span style='background-color:#".$color."'>*</span> &nbsp;&nbsp;";
			}
			else
			{
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			}
		}
		echo "<br>";
	}

	for($j = 0; $j < strlen($word[0]); $j++)
	{
		$char = strtoupper($word[0][$j]);
		$char();
		echo "<br><br>";
	}
	
function A()
{
    print_row([1,2,3]);
    print_row([0,4]);
    print_row([0,4]);
    print_row([0,1,2,3,4]);
    print_row([0,4]);
    print_row([0,4]);
    print_row([0,4]);
}

function B()
{
    print_row([0,1,2,3]);
    print_row([0,4]);
    print_row([0,4]);
    print_row([0,1,2,3]);
    print_row([0,4]);
    print_row([0,4]);
    print_row([0,1,2,3]);
}
function C()
{
	// C
	print_row([1,2,3]);
	print_row([0,4]);
	print_row([0]);
	print_row([0]);
	print_row([0]);
	print_row([0,4]);
	print_row([1,2,3]);
}

function D()
{
	// D
	print_row([0,1,2,3]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,1,2,3]);
}

function E()
{
	// E
	print_row([0,1,2,3,4]);
	print_row([0]);
	print_row([0]);
	print_row([0,1,2,3,4]);
	print_row([0]);
	print_row([0]);
	print_row([0,1,2,3,4]);
}

function F()
{
	// F
	print_row([0,1,2,3,4]);
	print_row([0]);
	print_row([0]);
	print_row([0,1,2,3]);
	print_row([0]);
	print_row([0]);
	print_row([0]);
}

function G()
{
	// G
	print_row([1,2,3]);
	print_row([0,4]);
	print_row([0]);
	print_row([0,3,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([1,2,3]);
}

function H()
{
	// H
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,1,2,3,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
}

function I()
{
	// I
	print_row([0,1,2,3,4]);
	print_row([2]);
	print_row([2]);
	print_row([2]);
	print_row([2]);
	print_row([2]);
	print_row([0,1,2,3,4]);
}

function J()
{
	// J
	print_row([0,1,2,3,4]);
	print_row([2]);
	print_row([2]);
	print_row([2]);
	print_row([0,2]);
	print_row([0,2]);
	print_row([1]);
}

function K()
{
	// K
	print_row([0,4]);
	print_row([0,3]);
	print_row([0,2]);
	print_row([0,1]);
	print_row([0,2]);
	print_row([0,3]);
	print_row([0,4]);
}

function L()
{
	// L
	print_row([0]);
	print_row([0]);
	print_row([0]);
	print_row([0]);
	print_row([0]);
	print_row([0]);
	print_row([0,1,2,3,4]);
}

function M()
{
	// M
	print_row([0,4]);
	print_row([0,1,3,4]);
	print_row([0,2,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
}

function N()
{
	// N
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,1,4]);
	print_row([0,2,4]);
	print_row([0,3,4]);
	print_row([0,4]);
	print_row([0,4]);
}

function O()
{
	// O
	print_row([1,2,3]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([1,2,3]);
}

function P()
{
	// P
	print_row([0,1,2,3]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,1,2,3]);
	print_row([0]);
	print_row([0]);
	print_row([0]);
}

function Q()
{
	// Q
	print_row([1,2,3]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,2,4]);
	print_row([0,3,4]);
	print_row([1,2,3]);
}

function R()
{
	// R
	print_row([0,1,2,3]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,1,2,3]);
	print_row([0,2]);
	print_row([0,3]);
	print_row([0,4]);
}

function S()
{
	// S
	print_row([1,2,3]);
	print_row([0,4]);
	print_row([1]);
	print_row([2]);
	print_row([3]);
	print_row([0,4]);
	print_row([1,2,3]);
}

function T()
{
	// T
	print_row([0,1,2,3,4]);
	print_row([2]);
	print_row([2]);
	print_row([2]);
	print_row([2]);
	print_row([2]);
	print_row([2]);
}

function U()
{
	// U
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([1,2,3]);
}

function V()
{
	// V
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([1,3]);
	print_row([2]);
}

function W()
{
	// W
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,2,4]);
	print_row([0,1,3,4]);
	print_row([0,4]);
}

function X()
{
	// X
	print_row([0,4]);
	print_row([0,4]);
	print_row([1,3]);
	print_row([2]);
	print_row([1,3]);
	print_row([0,4]);
	print_row([0,4]);
}

function Y()
{
	// Y
	print_row([0,4]);
	print_row([0,4]);
	print_row([0,4]);
	print_row([1,3]);
	print_row([2]);
	print_row([2]);
	print_row([2]);
}

function Z()
{
	// Z
	print_row([0,1,2,3,4]);
	print_row([0,4]);
	print_row([3]);
	print_row([2]);
	print_row([1]);
	print_row([0,4]);
	print_row([0,1,2,3,4]);
}

?>
</div>
</body>
</html>