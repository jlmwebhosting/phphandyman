<?php

 /**
  * PHP String library
  *
  * @author Christian Hotz-Behofsits <chris@stagdesign.at>
  * 
  * For the full copyright and license information, please view the LICENSE
  * file that was distributed with this source code.
  */

 
class Path{
	
	public static function normalize($path) {
	    $raw = $path; //trim($path, "/");

	    $parts = explode("/", $raw);

	    $newpath = array();

	    array_walk($parts, function (&$item, $key) use(&$newpath){

	    	if($item === ".." && count($newpath) > 1){
	    		array_pop($newpath);
	    	}elseif($item === "."){
	    		return;
	    	}else{
	    		array_push($newpath, $item);
	    	}
	    });

	    $norm = implode("/", $newpath);

	    $norm = rtrim($norm, "/");

	    return $norm;
	}



}



?>