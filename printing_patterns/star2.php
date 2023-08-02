<?php
for ($i = 1; $i <= 5; $i++){

    for($j=1; $j <= $i; $j++){
        // space printing
        echo "&nbsp;&nbsp;";
    }

    // star printing
    for($star = 5; $star >= $i; $star--){   
        echo "*";
    }

    // jump to another row
    echo "<br />";
}
?>


