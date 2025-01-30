<footer class="!px-0 pt-16 pb-20 w-full">
    <div class="w-[85%] mx-auto ">
        <div class="logo-div grid grid-cols-1 md:grid-cols-4 md:gap-0 gap-7">
            <img src="assets/images/logo-white.png" alt="Design Pro Labs" class="md:h-36 h-24  !object-fit">
            <div class="hidden md:inline"></div>
            <div class="hidden md:inline"></div>
            <div class="h-full">
                <h3 class="uppercase text-2xl font-semibold text-white md:text-center !text-left">Reach us at</h3>
                <ul class="contact-link !text-gray-300 space-y-2 mt-3">
                    <li class="!mx-0 !text-left">
                        <a class="telicon hover:text-white !mx-0 !text-left" href="tel:+17379103666">
                            <i class="fa !mr-1 fa-phone"></i>
                            (737) 910-3666
                        </a>
                    </li>
                    <li class="!mx-0 !text-left">
                        <a class="telicon hover:text-white !mx-0 !text-left" href="mailto:info@designprolabs.com">
                            <i class="fa !mr-1 fa-envelope"></i>
                            info@designprolabs.com
                        </a>
                    </li>
                    <li class="!mx-0 !text-left">
                        <a class="telicon hover:text-white !mx-0 !text-left" href="javascript:;">
                            <i class="fa !mr-1 fa-map-marker"></i>
                            <strong>Address :</strong>
                            5900 Balcones Drive #7494, Austin,TX 78731
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex justify-between md:flex-row flex-col mt-6 items-start md:gap-0 gap-10 md:mr-7">
            <p class="md:w-[65%] text-left md:text-center text-sm text-gray-500">These Terms will be applied fully and
                affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions
                written in here. You must not use this Website if you disagree with any of these Website Standard Terms
                and Conditions.</p>
            <div class="flex items-center gap-3 flex-wrap">
                <div>
                    <a href="https://www.instagram.com/design.pro.labs/" target="_blank">
                        <img src="assets/images/instagram.png" class="cursor-pointer" alt="instagram">
                    </a>
                </div>
                <div>
                    <a href="https://www.facebook.com/people/Design-Pro-Labs/61562786195045/" targe="_blank">
                        <img src="assets/images/facebook.svg" alt="facebook">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div style="display: none;" class="popupform" id="popupform">
    <h2>We are here to help!</h2>
    <p>Providing you the perfect solution for your business needs. Let's work together and unlock doors to success.</p>
    <form onSubmit="handlePopupPackage(event, 'PopupPackageForm')" class="validate-popupform">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="required placeholder1" required="" placeholder="Full Name *"
                            name="Name">
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="required email placeholder1" required=""
                            placeholder="Email Address *" name="Email">
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" class="required number placeholder1" minlength="10" maxlength="15"
                            required="" placeholder="Phone No. *" name="Number" onkeypress="validate(event)">
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <select name="Interested" id="packages3">
                            <option>Select Package</option>
                            <option value="STARTUP WEBSITE Package - $249.00">STARTUP WEBSITE Package - $249.00</option>
                            <option value="PROFESSIONAL WEBSITE Package - $399.00">PROFESSIONAL WEBSITE Package - $399.00</option>
                            <option value="Interactive WEBSITE Package - $599.00">Interactive WEBSITE Package - $599.00
                            </option>
                            <option value="E-commerce Website Package - $799.00">E-commerce Website  Package - $799.00</option>
                            <option value="BUSINESS WEBSITE Package - $949.00">BUSINESS WEBSITE Package - $949.00</option>
                            <option value="ELITE WEBSITE Package - $1299.00">ELITE WEBSITE Package - $1299.00</option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <textarea name="Message" class="required placeholder1" required=""
                            placeholder="To help us understand better, enter a brief description about your project."></textarea>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <ul>
                    <li>
                        <input type="submit" value="Submit">
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
<div style="display: none;" class="popupform2 2xl:!w-[1200px]" id="popupform2">
    <div class="!grid lg:!grid-cols-3 md:grid-cols-2 gap-5 grid-cols-1">
        <div class="!p-0 lg:inline hidden">
            <img class="!h-full" src="assets/images/popup-image1.webp" alt="offer">
        </div>
        <div class="!mt-10 p-3">
            <h2 class="text-3xl font-bold !text-black">Get Custom Website Design</h2>
            <p class="!text-lg !text-[#FE6F19]">In Just <span class="text-black text-3xl font-semibold">$249</span></p>
            <p class="mt-2 text-[14px] text-[#848484] !pr-2">Get started with tailored website designs to showcase your brand and engage your audience effectively</p>
            <ul class="list-disc list-inside mt-3 text-[14px] text-[#848484]">
                <li class="text-[14px] text-[#848484] text-left leading-[0px]">✔ 100% Money Back Guarantee</li>
                <li class="text-[14px] text-[#848484] text-left leading-[0px]">✔ 100% Satisfaction Guarantee</li>
                <li class="text-[14px] text-[#848484] text-left leading-[0px]">✔ 100% Ownership Rights</li>
            </ul>
            <div class="mt-3">
                <!-- <img class="w-7"
                    src="https://e7.pngegg.com/pngimages/972/560/png-clipart-whatsapp-computer-icons-whatsapp-text-orange.png"
                    alt=""> -->
                <p class="text-[13px] text-[#848484]">Discuss with our Design Expert Today!</p>
                <p class="font-bold text-[22px] text-[#FE6F19]">+1 (737) 910-3666</p>
            </div>
        </div>
        <form onSubmit="handlePopupRectForm(event, 'popupRectangularFormWebsite')" class="!mt-10 !mr-2">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input type="text" id="namePopup" class="required placeholder1" required=""
                                placeholder="Full Name *" name="Name">
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input id="emailPopup" type="email" class="required email placeholder1" required=""
                                placeholder="Email Address *" name="Email">
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input id="phonePopup" type="text" class="required number placeholder1" minlength="10"
                                maxlength="15" required="" placeholder="Phone No. *" name="Number"
                                onkeypress="validate(event)">
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            <textarea id="descriptionPopup" name="Message" rows="1" class="required placeholder1"
                                required="" placeholder="Message"></textarea>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <ul>
                        <li>
                            <div class="relative">
                                <input type="submit" value="Get Started Now">
                                <img src="assets/images/arrowForward.png" alt="" class="absolute right-11 top-[18px]">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
<?php include 'include/js.php';?>

</html>