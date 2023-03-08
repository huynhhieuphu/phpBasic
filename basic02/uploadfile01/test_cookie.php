<?php
if(isset($_COOKIE['username'])) {
    echo 'Tồn tại cookie: ' . $_COOKIE['username'];
} else {
    echo 'Không tồn tại cookie';
}