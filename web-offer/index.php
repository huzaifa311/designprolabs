<?php $title = "Design Pro Labs | Special Offer";
include 'include/header.php'; ?>

<section id="home" class="sm:!h-[109vh] !h-fit w-full pt-32 relative pb-20 flex items-center">
  <div
    class="grid md:grid-cols-5 grid-cols-1 md:gap-0 gap-y-10 items-center sm:w-[85%] w-[90%] mx-auto z-20  2xl:w-[1500px]">
    <div class="col-span-3 relative md:pr-[60px]">
      <h1 class="sm:text-[2.5rem] text-2xl font-bold text-white md:leading-[50px]">
        Custom, E-commerce & Shopify Website Development In Just
        <span class="text-[#FE5F00]">$299</span>
      </h1>
      <p class="text-white mt-2 md:mt-0 text-xl lg:pr-16">
        Get a sleek, user-friendly, and professionally designed custom, e-commerce, or Shopify website tailored to your business.
      </p>
      <ul class="space-y-2 my-3">
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-fit">
            </div>
            <p class="text-white text-[15px] font-light	">Custom Website Design</p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-fit">
            </div>
            <p class="text-white text-[15px] font-light	">3 Revisions
            </p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-fit">
            </div>
            <p class="text-white text-[15px] font-light	">Social Media Integration

            </p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-fit">
            </div>
            <p class="text-white text-[15px] font-light	">24-48 Hours Turnaround Time
            </p>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-2">
            <div class="h-4 w-4 rounded-full flex items-center justify-center bg-white whitespace-nowrap">
              <img src="assets/images/check.png" alt="tick" class="h-[11px] object-fit">
            </div>
            <p class="text-white text-[15px] font-light	">100% Money Back Guarantee
            </p>
          </div>
        </li>
      </ul>
      <div class="md:gap-3 mt-3 flex flex-wrap md:justify-start justify-between">
        <div
          class="md:!px-4 md:py-0 p-2 flex item-center rounded-lg text-lg md:h-16 !hover:text-black bg-transparet !border-white text-white border focus:outline-none transition-all">
          <a href="javascript:;" class="chat hover:!text-white !mt-2">Talk With Expert
          </a>
        </div>
        <a href="javascript:;" name="for $244" data-fancybox="" title="Lets Get Started"
          class="md:!px-4 md:py-0 p-2 flex item-center rounded-lg text-lg md:h-16 !hover:text-black bg-[#FE6F19] !border-[#FE6F19] text-white border focus:outline-none transition-all"
          data-src="#popupform"><button style="outline:none;"
            class="hover:text-black transition-all hover:!text-white hover:!opacity-90">Claim Your Website
            Now</button></a>
      </div>
    </div>
    <form onSubmit="handleBannerForm(event, 'BannerFormWebsite')"
      class="bg-white shadow-2xl !border-2 !border-[#E4FF3E] !outline-[#E4FF3E] py-4 px-8 md:w-[93%] col-span-2 !w-full h-fit mx-auto rounded-xl relative">
      <h1 class="text-center text-[#FE5F00] text-2xl font-bold mb-3">100% Money Back Guarantee</h1>
      <div class="space-y-4">
        <div>
          <input placeholder="Name" type="text" id="name"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]" />
        </div>
        <div>
          <input required placeholder="Your Email Address?" type="text" id="email"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]" />
        </div>
        <div>
          <input required placeholder="Your Phone No?" type="text" id="phone"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]" />
        </div>
        <div>
          <textarea placeholder="Share any specific ideas or requirements you have in mind" type="text" id="description"
            class="w-full text-black p-3 text-base focus:outline-none border rounded !border-[#C6C6C6] bg-[#F3F3F3]"></textarea>
        </div>
      </div>
      <button type="submit" class="w-full py-3 text-xl font-medium bg-[#FE5F00] mt-3 rounded-lg text-white">Get Started
        Now</button>
      <img src="asets/images/blackfriday-tag.jpg" alt="" class="left-0 -top-11 absolute !z-30">
    </form>
  </div>

  <video autoplay muted loop src="assets/videos/hero.mp4"
    class="absolute top-0 left-0 z-10 w-full md:h-[109vh] h-full object-cover"></video>
