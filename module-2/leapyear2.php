
<?php  
function leapyear($year)  
{  
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
}  
//For testing  
for($year=1901; $year<=2016; $year++)  
{  
    If (Leapyear($year))  
    {  
        echo "$year : LEAP YEAR<br />";  
    }  
    else  
    {  
        echo "$year : Not leap year<br />";  
    }  
}  
?>  
