
<?php
    require_once('dbconn.php');

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Medilab</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href=
  "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@medilab.org</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Medilab</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#departments">Departments</a></li>
            <li><a href="#doctors">Doctors</a></li>
            <li class="dropdown"><a href="#"><span>Dashboard</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Blog Articles</a></li>
                <li class="dropdown"><a href="#"><span>Settings</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">My Schedule</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Chat suport</a></li>
                    <li><a href="#">Donate</a></li>
                    <li><a href="#">Feedback</a></li>
                  </ul>
                </li>
                <li><a href="#">Mode</a></li>
                <li><a href="#">Referal Program</a></li>
                <li><a href="#">Specialized Care</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="#appointment">Make an Appointment</a>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>WELCOME TO MEDILAB</h2>
          <p>We are a team of skilled healthcare professionals dedicated to providing exceptional patient care, using advanced medical technology and a compassionate approach to ensure the well-being of all those we serve.</p>
        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>Why Choose Medilab?</h3>
              <p>
                Medilab is your trusted partner in healthcare, offering personalized care backed by advanced technology. Our team of experienced professionals ensures accurate diagnoses and effective treatments, prioritizing your comfort and well-being at every step. We are committed to excellence, innovation, and delivering exceptional healthcare services tailored to meet your unique needs.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Corporate Responsibilities and Duties</h4>
<p>The tasks include managing operations, ensuring compliance, and optimizing workflow, with a focus on improving efficiency 
  and meeting the company's strategic goals. This involves coordinating various departments, handling logistics, and overseeing 
  day-to-day activities to ensure smooth functioning.</p>
      </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="bi bi-gem"></i>
                    <h4>Labor and Work Responsibilities</h4>
<p>Exemptions are made for certain tasks or responsibilities that are outside the scope of regular duties. Those who are 
  responsible for managing or delegating work should ensure that tasks are completed according to the established guidelines
   and timelines, while ensuring accountability and minimizing errors or oversights.</p>
                  </div>
                </div><!-- End Icon Box -->
  <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-inboxes"></i>
                    <h4>Labor and Consequences of Actions</h4>
<p>There are instances where actions have consequences, whether they are due to negligence or misjudgment. It's important to take responsibility for one's decisions, ensuring that tasks are handled properly to avoid unnecessary complications or mistakes in the process.</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>
          </div>
        </div><!-- End  Content-->

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="" class="glightbox pulsating-play-bt"></a>
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>About Us</h3>
<p>
  We are dedicated to providing high-quality healthcare services through advanced medical 
  technologies and compassionate care. Our goal is to ensure the well-being of every patient,
   addressing their needs with professionalism, kindness, and expertise. We continuously strive 
   to improve our services and stay at the forefront of healthcare advancements.
</p>
<ul>
  <li>
    <i class="fa-solid fa-vial-circle-check"></i>
    <div>
      <h5>Comprehensive Medical Testing and Diagnosis</h5>
      <p>We offer a wide range of diagnostic services, utilizing state-of-the-art laboratory equipment 
        to provide accurate results and timely treatment plans for our patients.</p>
    </div>
  </li>
  <li>
    <i class="fa-solid fa-pump-medical"></i>
    <div>
      <h5>Advanced Treatment Options and Care</h5>
      <p>Our medical team is equipped with the latest treatment methods to address a variety of health concerns, 
        ensuring the best possible outcomes for our patients.</p>
    </div>
  </li>
  <li>
    <i class="fa-solid fa-heart-circle-xmark"></i>
    <div>
      <h5>Specialized Cardiovascular Care</h5>
      <p>We provide expert care for heart-related conditions, offering personalized treatment plans, preventative 
        care, and rehabilitation programs tailored to each patient's needs.</p>
    </div>
  </li>
</ul>

              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-user-doctor"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-regular fa-hospital"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-flask"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-award"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
