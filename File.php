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

    public static function tail($path, $lines = 10) {
        $data = '';
        $block = 4096;
        $fp = fopen($path, 'r');
        $max = filesize($path);
     
        for($len = 0; $len < $max; $len += $block) {
            $seek = ($max - $len > $block) ? $block : $max - $len;
            fseek($fp, ($len + $seek) * -1, SEEK_END);
            $data = fread($fp, $seek) . $data;

            if(substr_count($data, PHP_EOL) >= $lines + 1) {
                if(substr($data, strlen($data)-1, 1) !== PHP_EOL) {
                    $data .= PHP_EOL;
                }

                preg_match('/(.*?\n){'. $lines .'}$/', $data, $match);
                fclose($fp);
                return $match[0];
            }
        }
        
        fclose($fp);
        return $data; 
    }


}



?>