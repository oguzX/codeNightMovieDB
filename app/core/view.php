<?php
/**
 * User: OguzOzer
 * Date: 11/20/2018
 * Time: 10:50 PM
 */

class view
{
    public static function render($view,array $params=[]){
        if(file_exists($file = PDIR."/{$view}.php")){
            extract($params);
            ob_start();
            require LDIR.'/header.php';
            require $file;
            require LDIR.'/footer.php';
            echo ob_get_clean();
        }else{
            exit("<b class='err'>".$file."</b> <br> view not exist");
        }
    }
}