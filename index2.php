<?php
    if(isset($_POST['submit'])){    
    $chislo = $_POST['chislo'];
	if ($chislo % 2 == 0 ) {
		echo "Число четное";
	}
	if ($chislo % 2 == 1 ) {
		echo "Число нечетное";
	}
	}	
?>                              