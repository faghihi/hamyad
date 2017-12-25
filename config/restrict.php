<?php

return [
    'Course'=>[
        'id','image','name','price','Teachers','sections_time','provider'
    ],
    'Teacher'=>[
        'id','image','name','description'
    ],
    'Category'=>[
        'id','name','icon','description'
    ],
    'Review'=>[
      'id','comment','user_id','course_rate','user_name','user_image'
    ],
    'Rate'=>[
        'id','name','email','pivot'
    ],
    'Section'=>[
        'id','name','image','description','part','time','link'
    ],
    'Tag'=>[
        'id','tag_name'
    ],
    'Provider'=>[
        'id','name'
    ],
    'User'=>[
        'id','name','email','image','activated','phone'
        ],
    'MyPack'=>[
        'id','title','image','description','price_day','price_month','price_year','end','start'
    ],
    'Pack'=>[
        'id','title','image','description','price_day','price_month','price_year'
    ],

];
