<?php

function ShowStar($count , $what="*"){
    if($count <= 0){
        echo'$count > 0, Please';
        return;
    }
    if($count > 21){
        echo'$count <=21, Please';
        return;
    }
    $result = "";
    for($i = 1; $i<= $count; $i++){
        $result .=  $what;
    }
    echo $result;
}
ShowStar(22,'$');



// function ShowStar($count , $what="*"){
    
//     $result = "";
//     for($i = 1; $i<= $count; $i++){
//         $result .=  $what;
//     }
//     echo $result;
// }
// ShowStar(5 );


// function ShowStar($count , $what="*"){

//     if($count <= 0 ){
//         echo"請輸入大於零數字";
//     }else if($count <=21){
    
//     $result = "";
//     for($i = 1; $i<= $count; $i++){
//         $result .=  $what;
//     }

//     echo $result;
//     }else{
//         echo"請小於22";
//     }

// }
// ShowStar(0 ,"$" );

?>