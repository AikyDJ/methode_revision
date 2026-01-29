<?php
include_once '../inc/raw_data.php';

function validateQuestion($question_id, $user_answers) {
    global $question;

    // Find the question by ID
    foreach ($question as $q) {
        if ($q['id'] == $question_id) {
            $correct_answers = $q['correct_answers'];
            break;
        }
    }

    // If question not found, return false
    if (!isset($correct_answers)) {
        return false;
    }

    // For checkbox type questions, compare arrays
    if (is_array($user_answers)) {
        sort($user_answers);
        sort($correct_answers);
        return $user_answers === $correct_answers;
    } else {
        // For text or radio type questions, compare single values
        // for text trim and case insensitive comparison
        if (is_string($user_answers) && is_string($correct_answers[0])) {
            return strcasecmp(trim($user_answers), trim($correct_answers[0])) === 0;
        }
        return $user_answers === $correct_answers[0];
    }
}