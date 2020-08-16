<?php
//This file provides the information for accessing the database and connection to MYSQL.
//First, we define the constants:
Define ('DB_USER', 'horatio');
Define ('DB_PASSWORD', 'Hmsv1ctOry');
Define ('DB_HOST', 'localhost');
Define ('DB_NAME', 'simpledb');

// Next we assign the database connection to a variable that we will call $dbcon: #2
try
	{
		$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		mysqli_set_charset($dbcon,'utf8'); //#4
		// more code will go here later
		}
		catch (Exception $e)
			//We finally handle any problems here #3
		{
			//print "An Exception occured. Message: " . $e->getMessage();
			print "The system is busy please try later";
		}
				catch(Error $e)
					{
						//print "An Error occured. Message: " . $e->getMessage();
						print "The system is busy please try again later.";
						}
						?>
		

