<form action="?" method="post"> <!-- "?"當前頁面刷新 -->
    <input type="number" name="stars">
    <input type="submit" value="送出">
</form>



<?php
//三角形星星函式

if(isset($_POST['stars'])){
    stars($_POST['stars']);
}


function stars($row){
    for($j=1;$j<=$row;$j++){
        
        for($i=0;$i<($row-$j);$i++){
            echo "&ensp;";
        }
        
        for($i=0;$i<(2*$j-1);$i++){
           
            echo "*";
        }
        echo "<br>";
    }
   
}

echo "<hr>"; //上下可以印出相同結果

$row=5;
for($j=1;$j<=$row;$j++){
        
    for($i=0;$i<($row-$j);$i++){
        echo "&ensp;";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "*";
    }
    echo "<br>";
}
$row=7;
for($j=1;$j<=$row;$j++){
        
    for($i=0;$i<($row-$j);$i++){
        echo "&ensp;";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "*";
    }
    echo "<br>";
}

$row=9;
for($j=1;$j<=$row;$j++){
        
    for($i=0;$i<($row-$j);$i++){
        echo "&ensp;";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "*";
    }
    echo "<br>";
}

$row=11;
for($j=1;$j<=$row;$j++){
        
    for($i=0;$i<($row-$j);$i++){
        echo "&ensp;";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "*";
    }
    echo "<br>";
}





?>