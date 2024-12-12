# Osmania Hub Website

Osmania Hub is a comprehensive website designed to streamline information access for the Department of Mathematics at Osmania University. The platform provides distinct dashboards for students and faculty, enabling seamless interaction and better resource management. This project integrates various features to enhance the academic experience for all users.

## Features

### **Main Features:**
1. **Home Page:**
   - Welcoming interface with a clean design.
   - Navigation options to quickly access sections like About Us, Campus Map, and Login.

2. **User Login System:**
   - Separate login for **Students** and **Faculty**.
   - Secure authentication for personalized dashboards.

3. **Student Dashboard:**
   - **Notes:** Access to lecture notes and study materials.
   - **Exams:** Details about upcoming exams, syllabus, and schedules.

4. **Faculty Dashboard:**
   - **Messages:** View and respond to student queries.
   - **Attendance:** Mark and view attendance records.
   - **Syllabus Management:** Upload and update academic syllabus.
   - **Exam Updates:** Manage and share details about exams and schedules.

5. **About Us Page:**
   - Dedicated page providing detailed information about the department, faculty, and coordinators.

6. **Campus Map:**
   - Interactive map embedded via Google Maps API for better campus navigation.

## Technologies Used

- **Frontend:**
  - HTML, CSS, JavaScript
  - Modern, responsive design layouts.

- **Backend:**
  - PHP for server-side scripting.
  - MySQL for database management.

- **Other Tools:**
  - XAMPP for local development and testing.
  - Google Maps API for campus map integration.
  - Socket.io for real-time chat functionality.

## Installation

### Prerequisites:
1. XAMPP installed on your system.
2. Basic understanding of PHP and MySQL.

### Steps:
1. Clone the repository:
   ```bash
   git clone https://github.com/username/osmania-hub.git
   ```
2. Move the project folder to the XAMPP `htdocs` directory.
3. Start Apache and MySQL servers in XAMPP.
4. Import the `university` database:
   - Open phpMyAdmin.
   - Create a database named `university`.
   - Import the provided SQL file.
5. Open the project in your browser:
   ```
   http://localhost/osmania-hub
   ```

## Usage

1. Navigate to the homepage and log in as a student or faculty member.
2. Explore the features available on your personalized dashboard.
3. Access academic resources, connect in real-time, and manage attendance or exam details.

## Future Enhancements

- Add mobile app support using Kivy for seamless access on smartphones.
- Implement Google OAuth for additional login options.
- Integrate analytics to track website usage and improve user experience.

## Folder Structure

```
project/
├── public/
│   ├── index.html   # Main login page
│   ├── server.js    # Real-time chat server
├── database/
│   ├── university.sql  # Database schema
├── css/
│   ├── styles.css  # Styling for the entire site
├── js/
│   ├── scripts.js  # JavaScript for interactivity
├── php/
│   ├── std.php     # Handles student form submissions
│   ├── fty.php     # Handles faculty form submissions
└── README.md       # Project documentation
```

## Contribution

Contributions are welcome! If you'd like to contribute:
- Fork the repository.
- Create a feature branch: `git checkout -b feature-name`.
- Commit your changes: `git commit -m 'Add feature'`.
- Push to the branch: `git push origin feature-name`.
- Open a pull request.

## Acknowledgements

- Osmania University Department of Mathematics for inspiration.
- OTBI for mentorship and guidance.
- Tools like XAMPP, PHP, MySQL, and Socket.io for enabling development.

---

Feel free to reach out if you have any questions or suggestions regarding the project!