</section>

<section id="portfolio" class="sm:w-[85%] w-[90%] mx-auto my-20 2xl:w-[1500px]">
  <h1 class="text-center text-[46px] font-bold">Our Portfolio</h1>
  <p class="text-xl mt-1 text-center">Browse our expertly crafted website designs, organized by categories to suit your
    business needs.</p>
  <ul class="flex flex-wrap gap-[10px] items-center justify-center my-4 nav nav-pills" id="portfolioTabs"
    role="tablist">
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="w-[200px] py-2 active !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Custom"
        data-bs-toggle="pill" data-bs-target="#content-Custom" type="button" role="tab" aria-controls="content-Custom"
        aria-selected="true">
        CMS Websites
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button style="border: 2px solid black;"
        class="w-[200px] py-2 !border-2 !border-black text-black font-medium rounded nav-link" id="tab-Ecommerce"
        data-bs-toggle="pill" data-bs-target="#content-Ecommerce" type="button" role="tab"
        aria-controls="content-Ecommerce" aria-selected="false">
        E-Commerce Websites
      </button>
    </li>
  </ul>


  <!-- Tab Content -->
  <div class="tab-content">
    <!-- Custom Website Tab -->
    <div class="tab-pane fade show active" id="content-Custom" role="tabpanel" aria-labelledby="tab-Custom">
      <?php include 'include/website-portfolio.php'; ?>
    </div>

    <!-- Ecommerce Websites Tab -->
    <div class="tab-pane fade" id="content-Ecommerce" role="tabpanel" aria-labelledby="tab-Ecommerce">
      <?php include 'include/ecomm-portfolio.php'; ?>
    </div>
  </div>
</section>

<section
  class="w-full bg-[url(assets/images/cta-bg1.webp)] md:h-72 md:py-0 py-20 bg-fixed flex items-center text-center text-white justify-center">
  <div class="space-y-3">
    <h3 class="text-4xl font-bold">Ready to Build a Website You’ll Love? </h3>
    <p class="text-xl">Share your vision and choose a package that suits your goals. Let’s craft something remarkable
      together!</p>
    <div class="flex flex-wrap items-center gap-3 justify-center mt-4">
      <div>
        <a href="#pricingSection"
          class="border border-white text-white bg-transparent rounded py-[14px] px-[11px] text-[18px] font-medium text-lg">See
          Pricing</a>
      </div>
      <button data-src="#popupform" name="for $244" data-fancybox="" title="Lets Get Started"
        class="py-[14px] px-[11px] text-[18px] font-medium text-lg bg-[#FE5F00] text-white rounded">Let's Work
        Together</button>
    </div>
  </div>
</section>

