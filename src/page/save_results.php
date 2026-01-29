<?php
session_start();
include_once '../inc/raw_data.php';
include_once '../inc/validate_question.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'finish') {
    $score = isset($_POST['score']) ? (int)$_POST['score'] : 0;
    $userAnswers = isset($_POST['answers']) ? json_decode($_POST['answers'], true) : [];
    $questions = isset($_POST['questions']) ? json_decode($_POST['questions'], true) : [];
    
    $_SESSION['point'] = $score;
    $_SESSION['answers'] = [];
    
    // Build answers array for result page
    foreach ($questions as $q) {
        $qId = $q['id'];
        $userAnswer = isset($userAnswers[$qId]) ? $userAnswers[$qId] : null;
        
        // Check if correct
        $isCorrect = false;
        if ($userAnswer !== null) {
            $correctAnswers = $q['correct_answers'];
            
            if (is_array($userAnswer)) {
                $sortedUser = $userAnswer;
                $sortedCorrect = $correctAnswers;
                sort($sortedUser);
                sort($sortedCorrect);
                $isCorrect = $sortedUser === $sortedCorrect;
            } else {
                if ($q['type'] === 2) { // Text type
                    $isCorrect = strcasecmp(trim($userAnswer), trim($correctAnswers[0])) === 0;
                } else {
                    $isCorrect = $userAnswer === $correctAnswers[0];
                }
            }
        }
        
        $_SESSION['answers'][$qId] = [
            'question' => $q['text'],
            'user_answer' => $userAnswer,
            'correct_answer' => $q['correct_answers'],
            'is_correct' => $isCorrect
        ];
    }
    
    // Recalculate score to be accurate
    $actualScore = 0;
    foreach ($_SESSION['answers'] as $answer) {
        if ($answer['is_correct']) {
            $actualScore++;
        }
    }
    $_SESSION['point'] = $actualScore;
    
    echo json_encode(['success' => true]);
    exit();
}

echo json_encode(['success' => false, 'error' => 'Invalid request']);
