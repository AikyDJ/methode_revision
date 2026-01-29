<?php
session_start();
include_once '../inc/raw_data.php';
include_once '../inc/validate_question.php';

// Get form data
$questionId = isset($_POST['question_id']) ? (int)$_POST['question_id'] : 0;
$currentPage = isset($_POST['current_page']) ? (int)$_POST['current_page'] : 1;
$userAnswer = isset($_POST['answer']) ? $_POST['answer'] : '';

// Initialize session if not set
if (!isset($_SESSION['point'])) {
    $_SESSION['point'] = 0;
}
if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = [];
}

// Get the question data
$q = null;
foreach ($question as $ques) {
    if ($ques['id'] == $questionId) {
        $q = $ques;
        break;
    }
}

if ($q) {
    // Check if answer is correct
    $isCorrect = validateQuestion($questionId, $userAnswer);
    
    // Store the user's answer
    $_SESSION['answers'][$questionId] = [
        'question' => $q['text'],
        'user_answer' => $userAnswer,
        'correct_answer' => $q['correct_answers'],
        'is_correct' => $isCorrect
    ];
    
    // Update score if correct
    if ($isCorrect) {
        $_SESSION['point']++;
    }
}

$totalQuestions = count($question);

// Redirect to next question or results
if ($currentPage >= $totalQuestions) {
    header('Location: result.php');
} else {
    header('Location: quiz.php?page=' . ($currentPage + 1));
}
exit();
