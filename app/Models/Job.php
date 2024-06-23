<?php 

namespace App\Models;
use Illuminate\Support\Arr;
class job {

    public static function all() : array {
        return [  
            [   
            'id' => 1,
            'Title'=>'Director',
            'Salary'=>'40K'
            ],
            [   
            'id'=> 2,
            'Title'=>'DEVELOPER',
            'Salary'=>'60K'
        
            ],
            [   
            'id' => 3,
            'Title'=>'Graphic Designer',
            'Salary'=>'70K'
        
            ]
        ];
    }

    public static function find(int $id):array {

        
        $job = Arr::first(static::all(),fn($job)=> $job['id']==$id);
        if(! $job){
            abort(404);
        }

         return $job;
        
    }
}