<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Make a difference by volunteering with us! Join a passionate community, gain new skills, and create a lasting impact. Sign up today and be the change!">
    <link rel="icon" type="image/png" href="../../images/site.png">
    <link href="../../css/futures.css" rel="stylesheet">
    <title>Volunteer with Us | Make a Difference Today | Shaping Futures</title>
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
                <li class="dropdown">
                    <a href="../../programs">Programs</a>
                    <ul class="dropdown-menu">
                        <li><a href="../../programs/clothes-donation">Clothes Donation</a></li>
                        <li><a href="../../programs/dance">Dance</a></li>
                        <li><a href="../../programs/life-skills">Life Skills</a></li>
                        <li><a href="../../programs/mtoto-na-elimu">Mtoto na Elimu</a></li>
                        <li><a href="../../programs/feeding">Feeding</a></li>
                        <li><a href="../../programs/sanitary-donation">Sanitary Donation</a></li>
                    </ul>
                </li>
                <li class="active"><a href="../">Get Involved</a></li>
                <li><a href="../../gallery">Gallery</a></li>
                <li><a href="../../contact">Contact Us</a></li>
            </ul>
        </nav>
        <div class="donate">                   
            <a href="../donation" class="donate-btn">Donate</a>
        </div>      
    </header>

    <main>
    <section id="volunteer-hero">
        <div class="hero-content">
            <h1>Be the Change. Volunteer Today!</h1>
            <p>Your time and skills can transform lives. Join us and make a difference.</p>
            <a href="#volunteer-form" class="cta-button">Start Volunteering</a>
        </div>
    </section>

    <!-- Why Volunteer Section -->
    <section id="why-volunteer">
        <h2>Why Volunteer?</h2>
        <div class="benefits">
            <div class="benefit-item">✅ Make a Lasting Impact</div>
            <div class="benefit-item">✅ Gain New Skills & Experience</div>
            <div class="benefit-item">✅ Join a Passionate Community</div>
            <div class="benefit-item">✅ Receive a Volunteer Certificate</div>
        </div>
    </section>

    <!-- Volunteer Signup Form -->
    <section id="volunteer-form">
        <div class="form-container">
            <h2>Sign Up to Volunteer</h2>
            <p>Fill in the details below to get started.</p>
            <form action="submit_volunteer.php" method="POST">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="interest">Area of Interest *</label>
                <select id="interest" name="interest">
                    <option value="mentorship">Mentorship</option>
                    <option value="teaching">Teaching</option>
                    <option value="fundraising">Fundraising</option>
                    <option value="events">Event Planning</option>
                    <option value="digital">Digital Skills Training</option>
                </select>

                <label for="availability">Availability *</label>
                <select id="availability" name="availability">
                    <option value="weekdays">Weekdays</option>
                    <option value="weekends">Weekends</option>
                    <option value="flexible">Flexible</option>
                </select>

                <label for="message">Why do you want to volunteer? (Optional)</label>
                <textarea id="message" name="message" rows="4"></textarea>

                <button type="submit" class="cta-button">Become a Volunteer</button>
            </form>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        <h2>What Our Volunteers Say</h2>
        <div class="testimonial">
            <p>"Volunteering here has been life-changing! I’ve made an impact and gained so much in return."</p>
            <h4>— John, Mentor</h4>
        </div>
        <div class="testimonial">
            <p>"I love being part of this incredible community! The experience is priceless."</p>
            <h4>— Sarah, Event Planner</h4>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <h4>Do I need prior experience?</h4>
            <p>No! We welcome volunteers from all backgrounds.</p>
        </div>
        <div class="faq-item">
            <h4>How much time do I need to commit?</h4>
            <p>As much or as little as you can. Every effort counts!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="vcontact">
        <h2>Still Have Questions?</h2>
        <p>Contact us at:</p>
        <p><strong>Email:</strong> info@shapingfutures.or.ke</p>
        <p><strong>Phone:</strong> +254 757 050 679</p>
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
                <a href="../../programs">Programs</a>|
                <a href="../">Get Involved</a>|
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
</body>
</html>