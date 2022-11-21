<?php
// Xây dựng menu đệ quy

function buildMenu($menuArr, $isSub = false) {
    $html = '';
    if(!empty($menuArr)) {
        $html .= '<ul class="menu">';
        foreach ($menuArr as $item) {
            $html .= '<li>';
            $html .= '<a href="'. $item['link'] .'">' . $item['title'] . '</a>';

            //submenu
            if(!empty($item['sub'])) {
                $html .= '<ul class="sub-menu">';
                foreach ($item['sub'] as $sub) {
                    $html .= '<li>';
                    $html .= '<a href="'. $sub['link'] .'">'. $sub['title'] .'</a>';
                    //submenu
                    //...
                    $html .= '</li>';
                }
                $html .= '</ul>';
            }
            $html .= '</li>';
        }
        $html .= '</ul>';
    }
    return $html;
}

function buildMenuRecursion($menuArr, $isSub = false) {
    $html = '';
    if(!empty($menuArr)) {
        $html .= ($isSub) ? '<ul class="sub-menu">' : '<ul class="menu">';
        foreach ($menuArr as $item) {
            $html .= '<li>';
            $html .= '<a href="'. $item['link'] .'">' . $item['title'] . '</a>';

            //submenu
            if(!empty($item['sub'])){
                $html .= buildMenuRecursion($item['sub'], true);
            }

            $html .= '</li>';
        }
        $html .= '</ul>';
    }
    return $html;
}