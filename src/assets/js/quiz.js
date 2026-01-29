/**
 * Quiz JavaScript - Handles quiz display and interactions
 */

// Quiz state
let currentQuestion = 0;
let userAnswers = {};
let answeredQuestions = {};
let score = 0;

// DOM elements (initialized after DOM loads)
let quizContent, loading, progressBar, questionNumber, questionText;
let optionsContainer, btnPrev, btnNext, feedbackCorrect, feedbackIncorrect, correctAnswerDisplay;

// Initialize DOM elements
function initDomElements() {
    quizContent = document.getElementById('quiz-content');
    loading = document.getElementById('loading');
    progressBar = document.getElementById('progress-bar');
    questionNumber = document.getElementById('question-number');
    questionText = document.getElementById('question-text');
    optionsContainer = document.getElementById('options-container');
    btnPrev = document.getElementById('btn-prev');
    btnNext = document.getElementById('btn-next');
    feedbackCorrect = document.getElementById('feedback-correct');
    feedbackIncorrect = document.getElementById('feedback-incorrect');
    correctAnswerDisplay = document.getElementById('correct-answer-display');
}

// Initialize quiz
function initQuiz() {
    initDomElements();
    
    if (questions.length === 0) {
        optionsContainer.innerHTML = '<p class="text-danger">No questions available for this topic.</p>';
        loading.style.display = 'none';
        quizContent.style.display = 'block';
        return;
    }
    
    loading.style.display = 'none';
    quizContent.style.display = 'block';
    displayQuestion();
}

// Get question type name
function getTypeName(typeId) {
    const typeObj = types.find(t => t.id === typeId);
    return typeObj ? typeObj.type : 'radio';
}

// Display current question
function displayQuestion() {
    const q = questions[currentQuestion];
    const typeName = getTypeName(q.type);
    const totalQuestions = questions.length;
    
    // Update progress
    progressBar.style.width = ((currentQuestion + 1) / totalQuestions * 100) + '%';
    questionNumber.textContent = `Question ${currentQuestion + 1} of ${totalQuestions}`;
    questionText.textContent = q.text;
    
    // Hide feedback
    feedbackCorrect.style.display = 'none';
    feedbackIncorrect.style.display = 'none';
    
    // Build options HTML
    let optionsHtml = '';
    
    if (typeName === 'checkbox') {
        optionsHtml = '<p class="text-muted small mb-3"><em>Select all that apply</em></p>';
        q.options.forEach((option, index) => {
            const isChecked = userAnswers[q.id] && userAnswers[q.id].includes(option) ? 'checked' : '';
            const isDisabled = answeredQuestions[q.id] && showAnswerAfterQuestion ? 'disabled' : '';
            optionsHtml += `
                <div class="option-item form-check" id="option-wrapper-${index}">
                    <input class="form-check-input" type="checkbox" name="answer" 
                        value="${escapeHtml(option)}" id="option${index}" 
                        onchange="selectAnswer()" ${isChecked} ${isDisabled}>
                    <label class="form-check-label" for="option${index}">
                        ${escapeHtml(option)}
                    </label>
                </div>
            `;
        });
    } else if (typeName === 'radio') {
        q.options.forEach((option, index) => {
            const isChecked = userAnswers[q.id] === option ? 'checked' : '';
            const isDisabled = answeredQuestions[q.id] && showAnswerAfterQuestion ? 'disabled' : '';
            optionsHtml += `
                <div class="option-item form-check" id="option-wrapper-${index}">
                    <input class="form-check-input" type="radio" name="answer" 
                        value="${escapeHtml(option)}" id="option${index}" 
                        onchange="selectAnswer()" ${isChecked} ${isDisabled}>
                    <label class="form-check-label" for="option${index}">
                        ${escapeHtml(option)}
                    </label>
                </div>
            `;
        });
    } else if (typeName === 'text') {
        const savedAnswer = userAnswers[q.id] || '';
        const isDisabled = answeredQuestions[q.id] && showAnswerAfterQuestion ? 'disabled' : '';
        optionsHtml = `
            <div class="mb-3">
                <input type="text" class="form-control form-control-lg" id="text-answer"
                    placeholder="Type your answer here..." value="${escapeHtml(savedAnswer)}" 
                    onchange="selectAnswer()" ${isDisabled}>
            </div>
        `;
    }
    
    optionsContainer.innerHTML = optionsHtml;
    
    // Show feedback if already answered and showAnswer is enabled
    if (answeredQuestions[q.id] && showAnswerAfterQuestion) {
        showFeedback(q);
    }
    
    // Update navigation buttons
    btnPrev.style.visibility = currentQuestion > 0 ? 'visible' : 'hidden';
    btnNext.textContent = currentQuestion === totalQuestions - 1 ? 'Finish Quiz' : 'Next »';
}