<section class="packages-block !mt-20 !p-0" id="pricingSection">
  <div class="sm:w-[85%] w-[90%] mx-auto 2xl:w-[1500px]">
    <h2 class="text-3xl mb-3 font-semibold mx-auto w-full text-center">
      Pricing Plans That Fit Every Need
    </h2>
    <p class="text-center text-wrap -mt-2">
      At <span class="text-[#FE5F00] !inline-block !-mt-1">Design Pro Labs,</span> we offer high-quality services at
      prices that work for everyone. Whether you're starting small or need the best, our packages are designed to match
      your goals and budget. Choose the plan that fits your needs and let us help you create something amazing!
    </p>
  </div>
  <div class="!max-w-[75rem] mx-auto mt-8 mb-8 md:mb-0 shadow-lg">
    <div
      class="bg-white relative hover:bg-[#FE5F00] rounded-lg p-6 md:py-12 border-4 border-orange-500 flex flex-wrap !flex-col md:!flex-row bg-before items-center "
      style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);">
      <span class="after-for-big-pricing"></span>
      <div class="text-center w-full sm:w-1/3 !hover:bg-transparent">
        <div class="flex justify-center mb-1">
          <i class="fas fa-layer-group text-4xl text-orange-600"></i>
        </div>
        <h3 class="text-xl font-semibold text-gray-800">One Pager Website</h3>
        <p class="text-5xl font-bold text-orange-600"><span class="text-3xl font-semibold">$</span>299</p>
        <a href="https://www.paypal.com/ncp/payment/JY6SR7PE89PF8" class="hidden md:inline">
          <button
            class="mt-3 hover:!border-[#FE5F00] hover:!border-2 px-6 py-2 bg-orange-600 font-medium rounded-md hover:bg-white transition-all hover:!text-[#FE5F00] !text-white">
            <i class="fas fa-hand-pointer"></i> Buy Now - Click
          </button>
        </a>
      </div>
      <div class="mt-8 md:mt-0 sm:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6 !hover:bg-transparent">
        <div>
          <h4 class="text-lg font-semibold text-gray-800 mb-3">Features</h4>
          <ul class="text-sm text-gray-600 space-y-2">
            <li class="flex items-start text-black text-md">
              <i
                class="fas fa-check text-[#FE5F00] fa-xs	mt-1 mr-2 border border-1 !border-[#FE5F00] px-1 py-2 rounded-full"></i>
              1 Page Website
            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#FE5F00] fa-xs	mt-1 mr-2 border border-1 !border-[#FE5F00] px-1 py-2 rounded-full"></i>5
              Stock Photos

            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#FE5F00] fa-xs	mt-1 mr-2 border border-1 !border-[#FE5F00] px-1 py-2 rounded-full"></i>
              1 jQuery Slider Banner

            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#FE5F00] fa-xs	mt-1 mr-2 border border-1 !border-[#FE5F00] px-1 py-2 rounded-full"></i>
              Social Media Integration

            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#FE5F00] fa-xs	mt-1 mr-2 border border-1 !border-[#FE5F00] px-1 py-2 rounded-full"></i>
              100% Satisfaction Guarantee


            </li>

            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#FE5F00] fa-xs	mt-1 mr-2 border border-1 !border-[#FE5F00] px-1 py-2 rounded-full"></i>
              100% Money Back Guarantee*



            </li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold text-gray-800 mb-3">Add-ons
          </h4>
          <ul class="text-sm text-gray-600 space-y-2">
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#FE5F00] fa-xs	mt-1 mr-2 border border-1 !border-[#FE5F00] px-1 py-2 rounded-full"></i>
              Cross Platform Reponsive Capabilty (Desktop,iPhone, Android, etc) Responsive would Be Additional $100*

            </li>
            <li class="flex items-start text-black">
              <i
                class="fas fa-check text-[#FE5F00] fa-xs	mt-1 mr-2 border border-1 !border-[#FE5F00] px-1 py-2 rounded-full"></i>Content
              Management System (CMS) would Be Additional $100*

            </li>
          </ul>
        </div>
      </div>
      <img class="absolute left-0 top-0 h-36" src="assets/images/promotional.png" />
      <a class="md:hidden inline" href="https://www.paypal.com/ncp/payment/JY6SR7PE89PF8">
        <button
          class="mt-3 hover:!border-[#FE5F00] hover:!border-2 px-6 py-2 bg-orange-600 font-medium rounded-md hover:bg-white transition-all hover:!text-[#FE5F00] !text-white">
          <i class="fas fa-hand-pointer"></i> Buy Now - Click
        </button>
      </a>
    </div>
  </div>
  <div class="container -mt-8">
    <div class="row">
      <div class="tab-content ">
        <div id="logo" class="tab-pane fade in active show">
          <!-- logo_pack -->
          <?php include 'include/website-pack.php'; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="packages-block !mt-20 !p-0" id="pricingSection">


</section>

