<?php
/**
 * Created by PhpStorm.
 * User: CarlSon-BC
 * Date: 14.01.2018
 * Time: 21:37
 */

class shifrator
{
    private static $alfavit = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я');
    private static $rand_chislo1 = array(); // сюда пихаем 10 рандомных чисел
    private static $rand_slovo = array(); // здесь будет 10 рандомных букв
    private static $rand_alfavit = array(); // здесь будет новый алфавит


    public static function randslovo()
    {
        /*
         * Здесь функция создания 10-ю случайных не повторяющихся чисел
         */
        for ($i=0; $i<10; $i++){ // цикл для создания 10ми рандомных чисел
            $rand_chislo = mt_rand(0,33);
            array_push(self::$rand_chislo1,$rand_chislo);
        }

        self::$rand_chislo1 = array_unique(self::$rand_chislo1); //удаляем повторения
        self::$rand_chislo1 = array_values(self::$rand_chislo1); //переназначаем ключи

        foreach (self::$rand_chislo1 as $key => $value){ // выбираем ключи
            $a = $key."<br>";
            $a = (integer)$a; // Переводим в int, так как кей нам возвращает string
        }
        for ($a; $a<9; $a++){  // добавляем в массив недостающие элементы
            $rand_chislo = mt_rand(0,33);
            array_push(self::$rand_chislo1,$rand_chislo);
        }

        self::$rand_chislo1 = array_unique(self::$rand_chislo1);
        self::$rand_chislo1 = array_values(self::$rand_chislo1);
        self::$rand_chislo1 = array_flip(self::$rand_chislo1);
    }

    public static function shifrirovanie($text) {

        shifrator::randslovo();
        /*
         * Здесь будем выбирать рандомные буквы из русского алфавита
         * и добавлять их в начало алфавита
         */

        self::$rand_slovo=array_intersect_key(self::$alfavit,self::$rand_chislo1); // берем пересечение масивов
        self::$rand_slovo=array_values(self::$rand_slovo); // переназначем ключи
        self::$rand_alfavit=array_merge(self::$rand_slovo,self::$alfavit); // сливаем 2 массива
        self::$rand_alfavit=array_unique(self::$rand_alfavit);
        self::$rand_alfavit=array_values(self::$rand_alfavit); // наш рандомный алфавит

        $allalfavit = array(self::$alfavit,self::$rand_alfavit); // создаем двумерный массив, чтобя связать два алфавита
        /*
         * Здесь будем приводить файл к нижнему регистру
         */

        $lol = mb_strtolower($text, 'UTF-8');
        $text1 = preg_split('//u',$lol,-1,PREG_SPLIT_NO_EMPTY); // разделяем текст посимвольно и вставляем в массив
        /*
         * Алгоритм замены букв
         */
        for($k=0; $k< count($text1); ++$k){
            for ($i=0;$i<1;$i++){
                for ($j = 0; $j < 33; $j++) {
                    if ($text1[$k] == $allalfavit[0][$j]) {
                        $text1[$k] = $allalfavit[1][$j];
                        break;
                    }
                }
            }
        }
        $text1 = implode($text1); // объединяем элементы массива в строку
        return $text1;
    }

}


#shifrator::shifrirovanie($text);

