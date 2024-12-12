function extractQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

function displayStudentDetails() {
    const firstName = extractQueryParam('first_name');
    const lastName = extractQueryParam('last_name');
    const dob = extractQueryParam('dob');
    const course = extractQueryParam('course');
    const hallTicket = extractQueryParam('hallticket');

    document.getElementById('student-name').textContent = `${firstName || 'N/A'} ${lastName || 'N/A'}`;
    document.getElementById('roll-number').textContent = hallTicket || 'N/A';
    document.getElementById('student-dob').textContent = dob || 'N/A';
    document.getElementById('student-course').textContent = course || 'N/A';
}

function showSyllabus() {
    document.getElementById('syllabus-section').style.display = 'block';
    document.getElementById('exam-section').style.display = 'none';
    document.getElementById('notes-section').style.display = 'none';
    document.getElementById('projects-section').style.display = 'none';
}

function hideSyllabus() {
    document.getElementById('syllabus-section').style.display = 'none';
}


function showExam() {
    document.getElementById('syllabus-section').style.display = 'none';
    document.getElementById('exam-section').style.display = 'block';
    document.getElementById('notes-section').style.display = 'none';
    document.getElementById('projects-section').style.display = 'none';
}

function hideExam() {
    document.getElementById('exam-section').style.display = 'none';
}

function showNotes() {
    document.getElementById('syllabus-section').style.display = 'none';
    document.getElementById('exam-section').style.display = 'none';
    document.getElementById('notes-section').style.display = 'block';
    document.getElementById('projects-section').style.display = 'none';
}

function hideNotes() {
    document.getElementById('notes-section').style.display = 'none';
}

function showProjects() {
    document.getElementById('syllabus-section').style.display = 'none';
    document.getElementById('exam-section').style.display = 'none';
    document.getElementById('notes-section').style.display = 'none';
    document.getElementById('projects-section').style.display = 'block';
}

function hideProjects() {
    document.getElementById('projects-section').style.display = 'none';
}

function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar-right');
    sidebar.style.display = sidebar.style.display === 'none' ? 'block' : 'none';
}


function logout() {
window.location.href = 'std.html';
}

function toggleSidebar() {
const sidebar = document.querySelector('.sidebar-right');
sidebar.style.display = (sidebar.style.display === 'block') ? 'none' : 'block';
}

function showConnect() {
window.open('http://localhost:9001', '_blank');
}

// Display student details when page loads
displayStudentDetails();