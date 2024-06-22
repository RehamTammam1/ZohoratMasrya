<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => [
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
        ]
     
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/jobs/{id}', function ($id) {
   
   $jobs = [  
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
 
    $job = Arr::first($jobs,fn($job)=>$job['id']==$id);
 
    return view('job',['job'=>$job]);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/meet-the-team', function () {
    return view('meetTheTeam');
});