<p>We offer a range of specialized services to meet the healthcare needs of our patients, ensuring the 
  best care and outcomes possible.</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-heartbeat"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Cardiovascular Care</h3>
        </a>
        <p>We provide comprehensive cardiovascular services, focusing on early detection, treatment, and 
          prevention of heart-related conditions.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-pills"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Pharmacy Services</h3>
        </a>
        <p>Our pharmacy provides a wide range of medications and counseling services, ensuring that patients 
          receive the right medication and dosage for their condition.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-hospital-user"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Emergency Care</h3>
        </a>
        <p>Our emergency department is available 24/7 to handle urgent medical cases with prompt attention and skilled care.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-dna"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Diagnostic Services</h3>
        </a>
        <p>We offer a full range of diagnostic services, from laboratory testing to advanced imaging, to accurately assess
           and treat medical conditions.</p>
      </div>
    </div><!-- End Service Item -->

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
      <div class="service-item position-relative">
        <div class="icon">
          <i class="fas fa-wheelchair"></i>
        </div>
        <a href="#" class="stretched-link">
          <h3>Rehabilitation Services</h3>
        </a>
        <p>Our rehabilitation services help patients recover from surgery, injuries, or illnesses, offering physical, 
          occupational, and speech therapy tailored to individual needs.</p>
        <a href="#" class="stretched-link"></a>
      </div>
    </div>
    <!-- End Service Item -->

       <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-notes-medical"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Medical Architecture and Facility Design</h3>
              </a>
              <p>We specialize in designing healthcare facilities that prioritize patient comfort, safety, and efficient 
                healthcare delivery. Our architectural solutions are tailored to meet the unique needs of hospitals, ensuring 
                that the spaces are conducive to healing, equipped with the latest technology, and compliant with healthcare 
                standards and regulations.</p>
              
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Appointment Section -->
    <section id="appointment" class="appointment section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Appointment</h2>
        <p>We are dedicated to making healthcare accessible and convenient. You can easily book an appointment with our 
          doctors online to receive timely medical care. Simply choose your preferred specialist, select a time that works 
          for you, and secure your appointment in just a few steps.</p>

      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select" required="">
                <option value="">Select Department</option>
                <option value="Department 1">Cardiology</option>
                <option value="Department 2">Neurology</option>
                <option value="Department 3">Hepatology</option>
                <option value="Department 3">Pediatrics</option>
                <option value="Department 3">Eye Care</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select" required="">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Walter White</option>
                <option value="Doctor 2">Sarah Johnson</option>
                <option value="Doctor 3">William Anderson</option>
                <option value="Doctor 3">Amanda Jepson</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="mt-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
            <div class="text-center"><button type="submit">Make an Appointment</button></div>
          </div>
        </form>

      </div>

    </section><!-- /Appointment Section -->

   <!-- Departments Section -->
<section id="departments" class="departments section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Departments</h2>
    <p>His needs are met by something that escapes him, yet indeed, it is something that is essential for him.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Cardiology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Neurology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Hepatology</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Pediatrics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Eye Care</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">
          <div class="tab-pane active show" id="departments-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Cardiology</h3>
                <p class="fst-italic">Who praises the work, which sits at the heart of the matter, bringing health and care to those who need it most.</p>
                <p>And with us, the larger challenges are faced. We are committed to providing quality healthcare services. From general diagnostics 
                  to specialized care, we strive to make a difference in each patient's life.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="departments-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>And the challenges faced in neurology</h3>
                <p class="fst-italic">Who is guiding the way forward, overcoming hurdles, and delivering 
                  care for conditions that impact the nervous system?</p>
                <p>At our neurology department, we specialize in diagnosing and treating a wide 
                  range of neurological disorders. Our expert team offers tailored treatment plans to manage
                   conditions effectively, helping patients maintain a high quality of life.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="departments-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Hepatology Care and Support</h3>
                <p class="fst-italic">Focusing on liver care, our team provides treatments for various hepatic 
                  conditions, from liver diseases to other related issues.</p>
                <p>Our department offers advanced diagnostics and cutting-edge treatments for liver diseases. 
                  With a personalized approach, we ensure the best possible outcomes for our patients.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="departments-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Pediatric Care</h3>
                <p class="fst-italic">Totally committed to caring for children, our pediatric team brings expertise
                   to every age group, ensuring a caring environment for young patients.</p>
                <p>We provide a range of medical services, from routine check-ups to advanced care, ensuring your child 
                  receives the best possible attention at every stage of their development.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="departments-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Comprehensive Eye Care</h3>
                <p class="fst-italic">We offer state-of-the-art services for your eye health, providing everything from 
                  routine check-ups to complex surgeries.</p>
                <p>Our eye care specialists are committed to preserving and restoring vision. With a focus on prevention,
                   treatment, and rehabilitation, we deliver the highest standard of care for all eye-related concerns.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Departments Section -->


   <!-- Doctors Section -->