<section class="sm:w-[85%] w-[90%] mx-auto py-20 2xl:w-[1500px] space-y-10">
  <div class="space-y-5">
    <h2 class="text-3xl mb-3 font-semibold mx-auto w-full text-center">
      Empowering Businesses with Affordable, <br> <span class="text-[#FE5F00]"> Custom Website Development.</span>
    </h2>
    <p class="text-center text-wrap">
      At <span class="text-[#FE5F00] !inline-block !-mt-1">Design Pro Labs,</span> we craft websites that perfectly
      align with your brand's identity and goals. Our skilled developers collaborate with you at every stage to deliver
      unique, high-quality websites at a price that fits your budget. Whether you're starting a new venture or revamping
      your online presence, we’ll ensure your website stands out, drives engagement, and delivers results.
    </p>
  </div>
  <ul class="grid md:grid-cols-5 grid-cols-3 gap-8">
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-1.png" />
        <p class="text-center !leading-0">Constant Client <br />Coordination</p>
      </div>
    </li>
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-2.png" />
        <p class="text-center">Supreme Customer <br />Satisfaction</p>
      </div>
    </li>
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-3.png" />
        <p class="text-center">100% Ownership <br />Rights</p>
      </div>
    </li>
    <li>
      <div class="h-icon">
        <img class="mx-auto" src="assets/images/help-icon-4.png" />
        <p class="text-center">Secure Money Back <br />Guarantee</p>
      </div>
    </li>
    <li>
      <div class="h-icon" id="about">
        <img class="mx-auto" src="assets/images/help-icon-5.png" />
        <p class="text-center">Industry Proven <br />Professionals</p>
      </div>
    </li>
  </ul>
</section>

<section class="about-new-sec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 p0">
        <div class="about-img-st">
          <img src="assets/images/about-1.png" />
        </div>
      </div>
      <div class="col-sm-6">
        <div class="about-txt-st">
          <h2>who we are</h2>
          <p class="mt-3">
            At <span class="text-[#FE5F00] !inline-block !-mt-1">Design Pro Labs,</span> we empower businesses to thrive
            with cutting-edge website development, creative designs, and strategic digital solutions. Based in the U.S.,
            we specialize in custom website creation, mobile app development, SEO, and digital marketing. Whether you’re
            establishing your online presence or scaling your brand, our expert team is here to turn your vision into
            reality. Let’s build something extraordinary together.
          </p>
          <div class="flex gap-6 mt-4">
            <div
              class="bg-[#FE5F00] text-white text-lg font-semibold hover:opacity-90 rounded-lg transition-all duration-300 active:scale-90 w-fit">
              <a href="javascript:;" class="chat banner-btn yb-btn various">Live Chat
              </a>
            </div>
            <a href="javascript:;" name="for $244" data-fancybox="" title="Lets Get Started"
              class="px-4 flex item-center rounded-lg text-lg !border-[#FE6F19] text-[#FE6F19] border focus:outline-none"
              data-src="#popupform"><button style="outline: none">Get in Touch</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-new-sec about-new-sec2 mb-32">
  <div class="container-fluid">
    <div class="row flex-col-reverse md:flex-row mt-10 md:mt-0">
      <div class="col-sm-6">
        <div class="about-txt-st">
          <h2>what we do</h2>
          <p class="mt-3">
            At <span class="text-[#FE5F00] !inline-block !-mt-1">Design Pro Labs,</span> we combine years of experience,
            creativity, and dedication to deliver the best results for our clients. Our talented team focuses on
            providing top-quality services, from website design to website development and digital marketing, helping
            your business grow and succeed. We’re here to bring your ideas to life with professionalism and care.
          </p>
          <div class="flex gap-6 mt-4">
            <div
              class="bg-[#FE5F00] text-white text-lg font-semibold hover:opacity-90 rounded-lg transition-all duration-300 active:scale-90 w-fit">
              <a href="javascript:;" class="chat banner-btn yb-btn various">Live Chat
              </a>
            </div>
            <a href="javascript:;" name="for $244" data-fancybox="" title="Lets Get Started"
              class="px-4 flex item-center rounded-lg text-lg !border-[#FE6F19] text-[#FE6F19] border focus:outline-none"
              data-src="#popupform"><button style="outline: none">Get in Touch</button></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 p0">
        <div class="about-img-st">
          <img src="assets/images/about-2.png" />
        </div>
      </div>
    </div>
  </div>
</section>

