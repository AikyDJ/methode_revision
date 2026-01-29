<?php
include_once '../inc/quiz_init.php';

$quizData = getQuizData();
$questionsJson = json_encode($quizData['questions']);
$typesJson = json_encode($quizData['types']);
$showAnswer = $quizData['showAnswer'] ? 'true' : 'false';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/quiz.css">
</head>

<body>
    <div class="container">
        <a href="result.php" class="btn btn-outline-danger mb-3">Result</a>
        <a href="index.php" class="btn btn-outline-secondary mb-3">Back to Topics</a>
        <div class="quiz-container">
            <div id="loading">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-3">Loading quiz...</p>
            </div>
            
            <div id="quiz-content" style="display: none;">
                <!-- Progress Bar -->
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" id="progress-bar" style="width: 0%"></div>
                </div>

                <div class="question-number" id="question-number"></div>

                <h3 class="question-text" id="question-text"></h3>

                <div id="options-container"></div>
                
                <!-- Feedback area -->
                <div id="feedback-correct" class="feedback-correct">
                    <span class="feedback-icon">✅</span>
                    <span>Correct! Well done!</span>
                </div>
                <div id="feedback-incorrect" class="feedback-incorrect">
                    <span class="feedback-icon">❌</span>
                    <span>Incorrect. </span>
                    <span id="correct-answer-display" class="correct-answer-text"></span>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between">
                    <button type="button" id="btn-prev" class="btn btn-outline-secondary btn-nav" onclick="prevQuestion()">
                        &laquo; Previous
                    </button>
                    <button type="button" id="btn-next" class="btn btn-primary btn-nav" onclick="nextQuestion()">
                        Next &raquo;
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- Quiz data from PHP -->
    <script>
        const questions = <?= $questionsJson ?>;
        const types = <?= $typesJson ?>;
        const showAnswerAfterQuestion = <?= $showAnswer ?>;
    </script>
    <!-- Quiz logic -->
    <script src="../assets/js/quiz.js"></script>
</body>

</html>