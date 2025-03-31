<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Join our Dance Program and explore creativity, fitness, and teamwork through various dance styles. Open to all ages and skill levels. Sign up today!" />
    <link rel="icon" type="image/png" href="../../images/site.png">
    <link href="../../css/futures.css" rel="stylesheet">
    <title>Dance Program | Express, Move & Inspire | Shaping Futures</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="../../">
                <img src="../../images/logo.jpg" alt="Shaping Futures Logo">
            </a>
        </div>
        <nav>
            <div class="menu-toggle">&#9776;</div>
            <ul class="navigation">
                <li><a href="../../">Home</a></li>
                <li><a href="../../about">About Us</a></li>
                <li class="active dropdown">
                    <a href="../">Programs</a>
                    <ul class="dropdown-menu">
                        <li><a href="../clothes-donation">Clothes Donation</a></li>
                        <li><a href="../dance">Dance</a></li>
                        <li><a href="../life-skills">Life Skills</a></li>
                        <li><a href="../mtoto-na-elimu">Mtoto na Elimu</a></li>
                        <li><a href="../feeding">Feeding</a></li>
                        <li><a href="../sanitary-donation">Sanitary Donation</a></li>
                    </ul>
                </li>
                <li><a href="../../get-involved">Get Involved</a></li>
                <li><a href="../../gallery">Gallery</a></li>
                <li><a href="../../contact">Contact Us</a></li>
            </ul>
        </nav>
        <div class="donate">                   
            <a href="../../get-involved/donation" class="donate-btn">Donate</a>
        </div>      
    </header>

    <main>
    <section id="dance-program">
    <div class="hero-banner">
        <h2>Dance Program</h2>
        <p>Our dance program encourages creativity and physical fitness through various dance styles. We offer classes for all ages and skill levels to foster artistic expression.</p>
    </div>

    <div class="program">
        <!-- Video Gallery -->
        <div class="dance-gallery">
            <video class="video" muted loop playsinline controlsList="nodownload">
                <source src="../../videos/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video class="video" muted loop playsinline controlsList="nodownload">
                <source src="../../videos/video2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video class="video" muted loop playsinline controlsList="nodownload">
                <source src="../../videos/video3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video class="video" muted loop playsinline controlsList="nodownload">
                <source src="../../videos/video4.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video class="video" muted loop playsinline controlsList="nodownload">
                <source src="../../videos/video5.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <video class="video" muted loop playsinline controlsList="nodownload">
                <source src="../../videos/video6.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            
        </div>

        <!-- Benefits Section -->
        <div class="info-box">
            <h3>Benefits of Joining</h3>
            <ul class="benefits-list">
                <li>Enhances physical fitness and coordination.</li>
                <li>Boosts confidence and self-esteem.</li>
                <li>Encourages teamwork and social skills.</li>
            </ul>
        </div>

        <!-- How to Get Involved -->
        <div class="info-box">
            <h3>How to Get Involved</h3>
            <ul class="how-to-donate">
                <li><span class="donate-icon">🩰</span> Sign up for our weekly dance classes.</li>
                <li><span class="donate-icon">🤝</span> Volunteer to assist with classes and events.</li>
                <li><span class="donate-icon">🎉</span> Participate in our annual dance showcase.</li>
            </ul>
            <a href="../../get-involved" class="cta-button">Sign Up Now</a>
        </div>
    </div>
</section>

    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <p>&copy; 2025 Shaping Futures. All rights reserved.</p>
                <p class="tagline"><em>Empowering youth through dance, education, and community support.</em></p>
            </div>
        
            <div class="footer-links">
                <a href="../../about">About Us</a>|
                <a href="../">Programs</a>|
                <a href="../../get-involved">Get Involved</a>|
                <a href="../../contact">Contact</a>
            </div>
        
            <div class="social-icons">
                <a href="https://www.facebook.com/SHAFFS35" target="_blank" aria-label="Facebook" rel="noopener noreferrer">
                    <img src="../../images/facebook.png" alt="Facebook Logo" class="social-icon">
                </a>
                <a href="https://www.instagram.com/shapingfutures35/" target="_blank" aria-label="Instagram" rel="noopener noreferrer">
                    <img src="../../images/instagram.png" alt="Instagram Logo" class="social-icon">
                </a>
                <a href="https://www.tiktok.com/@shaping_futures?_t=8pitydSW0yT&_r=1" target="_blank" aria-label="TikTok" rel="noopener noreferrer">
                    <img src="../../images/tik-tok.png" alt="TikTok Logo" class="social-icon">
                </a>
                <a href="https://www.youtube.com/@shapingfutures5429" target="_blank" aria-label="YouTube" rel="noopener noreferrer">
                    <img src="../../images/youtube.png" alt="YouTube Logo" class="social-icon">
                </a>
                <a href="https://x.com/ShapingF23501" target="_blank" aria-label="Twitter" rel="noopener noreferrer">
                    <img src="../../images/twitter.png" alt="Twitter Logo" class="social-icon">
                </a>
                <a href="https://wa.me/254757050679" target="_blank" aria-label="WhatsApp" rel="noopener noreferrer">
                    <img src="../../images/whatsapp.png" alt="WhatsApp Logo" class="social-icon">
                </a>
            </div>
        </div>
    </footer>
    <script src="../../js/futures.js"></script>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const videos = document.querySelectorAll(".video");
    let lastPlayedVideo = null; // Store the last played video

    if (videos.length > 0) {
        videos[0].play(); // Auto-play the first video when page loads
        lastPlayedVideo = videos[0]; // Store the first video as last played
    }

    videos.forEach((video) => {
        video.controls = false; // Hide controls initially

        video.addEventListener("mouseenter", function () {
            // Pause all other videos and hide their controls
            videos.forEach((vid) => {
                if (vid !== video) {
                    vid.pause();
                    vid.controls = false;
                }
            });

            // Play the hovered video and show controls
            video.play();
            video.controls = true;
            lastPlayedVideo = video; // Store the last played video
        });

        video.addEventListener("mouseleave", function () {
            setTimeout(() => {
                if (!document.querySelector(".video:hover")) {
                    // If no video is hovered, play last hovered video but hide controls
                    lastPlayedVideo.play();
                    lastPlayedVideo.controls = false;
                }
            }, 200); // Small delay to ensure hover-out is registered
        });
    });
});
</script>
</body>
</html>