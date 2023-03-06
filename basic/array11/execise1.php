<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dropdown Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn, {
            background-color: red;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .active {
            background-color: red;
        }
    </style>
</head>

<body>
<?php
/**
 * Bài tập mảng
 * 1. Hiển thị menu dropdown cấp sử dụng mảng PHP
 */

$menuArr = [
    [
        'title' => 'Home',
        'links' => '#home',
        'class' => '',
    ],
    [
        'title' => 'News',
        'links' => '#news',
        'class' => '',
    ],
    [
        'title' => 'Dropdown',
        'links' => '#',
        'class' => '',
        'sub' => [
            [
                'title' => 'Link 1',
                'links' => '#',
                'class' => '',
            ],
            [
                'title' => 'Link 2',
                'links' => '#',
                'class' => '',
            ],
            [
                'title' => 'Link 3',
                'links' => '#',
                'class' => '',
            ],
        ]
    ],
    [
        'title' => 'Sevices',
        'links' => '#',
        'class' => '',
        'sub' => [
            [
                'title' => 'Sevice 1',
                'links' => '#',
                'class' => '',
            ],
            [
                'title' => 'Sevice 2',
                'links' => '#',
                'class' => '',
            ],
            [
                'title' => 'Sevice 3',
                'links' => '#',
                'class' => '',
            ],
        ]
    ],
    [
        'title' => 'About',
        'links' => '#about',
        'class' => 'active',
    ],
];

if(!empty($menuArr)) {
    echo '<div class="navbar">';

    foreach ($menuArr as $item) {
        $class = !empty($item['class']) ? 'class="'.$item['class'].'"' : null;

        // dropdown
        if(!empty($item['sub'])) {
            echo '<div class="dropdown">
                     <button class="dropbtn">'.$item['title'].'<i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">';

            $menuSub = $item['sub'];
            foreach ($menuSub as $itemSub) {
                echo '<a href="#">'.$itemSub['title'].'</a>';
            }

            echo '</div></div>';
        } else {
            echo '<a href="'.$item['links'].'"'.$class.'>'.$item['title'].'</a>';
        }
    }

    echo '</div>';
}

?>


<!--<div class="navbar">-->
<!--    <a href="#home">Home</a>-->
<!--    <a href="#news">News</a>-->
<!--    <div class="dropdown">-->
<!--        <button class="dropbtn">Dropdown<i class="fa fa-caret-down"></i></button>-->
<!--        <div class="dropdown-content">-->
<!--            <a href="#">Link 1</a>-->
<!--            <a href="#">Link 2</a>-->
<!--            <a href="#">Link 3</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

</body>

</html>