<section id="doctors" class="doctors section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Doctors</h2>
    <p>Their services are essential, ensuring care and support while addressing various health challenges.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Walter White</h4>
            <span>Chief Medical Officer</span>
            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Sarah Jhonson</h4>
            <span>Anesthesiologist</span>
            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>William Anderson</h4>
            <span>Cardiology</span>
            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="team-member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Amanda Jepson</h4>
            <span>Neurosurgeon</span>
            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""> <i class="bi bi-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section><!-- /Doctors Section -->
<!-- Faq Section -->
<section id="faq" class="faq section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <p>Find answers to common questions about our hospital services and procedures.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

        <div class="faq-container">

          <div class="faq-item faq-active">
            <h3>What services does the hospital offer?</h3>
            <div class="faq-content">
              <p>We offer a wide range of medical services including emergency care, surgery, outpatient consultations, 
                diagnostic tests, and specialized treatments.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>How can I book an appointment?</h3>
            <div class="faq-content">
              <p>Appointments can be booked online through our website or by calling our reception. You can also walk 
                into our facility for in-person bookings.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>What should I bring for my first visit?</h3>
            <div class="faq-content">
              <p>Please bring your identification, health insurance card (if applicable), and any relevant medical records
                 or prescriptions from your primary care provider.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Is the hospital open 24/7?</h3>
            <div class="faq-content">
              <p>Yes, our emergency department is open 24/7. Outpatient services have specific operating hours, but 
                we are always here for emergency care.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>How do I pay for my treatment?</h3>
            <div class="faq-content">
              <p>We accept various payment methods, including cash, credit/debit cards, and health insurance. Payment 
                details will be provided during your visit.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3>Do you offer telemedicine consultations?</h3>
            <div class="faq-content">
              <p>Yes, we provide telemedicine consultations for patients who are unable to visit in person. You can
                 book these appointments online or over the phone.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>

      </div><!-- End Faq Column-->

    </div>

  </div>

</section><!-- /Faq Section -->
<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <div class="container">

    <div class="row align-items-center">

      <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
        <h3>What Our Patients Say</h3>
        <p>
          Hear from our patients about their experiences using our telemedicine platform. We strive to 
          provide accessible, convenient, and quality healthcare from the comfort of your home.
        </p>
      </div>

      <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="d-flex">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>Emily Adams</h3>
                    <h4>Telemedicine Patient</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>The telemedicine consultation was incredibly convenient. I was able to speak with my doctor without 
                    leaving my home, and the service was just as good as an in-person visit.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="d-flex">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>John Miller</h3>
                    <h4>Telemedicine Patient</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>As someone who has a busy schedule, the telemedicine platform allowed me to consult with my doctor efficiently 
                    without taking time off work. It's a fantastic service!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="d-flex">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>Susan Green</h3>
                    <h4>Telemedicine Patient</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>I had a wonderful experience using the platform for my routine checkup. The video quality was great, 
                    and my doctor was very thorough in the consultation.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="d-flex">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>Michael Turner</h3>
                    <h4>Telemedicine Patient</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>The convenience of being able to consult my doctor from the comfort of my home, especially during a busy week, was a game-changer for me.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="d-flex">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                  <div>
                    <h3>Linda Carter</h3>
                    <h4>Telemedicine Patient</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                  </div>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Telemedicine allowed me to have a consultation while traveling. It was so easy to connect with my doctor regardless of where I was. A real time-saver!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </div>

  </div>

</section><!-- /Testimonials Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Discover how our services are transforming healthcare, providing patients with easy access to care 
          and innovative treatment options from the comfort of their homes.</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact Us</h2>
    <p>Get in touch with us for more information about our telemedicine services, patient support,
       or any inquiries you may have. We're here to assist you with your healthcare needs.</p>
  </div><!-- End Section Title -->

</section><!-- End Contact Section -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Location</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@medilab.org</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Medilab</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@medilab.org</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Medilab</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        
        Designed by <a href="">Damaris Chelungusi</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>