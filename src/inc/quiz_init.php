<?php
/**
 * Quiz initialization and setup
 */

include_once __DIR__ . '/tQuiz.php';
include_once __DIR__ . '/raw_data.php';
include_once __DIR__ . '/unix_data.php';


session_start();

// Get quiz settings from GET parameters or session
if (isset($_GET['topic'])) {
    $_SESSION['topic'] = $_GET['topic'];
    $_SESSION['show_answer'] = isset($_GET['show_answer']) ? true : false;
    $_SESSION['shuffle'] = isset($_GET['shuffle']) ? true : false;
    $_SESSION['point'] = 0;
    $_SESSION['answers'] = [];
}

$topic = isset($_SESSION['topic']) ? $_SESSION['topic'] : 'all';
$showAnswer = isset($_SESSION['show_answer']) ? $_SESSION['show_answer'] : false;
$shuffle = isset($_SESSION['shuffle']) ? $_SESSION['shuffle'] : false;

// Initialize session variables if not set
if (!isset($_SESSION['point'])) {
    $_SESSION['point'] = 0;
}
if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = [];
}

/**
 * Get questions filtered by topic
 * @param string $topic The topic/chapter to filter by
 * @return array Filtered questions
 */
function getQuestionsByTopic($topic) {
    global $chapter1_questions, $chapter2_questions, $chapter3_questions, $chapter4_questions,$question_unix, $question,$question2;
    $questions = [];
    switch ($topic) {
        case '1':
            $questions = $chapter1_questions;
            break;
        case '2':
            $questions = $chapter2_questions;
            break;
        case '3':
            $questions = $chapter3_questions;
            break;
        case '4':
            $questions = $chapter4_questions;
            break;
        case '5':
            $questions = $question_unix;
            break;
        case '6':
            $questions = $question2;
            break;
        default:
            $questions = $question;
    }
    return $questions;
}

/**
 * Get all quiz data for JavaScript
 * @return array Contains all questions and settings
 */
function getQuizData() {
    global $type;
    
    $topic = isset($_SESSION['topic']) ? $_SESSION['topic'] : 'all';
    $showAnswer = isset($_SESSION['show_answer']) ? $_SESSION['show_answer'] : false;
    $shuffle = isset($_SESSION['shuffle']) ? $_SESSION['shuffle'] : false;
    
    $questions = getQuestionsByTopic($topic);
    
    // Re-index questions for the filtered set
    $indexedQuestions = [];
    $index = 1;
    foreach ($questions as $q) {
        $q['quiz_index'] = $index;
        $indexedQuestions[] = $q;
        $index++;
    }
    
    if ($shuffle && !isset($_SESSION['shuffled_questions'])) {
        shuffle($indexedQuestions);
        $_SESSION['shuffled_questions'] = $indexedQuestions;
    } elseif (isset($_SESSION['shuffled_questions'])) {
        $indexedQuestions = $_SESSION['shuffled_questions'];
    }
    
    return [
        'questions' => $indexedQuestions,
        'types' => $type,
        'showAnswer' => $showAnswer,
        'shuffle' => $shuffle,
        'topic' => $topic
    ];
}

/**
 * Get current quiz page data
 * @return array Contains page number, total questions, question data, and question type
 */
function getQuizPageData() {
    global $questions, $type;
    
    // Get current page/question
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $totalQuestions = count($questions);

    // Check if page is valid
    if ($page < 1 || $page > $totalQuestions) {
        $page = 1;
    }

    $q = getQuestionById($page);
    $questionType = $type[$q['type'] - 1]['type'];
    
    return [
        'page' => $page,
        'totalQuestions' => $totalQuestions,
        'question' => $q,
        'questionType' => $questionType
    ];
}
