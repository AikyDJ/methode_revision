<?php
include_once '../inc/getQuestion.php';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$q = getQuestionById($page); // Get question with ID 1