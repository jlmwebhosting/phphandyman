<?php

 /**
  * PHP String library
  *
  * @author Christian Hotz-Behofsits <chris@stagdesign.at>
  * 
  * For the full copyright and license information, please view the LICENSE
  * file that was distributed with this source code.
  */

class String{
	
	public static function startswith($haystack, $needle) {
   		return strpos($haystack, $needle) === 0;
	}

	public static function endswith($haystack, $needle) {
   		return strrpos($haystack, $needle) === strlen($haystack)-strlen($needle);
	}



}



?>