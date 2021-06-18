<?php
    function Br()
    {
        echo "<br>";
    }
    /*        Task 1   Indexed Arrays     */
    $arr = ["PHP", "Open Source", "ITI", "Day2", "Arrays"];

    /*        Task 2     Print the array elements using loop (2 methods)     */
    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i]."\t";
    }
    Br();
    $num = 0;
    while ($num < count($arr)) {
        echo $arr[$num]."\t";
        $num++;
    }
    Br();
    /*        Task 3   Associative Arrays     */

    $information = ["Name"=>"Mohamed","Age"=>"26","Email"=>"Mohamed@kh.com","Colloge"=>"ITI"];

    /*        Task 4  Print Associative Arrays     */
    foreach($information as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
      }
    /*        Task 5  Function Sort Associative Arrays     */
      rsort($information);
      sort($information);
      asort($information);
      ksort($information);
      print_r(array_keys($information));
?>