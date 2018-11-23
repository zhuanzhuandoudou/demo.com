<?php
  #一头大牛驼2袋大米，一头中牛驼一袋大米，两头小牛驼一袋大米，请问100袋大米需要多少头大牛，多少头中牛，多少头小牛？
  
  /**
   *
   *  2x+y+0.5z=100
   *
   *
   *
   */
  
  $time_start = microtime(true);
  $x = 0;
  $y = 0;
  $z = 0;
  
  $cattle[0] = 2;
  $cattle[1] = 1;
  $cattle[2] = 0.5;
  $daMi = 100;
  $count = 0;
  
  $cattle_min = min($cattle);
  $max_count = intval($daMi/$cattle_min);
  
  for ($i = 0;$i<$max_count;$i++){
    $x = $i;
    if ($x * $cattle[0] > $daMi){
      continue;
    }
    for ($k = 0;$k<$max_count;$k++){
        $y = $k;
      if ($x * $cattle[0] + $y* $cattle[1] > $daMi){
        continue;
      }
        for ($n = 0;$n<$max_count;$n++){
            $z = $n;
            $isOk = isOk($x, $y, $z, $cattle, $daMi);
            if ($isOk){
                $result = ['x'=> $x, 'y' => $y, 'z' => $z];
                $count++;
               // error_log(json_encode($result));
               // print_r($result);
               // echo "\r\n";
            }
        }
    }
  }
  
  
  function isOk($x, $y, $z, $cattle, $daMi){
    if ($x*$cattle[0] + $y*$cattle[1]+ $z*$cattle[2] == $daMi){
        return true;
    }else{
        return false;
    }
  
  
  }
  $time_end = microtime(true);
  
  
  echo $time_end-$time_start;
  echo "----";
  echo $count;
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  echo 22;

?>
