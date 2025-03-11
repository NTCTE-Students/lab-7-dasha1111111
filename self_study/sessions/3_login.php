<?php
if (isset($_COOKIE['visited'])) {
    $visited = $_COOKIE['visited'] + 1;
} else {
    $visited = 1;
}
setcookie('visited', $visited, time() + 31536000); 
echo "Вы посетили эту страницу " . $visited . " раз(а).";
?>

