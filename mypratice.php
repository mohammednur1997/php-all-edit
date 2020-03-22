		<?php
		$x=1;
		while($x<=10)
		{
			echo "This is your number: $x <br/>";
			$x++;

		}
		echo'<br/>';
		echo'<br/>';

	    $color=array("green","red","yellow");
		foreach ($color as $murad) {
			echo $murad."<br/>";
		}

		for ($x=1; $x <=10; $x++) { 
			echo"This is your Number:$x <br/>";
		}

		function acalculate($argument1,$argument2)
		{
             $total=$argument1 * $argument2;
             return "zeeshan your number is :".$total;
		}
		echo acalculate(5,6);
		echo'<br/>';
		echo acalculate(5,4);


		?> 