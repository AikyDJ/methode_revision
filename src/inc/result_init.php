<?php
/**
 * Result page initialization and calculations
 */

include_once __DIR__ . '/raw_data.php';

session_start();

/**
 * Get questions filtered by topic
 * @param string $topic The topic/chapter to filter by
 * @return array Filtered questions
 */
function getQuestionsByTopicForResult($topic) {
    global $chapter1_questions, $chapter2_questions, $chapter3_questions, $chapter4_questions, $question;
    
    switch ($topic) {
        case '1':
            return $chapter1_questions;
        case '2':
            return $chapter2_questions;
        case '3':
            return $chapter3_questions;
        case '4':
            return $chapter4_questions;
        default:
            return $question;
    }
}

/**
 * Get result data for displaying quiz results
 * @return array Contains score, answers, percentage, and grade info
 */
function getResultData() {
    global $question;
    
    $topic = isset($_SESSION['topic']) ? $_SESSION['topic'] : 'all';
    $questions = getQuestionsByTopicForResult($topic);
    
    // Use shuffled questions if available
    if (isset($_SESSION['shuffled_questions'])) {
        $questions = $_SESSION['shuffled_questions'];
    }
    
    $totalQuestions = count($questions);
    $score = isset($_SESSION['point']) ? $_SESSION['point'] : 0;
    $answers = isset($_SESSION['answers']) ? $_SESSION['answers'] : [];

    // Calculate percentage
    $percentage = ($totalQuestions > 0) ? round(($score / $totalQuestions) * 100) : 0;

    // Determine grade message and color
    if ($percentage >= 80) {
        $gradeMessage = "Excellent!";
        $gradeColor = "success";
        $emoji = "🎉";
    } elseif ($percentage >= 60) {
        $gradeMessage = "Good Job!";
        $gradeColor = "primary";
        $emoji = "👍";
    } elseif ($percentage >= 40) {
        $gradeMessage = "Keep Practicing!";
        $gradeColor = "warning";
        $emoji = "📚";
    } else {
        $gradeMessage = "Don't Give Up!";
        $gradeColor = "danger";
        $emoji = "💪";
    }
    
    return [
        'totalQuestions' => $totalQuestions,
        'score' => $score,
        'answers' => $answers,
        'percentage' => $percentage,
        'gradeMessage' => $gradeMessage,
        'gradeColor' => $gradeColor,
        'emoji' => $emoji,
        'questions' => $questions
    ];
}
