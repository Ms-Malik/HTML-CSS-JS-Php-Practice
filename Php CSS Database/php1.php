<?php
$my_str="www.example.com/public_html/index.php";
$pos=0;
$pos=(strrpos($my_str, "/"));
$pos=$pos+1;
echo(substr($my_str,$pos))."</br>";
$str="ray@gmai.com";
echo(strstr($str,"@",true))."</br>";
$str1="the fox jumps over the dog";
echo(str_replace("the","that",$str1))."</br>";
// $str1 = 'football';
// $str2 = 'footboll';
// $str_pos = strspn($str1 ^ $str2, "\0");
// printf('First difference between two strings at position %d: "%s" vs "%s"',
// $str_pos, $str1[$str_pos], $str2[$str_pos]);
// printf("\n");
$color=array("Red"=>"#FF0000","Blue"=>"#0000FF","Black"=>"#000000");
?>
<table border="1" cellspacing="1" cellpadding="1" width="50%">
    <?php 
    foreach($color as $key=>$val)
    {
        ?><tr>
        <td><?php echo "$key"?></td>
        <td style="background-color:<?php echo "$val"?>;">
        </td></tr><?php
    }
    ?>
    </table>
<?php
$ddown=array("one"=>"1","two"=>"2","three"=>"3","four"=>"4","five"=>"5","six"=>"6");
?>
Select a number:<select name="num">
    <?php
    foreach($ddown as $key=>$val)
    {
        echo "<option value=$key>$val</option>";
    }
    ?>
</select>
<?php
$weekdays=array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
echo"</br>Weekdays:";
for($i=0;$i<count($weekdays);$i++)
{
    echo "</br><input type=radio name=w value=$i>$weekdays[$i]</input>";
}
?>
