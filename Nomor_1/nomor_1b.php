<?php
  for ($row=0; $row<7; $row++){
    for ($column=0; $column<=7; $column++){
      if(($column == 1 or $column == 5) and ($row > 4 or $row < 2) or $row == $column and $column > 0 and $column < 6 or ($column == 2 and $row == 4) or ($column == 4 and $row == 2)){
        echo "*";
      } else {
        echo "&nbsp&nbsp";
      }
    }
    echo "<br>";
  }
?>