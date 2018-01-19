<?php
/**
 * Created by PhpStorm.
 * User: CarlSon-BC
 * Date: 14.01.2018
 * Time: 22:47
 */



class deshifrator
{
    private static $alfavit = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я');
    private static $unencrypted = array();
    private static $count0=0;
    private static $count1=0;
    private static $count2=0;
    private static $count3=0;
    private static $count4=0;
    private static $count5=0;
    private static $count6=0;
    private static $count7=0;
    private static $count8=0;
    private static $count9=0;
    private static $count10=0;
    private static $count11=0;
    private static $count12=0;
    private static $count13=0;
    private static $count14=0;
    private static $count15=0;
    private static $count16=0;
    private static $count17=0;
    private static $count18=0;
    private static $count19=0;
    private static $count20=0;
    private static $count21=0;
    private static $count22=0;
    private static $count23=0;
    private static $count24=0;
    private static $count25=0;
    private static $count26=0;
    private static $count27=0;
    private static $count28=0;
    private static $count29=0;
    private static $count30=0;
    private static $count31=0;
    private static $count32=0;

    public static function deshifrirovanie($text) {

        $lol = mb_strtolower($text, 'UTF-8');
        $lol1 = preg_split('//u',$lol,-1,PREG_SPLIT_NO_EMPTY);
        $kek = preg_replace('/[^абвгдеёжзийклмнопрстуфхцчшщъыьэюя]/','',$lol); // убираем все лишние символы
        $text1 = preg_split('//u',$kek,-1,PREG_SPLIT_NO_EMPTY);
        end($text1);
        $last_key = key($text1);


        foreach ($text1 as $key => $value){
            switch ($value){
                case self::$alfavit[0]:
                    self::$count0++;
                    break;
            }
            switch ($value){
                case self::$alfavit[1]:
                    self::$count1++;
                    break;
            }
            switch ($value){
                case self::$alfavit[2]:
                    self::$count2++;
                    break;
            }
            switch ($value){
                case self::$alfavit[3]:
                    self::$count3++;
                    break;
            }
            switch ($value){
                case self::$alfavit[4]:
                    self::$count4++;
                    break;
            }
            switch ($value){
                case self::$alfavit[5]:
                    self::$count5++;
                    break;
            }
            switch ($value){
                case self::$alfavit[6]:
                    self::$count6++;
                    break;
            }
            switch ($value){
                case self::$alfavit[7]:
                    self::$count7++;
                    break;
            }
            switch ($value){
                case self::$alfavit[8]:
                    self::$count8++;
                    break;
            }
            switch ($value){
                case self::$alfavit[9]:
                    self::$count9++;
                    break;
            }
            switch ($value){
                case self::$alfavit[10]:
                    self::$count10++;
                    break;
            }
            switch ($value){
                case self::$alfavit[11]:
                    self::$count11++;
                    break;
            }
            switch ($value){
                case self::$alfavit[12]:
                    self::$count12++;
                    break;
            }
            switch ($value){
                case self::$alfavit[13]:
                    self::$count13++;
                    break;
            }
            switch ($value){
                case self::$alfavit[14]:
                    self::$count14++;
                    break;
            }
            switch ($value){
                case self::$alfavit[15]:
                    self::$count15++;
                    break;
            }
            switch ($value){
                case self::$alfavit[16]:
                    self::$count16++;
                    break;
            }
            switch ($value){
                case self::$alfavit[17]:
                    self::$count17++;
                    break;
            }
            switch ($value){
                case self::$alfavit[18]:
                    self::$count18++;
                    break;
            }
            switch ($value){
                case self::$alfavit[19]:
                    self::$count19++;
                    break;
            }
            switch ($value){
                case self::$alfavit[20]:
                    self::$count20++;
                    break;
            }
            switch ($value){
                case self::$alfavit[21]:
                    self::$count21++;
                    break;
            }
            switch ($value){
                case self::$alfavit[22]:
                    self::$count22++;
                    break;
            }
            switch ($value){
                case self::$alfavit[23]:
                    self::$count23++;
                    break;
            }
            switch ($value){
                case self::$alfavit[24]:
                    self::$count24++;
                    break;
            }
            switch ($value){
                case self::$alfavit[25]:
                    self::$count25++;
                    break;
            }
            switch ($value){
                case self::$alfavit[26]:
                    self::$count26++;
                    break;
            }
            switch ($value){
                case self::$alfavit[27]:
                    self::$count27++;
                    break;
            }
            switch ($value){
                case self::$alfavit[28]:
                    self::$count28++;
                    break;
            }
            switch ($value){
                case self::$alfavit[29]:
                    self::$count29++;
                    break;
            }
            switch ($value){
                case self::$alfavit[30]:
                    self::$count30++;
                    break;
            }
            switch ($value){
                case self::$alfavit[31]:
                    self::$count31++;
                    break;
            }
            switch ($value){
                case self::$alfavit[32]:
                    self::$count32++;
                    break;
            }
        }

        /*
         * Подсчитываем частоту встречания букв
         */

        $count0=self::$count0 / $last_key;
        $count1=self::$count1 / $last_key;
        $count2=self::$count2 / $last_key;
        $count3=self::$count3 / $last_key;
        $count4=self::$count4 / $last_key;
        $count5=self::$count5 / $last_key;
        $count6=self::$count6 / $last_key;
        $count7=self::$count7 / $last_key;
        $count8=self::$count8 / $last_key;
        $count9=self::$count9 / $last_key;
        $count10=self::$count10 / $last_key;
        $count11=self::$count11 / $last_key;
        $count12=self::$count12 / $last_key;
        $count13=self::$count13 / $last_key;
        $count14=self::$count14 / $last_key;
        $count15=self::$count15 / $last_key;
        $count16=self::$count16 / $last_key;
        $count17=self::$count17 / $last_key;
        $count18=self::$count18 / $last_key;
        $count19=self::$count19 / $last_key;
        $count20=self::$count20 / $last_key;
        $count21=self::$count21 / $last_key;
        $count22=self::$count22 / $last_key;
        $count23=self::$count23 / $last_key;
        $count24=self::$count24 / $last_key;
        $count25=self::$count25 / $last_key;
        $count26=self::$count26 / $last_key;
        $count27=self::$count27 / $last_key;
        $count28=self::$count28 / $last_key;
        $count29=self::$count29 / $last_key;
        $count30=self::$count30 / $last_key;
        $count31=self::$count31 / $last_key;
        $count32=self::$count32 / $last_key;

        $array_count = array();


        array_push($array_count, $count0, $count1, $count2, $count3, $count4, $count5, $count6, $count7, $count8, $count9, $count10, $count11, $count12, $count13, $count14, $count15, $count16, $count17, $count18, $count19, $count20, $count21, $count22, $count23, $count24, $count25, $count26, $count27, $count28, $count29, $count30, $count31, $count32);

        $array_count['а'] = $array_count['0'];
        unset($array_count['0']); // Удаляем переменную
        $array_count['б'] = $array_count['1'];
        unset($array_count['1']);
        $array_count['в'] = $array_count['2'];
        unset($array_count['2']);
        $array_count['г'] = $array_count['3'];
        unset($array_count['3']);
        $array_count['д'] = $array_count['4'];
        unset($array_count['4']);
        $array_count['е'] = $array_count['5'];
        unset($array_count['5']);
        $array_count['ё'] = $array_count['6'];
        unset($array_count['6']);
        $array_count['ж'] = $array_count['7'];
        unset($array_count['7']);
        $array_count['з'] = $array_count['8'];
        unset($array_count['8']);
        $array_count['и'] = $array_count['9'];
        unset($array_count['9']);
        $array_count['й'] = $array_count['10'];
        unset($array_count['10']);
        $array_count['к'] = $array_count['11'];
        unset($array_count['11']);
        $array_count['л'] = $array_count['12'];
        unset($array_count['12']);
        $array_count['м'] = $array_count['13'];
        unset($array_count['13']);
        $array_count['н'] = $array_count['14'];
        unset($array_count['14']);
        $array_count['о'] = $array_count['15'];
        unset($array_count['15']);
        $array_count['п'] = $array_count['16'];
        unset($array_count['16']);
        $array_count['р'] = $array_count['17'];
        unset($array_count['17']);
        $array_count['с'] = $array_count['18'];
        unset($array_count['18']);
        $array_count['т'] = $array_count['19'];
        unset($array_count['19']);
        $array_count['у'] = $array_count['20'];
        unset($array_count['20']);
        $array_count['ф'] = $array_count['21'];
        unset($array_count['21']);
        $array_count['х'] = $array_count['22'];
        unset($array_count['22']);
        $array_count['ц'] = $array_count['23'];
        unset($array_count['23']);
        $array_count['ч'] = $array_count['24'];
        unset($array_count['24']);
        $array_count['ш'] = $array_count['25'];
        unset($array_count['25']);
        $array_count['щ'] = $array_count['26'];
        unset($array_count['26']);
        $array_count['ь'] = $array_count['27'];
        unset($array_count['27']);
        $array_count['ы'] = $array_count['28'];
        unset($array_count['28']);
        $array_count['ъ'] = $array_count['29'];
        unset($array_count['29']);
        $array_count['э'] = $array_count['30'];
        unset($array_count['30']);
        $array_count['ю'] = $array_count['31'];
        unset($array_count['31']);
        $array_count['я'] = $array_count['32'];
        unset($array_count['32']);





        /*
         * Будем сравнивать и заменять ключи
         */

        $filename = 'key.txt';
        $data = file_get_contents($filename); // Читаем содержимое файла в строку
        $massiv = unserialize($data); // Это оригинальный массив. Создаем PHP-значение из хранимого представления


        foreach ($lol1 as $value1){
            foreach ($array_count as $key2 => $value2){
                if ($value1 == $key2){
                    foreach ($massiv as $key3 => $value3){
                        if ($value3 == $value2){
                            $value1 = $key3;
                            self::$unencrypted[] = $value1;
                        }
                    }
                    break;
                }
            }
        }

        foreach (self::$unencrypted as $value){
            echo $value;
        }

    }
}

