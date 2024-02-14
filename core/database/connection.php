<?php

class Connection{

    public static function make($config){
        try{
            return new PDO(
                $config['CONNECTION']."; dbname=".$config['DB_NAME'],
                $config['USER'],
                $config['PASSWORD'],
                $config['OPTIONS']
            );
        } catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

}
