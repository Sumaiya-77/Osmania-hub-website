function extractQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}
function displayFacultyDetails() {
    const username = extractQueryParam('username');
    const department = extractQueryParam('department');
    const email = extractQueryParam('email');

    document.getElementById('username').textContent = username || 'N/A';
    document.getElementById('department').textContent = department || 'N/A';
    document.getElementById('email').textContent = email || 'N/A';
}

function showAttendance() {
    document.getElementById('attendance-section').style.display = 'block';
    document.getElementById('syllabus-section').style.display = 'none';
    document.getElementById('exam-section').style.display = 'none';
    document.getElementById('notes-section').style.display = 'none';
    document.getElementById('projects-section').style.display = 'none';
}

function showSyllabus() {
    document.getElementById('attendance-section').style.display = 'none';
    document.getElementById('syllabus-section').style.display = 'block';
    document.getElementById('exam-section').style.display = 'none';
    document.getElementById('notes-section').style.display = 'none';
    document.getElementById('projects-section').style.display = 'none';
}

function hideSyllabus() {
    document.getElementById('syllabus-section').style.display = 'none';
}

function hideAttendance() {
    document.getElementById('attendance-section').style.display = 'none';
}

function showExam() {
    document.getElementById('attendance-section').style.display = 'none';
    document.getElementById('syllabus-section').style.display = 'none';
    document.getElementById('exam-section').style.display = 'block';
    document.getElementById('notes-section').style.display = 'none';
    document.getElementById('projects-section').style.display = 'none';
}

function hideExam() {
    document.getElementById('exam-section').style.display = 'none';
}

function showNotes() {
    document.getElementById('attendance-section').style.display = 'none';
    document.getElementById('syllabus-section').style.display = 'none';
    document.getElementById('exam-section').style.display = 'none';
    document.getElementById('notes-section').style.display = 'block';
    document.getElementById('projects-section').style.display = 'none';
}

function hideNotes() {
    document.getElementById('notes-section').style.display = 'none';
}

function showProjects() {
        document.getElementById('attendance-section').style.display = 'none';
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
function submitAttendance(event) {
    event.preventDefault();

    const hallTicket = document.getElementById('attendance-hallticket').value;
    const date = document.getElementById('attendance-date').value;
    const status = document.getElementById('attendance-status').value;

    const tableBody = document.getElementById('attendance-body');
    const newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td>${hallTicket}</td>
        <td>${date}</td>
        <td>${status}</td>
    `;
    tableBody.appendChild(newRow);

    document.querySelector('.attendance-form').reset();
}

function logout() {
    window.location.href = 'std.html';
}

function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar-right');
    sidebar.style.display = (sidebar.style.display === 'block') ? 'none' : 'block';
}

function showConnect() {
    window.open('http://localhost:9000', '_blank');
}
displayFacultyDetails();