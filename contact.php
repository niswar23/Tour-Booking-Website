<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - KCV Tours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="contact.css">
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


<section class="contact-section">
    <div class="container">
        <div class="section-header">
            <h2>Get In Touch With Us</h2>
            <p>We'd love to hear from you. Send us a message!</p>
        </div>

        <div class="contact-content">
            
            <!-- Contact Form -->
<div class="contact-form">
    <form action="https://formspree.io/f/xojzydvy" method="POST">
        <input type="text" name="name" placeholder="Your Full Name *" required>
        
        <input type="email" name="email" placeholder="Your Email Address *" required>
        
        <input type="tel" name="phone" placeholder="Your Phone Number *" required>
        
        <select name="subject" required>
            <option value="">Select Subject *</option>
            <option value="Kandy City Tour Booking">Kandy City Tour Booking</option>
            <option value="Hotel Room Booking">Hotel Room Booking</option>
            <option value="Tour Package Inquiry">Tour Package Inquiry</option>
            <option value="Custom Tour Request">Custom Tour Request</option>
            <option value="General Inquiry">General Inquiry</option>
            <option value="Complaint / Feedback">Complaint / Feedback</option>
        </select>
        
        <textarea name="message" rows="7" placeholder="Write your message here..." required></textarea>
        
        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>

            <!-- Contact Info -->
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p><strong>Phone:</strong> +94 76 413 2152</p>
                <p><strong>Email:</strong> mhmdashfaq180@gmail.com</p>
                <p><strong>Address:</strong> 68/5 Deiyannewala Lane Kandy, Sri-Lanka</p>
                
                <div style="margin-top: 30px;">
                    <a href="https://wa.me/94764132152" target="_blank" class="btn btn-whatsapp-large">
                        Message us on WhatsApp 💬
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Hamburger Menu
const hamburger = document.getElementById('hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
});

document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
    });
});
</script>

<!-- Share Your Experience (Reviews) - Below Contact Form -->
<div class="write-review-section">
    <div class="container">
        <h2>Share Your Experience</h2>
        <p>We’d love to hear from you! Your feedback helps us improve.</p>
        
        <form action="https://formspree.io/f/xzdqygpd" method="POST" class="review-form">
            <input type="text" name="name" placeholder="Your Name *" required>
            <textarea name="review" rows="5" placeholder="Write your review here..." required></textarea>
            <button type="submit" class="btn btn-primary">Submit Review</button>
        </form>
    </div>
</div>

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
                <a href="#">Cultural Day Tour</a>
                <a href="#">Tea Plantation Tour</a>
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