<?php

 /**
  * PHP String library
  *
  * @author Christian Hotz-Behofsits <chris@stagdesign.at>
  * 
  * For the full copyright and license information, please view the LICENSE
  * file that was distributed with this source code.
  */

class File{
	
	public static function extension($path){
		return pathinfo($path, PATHINFO_EXTENSION);
	}


}



?>