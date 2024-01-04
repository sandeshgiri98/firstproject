<?php
 namespace App\Models;
  class Listing{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'This is the first project of mine in the laravel',
            ],
            [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'This is the first project of mine in the laravel and second of route',

            ]
            ];
    }
    public static function find($id){
        $welcome = self::all();

        foreach($welcome as $welcomes){
            if($welcomes['id']==$id){
                return $welcomes;
            }
        }
    }
  }
?>
