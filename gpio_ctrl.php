<?php

	shell_exec("/usr/local/bin/gpio -g mode 17 out");
	//echo $_GET["ch"];
	switch ($_REQUEST["ch"]) {
		case 0:
			shell_exec("/usr/local/bin/gpio -g write 17 0");
			echo "LED is OFF";
			break;
		case 1:
			shell_exec("/usr/local/bin/gpio -g write 17 1");
			echo "LED is ON";
			break;
		
		case 4: //login
			if($_REQUEST["un"] === "smart" && $_REQUEST["pwd"]==="podium"){
				echo "index_demo.php?c=1";
			}
			else{
				echo "index_demo.php?c=2";
			}
		break;
	}

/*
         if(isset($_GET['off']))
         {
		echo "LED is off";
		shell_exec("/usr/local/bin/gpio -g write 17 0");
         }
	else if(isset($_GET['on']))
	{
		echo "LED is on";
		shell_exec("/usr/local/bin/gpio -g write 17 1");
	}
	else if(isset($_GET['blink']))
	{
		echo "LED is blinking";
		for($x = 0;$x<=4;$x++)
		{
			shell_exec("/usr/local/bin/gpio -g write 17 1");
			sleep(1);
			shell_exec("/usr/local/bin/gpio -g write 17 0");
			sleep(1);
		}
	}*/
?>
