<?php
echo "<b>Ques 1</b>"."<br/>";
$str="082307";
//chunk_split splits a strings into parts
echo substr(chunk_split($str,2,":"),0,-1)."<br/>"."<br/>";
echo "<b>Ques 2</b>"."<br/>";
$contain="The quick brown fox jumps over the lazy dog.";
//strstr checks whether specific word found in string
echo (strstr($contain,"jumps")?"Yes":"No")."<br/>"."<br/>";
echo "<b>Ques 3</b>"."<br/>";
$file="www.example.com/public_html/index.php";
/*strrchr check char from the end instead if start*/
$folder=substr(strrchr($file,"/"),1);
echo $folder ."<br/>"."<br/>";
echo "<b>Ques 4</b>"."<br/>";
$email="rayy@example.com";
echo substr(strchr($email,"@"),1)."<br/>"."<br/>";
echo "<b>Ques 5</b>"."<br/>";
$replace="the quick brown fox jumps over the lazy dog.";
echo str_replace("the","that",$replace)."<br/>"."<br/>";
echo "<b>Ques 6</b>"."<br/>";
/*$string1="football";
$string2="footboll";
if(strlen("$string1")==strlen("$string2"))
{
    $a=str_split($string1);
    $b=str_split($string2);
    $diff=array_diff($a,$b);
    echo ("First difference between two strings at position : $diff");
    for($i=0; $i<=strlen("$string1"); $i++)
    {
        if(a[i]!==b[i])
        {
            echo ("First difference between two strings at position $i: $a[i] vs $b[i]");
        }
    }
}*/
echo "<br/>";
echo "<b>Ques 9</b>"."<br/>";
$insert="The brown fox";
/*substr is used because it replace the part of string with another and 3 is the index 
where string will insert and 1 is the num of times string is replace*/
echo substr_replace($insert," quick ",3,1)."<br/>"."<br/>";
echo "<b>Ques 10</b>"."<br/>";
$num="05123096.00";
//ltrim(left trim) removes whitespace or predefined char from left
echo ltrim("$num","0")."<br/>"."<br/>";
echo "<b>Ques 11</b>"."<br/>";
echo "<br/>";
echo "<b>Ques 12</b>"."<br/>";
$date="12/06/2012";
echo str_replace("/","-",$date)."<br/>"."<br/>";
?>