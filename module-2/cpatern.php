<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
     if (($column == 1 and ($row != 0 and $row != 6)) or (($row == 0 or $row == 6) and ($column > 1 and $column < 5)) or ($column == 5 and ($row == 1 or $row == 5)))
            echo "*";    
        else  
            echo " ";     
	}        
  echo "\n<br>";
}


?>