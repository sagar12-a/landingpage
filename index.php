

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <header>
        <div class="logo"><img src="admate.png"></div>
        <div class="toll-free">Toll Free: 1800-123-4567</div>
        <button class="demo-btn" id="openModalBtn">Book Free Demo Class</button>
      </header>
      <div class="modal" id="demoModal">
        <div class="modal-content">
          <span class="close-btn" id="closeModalBtn">&times;</span>
          <h2>Free Demo Registration</h2>
          <form id="demoForm">
            <input type="text" placeholder="Full Name" required />
            <input type="email" placeholder="Email" required />
            <input type="tel" placeholder="Phone Number" required />
            
            <button type="submit">Submit</button>
            <div class="thank-you-msg" id="thankYouMsg" style="display:none;">
              ✅ Thank you! We’ll contact you soon.
            </div>
          </form>
        </div>
      </div>
      <div id="chat-toggle" onclick="toggleChat()">💬 Chat with us</div>

<!-- Chatbot Widget -->
      <div id="chatbot">
        <div class="chat-header">
          <img src="https://randomuser.me/api/portraits/men/50.jpg" alt="Chatbot" class="chat-avatar">
          <span>Smart Assistant</span>
          <button onclick="toggleChat()">✖</button>
        </div>
        <div class="chat-body" id="chat-body">
          <div class="bot-message">👋 How may I help you?<br>What are you looking for?</div>
          <div class="chat-options">
            <button onclick="quickReply('Digital Marketing Courses')">📚 Digital Marketing Courses</button>
            <button onclick="quickReply('Course duration')">🏢 Course Duration</button>
            <button onclick="quickReply('Careers')">💼 Careers</button>
            <button onclick="quickReply('Chat with Counsellor')">💬 Chat with Counsellor</button>
          </div>
        </div>
      
      </div>

      <section class="nav-section">
        <div class="course-summary">
          <h1>Digital Marketing Carreer Program</h1>
          <p>Boost your digital marketing career with our comprehensive advanced course. Learn SEO, SEM, Social Media Strategy, Content Marketing, Google Ads, Email Marketing, and Analytics. Get hands-on experience with real-world projects and certifications that enhance your resume.</p>
          <ul>
            <li>Duration: 3 Months</li><br>
            <li>Mode:  Offline</li><br>
            <li>Level: Advanced</li><br>
            <li>Includes: Live Projects, Certification, Career Guidance</li>
          </ul>
        </div>
      
        <div class="form-section">
        <?php
