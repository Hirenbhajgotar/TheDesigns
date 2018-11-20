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
        
    ]
]






?>