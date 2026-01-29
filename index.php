<?php
session_start();
$_SESSION['point'] = 0;
$_SESSION['answers'] = [];
unset($_SESSION['shuffled_questions']);
unset($_SESSION['topic']);
header('Location: src/page/index.php');
exit();