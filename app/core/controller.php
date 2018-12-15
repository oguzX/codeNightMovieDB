<?php
/**
 * User: OguzOzer
 * Date: 11/20/2018
 * Time: 10:43 PM
 */

class controller
{

    /**
     * @param $file
     * @param array $params
     * This section is, render the page with render class
     */

    public function render($file, array $params = [])
    {
        return view::render($file, $params);
    }

    /**
     * @param $model
     * @return mixed
     * This section is return model object by name
     */
    public function model($model)
    {
        if (file_exists($file = MDIR . "/{$model}.php")) {
            require_once $file;
            if (class_exists($model)) {
                return new $model;
            } else {
                exit("<b class='err'>" . $model . "</b> <br> class not found");
            }
        } else {
            exit("<b class='err'>" . MDIR . '/' . $model . ".php</b> <br> model not found");
        }
    }

}