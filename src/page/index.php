<?php
session_start();
// Reset session when starting new quiz
$_SESSION['point'] = 0;
$_SESSION['answers'] = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Select Topic</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/topic.css">
</head>
<body>
    <div class="start-container">
        <div class="quiz-title">
            <h1>🎯 Network Quiz</h1>
            <p>Test your networking knowledge</p>
        </div>
        
        <form action="quiz.php" method="get">
            <div class="mb-4">
                <label for="topic" class="form-label">📚 Select Topic</label>
                <select name="topic" id="topic" class="form-select form-select-lg">
                    <option value="all">All Chapters</option>
                    <option value="1">Chapter 1 - OSI & TCP/IP Models</option>
                    <option value="2">Chapter 2 - IP Addressing & Protocols</option>
                    <option value="3">Chapter 3 - Subnetting & CIDR</option>
                    <option value="4">Chapter 4 - Network Security</option>
                    <option value="5">Unix Basics</option>
                    <option value="6">All reseaux</option>
                </select>
            </div>
            
            <div class="option-card">
                <h6>⚙️ Quiz Options</h6>
                
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="showAnswer" name="show_answer" value="1">
                    <label class="form-check-label" for="showAnswer">
                        Show answer after each question
                    </label>
                </div>
                
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="shuffleQuestions" name="shuffle" value="1" checked>
                    <label class="form-check-label" for="shuffleQuestions">
                        Shuffle questions
                    </label>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary btn-start">
                🚀 Start Quiz
            </button>
        </form>
    </div>
    
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
