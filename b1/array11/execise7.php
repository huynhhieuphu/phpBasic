<?php
/**
 * Bài 07: Hiển thị menu đa cấp sử dụng giải thuật đệ quy
 */
require_once './myFunc.php'; // import Function
$menuArr = [
    [
        'title' => 'Lorem ipsum',
        'link' => '#',
    ],
    [
        'title' => 'Tempor incididunt',
        'link' => '#',
        'sub' => [
            [
                'title' => 'Ut enim',
                'link' => '#',
                'sub' => [
                    [
                        'title' => 'Dapibus ultrices',
                        'link' => '#',
                    ],
                    [
                        'title' => 'Facilisis gravidai',
                        'link' => '#',
                    ],
                ]
            ],
            [
                'title' => 'Nisl nisi',
                'link' => '#',
                'sub' => [
                    [
                        'title' => 'Donec enim',
                        'link' => '#',
                        'sub' => [
                            [
                                'title' => 'Viverra tellus',
                                'link' => '#',
                            ],
                            [
                                'title' => 'Nascetur ridiculus',
                                'link' => '#',
                            ],
                        ]
                    ],
                    [
                        'title' => 'Congue quisque',
                        'link' => '#',
                    ],
                ]
            ],
        ],
    ],
    [
        'title' => 'Ut enim',
        'link' => '#',
        'sub' => [
            [
                'title' => 'Urna et',
                'link' => '#',
            ],
            [
                'title' => 'Euismod in',
                'link' => '#',
            ],
        ],
    ],
    [
        'title' => 'Risus feugiat',
        'link' => '#',
    ],
    [
        'title' => 'Massa id',
        'link' => '#',
    ],

];

/*echo "<pre>";
var_dump($menuArr);
die();*/

$renderMenu = buildMenuRecursion($menuArr);
echo $renderMenu;