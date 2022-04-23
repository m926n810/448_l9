<?php
echo "<style>
table, td{
  border:0.5px solid darkblue
}
</style>";
echo "<table>";
for($x=0; $x<101;$x++){
	if($x==0){
      for($y=0; $y<101;$y++){
          if($y==0) echo "<td>  </td>";
          else echo "<td> $y </td>";
      }
    }else{
    echo "<tr>";
    for($y=0; $y<101;$y++){
        if($y==0) echo "<td> $x </td>";
        else {
        $z=$x*$y;
        echo "<td> $z </td>";
        }
    }
    echo "</tr>";
    }
}
echo "</table>";
?> 