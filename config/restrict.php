<?php

return [
    'Course'=>[
        'id','image','name','price','Teachers','sections_time','provider'
    ],
    'Teacher'=>[
        'id','image','name'
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
        'id','name','image','description','part','time'
    ],
    'Tag'=>[
        'id','tag_name'
    ],

    'Provider'=>[
        'id','name'
    ],

];
