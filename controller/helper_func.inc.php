<?php
function calp($pro1)
{
    $sum1[0] = 0; $sum1[1] = 0; $sum1[2] = 0;
    for($i=0;$i<5;$i++)
    {
        if(isset($pro1[$i]) && $pro1[$i] != 0 && $pro1[$i] != "")
        {
            $sum1[0] = ($pro1[$i]['0'] * $pro1[$i]['1']) + $sum1[0];
        }
    }
    $sum1[1] = $sum1[0] * 1.07;
    $sum1[2] = $sum1[1] - $sum1[0];
    return ($sum1);
}
//*************************************************************
function createTable($pro2,$pro3,$sum1)
{
    echo "<table class='table table-responsive' border='2' style='width: 40%;' '><tr style='background-color: #8dc393'><th>รายการสินค้า</th><th>ราคาต่อหน่วย</th><th>ปริมาณ</th><th>ราคา</th></tr>";
    for($i=0;$i<count($pro3);$i++)
    {
        if($pro3[$i]['1'] != null && $pro3[$i]['1'] != 0 )
        {
            echo "<tr><td>";
            echo $pro2[$i]->getNamePro();
            echo "</td><td>";
            echo $pro2[$i]->getPricePro();
            echo "</td><td>";
            echo $pro3[$i][1];
            echo "</td><td>";
            echo $pro2[$i]->getPricePro() * $pro3[$i][1];
            echo "</td></tr>";
        }
    }
    echo "<tr><td colspan='3'>ราคารวม</td><td>$sum1[0]</td></tr>";
    echo "<tr><td colspan='3'>ภาษีมูลค่าเพิ่ม(7%)</td><td>$sum1[2]</td></tr>";
    echo "<tr><td colspan='3'>ราคารวม(ภาษี 7%)</td><td>$sum1[1]</td></tr>";
    echo "</table>";
}

?>
