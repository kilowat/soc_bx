<?php
class Helper
{
    public static function vardump($arr, $var_dump = false)
    {
       echo "<pre style='background: #222;color: #54ff00;padding: 20px;'>";
       if ($var_dump){
          var_dump($arr);
       }
       else{
          print_r($arr);
       }
       echo "</pre>";
    }
    public static function formatBytes($size, $precision = 1) { 
      $base = log($size, 1024);
      $suffixes = array('', 'КБ', 'МБ', 'G', 'T');   
  
      return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
  } 
}