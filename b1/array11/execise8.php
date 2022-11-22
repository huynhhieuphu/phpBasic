<?php
require_once './myFunc.php';

$menuArr = [
    [
        'id' => 1,
        'title' => 'Maecenas imperdiet',
        'link' => '#',
        'parent_id' => 0
    ],
    [
        'id' => 2,
        'title' => 'Fusce consectetur',
        'link' => '#',
        'parent_id' => 0
    ],
    [
        'id' => 3,
        'title' => 'Vestibulum vulputate',
        'link' => '#',
        'parent_id' => 0
    ],
    [
        'id' => 4,
        'title' => 'Pellentesque augue',
        'link' => '#',
        'parent_id' => 2
    ],
    [
        'id' => 5,
        'title' => 'Nulla facilisi',
        'link' => '#',
        'parent_id' => 2
    ],
    [
        'id' => 6,
        'title' => 'Donec in',
        'link' => '#',
        'parent_id' => 3
    ],
    [
        'id' => 7,
        'title' => 'Vestibulum mollis',
        'link' => '#',
        'parent_id' => 3
    ],
    [
        'id' => 8,
        'title' => 'Vestibulum nisi',
        'link' => '#',
        'parent_id' => 5
    ],
    [
        'id' => 9,
        'title' => 'Excepteur sint',
        'link' => '#',
        'parent_id' => 2
    ],
    [
        'id' => 10,
        'title' => 'Phasellus mattis',
        'link' => '#',
        'parent_id' => 0
    ]
];

$renderMenu = makeMenuRecursion($menuArr);
echo $renderMenu;
echo '<hr>';

$renderTreeMenu = getTreeMenu($menuArr);
echo "<pre>";
print_r($renderTreeMenu);
echo "</pre>";
echo '<hr>';

$listChildren = getChildrenByParent($menuArr, 2);
print_r($listChildren);
echo '<hr>';
$listChildren2 = getChildrenByParent($menuArr, 3);
print_r($listChildren2);