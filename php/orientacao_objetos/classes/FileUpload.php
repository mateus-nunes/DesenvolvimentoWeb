<?php


trait FileUpload{

    function upload($path, $file){
        //tratamento
        move_uploaded_file($path, $file);
    }

}