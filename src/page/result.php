<?php
include_once '../inc/result_init.php';

$data = getResultData();
$totalQuestions = $data['totalQuestions'];
$score = $data['score'];
$answers = $data['answers'];
$percentage = $data['percentage'];
$gradeMessage = $data['gradeMessage'];
$gradeColor = $data['gradeColor'];
$emoji = $data['emoji'];
$questions = $data['questions'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/result.css">
</head>
<body>
    <div class="container">
        <div class="result-container">
            <!-- Score Card -->
            <div class="score-card">
                <div class="score-emoji"><?= $emoji ?></div>
                <h2><?= $gradeMessage ?></h2>
                <div class="score-number"><?= $score ?>/<?= $totalQuestions ?></div>
                <div class="score-label">Questions Answered Correctly</div>
                
                <div class="percentage-bar">
                    <div class="percentage-fill" style="width: <?= $percentage ?>%"></div>
                </div>
                <div class="score-label"><?= $percentage ?>% Score</div>
            </div>
            
            <!-- Detailed Answers -->
            <h4 class="mb-4">📋 Review Your Answers</h4>
            
            <?php foreach ($questions as $index => $q): ?>
                <?php 
                $qId = $q['id'];
                $userAnswer = isset($answers[$qId]) ? $answers[$qId] : null;
                $isCorrect = $userAnswer ? $userAnswer['is_correct'] : false;
                $userAns = $userAnswer ? $userAnswer['user_answer'] : 'No answer';
                ?>
                <div class="answer-card">
                    <div class="answer-header d-flex justify-content-between align-items-center">
                        <strong>Question <?= $index + 1 ?></strong>
                        <?php if ($userAnswer): ?>
                            <span class="<?= $isCorrect ? 'correct-badge' : 'incorrect-badge' ?>">
                                <?= $isCorrect ? '✓ Correct' : '✗ Incorrect' ?>
                            </span>
                        <?php else: ?>
                            <span class="incorrect-badge">Not Answered</span>
                        <?php endif ?>
                    </div>
                    <div class="answer-body">
                        <p class="mb-3"><strong><?= htmlspecialchars($q['text']) ?></strong></p>
                        
                        <div class="user-answer <?= $isCorrect ? 'correct' : 'incorrect' ?>">
                            <small class="text-muted">Your Answer:</small><br>
                            <?php 
                            if (is_array($userAns)) {
                                echo htmlspecialchars(implode(', ', $userAns));
                            } else {
                                echo htmlspecialchars($userAns ?: 'No answer provided');
                            }
                            ?>
                        </div>
                        
                        <?php if (!$isCorrect): ?>
                            <div class="correct-answer">
                                <small class="text-muted">Correct Answer:</small><br>
                                <?= htmlspecialchars(implode(', ', $q['correct_answers'])) ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            <?php endforeach ?>
            
            <!-- Restart Button -->
            <div class="text-center mt-4">
                <a href="restart.php" class="btn btn-<?= $gradeColor ?> btn-restart">
                    🔄 Try Again
                </a>
            </div>
        </div>
    </div>
    
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
