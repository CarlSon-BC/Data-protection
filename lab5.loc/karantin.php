<?php
/**
 * Created by PhpStorm.
 * User: CarlSon-BC
 * Date: 15.01.2018
 * Time: 23:47
 */

class karantin
{
    public static function fail(){
            $fp = fopen("test.txt", "r");
            $slovo = array();
            $massiv_bolshoy = array();
            $i = 0;
            while (!feof($fp)) {
                $s = fgetc($fp);
                if ($s != " ") {
                    // в ключ = id; а в значение = слово
                    $slovo[] = $s;
                } else {
                    $massiv_bolshoy[$i] = $slovo;
                    $i++;
                    unset($slovo);
                }
                // ОБЯЗАТЕЛЬНО В КОНЕЦ ФАЙЛА ПРОБЕЛ
            }
            fclose($fp);
        return $massiv_bolshoy;
    }
    public static function splits($massiv_bolshoy){
        /*echo "<pre>";
        print_r($massiv_bolshoy);
        echo "<pre>";*/
        $correct = array();
        $not_correct = array();
        foreach ($massiv_bolshoy as $key=>$value){// здесь выбираем все правильные слова и заносим их в correct из букв
            $i=1;
            foreach ($value as $key1=>$value1) {
                if (!ctype_alpha($value1)){
                    $not_correct[$key]=$value;
                    $i=-1;
                    break;
                }
            }
            if ($i!=-1){
                $correct[$key]=$value;
            }
        }
        foreach ($not_correct as $key=>$value){ // из неккоректного массива переносим обратно в корректный слова с цифрами
            $k=0;
            foreach ($value as $key1=>$value1){
                if (ctype_digit($value1)){
                   $k++;
                }
            }
            if ($k==count($value)){
                $correct[$key]=$value;
                unset($not_correct[$key]);
            }
        }
        foreach ($not_correct as $key=>$value){// удаление цифр из слова
            $i=0;
            foreach ($value as $key1=>$value1){
                if (ctype_digit($value1)){
                    unset($value[$key1]);
                    $i=2;
                    break;
                }
            }
            if ($i==2){
                $correct[$key]=$value;
                unset($not_correct[$key]);
            }

        }
        foreach ($not_correct as $key=>$value){ // удаляем все знаки в середине слова
            $i=0;
            $j=0;
            foreach ($value as $key1=>$value1){
                if (!ctype_alpha($value1)){
                    if ($key1+1!=count($value)+$j) {
                        unset($value[$key1]);
                        $i = 2;
                        $j++;
                    }
                }
            }
            if ($i==2){
                $correct[$key]=$value;
                unset($not_correct[$key]);
            }
        }
        foreach ($not_correct as $key=>$value){ // переводим все некорректные в корректные
            $correct[$key]=$value;
            unset($not_correct[$key]);
        }
        return($correct);
    }
    public static function skleika($massiv){ // вывод масивов
        ksort($massiv);
        echo "<pre>";
        foreach ($massiv as $key=>$value){
             $test[]=implode($value)." ";
        }
        echo implode($test);
    }
}


$test = karantin::fail();

$test1 = karantin::splits($test);

karantin::skleika($test1);
