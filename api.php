<?php
 /**
 * api.php is a sample API file to be called via AJAX to 
 * deliver the contents of multiple JSON files, each of which orders the 
 * data by month.
 *
 * The page can be called via AJAX either via GET or POST, using a variable 
 * named "cat":
 *
 * <code>
 * demo-api.php?cat=march
 * </code>
 *
 * In the example above, the parameter cat is loaded with the string "box" 
 * which will indicate to the API to load the JSON file containing 
 * the monthly concert schedule for the 2015 tour.
 *
 * THIS PHP PAGE IS BASED OFF THE PAGE BUILT BY BILL NEWMAN THAT CAN BE FOUND HERE:
 * @link https://github.com/newmanix/bond-web-service 
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @package bond-web-service
 * @author Bill Newman
 *
 *THIS PAGE HAS BEEN ADAPTED FOR STUDENT PURPOSES BY BRIAN FORCUM AND CAN BE FOUND HERE:
 *@link 
 */

if(isset($_REQUEST['cat']))
{//check to be sure data has been transmitted via GET or POST
	switch($_REQUEST['cat'])
	{//determine contents of 'cat'
		case "march":
			include('data/march-shows.js'); //"march" displays tour dates in March only
			break;
		case "april":
			include('data/april-shows.js'); //"april" displays tour dates in April only
			break;
		case "may":
			include('data/may-shows.js'); //"may" displays tour dates in May only
			break;
		case "june":
			include('data/june-shows.js'); //"may" displays tour dates in June only
			break;
		case "july":
			include('data/july-shows.js'); //"may" displays tour dates in July only
			break;
		default:
			include('data/all-shows.js'); //displays all tour dates in 2015 in chronological order
	}
}else{//if not data sent, inform calling application
	echo "Incorrect parameter sent";
}
