<?php
include_once '../inc/raw_data.php';

function getQuestionById($question_id) {
    global $question;

    foreach ($question as $q) {
        if ($q['id'] == $question_id) {
            return $q;
        }
    }

    return null; // Return null if question not found
}