<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - KCV Tours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="gallery.css">
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


<!-- Hero Banner -->
<section class="gallery-hero">
    <div class="hero-overlay"></div>
    <div class="gallery-hero-content">
        <h1>Our Gallery</h1>
        <p>Capturing the beauty of Kandy and Sri Lanka through our tours</p>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <div class="gallery-grid">

            <div class="gallery-item">
                <img src="gallery/1.jpeg" alt="Tour Photo 1">
                <div class="overlay">
                </div>
            </div>

            <div class="gallery-item">
                <img src="gallery/2.jpeg" alt="Tour Photo 2">
                <div class="overlay">
                </div>
            </div>

            <div class="gallery-item">
                <img src="gallery/3.jpeg" alt="Tour Photo 3">
                <div class="overlay">
                </div>
            </div>

            <div class="gallery-item">
                <img src="gallery/4.jpeg" alt="Tour Photo 4">
                <div class="overlay">
                </div>
            </div>

            <div class="gallery-item">
                <img src="gallery/5.jpeg" alt="Tour Photo 5">
                <div class="overlay">
                </div>
            </div>

            <div class="gallery-item">
                <img src="gallery/6.jpeg" alt="Tour Photo 6">
                <div class="overlay">
                </div>
            </div>

            <div class="gallery-item">
                <img src="gallery/7.jpeg" alt="Tour Photo 7">
                <div class="overlay">
                </div>
            </div>

            <div class="gallery-item">
                <img src="gallery/8.jpeg" alt="Tour Photo 8">
                <div class="overlay">
                </div>
            </div>

            <div class="gallery-item">
                <img src="gallery/9.jpeg" alt="Tour Photo 9">
                <div class="overlay">
                </div>
            </div>

            <div class="gallery-item">
                <img src="gallery/10.jpeg" alt="Tour Photo 10">
                <div class="overlay">
                </div>
            </div>
             <div class="gallery-item">
                <img src="gallery/11.jpeg" alt="Tour Photo 11">
                <div class="overlay">
                </div>
            </div>
              
              <div class="gallery-item">
                <img src="gallery/12.jpeg" alt="Tour Photo 12">
                <div class="overlay">
                </div>
            </div>
              
              <div class="gallery-item">
                <img src="gallery/13.jpeg" alt="Tour Photo 13">
                <div class="overlay">
                </div>
            </div>
              
              <div class="gallery-item">
                <img src="gallery/14.jpeg" alt="Tour Photo 14">
                <div class="overlay">
                </div>
            </div>
            
                 <div class="gallery-item">
                <img src="gallery/15.jpeg" alt="Tour Photo 15">
                <div class="overlay">
                </div>
            </div>
            
                 <div class="gallery-item">
                <img src="gallery/16.jpeg" alt="Tour Photo 16">
                <div class="overlay">
                </div>
            </div>
            
            
       
            

        </div>

        <div class="gallery-note">
            <p>More memories coming soon...</p>
        </div>
    </div>
</section>

<!-- Simple Lightbox Script -->
<script>
document.querySelectorAll('.gallery-item img').forEach(img => {
    img.addEventListener('click', () => {
        const lightbox = document.createElement('div');
        lightbox.style.position = 'fixed';
        lightbox.style.top = '0';
        lightbox.style.left = '0';
        lightbox.style.width = '100%';
        lightbox.style.height = '100%';
        lightbox.style.background = 'rgba(0,0,0,0.9)';
        lightbox.style.display = 'flex';
        lightbox.style.alignItems = 'center';
        lightbox.style.justifyContent = 'center';
        lightbox.style.zIndex = '10000';
        lightbox.innerHTML = `<img src="${img.src}" style="max-width:90%; max-height:90%; border-radius:12px;">`;
        
        lightbox.addEventListener('click', () => lightbox.remove());
        document.body.appendChild(lightbox);
    });
});
</script>

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