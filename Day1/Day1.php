<?php
    function Br()
    {
        echo "<br>";
    }

    /****************1*************/
    echo "welcome to php";Br();

    /****************2*************/
    $x = 5;
    $y = 'Welcome';
    $z = true;
    /****************3*************/
    echo gettype($x);Br();
    echo gettype($y);Br();
    echo gettype($z);Br();
    /****************4*************/
    for ($i=0; $i < 16; $i++) { 
        echo (string)$i."\t";
    }
    Br();
    $num = 0;
    while ($num < 16) {
        echo $num."\t";
        $num++;
    }
    /****************5*************/
    Br();
    const VAL = "ITI";
    echo VAL;

    /****************6*************/
    $v1 = 0;
    $v2 = array(2,'Mohamed');
    $v3 = [1,2,3,4];
    $v4 = null;
    /****************7*************/
    $str_isset = "";
    $bol_isset = isset($str_isset);

    If ($bol_isset)
    {
        echo "The variable is set";Br();
    }
    else {
        echo "The variable is not set"; Br();  
    }

    $a = 0;

    /****************8*************/
    if (empty($a)) {
      echo "Variable 'a' is empty"; Br();
    }

    

    /****************9*************/
    $numOf50 = 0;
    if ($numOf50 > 50) {
      echo "congrats Your Number More than 50"; Br();
    }

    /****************10*************/
    echo "<table border='2px'>";
        echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Salary</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>salary of Mr. B</td>";
            echo "<td>15000$</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>salary of Mr. x</td>";
            echo "<td>1000$</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>salary of Mr. C</td>";
            echo "<td>10000$</td>";
        echo "</tr>";
    echo "</table>";
?>