<?php

 /**
  * PHP Handyman Path library
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


	/**
	 * create relative path from base to target
	 */
	function relpath($base, $target){

	    /* break strings at slashes */
	    $s = explode('/', $source);
	    $r = explode('/', $target);

	    /* TODO replace shift with pop + revert */
	    
	    /* delete all parts to the first non-equal part */
	    while ($s[0] === $r[0]){
	        array_shift($s);
	        array_shift($r);
	    }
	    
	    /* add wild card to r_parts for each remaining */
	    // item of s_parts
	    while ($s[0])
	    {
	        array_unshift($r, '..');
	        array_shift($s);
	    }
	    
	    return implode('/', $r);
	}



}



?>