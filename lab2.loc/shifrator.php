<?php
/**
 * Created by PhpStorm.
 * User: CarlSon-BC
 * Date: 15.01.2018
 * Time: 14:47
 */



class shifrator
{
    private static $alfavit = array('00000' => 'а','00001' => 'б','00010' => 'в','00011' => 'г','00100' => 'д','00101' => 'е','00110' => 'ж','00111' => 'з','01000' => 'и','01001' => 'й','01010' => 'к','01011' => 'л','01100' => 'м','01101' => 'н','01110' => 'о','01111' => 'п','10000' => 'р','10001' => 'с','10010' => 'т','10011' => 'у','10100' => 'ф','10101' => 'х','10110' => 'ц','10111' => 'ч','11000' => 'ш','11001' => 'щ','11010' => 'ъ','11011' => 'ы','11100' => 'ь','11101' => 'э','11110' => 'ю','11111' => 'я');

    public static function shifrirovanie($test){
        $strlower = mb_strtolower($test, 'UTF-8');
        $strlower = preg_split('//u',$strlower,-1,PREG_SPLIT_NO_EMPTY);


        /*
         * Кодируем наш алфавит
         */
        foreach ($strlower as $key => $value){
            foreach (self::$alfavit as $key1 => $value1){
                if ($value == $value1){
                    $shifrmass[] = $key1; // Создаем массив, в котором элементами будут коды букв оригинального текста
                }
            }
        }

        $stroka_shifrmass = implode($shifrmass); // Массив в строку
        $end = iconv_strlen($stroka_shifrmass); // Кол-во символов в строке для создания ключа (учитывает кодировку строки)
        $shifrmass1 = preg_split('//u',$stroka_shifrmass,-1,PREG_SPLIT_NO_EMPTY); // Наш массив посимвольно

        /*
         * Создаем ключ шифрования. Если бы необходимо было дешифрование - сохранили бы
         */
        for ($i=0;$i<$end;$i++){
            $key_mass[$i] = mt_rand(0,1);
        }

        /*
         * Шифруем наш текст
         */

        $i=0; // Счетчик для ключа
        foreach ($shifrmass1 as $value3){
            while(i<=count($key_mass)){
                if ($value3 == $key_mass[$i]){
                    $result[] = 0;
                }
                elseif ($value3 != $key_mass[$i]){
                    $result[] = 1;
                }
                $i++;
                break;
            }

        }
        /*
         * Переводим символы в буквы
         */
        $result_last = implode($result);
        $result_last_last = str_split($result_last,5);
        foreach ($result_last_last as $key5 => $value5){
            foreach (self::$alfavit as $key6 => $value6){
                if ($value5 == $key6){
                    $result_last_last_last[] = $value6;
                }
            }
        }
        $the_end = implode($result_last_last_last);

        return $the_end;



    }
}


