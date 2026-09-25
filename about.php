<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - KCV Tours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="about.css">
</head>
<body>

<!-- Navbar Section -->
<div class="nav-section">
    <div class="nav-left">
        <img src="main/logo.png" alt="KCV Tours">
        <h3>KCV Tours</h3>
    </div>

<navbar>
    <a href="index.php" class="home">HOME</a>
    <a href="about.php" class="about">ABOUT US</a>
    <a href="destinations.php" class="destinations">DESTINATIONS</a>
    <a href="tour.php" class="tour">TOUR PACKAGES</a>
    <a href="gallery.php" class="gallery">GALLERY</a>
    <a href="contact.php" class="contact">CONTACT</a>
</navbar>

<!-- Hamburger Icon -->
    <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

</div>


<!-- Hero Banner -->
<section class="about-hero">
    <div class="hero-overlay"></div>
    <div class="about-hero-content">
        <h1>About Us</h1>
        <p>Your Home Away From Home in Kandy</p>
    </div>
</section>

<!-- About Content -->
<section class="about-section">
    <div class="container">
        <div class="about-content">
            
            <h2>Our Story</h2>
            
            <p>
                Kandy City Village Homestay was founded in 2018 with a passion for genuine Sri Lankan hospitality. 
                What started as a small family homestay has grown into a trusted name among travelers seeking comfort, 
                warmth and an authentic experience in the cultural heart of Sri Lanka.
            </p>

            <p>
                Over the years, we have had the joy of welcoming guests from all corners of the world. 
                Many of them have returned again and again, not just for our comfortable rooms, but for the heartfelt care 
                and personal attention they receive from our family.
            </p>

            <p>
                In 2026, we proudly took the next step by launching <strong>Kandy City Village Tours</strong>. 
                Our goal is to share the rich culture, natural beauty and hidden gems of Kandy and its surroundings 
                with travelers who want more than just a regular tour — they want real experiences.
            </p>

            <p>
                Whether you stay with us or join one of our tours, our promise remains the same: 
                <strong>Authentic experiences with warm Sri Lankan hospitality.</strong>
            </p>

            <h2>Stay With Us</h2>
            <p>
                Looking for comfortable accommodation in Kandy? You can easily search for 
                <strong>“Kandy City Village”</strong> on <strong>Booking.com</strong> and book your stay with confidence.
            </p>

            <div class="about-cta">
                <a href="https://wa.me/94764132152" target="_blank" class="btn btn-whatsapp-large">
                    Contact Us on WhatsApp 💬
                </a>
            </div>
        </div>
    </div>
</section>


<script>
// Hamburger Menu
const hamburger = document.getElementById('hamburger');
const navLinks = document.querySelector('navbar');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
});
</script>


<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            
            <div class="footer-col">
                <img src="main/logo.png" alt="KCV Tours" class="footer-logo">
                <p>Kandy City Village Tours offers authentic cultural experiences, village tours, and unforgettable journeys in the heart of Sri Lanka.</p>
            </div>

            <div class="footer-col">
                <h3>Quick Links</h3>
                <a href="index.php">Home</a>
                <a href="about.php">About Us</a>
                <a href="tour.php">Tour Packages</a>
                <a href="gallery.php">Gallery</a>
                <a href="contact.php">Contact</a>
            </div>

            <div class="footer-col">
                <h3>Our Tours</h3>
                <a href="#">Kandy City Tour</a>
                <a href="#">Village Experience</a>
                <a href="#">Day Tour</a>
                <a href="#">Tea Plantation Tour</a>
                <a href="#">Custom Tours</a>
            </div>

            <div class="footer-col">
                <h3>Contact Us</h3>
                <p><strong>Phone:</strong> +94 76 413 2152</p>
                <p><strong>Email:</strong> mhmdashfaq180@gmail.com</p>
                <p><strong>Address:</strong> 68/5 Deiyannewala Lane Kandy, Sri-Lanka</p><br>
                
                <div class="social-links">
                    <a href="https://wa.me/94764132152" target="_blank">💬 WhatsApp</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 Kandy City Village Tours (KCV Tours). All Rights Reserved.</p>
            <p>Designed for Authentic Sri Lankan Experiences</p>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/94764132152" target="_blank" class="floating-whatsapp">
    <i class="fab fa-whatsapp"></i>
</a>
    
</body>
</html>