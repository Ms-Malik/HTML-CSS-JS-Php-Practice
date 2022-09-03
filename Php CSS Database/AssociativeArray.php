<html>
   <body>
      
      <?php
       $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
        $salaries["Aamir"]=20000;
		foreach($salaries as $key=>$val)
         echo "Salary of $key is $val <br />";
        ksort($salaries);
		echo "<h1> After sorting by key</h1>";
		
		foreach($salaries as $key=>$val)
         echo "Salary of $key is $val <br />";
		 echo"<h1> using functions(pointers) to access the array</h1>";
		do
		 {
         echo " Salary of  ".key($salaries)." is ".current($salaries)."<br>";
		 }
		 while(next($salaries));
         $salaries["qadir"]=5000;
	    echo"<h1> After changing a value</h1>";
	    reset($salaries);
        do
        {
        echo " Salary of  ".key($salaries)." is ".current($salaries)."<br>";
        }
        while(next($salaries));
      ?>
   
   </body>
</html>