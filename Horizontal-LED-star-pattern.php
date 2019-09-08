<!DOCTYPE html>
<html>
<head>
	<title>Horizontal LED Panel</title>
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
	echo "<a style='text-align:right;' href='Vertical-LED-star-pattern.php'>Vertical LED</a><br><br>";

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
		//echo "<br>";
	}

	for($i = 0; $i < 7; $i++)
	{
		for($j = 0; $j < strlen($word[0]); $j++)
		{
			$char = strtoupper($word[0][$j]).$i;
			$char();
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		echo "<br>";
	}

function A0()
{
    print_row([1,2,3]);
}
function A1()
{
	print_row([0,4]);
}
function A2()
{
	print_row([0,4]);
}
function A3()
{
	print_row([0,1,2,3,4]);
}
function A4()
{
	print_row([0,4]);
}
function A5()
{
	print_row([0,4]);
}
function A6()
{
	print_row([0,4]);
}

function B0()
{
    print_row([0,1,2,3]);
}
function B1()
{
	print_row([0,4]);
}
function B2()
{
	print_row([0,4]);
}
function B3()
{
	print_row([0,1,2,3]);
}
function B4()
{
	print_row([0,4]);
}
function B5()
{
	print_row([0,4]);
}
function B6()
{
	print_row([0,1,2,3]);
}

function C0()
{
	print_row([1,2,3]);
}
function C1()
{
	print_row([0,4]);
}
function C2()
{
	print_row([0]);
}
function C3()
{
	print_row([0]);
}
function C4()
{
	print_row([0]);
}
function C5()
{
	print_row([0,4]);
}
function C6()
{
	print_row([1,2,3]);
}

function D0()
{
	print_row([0,1,2,3]);
}
function D1()
{
	print_row([0,4]);
}
function D2()
{
	print_row([0,4]);
}
function D3()
{
	print_row([0,4]);
}
function D4()
{
	print_row([0,4]);
}
function D5()
{
	print_row([0,4]);
}
function D6()
{
	print_row([0,1,2,3]);
}

function E0()
{
	print_row([0,1,2,3,4]);
}
function E1()
{
	print_row([0]);
}
function E2()
{
	print_row([0]);
}
function E3()
{
	print_row([0,1,2,3,4]);
}
function E4()
{
	print_row([0]);
}
function E5()
{
	print_row([0]);
}
function E6()
{
	print_row([0,1,2,3,4]);
}

function F0()
{
	print_row([0,1,2,3,4]);
}
function F1()
{
	print_row([0]);
}
function F2()
{
	print_row([0]);
}
function F3()
{
	print_row([0,1,2,3]);
}
function F4()
{
	print_row([0]);
}
function F5()
{
	print_row([0]);
}
function F6()
{
	print_row([0]);
}

function G0()
{
	print_row([1,2,3]);
}
function G1()
{
	print_row([0,4]);
}
function G2()
{
	print_row([0]);
}
function G3()
{
	print_row([0,3,4]);
}
function G4()
{
	print_row([0,4]);
}
function G5()
{
	print_row([0,4]);
}
function G6()
{
	print_row([1,2,3]);
}

function H0()
{
	print_row([0,4]);
}
function H1()
{
	print_row([0,4]);
}
function H2()
{
	print_row([0,4]);
}
function H3()
{
	print_row([0,1,2,3,4]);
}
function H4()
{
	print_row([0,4]);
}
function H5()
{
	print_row([0,4]);
}
function H6()
{
	print_row([0,4]);
}

function I0()
{
	print_row([0,1,2,3,4]);
}
function I1()
{
	print_row([2]);
}
function I2()
{
	print_row([2]);
}
function I3()
{
	print_row([2]);
}
function I4()
{
	print_row([2]);
}
function I5()
{
	print_row([2]);
}
function I6()
{
	print_row([0,1,2,3,4]);
}

function J0()
{
	print_row([0,1,2,3,4]);
}
function J1()
{
	print_row([2]);
}
function J2()
{
	print_row([2]);
}
function J3()
{
	print_row([2]);
}
function J4()
{
	print_row([0,2]);
}
function J5()
{
	print_row([0,2]);
}
function J6()
{
	print_row([1]);
}

function K0()
{
	print_row([0,4]);
}
function K1()
{
	print_row([0,3]);
}
function K2()
{
	print_row([0,2]);
}
function K3()
{
	print_row([0,1]);
}
function K4()
{
	print_row([0,2]);
}
function K5()
{
	print_row([0,3]);
}
function K6()
{
	print_row([0,4]);
}

function L0()
{
	print_row([0]);
}
function L1()
{
	print_row([0]);
}
function L2()
{
	print_row([0]);
}
function L3()
{
	print_row([0]);
}
function L4()
{
	print_row([0]);
}
function L5()
{
	print_row([0]);
}
function L6()
{
	print_row([0,1,2,3,4]);
}

function M0()
{
	print_row([0,4]);
}
function M1()
{
	print_row([0,1,3,4]);
}
function M2()
{
	print_row([0,2,4]);
}
function M3()
{
	print_row([0,4]);
}
function M4()
{
	print_row([0,4]);
}
function M5()
{
	print_row([0,4]);
}
function M6()
{
	print_row([0,4]);
}

function N0()
{
	print_row([0,4]);
}
function N1()
{
	print_row([0,4]);
}
function N2()
{
	print_row([0,1,4]);
}
function N3()
{
	print_row([0,2,4]);
}
function N4()
{
	print_row([0,3,4]);
}
function N5()
{
	print_row([0,4]);
}
function N6()
{
	print_row([0,4]);
}

function O0()
{
	print_row([1,2,3]);
}
function O1()
{
	print_row([0,4]);
}
function O2()
{
	print_row([0,4]);
}
function O3()
{
	print_row([0,4]);
}
function O4()
{
	print_row([0,4]);
}
function O5()
{
	print_row([0,4]);
}
function O6()
{
	print_row([1,2,3]);
}

function P0()
{
	print_row([0,1,2,3]);
}
function P1()
{
	print_row([0,4]);
}
function P2()
{
	print_row([0,4]);
}
function P3()
{
	print_row([0,1,2,3]);
}
function P4()
{
	print_row([0]);
}
function P5()
{
	print_row([0]);
}
function P6()
{
	print_row([0]);
}

function Q0()
{
	print_row([1,2,3]);
}
function Q1()
{
	print_row([0,4]);
}
function Q2()
{
	print_row([0,4]);
}
function Q3()
{
	print_row([0,4]);
}
function Q4()
{
	print_row([0,2,4]);
}
function Q5()
{
	print_row([0,3,4]);
}
function Q6()
{
	print_row([1,2,3]);
}

function R0()
{
	print_row([0,1,2,3]);
}
function R1()
{
	print_row([0,4]);
}
function R2()
{
	print_row([0,4]);
}
function R3()
{
	print_row([0,1,2,3]);
}
function R4()
{
	print_row([0,2]);
}
function R5()
{
	print_row([0,3]);
}
function R6()
{
	print_row([0,4]);
}

function S0()
{
	print_row([1,2,3]);
}
function S1()
{
	print_row([0,4]);
}
function S2()
{
	print_row([1]);
}
function S3()
{
	print_row([2]);
}
function S4()
{
	print_row([3]);
}
function S5()
{
	print_row([0,4]);
}
function S6()
{
	print_row([1,2,3]);
}

function T0()
{
	print_row([0,1,2,3,4]);
}
function T1()
{
	print_row([2]);
}
function T2()
{
	print_row([2]);
}
function T3()
{
	print_row([2]);
}
function T4()
{
	print_row([2]);
}
function T5()
{
	print_row([2]);
}
function T6()
{
	print_row([2]);
}

function U0()
{
	print_row([0,4]);
}
function U1()
{
	print_row([0,4]);
}
function U2()
{
	print_row([0,4]);
}
function U3()
{
	print_row([0,4]);
}
function U4()
{
	print_row([0,4]);
}
function U5()
{
	print_row([0,4]);
}
function U6()
{
	print_row([1,2,3]);
}

function V0()
{
	print_row([0,4]);
}
function V1()
{
	print_row([0,4]);
}
function V2()
{
	print_row([0,4]);
}
function V3()
{
	print_row([0,4]);
}
function V4()
{
	print_row([0,4]);
}
function V5()
{
	print_row([1,3]);
}
function V6()
{
	print_row([2]);
}

function W0()
{
	print_row([0,4]);
}
function W1()
{
	print_row([0,4]);
}
function W2()
{
	print_row([0,4]);
}
function W3()
{
	print_row([0,4]);
}
function W4()
{
	print_row([0,2,4]);
}
function W5()
{
	print_row([0,1,3,4]);
}
function W6()
{
	print_row([0,4]);
}

function X0()
{
	print_row([0,4]);
}
function X1()
{
	print_row([0,4]);
}
function X2()
{
	print_row([1,3]);
}
function X3()
{
	print_row([2]);
}
function X4()
{
	print_row([1,3]);
}
function X5()
{
	print_row([0,4]);
}
function X6()
{
	print_row([0,4]);
}

function Y0()
{
	print_row([0,4]);
}
function Y1()
{
	print_row([0,4]);
}
function Y2()
{
	print_row([0,4]);
}
function Y3()
{
	print_row([1,3]);
}
function Y4()
{
	print_row([2]);
}
function Y5()
{
	print_row([2]);
}
function Y6()
{
	print_row([2]);
}

function Z0()
{
	print_row([0,1,2,3,4]);
}
function Z1()
{
	print_row([0,4]);
}
function Z2()
{
	print_row([3]);
}
function Z3()
{
	print_row([2]);
}
function Z4()
{
	print_row([1]);
}
function Z5()
{
	print_row([0,4]);
}
function Z6()
{
	print_row([0,1,2,3,4]);
}

?>
</div>
</body>
</html>