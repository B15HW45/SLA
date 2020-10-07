//add to .../xammpp/user/htdocs
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
	<style>
		h2{
			color: white;
			background-color: black;
		  }
	</style>
<body>
	<h2>Constant Declaration</h2>
		<pre>
			<?php
			 //constant declaration
			define('username', 'user.desk-007');
			echo username;
			const pi = 3.1425;
			echo pi;
			define('Im_bad_Guy',false );
			echo Im_bad_Guy;
			if (Im_bad_Guy) {
				print('He dont get good girls');
			}
			else
			print('He gets good girls');			
			//constant using another constant
			define('bad_boy', !Im_bad_Guy);
			echo bad_boy;
			?>
		</pre><br>
	<h2>Resource data type</h2>
		<pre>
			<?php
			//resource data type
			$filename = fopen('Directory.txt','r+');
			echo gettype($filename);
			echo fread($filename,400);
			var_dump($filename);
			print_r($filename);//Gives limited resource
			$myname = "Bishwas";
			printf("Hello",$myname);//Output the formatted string
			?>
		</pre><br>
	<h2>String_Print</h2>
		<pre>
			<?php
			//string == %s
			//integer == %d
			$Students = 30;
			$Faculty = 'BCA';
			$stringFormat = "there are %d Students in %s";
			echo sprintf($stringFormat,$Students,$Faculty);
			?>
		</pre>
	<h2>Array Declaration</h2>
		<pre>
			<?php
			$Students = array('student1','student2','student3','student4');
			$teachers = ['teacher1','teacher2'];
			echo $Students[1];
			echo $teachers[0]; 
			// limiting the size of array 
			$arraylimit = new SplFixedArray(5);
			$arraylimit[0] = 'Hey';
			$arraylimit[2] = 'Soul Sister';
			echo $arraylimit[0]; 
			echo $arraylimit[1]; 
			echo $arraylimit[2]; 
			//set the size of array
			$arraylimit -> setSize(15);//from 0 to 14 is possible
			$arraylimit[13] = true;
			?>
		</pre><br>
	<h2>Key value pair</h2>
		<pre>
			<?php
 			$staff = array('firstname'=>'Gopal','lastname'=>'Dai','Address'=>'Kalanki','phone'=>986946411,'region'=>'Gandaki');
 			echo "Our canteen staff name is", $staff['firstname'], $staff['lastname'];
			?>
		</pre><br>
	<h2>Looping through array</h2>
		<pre>
			<?php
			foreach ($staff as $key => $value) {
			echo "Key = ",$key , "Value = ",$value,"\n";
			}
			?>
		</pre><br>
	<h2>Array inside an array</h2>
		<pre>
			<?php
			$college = array(
			"staff"=>array('firstname'=>'Gopal','lastname'=>'Dai','Address'=>'Kalanki','phone'=>986946411,'region'=>'Gandaki'),
			"teacher"=>array('firstname'=>'Gopal','lastname'=>'Acharya','Address'=>'Teku','phone'=>9841503560,'region'=>'Bagmati'),
			);
			echo $college["teacher"],$college["staff"];
			
			foreach ($college as $keys => $values) {
				echo "key = " ,$keys, "value = ",$value,"\n";			
			}
			?>
		</pre>
</body>
</html>