<?php
/**
 * Created by PhpStorm.
 * User: CarlSon-BC
 * Date: 15.01.2018
 * Time: 19:47
 */

class rsashifr
{
    private static function prostoe(){ // метод генерации простого числа
        while (1){
            $z=0;
            $a=1+mt_rand(1,25); //рандом от 1 числа до 25
            for ($i=2;$i<$a;$i++){
               if ($a%$i==1)
                   continue;
               if ($a%$i==0){
                   $z=1;
                   break;
               }
            }
            if ($z==0){
                break;
            }
        }
        return $a;
    }

    private static function evklid($a,$b){ // алгоритм Евклида вычисления НОД
        while ($a && $b){
            if ($a >= $b){
                $a %= $b;
            }
            else
                $b %= $a;
            return $a | $b;
        }
    }

    public static function main($P){
            $p = self::prostoe(); // певрое простое число
            $q = self::prostoe(); // второе простое число
            $n = $p * $q;
            $fi = ($p - 1)*($q - 1); // функция эйлера для простого числа, свойство мультипликативности функции Эйлера (для любых взаимно простых чисел)
            $fitest = $fi; // эта функция эйлера для генерации
            $i = 0;
            while ($i==0){ // генерация открытой экспоненты
                $e = self::prostoe();
                $test =$e; // копия открытой экспоненты
                if ($e<$fitest){ // проверка на взаимную простоту
                    while ($e!=$fitest){
                        if ($e>$fitest){
                            $e = $e - $fitest;
                        }
                        else{
                            $fitest = $fitest - $e;
                        }
                    }
                    if ($e==1){
                        $i=1;
                    }
                }
            }
            echo "Сгенерированное случайное простое число №1 - $p <br>";
            echo "Сгенерированное случайное простое число №2 - $q <br>";
            echo "Функция Эйлера - $fi<br>";
            echo "Ваш открытый ключ: { $test, $n }<br>";
            $d=1; // генерация закрытой экспоненты
            while(($test*$d)%$fi!=1){
                $d++;
            }
            echo "Ваш закрытый ключ: { $d, $n }<br>";

            $shifr = ($P*$test)%$n;
            echo "Ваше число в зашифрованном виде: $shifr<br>";

            $rasshifr = ($shifr*$d)%$n;
            echo "Ваше число в расшифрованном ввиде: $rasshifr<br>";


    }

}

/*$test = 2;

rsashifr::main($test);*/