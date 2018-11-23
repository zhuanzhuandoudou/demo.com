<?php
  /**
   * Created by PhpStorm.
   * User: MeetYou
   * Date: 2018/11/16
   * Time: 16:59
   */
  
  
  

  /*
 * k = 2x + y + 1/2z
 取值范围
 * 0 <= x <= 1/2k
 * 0 <= y <= k
 * 0 <= z < = 2k
 * x,y,z最大值 2k
 */
  $time_start = microtime(true);
  
  $daMi   = 100;
  $result = array();
  $count = 0;
  function isOk($t, $daMi, $result)
  {/*{{{*/
    $total   = 0;
    $hash    = array();
    $hash[1] = 2;
    $hash[2] = 1;
    $hash[3] = 0.5;
    for ($i = 1; $i <= $t; $i++) {
     
      $total += $result[$i] * $hash[$i];
    }
    if ($total <= $daMi) {
      return true;
    }
    return false;
  }/*}}}*/
  function backtrack($t, $daMi, $result)
  {/*{{{*/
   
    //递归出口
    if ($t > 4) {
      //输出最优解
      if ($daMi == (2 * $result[1] + $result[2] + 0.5 * $result[3])) {
        //echo "dami:${daMi},x:$result[1],y:$result[2]，z:$result[3]\n";
        global  $count;
        $count++;
      }
      return;
    }
    for ($i = 0; $i <= 2 * $daMi; $i++) {
      $result[$t] = $i;
      //剪枝
      if (isOk($t, $daMi, $result)) {
        backtrack($t + 1, $daMi, $result);
      }
      $result[$t] = 0;
    }
  }/*}}}*/
  backtrack(1, $daMi, $result);
  $time_end = microtime(true);
  
  
  echo $time_end-$time_start;
  echo "----";
  echo $count;
  