<?php
// Xây dựng menu đệ quy

/**
 * Đổ dữ liệu cơ bản foreach lồng nhau
 */

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

/**
 * Đổ dữ liệu đệ quy
 */

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

/**
 * Đệ quy: Đổ dữ liệu với mảng 2 chiều
 */
function makeMenuRecursion($dataArr, $parent_id = 0, $isSub = false, &$html = '') {
    // Tìm các phần tử con trước.
    $childArr = [];
    if(!empty($dataArr)) {
        foreach ($dataArr as $key => $item) {
            if($item['parent_id'] == $parent_id) {
                $childArr[] = $item;
                //Tuy nhiên: do là đệ quy nên sẽ có gọi lại.
                //Những trường hợp xử lý rồi, đã duyệt qua rồi => ta phải xoá nó đi, để chương trình chạy nhanh hơn
                unset($dataArr[$key]);
            }
        }
    }

    if(!empty($childArr)) {
        $html .= ($isSub) ? '<ul class="sub-menu">' : '<ul class="menu">';
        foreach ($childArr as $key => $item) {
            if($item['parent_id'] == $parent_id) {
                $html .= '<li>';
                $html .= '<a href="'. $item['link'] .'">'. $item['title'] .'</a>';
                makeMenuRecursion($dataArr, $item['id'], true, $html);
                $html .= '</li>';
            }
        }
        $html .= '</ul>';
    }
    return $html;
}

/**
 * Đệ quy: Đổ dữ liệu có cấu trúc nhánh
 */

function getTreeMenu($dataArr, $parent_id = 0, &$resultArr = []) {
    if(!empty($dataArr)) {
        foreach ($dataArr as $key => $item) {
            if($item['parent_id'] == $parent_id) {

                $resultArr[$key] = $item;

                getTreeMenu($dataArr, $item['id'], $resultArr[$key]['sub']);

                if(empty($resultArr[$key]['sub'])) {
                    unset($resultArr[$key]['sub']);
                }
            }
        }
    }
    return $resultArr;
}

/**
 * Đệ quy: lấy ra tất cả danh mục con trong danh mục cha (đệ quy xuôi cha tìm con)
 */
function getChildrenByParent($dataArr, $parent_id = 0, &$resultArr = []) {
    if(!empty($dataArr)) {
        foreach ($dataArr as $key => $item) {
            if($item['parent_id'] == $parent_id) {
                $resultArr[] = $item['id'];
                getChildrenByParent($dataArr, $item['id'], $resultArr);
            }
        }
    }
    return $resultArr;
}

/**
 * (đệ quy xuôi con tìm cha)
 */