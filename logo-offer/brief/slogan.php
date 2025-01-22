<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Design Pro Labs | Special Offer</title>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
      integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </head>

  <body class="hompg">
  <header class="fixed z-50 top-0 left-0 w-full flex justify-between items-center md:px-[7vw] px-[5vw] py-3 border-b border-b-[#ddd] bg-white">
        <a href="../">
            <img src="../assets/images/logo.png" alt="" class="sm:h-[80px] h-[75px]">
        </a>

        <a href="tel:+17379103666" class="bg-[#FF5F00] sm:px-[30px] sm:py-3 px-[25px] py-2 text-white text-[16px] rounded-lg border border-[#ddd] flex gap-2"><i class="fa fa-phone rotate-90"></i>+1 (737) 910-3666</a>

    </header>

    <section class="flex justify-center items-center h-screen">
  <div>
    <h1 class="text-4xl font-bold text-center">
      Does <span id="companyName" class="text-[#FE5F00]"></span> have a slogan?
    </h1>
    <form id="sloganForm" class="flex flex-col justify-center mt-4">
      <input
        id="sloganInput"
        type="text"
        class="w-[80%] border-[#d7d7d7] border-[2px] rounded-lg mx-auto py-[14px] px-[15px] focus:outline-[#FE5F00]"
        placeholder="Company Slogan (Optional)"
      />
    </form>
  </div>
</section>

<div class="fixed bottom-0 left-0 w-full py-4 flex justify-center customBorder">
  <button
    id="skipBtn"
    class="text-lg font-semibold text-white bg-[#FE5F00] py-[10px] px-10 flex items-center gap-2"
  >
    <span id="skipText">Skip</span>
    <img src="../assets/images/arrowForward.png" alt="arrowForward" />
  </button>
</div>


    <script src="../assets/js/slogan.js"></script>
  </body>
</html>