if (isset($_GET['message'])) {
    if ($_GET['message'] == 'success') {
        echo "<p style='color: green;'>Your information was submitted successfully!</p>";
    } elseif ($_GET['message'] == 'error') {
        echo "<p style='color: red;'>Oops! There was an error submitting your information. Please try again.</p>";
    }
}
?>
          <h3>Enroll Now</h3>
          <form method="post" action="connect.php" >
            <input type="text" placeholder="Full Name"  id="name" name="name" required>
            <input type="email" placeholder="Email Address" id="email" name="email" required>
            <input type="tel" placeholder="Phone Number"  id="number" name="phone" required>
            <textarea placeholder="Your Message" rows="4" id="message" name="message"></textarea>
            <button type="submit">Submit</button>
          </form>
          <div id="thankYouMessage" style="display: none; color: green; margin-top: 20px;">
            Contact us soon! We will reach out to you shortly.
        </div>
        
        </div>
      </section>
      <section class="nav-section2">
        <h1>🚀 What Will You Learn in the Digital Marketing Course?</h1>
        <ul class="course-list">
          <li>SEO (Search Engine Optimization)</li>
          <li>Google Ads & PPC</li>
          <li>Social Media Marketing</li>
          <li>Content Marketing</li>
          <li>Email Marketing</li>
          <li>Analytics & Data Insights</li>
          <li>Affiliate Marketing</li>
          <li>Brand Strategy</li>
          <li>Funnel Building</li>
          <li>Marketing Automation</li>
        </ul>
      </section>
      <section class="nav-section3">
        <h2>🛠️ Digital Marketing Platforms & Tools You’ll Use</h2>
        <ul class="tool-list">
          <li>Google Analytics</li>
          <li>Facebook Ads Manager</li>
          <li>Google Ads</li>
          <li>Ahrefs / SEMrush</li>
          <li>Mailchimp</li>
          <li>HubSpot</li>
          <li>Hootsuite / Buffer</li>
          <li>Canva / Adobe Express</li>
        </ul>
      </section>
      <section class="job-section">
        <h2>💼 Job Providers in Digital Marketing</h2>
        <div class="job-boxes">
          <div class="job-card">
            <h3>Google</h3>
            <p>Performance Marketing Roles</p>
          </div>
          <div class="job-card">
            <h3>Amazon</h3>
            <p>Digital Ads & Growth</p>
          </div>
          <div class="job-card">
            <h3>Accenture</h3>
            <p>Digital Strategy & Campaigns</p>
          </div>
          <div class="job-card">
            <h3>Wipro Digital</h3>
            <p>SEO, SEM, Analytics</p>
          </div>
          <div class="job-card">
            <h3>Deloitte</h3>
            <p>Consulting & Digital Media</p>
          </div>
          <div class="job-card">
            <h3>Zoho</h3>
            <p>Marketing Automation</p>
          </div>
          <div class="job-card">
            <h3>TCS iON</h3>
            <p>Online Campaign Management</p>
          </div>
          <div class="job-card">
            <h3>Infosys</h3>
            <p>Branding & Digital Services</p>
          </div>
        </div>
      </section>
      <section class="benefits-section">
        <h2>🌟 Benefits Digital Marketing Course</h2>
        <div class="benefits-grid">
          <div class="benefit-card">
            <h3>🎯 Grabs Instant Attention</h3>
            <p>3D animation makes your page stand out and instantly engages visitors, making them more likely to stay.</p>
          </div>
          <div class="benefit-card">
            <h3>🚀 Boosts Brand Perception</h3>
            <p>It reflects innovation and professionalism, helping your brand appear modern and premium.</p>
          </div>
          <div class="benefit-card">
            <h3>🧠 Explains Ideas Visually</h3>
            <p>Use 3D to visually represent services, processes, or products in a way that's easy to understand.</p>
          </div>
          <div class="benefit-card">
            <h3>📱 Increases Engagement</h3>
            <p>Interactive and immersive experiences increase time spent on site and reduce bounce rate.</p>
          </div>
          <div class="benefit-card">
            <h3>📈 Higher Conversion</h3>
            <p>Well-placed 3D elements guide users toward actions like signing up or clicking CTAs more effectively.</p>
          </div>
          <div class="benefit-card">
            <h3>🔁 Memorable Experience</h3>
            <p>Users are more likely to remember and share a visually rich, immersive 3D experience.</p>
          </div>
        </div>
      </section>
      <div class="graph-section">
        <h2>📈 Placement Growth in Digital Marketing (Monthly Salary ₹)</h2>
        <div class="bar-chart">
          <!-- Each bar grows higher than the previous one -->
          <div class="bar-container">
            <div class="bar" style="height: 40px; animation-delay: 0.3s;"><span>₹15K</span></div>
            <div class="label">Fresher</div>
          </div>
          <div class="bar-container">
            <div class="bar" style="height: 90px; animation-delay: 0.5s;"><span>₹30K</span></div>
            <div class="label">Junior Analyst</div>
          </div>
          <div class="bar-container">
            <div class="bar" style="height: 150px; animation-delay: 0.7s;"><span>₹50K</span></div>
            <div class="label">SEO Expert</div>
          </div>
          <div class="bar-container">
            <div class="bar" style="height: 200px; animation-delay: 0.9s;"><span>₹70K</span></div>
            <div class="label">Campaign Manager</div>
          </div>
          <div class="bar-container">
            <div class="bar" style="height: 260px; animation-delay: 1s;"><span>₹1L+</span></div>
            <div class="label">Digital Strategist</div>
          </div>
        </div>
      </div>
      <section class="experts-section">
        <h2>👨‍🏫 Meet Your Digital Marketing Experts</h2>
        <div class="expert-cards">
    
          <!-- Expert 1 -->
          <div class="expert-card">
            <img class="expert-photo" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Expert 1">
            <div class="expert-name">Rohit Sharma</div>
            <div class="expert-role">SEO & Analytics Expert</div>
          </div>
    
          <!-- Expert 2 -->
          <div class="expert-card">
            <img class="expert-photo" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Expert 2">
            <div class="expert-name">Ankita Mehta</div>
            <div class="expert-role">Google Ads Specialist</div>
          </div>
    
          <!-- Expert 3 -->
          <div class="expert-card">
            <img class="expert-photo" src="https://randomuser.me/api/portraits/men/55.jpg" alt="Expert 3">
            <div class="expert-name">Rajiv Nair</div>
            <div class="expert-role">Social Media Strategist</div>
          </div>
    
          
        </div>
      </section>
      <section class="dm-section">
        <div class="dm-text">
          <h2>📢 What is Digital Marketing?</h2>
          <p>
            Digital marketing is the use of online channels, strategies, and tools to promote products or services.
            It includes SEO, social media marketing, content creation, email campaigns, and paid ads. Digital marketing helps
            businesses reach targeted audiences, track results in real-time, and grow their presence in a cost-effective way.
          </p>
          <p>
            Whether you're a small startup or a global brand, digital marketing is essential for connecting with your audience,
            building brand awareness, and driving results in today's competitive digital world.
          </p>
        </div>
        <div class="dm-video">
          <!-- Replace the video link with your own -->
                <iframe 
            src="https://www.youtube.com/embed/3rNQTkJC0Qk" 
            title="Digital Marketing Tutorial"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
          </iframe>
        </div>
      </section>
      <section class="fees-section">
        <h2>🎯 Digital Marketing Course Fees</h2>
        <p>Unlock your career in digital marketing. Limited time discount — enroll now!</p>
        
        <div class="price-box">
          <div>
            <span class="original-price">₹75,000</span>
            <span class="current-price">₹30,000</span>
          </div>
          <p class="offer-text">🔥 Save ₹45,000 — Offer valid till <strong>April 30</strong></p>
          <a href="#enroll" class="enroll-button">Enroll Now</a>
        </div>
      </section>
      <h2>❓ Digital Marketing Course - Frequently Asked Questions</h2>

      <div class="faq-box">
          <h3>1. What is Digital Marketing?</h3>
          <span class="arrow">↓</span>
          <div class="answer">
              <p>Digital marketing involves promoting products and services using online platforms like Google, social media, email, websites, and more.</p>
          </div>
      </div>
  
      <div class="faq-box">
          <h3>2. Do I need prior experience to join the course?</h3>
          <span class="arrow">↓</span>
          <div class="answer">
              <p>No, this course is beginner-friendly. Anyone interested in digital marketing can enroll, whether you're a student, entrepreneur, or job seeker.</p>
          </div>
      </div>
  
      <div class="faq-box">
          <h3>3. What tools will I learn?</h3>
          <span class="arrow">↓</span>
          <div class="answer">
              <p>You’ll work with tools like Google Ads, Google Analytics, SEMrush, Canva, Meta Business Suite, Mailchimp, and more.</p>
          </div>
      </div>
  
      <div class="faq-box">
          <h3>4. Is there a certificate provided?</h3>
          <span class="arrow">↓</span>
          <div class="answer">
              <p>Yes, you’ll receive a professional certification after successful completion, including support to apply for Google & HubSpot certifications.</p>
          </div>
      </div>
  
      <div class="faq-box">
          <h3>5. What is the duration of the course?</h3>
          <span class="arrow">↓</span>
          <div class="answer">
              <p>The course typically lasts 3 to 6 months depending on the batch mode (fast-track or regular).</p>
          </div>
      </div>
  
      <div class="comment-section">
        <h2>💬 Comments & Feedback</h2>
    
        <!-- Comment Form -->
        <form id="commentForm">
          <input type="text" id="name" placeholder="Your Name" required />
          <textarea id="comment" placeholder="Your Comment" required></textarea>
          <button type="submit">Post Comment</button>
        </form>
    
        <!-- Posted Comments -->
        <div class="comment-list" id="commentList">
          <!-- JavaScript will add comments here -->
        </div>
      </div>
      <footer class="footer">
        <div class="footer-container">
          
          <!-- About -->
          <div class="footer-col">
            <h3>About Us</h3>
            <p>We provide industry-level Digital Marketing training with live projects, expert mentorship, and job placement support.</p>
          </div>
    
          <!-- Quick Links -->
          <div class="footer-col">
            <h3>Quick Links</h3>
            <p><a href="#">Home</a></p>
            <p><a href="#" onclick="goToSecondSection()">Courses</a></p>
            <p><a href="#">Placements</a></p>
            <p><a href="#">Contact</a></p>
          </div>
    
          <!-- Contact -->
          <div class="footer-col">
            <h3>Contact Info</h3>
            <p>Email: info@dmcourse.com</p>
            <p>Phone: +91 98765 43210</p>
            <div class="social-icons">
              <a href="#" title="Facebook">📘</a>
              <a href="#" title="Instagram">📸</a>
              <a href="#" title="LinkedIn">💼</a>
              <a href="#" title="YouTube">▶️</a>
            </div>
          </div>
    
        </div>
    
        <div class="footer-bottom">
          © 2025 Digital Marketing Course. All Rights Reserved.
        </div>
      </footer>
      
   <script src="script.js"></script> 

</body>
</html>
