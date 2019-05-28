<?php
// 問題1
for ($i=0; $i <101 ; $i++) { 
    echo $i .'<br>';
}

// 問題２
for ($i=1; $i <10 ; $i++) { 
    echo $i*3 .' ';
}

// 問題3
for ($i=0; $i <101 ; $i++) {
    if($i%3==0 && $i%5==0){
        echo 'FizzBuzz'.'<br>';
    }elseif($i%3==0){
        echo 'Fizz'.'<br>';
    }elseif($i%5==0){
        echo 'Buzz'.'<br>';
    }else{
        echo $i.'<br>';

    }
}

// 問題4
for ($i=0; $i <101 ; $i++) { 
    if($i%10==0){
        echo $i.'<br>';
    }else{
        echo $i;
    }
}

// 問題5
$alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];



// 問題6

$math=60;
$engulish=90;

if ($math+$engulish>=140 && $engulish>=60 && $math>=60) {
    echo '合格';
}else{
    echo '不合格';
}

// 問題７
for ($i=1; $i < 9; $i++) { 
    echo $i*1.'<br>';
    echo $i*2.'<br>';
    echo $i*3.'<br>';
    echo $i*4.'<br>';
    echo $i*5.'<br>';
    echo $i*6.'<br>';
    echo $i*7.'<br>';
    echo $i*8.'<br>';
    echo $i*9.'<br>';
}