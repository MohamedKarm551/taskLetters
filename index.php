<?php
// $str= "AAAA asd bbbb";
// function replaceIt(&$str, $word , $new){
// if(str_contains($str,$word)){
// $str= str_replace($word,$new , $str)   ;
//  return true;
// }
// else{
//     return false;
// }
// }
// echo replaceIt($str, "asd" , "ccc")."<br>";
// echo $str;
//  14 -   8 -2022 
// print A To Z 
for ($i="A"; $i <= "Z" ; $i++) { 
   echo $i;
   if($i=="Z")break;
} 
echo "<hr>";
// letter A   by loop
//  ****** 
//  *    *
//  *    *
//  *    *
//  ******
//  *    *
//  *    *
//  *    *

echo "print A by loop "."<br>";
for ($i=0; $i < 8; $i++) { 
    if($i==0 || $i==4){
        echo "******"."<br>";
    }
    else{
        echo "*".str_repeat('&nbsp;', 8)."*"."<br>";
    }
}
echo "<hr>";

// 
// letter B  by loop
echo "print B by loop "."<br>";
for ($i=0; $i < 8; $i++) { 
    if($i==0 || $i==4 || $i==7){
        if($i==4){
            echo "****"."<br>";
        }
        else echo "*****"."<br>";
    }
    else{
        echo "*".str_repeat('&nbsp;', 8)."*"."<br>";
    }
}
echo "<hr>";
//  ***** 
//  *    *
//  *    *
//  *    *
//  ****
//  *    *
//  *    *
//  *****


// letter C    by loop : 
for ($i=0; $i < 7  ; $i++) { 
   if($i==0 || $i == 6){
   echo "*********"."<br>";

   }
   else{
    echo "*"."<br>"; continue;
   }
}
// *********
// *
// *
// *
// *
// *
// *********


?>