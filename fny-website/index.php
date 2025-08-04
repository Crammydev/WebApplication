<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FNY Youth Organization</title>
    <!-- LightGallery CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/css/lightgallery-bundle.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="assets/logo.png" alt="FNY Logo">
            </div>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#perks">PERKS</a></li>
                <li><a href="#community">COMMUNITY</a></li>
                <li><button class="join-btn">JOIN US</button></li>
            </ul>
        </nav>

    </header>


    <!-- Sections -->
    <!-- Updated Hero Section - Replace your existing hero section with this -->
    <section id="home" class=" fny-intro">
        <!-- Top-left Red Dots -->
        <div class="dot-grid top-left"></div>

        <!-- Bottom-right Red Dots -->
        <div class="dot-grid bottom-right"></div>

        <div class="fny-left">
            <h1><span>FUTURE</span> <strong>NATIN</strong> YOUTH</h1>
            <p class="values">LOYALTY – COMMAND – COMPASSION – INTEGRITY</p>
            <p class="cta-header">BE ONE OF US!</p>
            <a href="#" class="join-btn">JOIN US</a>
            <div class="social-icons">
                <a href="https://www.facebook.com/FutureNatinYouth"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-telegram"></i></a>
            </div>
        </div>

        <div class="fny-right">
            <div class="poster-container">
                <img src="assets/fnytarp.png" alt="FNY Poster">
                <img class="pin" src="assets/icons/pin-icon.png" alt="Red Pin">
            </div>
        </div>
    </section>



    <section id="about" class="section about-section position-relative">
        <div class="dot-grid top-left"></div>
        <div class="dot-grid bottom-right"></div>
        <h2>ABOUT</h2>

        <div class="about-stats">
            <div class="stat">
                <h3 class="blue">405</h3>
                <p>Current Members</p>
            </div>
            <div class="stat divider">
                <h3 class="red">50+</h3>
                <p>Projects Completed</p>
            </div>
            <div class="stat">
                <h3 class="blue">99%</h3>
                <p>Success Rate</p>
            </div>
        </div>


        <div class="mission-box">
            <div class="ribbon"></div>
            <p>
                Mission: To nurture, empower and transform youth volunteers into dedicated leaders by providing them opportunities
                to connect, lead and learn through various activities that will develop and inspire them to provide sustainable
                solutions for the community of Montalban.
            </p>
        </div>

        <div class="mission-box">
            <div class="ribbon"></div>
            <p>
                Future Natin Youth (FNY) is an organization envisioned to be the leading youth organization of visionary leaders
                in Montalban. The mission of the organization shall pursue to nurture, empower and transform youth volunteers into
                dedicated leaders by providing them opportunities to connect, lead and learn through various activities that will
                develop and inspire them to provide sustainable solutions for the community of Montalban.<br><br>
                FNY will be able to help on the following:
                <br>- Providing training that will enhance their Life Skills and Leadership Skills.
                <br>- Empower the youth Leaders and members of every barangay.
                <br>- Provide assistance such as Medical, Scholarship, Livelihood etc.
            </p>
        </div>
        <!-- New Video Embed -->
        <div class="responsive-iframe-wrapper">
            <div class="responsive-iframe-container">
                <h3 style="margin-bottom: 20px;">Get to Know More About Us</h3>
                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FFutureNatinYouth%2Fvideos%2F3995496460719993%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </div>
    </section>


    <!-- Services Section -->
    <section id="services" class="section position-relative">
        <div class="dot-grid top-left"></div>
        <div class="dot-grid bottom-right"></div>
        <h2>SERVICES</h2>
        <p>We offer volunteer training, event organizing, community outreach, and more.</p>

        <!-- Responsive Image Gallery with Pins -->
        <!-- Responsive Image Gallery with Pins -->
        <div id="services-gallery" class="services-gallery">
            <div class="service-image-box">
                <a href="assets/services/one.png" class="gallery-item">
                    <img src="assets/services/one.png" alt="Service 1">
                </a>
                <div class="pin">
                    <img src="assets/icons/pin-icon.png" alt="Pin Icon">
                </div>

            </div>

            <div class="service-image-box">
                <a href="assets/services/two.png" class="gallery-item">
                    <img src="assets/services/two.png" alt="Service 2">
                </a>
                <div class="pin">
                    <img src="assets/icons/pin-icon.png" alt="Pin Icon">
                </div>

            </div>

            <div class="service-image-box">
                <a href="assets/services/three.png" class="gallery-item">
                    <img src="assets/services/three.png" alt="Service 3">
                </a>
                <div class="pin">
                    <img src="assets/icons/pin-icon.png" alt="Pin Icon">
                </div>

            </div>

            <div class="service-image-box">
                <a href="assets/services/four.png" class="gallery-item">
                    <img src="assets/services/four.png" alt="Service 4">
                </a>
                <div class="pin">
                    <img src="assets/icons/pin-icon.png" alt="Pin Icon">
                </div>

            </div>

            <div class="service-image-box">
                <a href="assets/services/five.png" class="gallery-item">
                    <img src="assets/services/five.png" alt="Service 5">
                </a>
                <div class="pin">
                    <img src="assets/icons/pin-icon.png" alt="Pin Icon">
                </div>

            </div>

            <div class="service-image-box">
                <a href="assets/services/six.png" class="gallery-item">
                    <img src="assets/services/six.png" alt="Service 6">
                </a>
                <div class="pin">
                    <img src="assets/icons/pin-icon.png" alt="Pin Icon">
                </div>

            </div>

            <div class="service-image-box">
                <a href="assets/services/seven.png" class="gallery-item">
                    <img src="assets/services/seven.png" alt="Service 7">
                </a>
                <div class="pin">
                    <img src="assets/icons/pin-icon.png" alt="Pin Icon">
                </div>

            </div>

            <div class="service-image-box">
                <a href="assets/services/eight.png" class="gallery-item">
                    <img src="assets/services/eight.png" alt="Service 8">
                </a>
                <div class="pin">
                    <img src="assets/icons/pin-icon.png" alt="Pin Icon">
                </div>

            </div>

            <div class="service-image-box">
                <a href="assets/services/nine.png" class="gallery-item">
                    <img src="assets/services/nine.png" alt="Service 9">
                </a>
                <div class="pin">
                    <img src="assets/icons/pin-icon.png" alt="Pin Icon">
                </div>

            </div>
        </div>


        <!-- Facebook Video Embed -->
        <div class="responsive-iframe-wrapper">
            <div class="responsive-iframe-container">
                <h3 style="margin-bottom: 20px;">Watch Our Activities</h3>
                <iframe
                    src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FFutureNatinYouth%2Fvideos%2F1325372045192756%2F&show_text=false&width=560&t=0"
                    width="100%"
                    height="400"
                    style="border:none;overflow:hidden"
                    scrolling="no"
                    frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
            </div>

    </section>


    <!-- Perks Section -->
    <section id="perks" class="section position-relative">
        <div class="dot-grid top-left"></div>
        <div class="dot-grid bottom-right"></div>
        <h2>PERKS</h2>
        <p>Networking, leadership training, certifications, and recognition opportunities.</p>

        <div class="mission-box">
            <div class="ribbon"></div>
            <p>Providing training that will enhance their Life Skills and Leadership Skills.</p>
        </div>
        <div class="mission-box">
            <div class="ribbon"></div>
            <p>Empower the youth Leaders and members of every barangay.</p>
        </div>
        <div class="mission-box">
            <div class="ribbon"></div>
            <p>Provide assistance such as Medical, Scholarship, Livelihood etc.</p>
        </div>

        <!-- Second Facebook Video Embed -->
        <div class="responsive-iframe-wrapper">
            <div class="responsive-iframe-container">
                <h3 style="margin-bottom: 20px;">Follow and Like Our FB Page!</h3>
                <iframe
                    src="https://www.facebook.com/plugins/video.php?height=350&href=https%3A%2F%2Fwww.facebook.com%2FFutureNatinYouth%2Fvideos%2F2173150076463496%2F&show_text=false&width=560&t=0"
                    width="100%"
                    height="350"
                    style="border:none;overflow:hidden"
                    scrolling="no"
                    frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
            </div>
    </section>
    <!-- Community Engagement Section -->
    <section id="community" class="section community-engagement position-relative">
        <div class="dot-grid top-left"></div>
        <div class="dot-grid bottom-right"></div>
        <h2>COMMUNITY ENGAGEMENT</h2>
        <div class="engagement-grid">
            <div class="engagement-card red">Encouraging individuals to take part in initiatives, events, or projects.</div>
            <div class="engagement-card navy">Working alongside community members, not just for them.</div>
            <div class="engagement-card blue">Giving people the tools and opportunities to influence change.</div>
            <div class="engagement-card red">Providing role models and mentors who can offer direction, encouragement, and support. Positive adult–youth relationships help young people stay motivated and feel cared for.</div>
            <div class="engagement-card navy">Creating physical and emotional spaces where youth feel safe to express themselves, interact, and grow. This also includes support for mental health and social well-being.</div>
            <div class="engagement-card blue">Ensuring that youth from diverse backgrounds are involved in planning and decision-making. Their opinions should be sought and valued in matters that affect them and the wider community.</div>
        </div>

        <div class="advocacy-box">
            <strong>Advocacy:</strong><br>
            Health, Education, Economic Empowerment, Social Inclusion and Equity, Peace-Building and Security, Governance, Active Citizenship, Environment.
            <div class="pin">
                <img src="assets/icons/pin-icon.png" alt="Pin Icon">
            </div>
        </div>
    </section>




    <!-- Modal -->
    <div id="joinModal" class="modal">
        <div class="modal-content">
            <span class="closeBtn">&times;</span>
            <h2>Join Us - Registration Form</h2>
            <form id="joinForm" method="POST" action="submit.php">
                <input name="last_name" type="text" placeholder="Last Name" required>
                <input name="first_name" type="text" placeholder="First Name" required>
                <input name="middle_initial" type="text" placeholder="Middle Initial">
                <input name="dob" type="date" required>
                <input name="address" type="text" placeholder="Address" required>
                <input name="contact" type="text" placeholder="Contact No" required>
                <select name="voter" required>
                    <option value="">Are you a Voter?</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
                <input name="school" type="text" placeholder="School" required>
                <input name="recruited_by" type="text" placeholder="Recruited By">
                <button type="button" class="register-btn" onclick="confirmRegistration()">Register</button>


            </form>
        </div>
    </div>
    <!-- Confirmation Modal -->
    <div id="confirmModal" class="modal" style="display: none;">
        <div class="modal-content">
            <h3>Confirm Registration</h3>
            <p>Are you sure you want to become a member of the organization?</p>
            <div style="margin-top: 20px; text-align: right;">
                <button onclick="submitRealForm()" class="register-btn">Yes, Register</button>
                <button onclick="closeConfirmModal()" class="cancel-btn">Cancel</button>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <img src="assets/footer logo.png" alt="Youth Logo">
                <div class="logo-text">
                    <strong>FUTURE</strong> <span>NATIN</span> YOUTH
                </div>
            </div>

            <div class="footer-center">
                <button class="join-btn">JOIN US</button>
                <div class="social-icons">
                    <a href="https://www.facebook.com/FutureNatinYouth"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                </div>
            </div>

            <div class="footer-right">
                <div class="header">BE ONE OF US!</div>
                <div class="footer-links">
                    <a href="#about">ABOUT US</a>
                    <a href="#perks">PERKS</a>
                    <a href="#community">COMMUNITY</a>
                    <a href="#services">SERVICES</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            © 2025 FNY: Future Natin Youth Hub • All Rights Reserved
        </div>
        <button id="scrollTopBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    </footer>


    <script src="script.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- LightGallery JS -->
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/zoom/lg-zoom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.1/plugins/fullscreen/lg-fullscreen.min.js"></script>

    <script>
        lightGallery(document.getElementById('services-gallery'), {
            selector: '.gallery-item',
            plugins: [lgZoom, lgThumbnail, lgFullscreen],
            speed: 500,
            zoomFromOrigin: true,
            allowMediaOverlap: true,
            toggleThumb: true
        });
    </script>



</body>

</html>