// Select answer
function selectAnswer() {
    const q = questions[currentQuestion];
    const typeName = getTypeName(q.type);
    
    if (typeName === 'checkbox') {
        const checkboxes = document.querySelectorAll('input[name="answer"]:checked');
        userAnswers[q.id] = Array.from(checkboxes).map(cb => cb.value);
    } else if (typeName === 'radio') {
        const selected = document.querySelector('input[name="answer"]:checked');
        userAnswers[q.id] = selected ? selected.value : null;
    } else if (typeName === 'text') {
        const textInput = document.getElementById('text-answer');
        userAnswers[q.id] = textInput ? textInput.value : '';
    }
}

// Check if answer is correct
function checkAnswer(q, userAnswer) {
    const correctAnswers = q.correct_answers;
    
    if (Array.isArray(userAnswer)) {
        // Checkbox type
        const sortedUser = [...userAnswer].sort();
        const sortedCorrect = [...correctAnswers].sort();
        return JSON.stringify(sortedUser) === JSON.stringify(sortedCorrect);
    } else if (typeof userAnswer === 'string') {
        // Text or radio type
        if (q.type === 2) { // Text type - case insensitive
            return userAnswer.trim().toLowerCase() === correctAnswers[0].trim().toLowerCase();
        }
        return userAnswer === correctAnswers[0];
    }
    return false;
}

// Show feedback
function showFeedback(q) {
    const userAnswer = userAnswers[q.id];
    const isCorrect = checkAnswer(q, userAnswer);
    const typeName = getTypeName(q.type);
    
    if (isCorrect) {
        feedbackCorrect.style.display = 'block';
        feedbackIncorrect.style.display = 'none';
    } else {
        feedbackCorrect.style.display = 'none';
        feedbackIncorrect.style.display = 'block';
        correctAnswerDisplay.textContent = 'Correct answer: ' + q.correct_answers.join(', ');
    }
    
    // Highlight options
    if (typeName !== 'text' && q.options) {
        q.options.forEach((option, index) => {
            const wrapper = document.getElementById(`option-wrapper-${index}`);
            const label = wrapper.querySelector('.form-check-label');
            
            if (q.correct_answers.includes(option)) {
                label.classList.add('option-correct');
            } else if (
                (Array.isArray(userAnswer) && userAnswer.includes(option)) ||
                userAnswer === option
            ) {
                label.classList.add('option-incorrect');
            }
        });
    }
}

// Next question
function nextQuestion() {
    const q = questions[currentQuestion];
    const hasAnswer = userAnswers[q.id] && 
        (Array.isArray(userAnswers[q.id]) ? userAnswers[q.id].length > 0 : userAnswers[q.id] !== '');
    
    if (!hasAnswer) {
        alert('Please select an answer before continuing.');
        return;
    }
    
    // Mark as answered and show feedback if enabled
    if (!answeredQuestions[q.id]) {
        answeredQuestions[q.id] = true;
        
        if (checkAnswer(q, userAnswers[q.id])) {
            score++;
        }
        
        if (showAnswerAfterQuestion) {
            showFeedback(q);
            // Disable inputs
            const inputs = optionsContainer.querySelectorAll('input');
            inputs.forEach(input => input.disabled = true);
            return; // Stay on current question to see feedback
        }
    }
    
    if (currentQuestion < questions.length - 1) {
        currentQuestion++;
        displayQuestion();
    } else {
        finishQuiz();
    }
}

// Previous question
function prevQuestion() {
    if (currentQuestion > 0) {
        currentQuestion--;
        displayQuestion();
    }
}

// Finish quiz
function finishQuiz() {
    // Save results to session via AJAX
    const formData = new FormData();
    formData.append('action', 'finish');
    formData.append('score', score);
    formData.append('answers', JSON.stringify(userAnswers));
    formData.append('questions', JSON.stringify(questions));
    
    fetch('save_results.php', {
        method: 'POST',
        body: formData
    }).then(() => {
        window.location.href = 'result.php';
    }).catch(() => {
        window.location.href = 'result.php';
    });
}

// Escape HTML
function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

// Start quiz when page loads
document.addEventListener('DOMContentLoaded', initQuiz);