<section
  class="w-full bg-[url(assets/images/cta-bg1.webp)] md:h-72 md:py-0 py-20 md:px-0 px-2 bg-fixed flex items-center text-center text-white justify-center">
  <div class="space-y-3">
    <h3 class="text-4xl font-bold">Not Sure Where to Start? </h3>
    <p class="text-xl">Contact our expert design team today and let’s bring your ideas to life.</p>
    <div class="flex items-center flex-wrap gap-3 justify-center mt-4">
      <div id="testimonial">
        <a href="tel:+7379103666"
          class="border border-white text-white bg-transparent rounded py-[14px] px-[11px] text-[18px] font-medium text-lg">Call
          Now</a>
      </div>
      <button
        class="border border-white text-white bg-transparent rounded py-[14px] px-[11px] text-[18px] font-medium text-lg chat banner-btn yb-btn various">Talk
        to an Expert</button>
      <button data-src="#popupform" name="for $244" data-fancybox="" title="Lets Get Started"
        class="py-[14px] px-[11px] text-[18px] font-medium text-lg bg-[#FE5F00] text-white rounded">Let's Work
        Together</button>
    </div>
  </div>
</section>

<section class="our-testimonial">
  <div class="container test-upp !w-[1350px] !sm:w-[1350px]">
    <div class="row sm:mx-12">
      <div class="col-md-12 test-right">
        <div id="testslider" class="owl-carousel">
          <!-- Slide 1 -->
          <div class="test-item grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <img src="assets/images/7.webp" alt="test-1">
            </div>
            <div class="max-w-lg p-6">
              <blockquote class="text-[#FE6F19] text-[24px] font-[600]">"A Seamless Experience from Start to Finish!"
              </blockquote>
              <p class="mt-4 text-muted-foreground">
                Working with the team was a delight! They took my vague ideas and turned them into a vibrant and
                professional brand identity. Every detail was thoughtfully crafted, and their attention to detail made
                all the difference. Highly recommended!
              </p>
              <div class="flex items-center mt-6">
                <img class="w-12 h-12 rounded-full" src="assets/images/barbara.webp" alt="Steven D. Henry" />
                <div class="ml-4">
                  <p class="font-medium text-primary-foreground">Sarah J. Miller, Marketing Head</p>
                  <p class="text-sm text-muted-foreground">GreenSky Solutions</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="test-item grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <img src="assets/images/2.webp" alt="test-2">
            </div>
            <div class="max-w-lg p-6">
              <blockquote class="text-[#FE6F19] text-[24px] font-[600]">"Creative, Reliable, and Always On-Time!"
              </blockquote>
              <p class="mt-4 text-muted-foreground">
                From the initial meeting to the final delivery, the team showcased professionalism and creativity. They
                designed a website that not only looks stunning but is also highly functional. Their commitment to
                deadlines and client satisfaction is unmatched.
              </p>
              <div class="flex items-center mt-6">
                <img class="w-12 h-12 rounded-full" src="assets/images/ashlay.webp" alt="Jane S. Doe" />
                <div class="ml-4">
                  <p class="font-medium text-primary-foreground">Michael D. Carter, Owner</p>
                  <p class="text-sm text-muted-foreground">UrbanClick Agency</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="test-item grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
              <img src="assets/images/6.webp" alt="test-3">
            </div>
            <div class="max-w-lg p-6">
              <blockquote class="text-[#FE6F19] text-[24px] font-[600]">"They Understood Our Vision Perfectly!"
              </blockquote>
              <p class="mt-4 text-muted-foreground">
                We needed a modern, minimalist design for our startup's website, and they nailed it! The team understood
                our vision, worked tirelessly, and delivered beyond our expectations. Their ability to turn ideas into
                reality is truly impressive.
              </p>
              <div class="flex items-center mt-6">
                <img class="w-12 h-12 rounded-full" src="assets/images/steven.webp" alt="Mark T. Lee" />
                <div class="ml-4">
                  <p class="font-medium text-primary-foreground">Linda K. Williams, Founder</p>
                  <p class="text-sm text-muted-foreground">BlueTrail Ventures</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Aap aur slides bhi add kar sakte hain agar chahen -->
        </div>
      </div>
    </div>
  </div>

  <!-- Custom Dots Container -->
  <div class="d-flex arr-gap"></div>
</section>

<?php include 'include/footer.php'; ?>