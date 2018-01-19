<?php
/**
 * Created by PhpStorm.
 * User: CarlSon-BC
 * Date: 15.01.2018
 * Time: 16:42
 */

class encrypted
{
    private static function degree($a,$b){ // функция для возведения в степень
        $sum=1;
        for ($i=0;$i<$b;$i++){
            $sum*=$a;
        }
        return $sum;
    }

    private static function prostoechislo($n){ // функция Эйлера

        $ret = 1;
        for ($i=2;$i*$i<=$n;++$i){
            $p = 1;
            while ($n % $i == 0){
                $p *= $i;
                $n /= $i;
            }
            if (($p/=$i)>=1)
                $ret *= $p*($i-1);
        }

        return --$n ? $n*$ret : $ret;

    }

    public static function primitiveroot($g,$m){
        $phi=self::prostoechislo($m);
        $arr[] = $phi;
        $size = 0;
        $b = true;
        for ($i=0;($i<=$phi-1 && $b);$i++){
            $num=(self::degree($g,$i)%$m);
            for ($u=0;$u<$size;$u++){
                if ($arr[$u] == $num){
                    $b = false;
                }
            }
            $arr[$size]=$num;
            $size++;
        }
        #echo "Данное число ".$g." Является примитивным корнем по модулю ".$m.": ".$b;
        return $b;
    }

    public static function test($a,$b,$c,$d,$e,$f,$g,$p){
       # $g = 5;
        #$p = 23;
        if (self::primitiveroot($g,$p) == true){

            if ($a <= 10 && $b <= 10 && $c <=10 && $d <= 10 && $e <= 10 && $f <= 10){


                $A = $g * $a % $p; // Передаем бобу
                echo "Передаём второму собеседнику число $A <br>";
                $B = $g * $b % $p; // Передаем алисе
                echo "Передаём первому собеседнику число $B <br>";
                $C = $g * $c % $p; // Передаем бобу
                echo "Передаём второму собеседнику число $C <br>";
                $D = $g * $d % $p; // Передаем алисе
                echo "Передаём первому собеседнику число $D <br>";
                $E = $g * $e % $p; // Передаем бобу
                echo "Передаём второму собеседнику число $E <br>";
                $F = $g * $f % $p; // Передаем алисе
                echo "Передаём первому собеседнику число $F <br>";
                $lol = $B * $a % $p;
                echo "Первый собеседник получает число $lol <br>";
                $lol1 = $A * $b % $p;
                echo "Второй собеседник получает число $lol1 <br>";
                $lol2 = $D * $c % $p;
                echo "Первый собеседник получает число $lol2 <br>";
                $lol3 = $C * $d % $p;
                echo "Второй собеседник получает число $lol3 <br>";
                $lol4 = $F * $e % $p;
                echo "Первый собеседник получает число $lol4 <br>";
                $lol5 = $E * $f % $p;
                echo "Второй собеседник получает число $lol5 <br>";
                echo "Общий секретный ключ: $lol $lol2 $lol4 <br>";
            }

            else
                echo "Выбирите другие секретные числа!";


        }
        else
            echo "Выбирите другие общие числа!";

    }




}

