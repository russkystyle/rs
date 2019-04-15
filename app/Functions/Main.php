<?php

namespace App\Functions;

    use Intervention\Image\Facades\Image;

    class Main
    {
        //public $base_folder = 'img/albums/';

        public function rus2translit($string) {
            $converter = array(
                'а' => 'a',   'б' => 'b',   'в' => 'v',
                'г' => 'g',   'д' => 'd',   'е' => 'e',
                'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
                'и' => 'i',   'й' => 'y',   'к' => 'k',
                'л' => 'l',   'м' => 'm',   'н' => 'n',
                'о' => 'o',   'п' => 'p',   'р' => 'r',
                'с' => 's',   'т' => 't',   'у' => 'u',
                'ф' => 'f',   'х' => 'h',   'ц' => 'c',
                'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
                'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
                'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

                'А' => 'A',   'Б' => 'B',   'В' => 'V',
                'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
                'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
                'И' => 'I',   'Й' => 'Y',   'К' => 'K',
                'Л' => 'L',   'М' => 'M',   'Н' => 'N',
                'О' => 'O',   'П' => 'P',   'Р' => 'R',
                'С' => 'S',   'Т' => 'T',   'У' => 'U',
                'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
                'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
                'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
                'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
            );
            return strtr($string, $converter);
        }

        /*
         * transliterate user input from russian
         */

        public function translit($name) {
            $new_str = $this->rus2translit($name);
            $new_str = strtolower($new_str);
            $new_str = preg_replace('~[^-a-z0-9_]+~u', '_', $new_str);
            $new_str = trim($new_str);

            return $new_str;
        }

        /*
         * create a new folder and
         * returns local path
         */
        /**
         * @param $new_folder
         * @param $base_folder
         * @return string
         */
        public function createNewFolder($new_folder, $base_folder) {
            $new_path_folder = $base_folder . $new_folder . '/';
            if(!file_exists($new_path_folder)) {
                mkdir($new_path_folder);
                return $new_path_folder;
            }
            else return $new_path_folder;

        }

        public function createImgFolder($name, $base_folder = 'img/'){
            //transliterate folders name
            $new_folder = $this->translit($name);

            //create a new image folder
            $new_folder = $this->createNewFolder($new_folder, $this->base_folder);

            //create a subfolder for previews
            $sub_folder = 'shortcut';
            $preview_folder = $this->createNewFolder($sub_folder, $new_folder);
            //dd($preview_folder);
            
            $preload_folder = 'preload';
            $preload_path = $this->createNewFolder($preload_folder, $new_folder);
            return array('base_folder' => $new_folder,
                         'shortcut' => $preview_folder,
                         'preload' => $preload_path,   );
        }


        public function resizeImage($image){
            $img = Image::make($image);
            $img->resize(null, 400, function($constraint){
                $constraint->aspectRatio();
            });
        }
    }
