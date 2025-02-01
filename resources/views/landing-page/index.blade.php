
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizon Institute of Health Sciences</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f9fc;
            color: #333;
            scroll-behavior: smooth;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header */
        /* Header Styling */
        header {
            background-color: #0d1b2a;
            color: #e0e1dd;
            padding: 10px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 5;
        }

        header .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
        }

        header .logo img {
            max-width: 70px;
            height: auto;
        }

        header .header-text h1 {
            font-size: 28px;
            font-weight: bold;
            margin: 0;
        }
        header .header-text h2 {
            display: none;
        }

        header nav ul {
            list-style-type: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        header nav ul li {
            margin: 0 15px;
        }

        header nav ul li a {
            text-decoration: none;
            color: #e0e1dd;
            font-size: 18px;
            font-weight: bold;
        }
        header nav .dropdown{
            display: none;
        }

        header nav ul li a:hover {
            color: #b5d5ff;
        }
        /* Hero Section */

        .hero-image{
            width: 100%;
            height: 300px;
            object-fit: cover;
            background-attachment: fixed;
            z-index: -1;
            
        }

        /* Why Horizon Section */
        /* Why Horizon Section */
        #why-horizon {
            background-color: #e0e1dd;
            padding: 60px 0;
        }

        #why-horizon .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        #why-horizon h2 {
            text-align: center;
            font-size: 2.5rem;
            color: #1b263b;
            margin-bottom: 30px;
        }

        #why-horizon .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        #why-horizon .section {
            flex: 1;
            min-width: 250px;
            max-width: 350px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        /* Adding color to the boxes */
        #why-horizon .section:nth-child(1) {
            border-left: 6px solid #415a77; /* Dark Blue for Mission & Vision */
            background-color: #f4f9fc; /* Light Blue */
        }

        #why-horizon .section:nth-child(2) {
            border-left: 6px solid #778da9; /* Grayish Blue for Philosophy */
            background-color: #f9f9f9; /* Very Light Gray */
        }

        #why-horizon .section:nth-child(3) {
            border-left: 6px solid #0d1b2a; /* Darker Blue for Global Standard */
            background-color: #f4f9fc; /* Light Blue */
        }

        /* Hover Effect for Each Box */
        #why-horizon .section:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        #why-horizon .section h3 {
            font-size: 1.75rem;
            color: #415a77;
            margin-bottom: 15px;
        }

        #why-horizon .section p {
            font-size: 1rem;
            color: #778da9;
            line-height: 1.6;
        }

        /* Courses Section */
        /* Courses Offered Section */
        #courses {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        #courses .container {
            max-width: 1600px;
            margin: 0 auto;
        }

        .course-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            flex-direction: row;
        }

        .course {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        .course img {
            width: 100%;
            border-radius: 8px;
            height: auto;
        }

        /* Contact Section */
        #contact {
            background-color: #f4f9fc;
            padding: 60px 0;
        }

        #contact .container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        #contact form input, #contact form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        #contact form button {
            background-color: #415a77;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #contact form button:hover {
            background-color: #778da9;
        }

        /* Footer Section */
        footer {
            background-color: #1b263b;
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        footer {
            background-color: #0d1b2a;
            color: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        footer .footer-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        footer .footer-logo img {
            max-width: 120px;
            height: auto;
        }

        footer .footer-links p {
            margin: 10px 0;
        }

        footer .footer-contact p {
            margin: 5px 0;
        }

        footer .footer-links a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer .footer-links a:hover {
            color: #778da9;
        }

        footer .footer-contact a {
            color: #fff;
            text-decoration: none;
        }
        .logo{
            border-radius: 50%;
            overflow: hidden;
        }


        @media only screen and (max-width: 1600px) {
            header .logo img {
                max-width: 50px;
                height: auto;
            }
            
            .container {
                width: fit-content;
                margin: 0 auto;
                padding: 0 10px;
            }
            header {
                background-color: #0d1b2a;
                color: #e0e1dd;
                padding: 10px 0;
                display: flex;
                align-items: center;
                justify-content: center;
                position: sticky;
                top: 0;
                z-index: 5;
            }

            header .container {
                display: flex;
                align-items: center;
                justify-content:space-evenly;
                width: 100%;
                max-width: 1400px;
                margin: 0 auto;
            }
            header .header-text h1 {
                font-size: 20px;
                font-weight: bold;
                margin: 0;
            }
            header .header-text h2 {
                display: none;
            }
            header nav ul li {
                margin: 0 10px;
            }
            
            header nav ul li a {
                text-decoration: none;
                color: #e0e1dd;
                font-size: 14px;
                font-weight: bold;
            }
            .hero-image{
                width: 100%;
                height: 500px;
                object-fit: cover;
                background-attachment: fixed;
                z-index: -1;
                
            }

        }


        
        @media only screen and (max-width: 1000px) {
            header .logo img {
                max-width: 40px;
                height: auto;
            }
            
            .container {
                width: fit-content;
                margin: 0 auto;
                padding: 0 2px;
            }
            header {
                background-color: #0d1b2a;
                color: #e0e1dd;
                padding: 5px 0;
                display: flex;
                align-items: center;
                justify-content: center;
                position: sticky;
                top: 0;
                z-index: 5;
            }

            header .container {
                display: flex;
                align-items: center;
                justify-content:space-evenly;
                width: 100%;
                max-width: 1000px;
                margin: 0 2px;
            }
            header .header-text h1 {
                display: none;
                font-size: 10px;
                font-weight: bold;
                margin: 0;
            }
            header .header-text h2 {
                font-size: 20px;
                font-weight: bold;
                margin: 0;
                display: flex;
            }
            header nav ul li {
                margin: 0 10px;
            }
            
            header nav ul li a {
                text-decoration: none;
                color: #e0e1dd;
                font-size: 14px;
                font-weight: bold;
            }
            .hero-image{
                width: 100%;
                height: 900px;
                object-fit: cover;
                background-attachment: fixed;
                z-index: -1;
                
            }

        }

        @media only screen and (max-width: 700px) {
            header .logo img {
                max-width: 40px;
                height: auto;
            }
            
            .container {
                width: fit-content;
                margin: 0 auto;
                padding: 0 2px;
            }
            header {
                background-color: #0d1b2a;
                color: #e0e1dd;
                padding: 5px 0;
                display: flex;
                align-items: center;
                justify-content: center;
                position: sticky;
                top: 0;
                z-index: 5;
            }

            header .container {
                display: flex;
                align-items: center;
                justify-content:space-evenly;
                width: 100%;
                max-width: 1000px;
                margin: 0 2px;
            }
            header .header-text h1 {
                display: none;
                font-size: 10px;
                font-weight: bold;
                margin: 0;
            }
            header .header-text h2 {
                font-size: 20px;
                font-weight: bold;
                margin: 0;
                display: flex;
            }
            header nav ul li {
                display: none;
            }
            header nav .dropdown{
                display: flex;
                margin: 0 10px;

            }

            /* Dropdown Button */
            .dropbtn {
                background-color: #ffffff00;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
            }
            
            /* The container <div> - needed to position the dropdown content */
            .dropdown {
                position: relative;
                display: inline-block;
            }
            
            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            
            /* Links inside the dropdown */
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            
            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #bebebe;}
            
            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
                display: block;
            }

            header nav ul li a {
                text-decoration: none;
                color: #e0e1dd;
                font-size: 14px;
                font-weight: bold;
            }
            .hero-image{
                width: 100%;
                height: 300px;
                object-fit: cover;
                background-attachment: fixed;
                z-index: -1;
                
            }

        }
    </style>
</head>
<body>
    <!-- Header Section -->
     <header>
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <img src="{{asset('images/logo.jpg')}}" alt="Horizon Institute Logo">
            </div>

            <!-- Institute Name -->
            <div class="header-text">
                <h1>Horizon Institute of Health Sciences</h1>
                <h2>HIHS</h2>
            </div>

            <!-- Navigation Menu -->
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#why-horizon">Why Horizon</a></li>
                    <li><a href="#courses">Courses Offered</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="{{url('/login')}}" class="btn btn-primary">Admissions</a></li>
                </ul>
                <div class="dropdown">
                    <button class="dropbtn">More</button>
                    <div class="dropdown-content">
                        <a href="#why-horizon">Why Horizon</a>
                        <a href="#courses">Courses Offered</a>
                        <a href="#contact">Contact Us</a>
                        <a href="{{url('/login')}}" class="btn btn-primary">Admissions</a>
                    </div>
                  </div>
            </nav>
        </div>
    </header>
    <!-- Hero Section -->
        <img class= "hero-image" src="{{asset('images/hero-image.jpg')}}" alt="Hero Image">

    <!-- Why Horizon Section -->
    <section id="why-horizon">
        <div class="container">
            <h2>Why Horizon Institute?</h2>
            <div class="content">
                <div class="section">
                    <h3>Mission & Vision</h3>
                    <p>We aim to develop and implement high-quality, innovative diploma, graduate, and post-graduate education. We provide leadership in healthcare transformation and offer community-oriented education to address the issues of rural and urban populations.</p>
                </div>
                <div class="section">
                    <h3>Philosophy of Nursing</h3>
                    <p>We believe advancing nursing science and practice improves global health. Our students are empowered to tap their untapped potential, leading them toward a better future as capable and caring nurses.</p>
                </div>
                <div class="section">
                    <h3>Global Standard</h3>
                    <p>We focus on quality healthcare by restoring, maintaining, and promoting health through advanced labs, state-of-the-art classrooms, and modern teaching methods. Our students are equipped to meet global standards in nursing education.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Offered Section -->
   <section id="courses">
        <div class="container">
            <h2>Courses Offered</h2>
            <div class="course-grid">
                <div class="course">
                    <img src="https://i.ibb.co/dWzjKfL/Whats-App-Image-2024-11-27-at-19-45-00-ded7d49f.jpg" alt="Course 1">
                    
                </div>
                <div class="course">
                    <img src="https://i.ibb.co/gSp4FTh/C-2.jpg" alt="Course 2">
                    
                </div>
                <div class="course">
                    <img src="https://i.ibb.co/8XHQ3Fw/Whats-App-Image-2024-11-27-at-19-44-59-052ab838.jpg" alt="Course 3">
                    
                </div>
                <div class="course">
                    <img src="https://i.ibb.co/tPFF3GT/Whats-App-Image-2024-11-27-at-19-44-59-6916bb8a.jpg" alt="Course 4">
                    
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
     <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="{{asset('images/logo.png')}}" alt="Horizon Institute Logo">
                </div>
                <div class="footer-links">
                    <p><a href="https://www.facebook.com/p/Horizon-Institute-of-Health-Sciences-Hassanabdal-Chapter-100089866801262/" target="_blank">Facebook</a></p>
                    <p><a href="https://www.tiktok.com/@hihs.hassanabdal?_t=8rZRr9lSfyi&_r=1" target="_blank">TikTok</a></p>
                    <p><a href="https://www.instagram.com/hihs_edu.pk?igsh=MTVic25oajA0bGN1aw==" target="_blank">Instagram</a></p>
                    <p><a href="https://maps.app.goo.gl/vRwHTPEUJz4DF9cj6" target="_blank">Map Direction</a></p>
                </div>
                <div class="footer-contact">
                    <p>Email: <a href="mailto:hihs.hc2017@gmail.com">hihs.hc2017@gmail.com</a></p>
                    <p>Phone: <a href="tel:+923260011888">0326 0011888</a></p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
