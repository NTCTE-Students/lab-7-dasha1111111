<?php
session_start();


if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = time();
}


$_SESSION['last_visit_time'] = time();


$firstVisit = date('Y-m-d H:i:s', $_SESSION['first_visit_time']);
$lastVisit = date('Y-m-d H:i:s', $_SESSION['last_visit_time']);

?>

<!DOCTYPE html>
<html>
<body>
<h1>Информация о посещениях</h1>

<p>Время первого посещения: <?php echo ($firstVisit); ?></p>
<p>Время последнего посещения: <?php echo ($lastVisit); ?></p>

</body>
</html>
