<?php
$config = [
    'admin_signup' => [
        [
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|min_length[3]|max_length[25]|alpha_dash'
        ],
        [
            'field' => 'email',
            'label' => 'email',
            'rules' => 'required|valid_email'
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[3]|max_length[25]|alpha_dash'
        ]
        
    ],

    'admin_login' => [

        [
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|alpha_dash'
        ]
    ],

    'dummy_rules' => [

        [
            'field' => 'template_header',
            'label' => 'template header',
            'rules' => 'required|alpha_numeric_spaces'
        ],

        [
            'field' => 'sub_heading',
            'label' => 'template sub heading',
            'rules' => 'required|alpha_numeric_spaces'
        ]
    ],



    

]






?>