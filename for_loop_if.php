
  <?php
    echo "For Loop Division 11 and break.<br><br>";
    for($i=3; $i<=1000; $i=$i+3){
      if($i%11!=0){
        echo "$i <br>";
      }
      else{
          if($i%11==0){
            break;
        }
      }
    }
