<?php
session_start();

// Reset session variables
$_SESSION['point'] = 0;
$_SESSION['answers'] = [];
unset($_SESSION['shuffled_questions']);
unset($_SESSION['topic']);

// Redirect to topic selection
header('Location: index.php');
exit();
