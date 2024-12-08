<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <link rel="stylesheet" href="css/sytle.css">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <h1 class="preloader-text">Portofolio.</h1>
        </div>

        <div id="main-content">
            <header>
                <div class="container">
                    <!-- Navbar at the top -->
                    <div class="navbar">
                        <div class="logo">
                            <h1>Portofolio.</h1>
                        </div>
                        <nav>
                            <ul>
                                <li><a href="#about">About</a></li>
                                <li><a href="#skills">Skills</a></li>
                                <li><a href="#projects">Projects</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Name centered below the navbar -->
                    <h1 class="title">Fa'iz Abiyu Atha Fawas</h1>
                    <h3>Web Developer | Mobile Developer</h3>
                </div>
            </header>

            <!-- About Me -->
            <section id="about" class="section">
                <div class="container">
                    <h2>About Me</h2>
                    <div class="profile-container">
                        <div class="profile-picture">
                            <img src="img/pfp.jpg" alt="Fa'iz Abiyu Atha Fawas">
                        </div>
                        <div class="about-text">
                            <p>Passionate about web development, I focus on creating dynamic user experiences and have a solid grasp of back-end frameworks for building scalable applications. Through academic projects, I’ve developed strong technical and collaborative skills, thriving in team environments and under pressure while delivering quality results. I am dedicated to continuous learning, embracing new technologies to enhance my expertise in both front-end and back-end development.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Skills Section -->
            <section id="skills" class="section bg-light">
                <div class="container">
                    <h2>Skills</h2>
                    <p>Our skills reflect our expertise and ability to apply knowledge to real-world challenges. They demonstrate technical proficiency, creativity, and effective communication, highlighting our commitment to growth and meaningful contributions to our teams and organizations. I have experience in various technologies and tools for web development, mobile development, and design. These are my main skills:</p>
                    <!-- <p>You can click it to see why my level in that way</p> -->
                    <div class="skills-list">
                        <div class="skill" onclick="openModal('Java', 'Saya telah menggunakan Java untuk mengembangkan aplikasi berbasis desktop dan backend selama 3 tahun.')">
                            <div class="icon-container">
                                <i class="fab fa-java" style="font-size: 50px; color: #007396;"></i> <!-- Java Icon -->
                            </div>
                            <h3>Java</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fab fa-html5" style="font-size: 50px; color: #e34f26;"></i> <!-- HTML Icon -->
                            </div>
                            <h3>HTML</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fab fa-css3" style="font-size: 50px; color: #1572b6;"></i> <!-- CSS Icon -->
                            </div>
                            <h3>CSS</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fa-brands fa-square-js" style="font-size: 50px; color: #f7df1e;"></i> <!-- JavaScript Icon -->
                            </div>
                            <h3>JavaScript</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fab fa-php" style="font-size: 50px; color: #8993be;"></i> <!-- PHP Icon -->
                            </div>
                            <h3>Php</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fab fa-laravel" style="font-size: 50px; color: #ff2d20;"></i> <!-- Laravel Icon -->
                            </div>
                            <h3>Laravel</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fab fa-bootstrap" style="font-size: 50px; color: #563d7c;"></i> <!-- Bootstrap Icon -->
                            </div>
                            <h3>BootStrap</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fa-solid fa-database" style="font-size: 50px; color: #4479a1;"></i> <!-- MySQL Icon -->
                            </div>
                            <h3>MySQL</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fa-brands fa-flutter" style="font-size: 50px; color: #02569b;"></i> <!-- Flutter Icon -->
                            </div>
                            <h3>Flutter</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fa-brands fa-figma" style="font-size: 50px; color: #f24e1e;"></i> <!-- Figma Icon -->
                            </div>
                            <h3>Figma</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fa-solid fa-file-excel" style="font-size: 50px; color: #2e8b57;"></i> <!-- Excel Icon -->
                            </div>
                            <h3>Excel</h3>
                        </div>
                        <div class="skill">
                            <div class="icon-container">
                                <i class="fa-solid fa-laptop-code"></i> <!-- Fullstack Icon -->
                            </div>
                            <h3>Fullstack</h3>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal -->
            <div id="skill-modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2 id="skill-title"></h2>
                    <p id="skill-description"></p>
                </div>
            </div>

            <!-- Projects Section -->
            <section id="projects" class="section">
                <div class="container">
                    <h2>Projects</h2>
                    <div class="projects-grid">
                        <div class="project">
                            <img src="img/project1.png" alt="Project 1">
                            <h3>Customer Satisfaction System</h3>
                            <p>Developed a PHP Native web-based system for managing satisfaction surveys at POLINEMA, targeting stakeholders like administrators, parents, educators, and lecturers. The system enhances survey management and supports data-driven decisions. As a full-stack developer, I built the entire system and user interface. Being my first project, it’s still a work in progress with some bugs.</p>
                            <div class="btn-container">
                                <a href="https://github.com/Agate1234/SKPP" class="github" target="_blank">View on GitHub</a>
                                <a href="https://www.figma.com/design/gTORMvhHfOZDSpUeglzAjR/Sistem-Survey-Kepuasan-Pelanggan-Polinema?node-id=0-1&t=r3NBV1PQgDHIoZZR-1" class="demo" target="_blank">View On Figma</a>
                            </div>
                        </div>
                        <div class="project">
                            <img src="img/project2.png" alt="Project 2">
                            <h3>Website Compensation for TI Major</h3>
                            <p>Developed a web-based system using Laravel to digitize student compensation processes. The system includes features such as user management, task approval, progress tracking, attendance integration via API, and QR code validation. As the backend developer, I designed and implemented all system functionalities, ensuring robust and efficient operations.</p>
                            <div class="btn-container">
                                <a href="https://github.com/fahmimardiansyah/sukakompen" class="github" target="_blank">View on GitHub</a>
                                <a href="https://www.figma.com/design/cDRuxRWN0dYTkVdbxdiNYR/Suka-Kompen.?node-id=488-396&t=rGVAsRap6y3rhaHV-1" class="demo" target="_blank">View On Figma</a>
                            </div>
                        </div>
                        <div class="project">
                            <img src="img/project3.png" alt="Project 3">
                            <h3>Mobile App Compensation for TI Major</h3>
                            <p>Designed and developed a mobile application using Flutter to streamline student compensation processes. As the backend developer, I created and managed the entire REST API, ensuring seamless integration between the web system and mobile application. The app includes features such as QR code validation, task tracking, real-time notifications, and an intuitive interactive dashboard.</p>
                            <div class="btn-container">
                                <a href="https://github.com/MHasanBas/Kompen" class="github" target="_blank">View on GitHub</a>
                                <a href="https://www.figma.com/design/cDRuxRWN0dYTkVdbxdiNYR/Suka-Kompen.?node-id=0-1&t=rGVAsRap6y3rhaHV-1" class="demo" target="_blank">View On Figma</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="section bg-dark">
                <div class="container">
                    <h2 class="contact-title">Contact Me</h2>
                    <div class="icon-row">
                        <div class="icon-container">
                            <a href="https://github.com/Agate1234" target="_blank" class="contact-link github">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                        <div class="icon-container">
                            <a href="https://www.linkedin.com/in/fa-iz-abiyu-atha-fawas-405761252/" target="_blank" class="contact-link linkedin">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                        <div class="icon-container">
                            <a href="https://wa.me/6281217028395" target="_blank" class="contact-link whatsapp">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer>
                <div class="container">
                    <p>&copy; 2024 Fa'iz Abiyu Atha Fawas. All Rights Reserved.</p>
                </div>
            </footer>
        </div>
    </body>
    
    <script src="js/script.js"></script>
</html>
