<?php
    /*
     * Base Controller
     * Loads Models and views
     */
    class Controller{
        // Loads Model
        public function model($model)
        {   //Require model file
            require_once "../app/models/$model.php";

            //Instatiate model
            return new $model();
        }

        public function view($view, $data=[])
        {   //check for view file
            if((file_exists("../app/views/$view.php"))){
                require_once "../app/views/$view.php";
            }else{
                // View does not exist
                die('View does not exist');
            }

        }



    }
