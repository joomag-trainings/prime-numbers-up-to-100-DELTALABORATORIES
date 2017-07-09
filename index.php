<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/9/2017
 * Time: 5:06 PM
 */

function simpleNumbers($n){
    for($i=1 ; $i<=$n ; $i++ ){
        for($z=1; $z<=$i ; $z++){
            $rightStatements = 0;
            if($z%$i == 0){
                $rightStatements++;
            }
            if($rightStatements == 2){
                echo $i.'Is Simple Number </br>';
            }
        }
    }
}