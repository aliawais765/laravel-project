@extends('user.layout.master')
@section('title')
Loan information
@endsection

<style>
    /* ===== REMOVE DOTS ONLY FOR THIS PAGE ===== */
    ul, ol {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        list-style: none;
    }

    /* Button styling (clean look) */
    .member-info a {
        display: inline-block;
        background-color: red;
        color: white;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        transition: 0.3s ease;
    }

    .member-info a:hover {
        background-color: darkred;
    }
</style>

@section('content')
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <p class="sitename" style="font-size:40px; color:black;">Get loan quickly and easily from all over the pakistan after visiting our site </p>
            <p  data-aos-delay="100" style="color:black;">Here we provide you all information about all types of loan from all the banks of pakistan</p>
            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
              <a href="{{route('user.contact-us')}}" class="btn-get-started" style="width:150px;">Get in touch</a>
            </div>
          </div>
          
        </div>
      </div>

    </section><!-- /Hero Section -->

    
    <!-- Why Us Section -->
    <section id="why-us" class="why-us section light-background">

      <div class="container">

        <div class="row gy-4">

          
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-lg-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
<img src="{{ asset('download (1).jpg') }}" alt="Bank Loan Image" width="300">
                  <h4>Get loan quickly </h4>
                  <p>Our loan services provide fast, secure, and flexible financing solutions to help you achieve your personal and business goals. Whether you need a personal loan, home loan, or business financing, our trusted banking solutions offer competitive rates and easy application processes. Apply online today and get the support you need to make your financial plans a reality </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
<img src="{{ asset('images.jpg') }}" alt="Bank Loan Image" width="300">
                  <h4>Support your family’s dreams with easy and flexible loans</h4>
                  <p>"Plan ahead with our Future Loan solutions. Designed to help you invest in your goals, whether it’s buying a home, starting a business, or securing your children’s education. Easy application and timely approval make your future secure</p>
                </div>
              </div><!-- End Icon Box -->



              
             

              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
<img src="{{ asset('download (2).jpg') }}" alt="Bank Loan Image" width="300" height="200px">
<h4>Make your special day unforgettable with easy and flexible marriage loans</h4>
  <p>Celebrate life’s biggest moments without financial worries – our Marriage Loan makes your dream wedding a reality with easy approvals and flexible repayment plans</p>                </div>
              </div><!-- End Icon Box -->



              
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

   
    <!-- Menu Section -->
  



<!-- Chefs Section -->
    
<section id="chefs" class="chefs section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Banks</h2>
        <p> <span class="description-title">Our List of Banks who offer loans in Pakistan</span></p>
    </div>

    <div class="container">
        <div class="row gy-4">
            @forelse($banklists as $banklist)
            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{ asset('storage/' . $banklist->image) }}" 
                             alt="{{ $banklist->title }}" width="200">
                    </div>

                    <div class="member-info">
                        <h4>{{ $banklist->title }}</h4>
                        <p>{{ $banklist->description }}</p>

                        <ul>
                            <li>
                                <a href="{{ route('user.alfalah') }}">
                                    See detail
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @empty
            <p>No banks found.</p>
            @endforelse
        </div>
    </div>
</section>
        

      <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

       

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
            <p>  Gujranwala Road Hafizabad </p>
            <p>near Punjab Group of Colleges</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+923415464720</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>shahidhfd@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-clock flex-shrink-0"></i>
              <div>
                <h3>Opening Hours<br></h3>
                <p><strong>Mon-Sat:</strong> 11AM - 23PM; <strong>Sunday:</strong> Closed</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
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
        </form><!-- End Contact Form -->

      </div>

    </section>
  </main>
@endsection