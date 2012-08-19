<?php

 /**
  * PHP Handyman Array library
  *
  * @author Christian Hotz-Behofsits <chris@stagdesign.at>
  * 
  * For the full copyright and license information, please view the LICENSE
  * file that was distributed with this source code.
  */

class Array{
	
	public static function in_array($haystack, $needle) { 

	    $i = new RecursiveIteratorIterator(new RecursiveArrayIterator($haystack)); 

	    foreach($i as $item) { 
	        if($item == $needle) { 
	            return true; 
	        } 
	    } 

	    return false; 
	}

	/**
	 * return last element of array
	 */
	public static function last($array){
		end($array);
		return current($array);
	}

}

?>