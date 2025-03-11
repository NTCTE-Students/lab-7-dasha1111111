<?php
$cookie_name = 'visited';
if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, 1, time() + (86400), '/'); 
    echo "Вы посетили эту страницу первый раз!";
} else {
    $visited_count = $_COOKIE[$cookie_name] + 1;
    setcookie($cookie_name, $visited_count, time() + (86400), '/'); 
    echo "Вы посетили эту страницу {$visited_count} раз.";
}
?>
