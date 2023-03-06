<?php
/**
 * Bài 6: Viết chương trình in ra 50 chữ đầu tiên trong 1 chuỗi
 * (Trích xuất 50 chữ đầu tiên trong 1 bài viết)
 *
 */

// Input
$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

// Handle
$contentLen = mb_strlen($content, 'UTF-8');
$countWord = 0;
$description = null;
define('LIMIT_WORD', 20);

for ($i = 0; $i < $contentLen; $i++) {
    $description .= mb_substr($content, $i, 1, 'UTF-8');
    if(mb_substr($content, $i, 1, 'UTF-8') === ' ') {
        $countWord++;
        if($countWord > LIMIT_WORD) {
            break;
        }
    }
}

// Output
echo $description;
echo '<hr>';
echo 'Characters: ' . $contentLen;