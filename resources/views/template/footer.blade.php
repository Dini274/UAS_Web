<!-- Footer -->
    <div class="footer lg:mx-32 md:mx-10 mx-8 text-white mb-10" id="contact">
        <div data-aos="fade-in" data-aos-duration="1000" class="logo-footer flex items-center space-x-3">
            <img src="{{ asset('/assets/images/maemmamam.svg') }}" alt="">
            <h4 class="font-content font-bold">MaemMamam</h4>
        </div>
        <div class="lg:flex block mt-10">
            <div class="about-footer" >
                <p  data-aos="fade-up" data-aos-duration="1000" class="text-[.9rem] w-[70%]">We were founded in 1948 after the war and the world began to be safe we decided to open a small restaurant on the side of the road for the youth and the surrounding community.</p>
                <div data-aos="fade-up" data-aos-duration="1200" class="icon-social flex space-x-6 mt-6">
                    <a href="https://facebook.com">
                        <img src="{{ asset('/assets/images/facebook.svg') }}" alt="">
                    </a>
                    <a href="https://twitter.com">
                        <img src="{{ asset('/assets/images/twitter.svg') }}" alt="">
                    </a>
                    <a href="https://linkedin.com">
                        <img src="{{ asset('/assets/images/linkedin.svg') }}" alt="">
                    </a>
                    <a href="https://instagram.com">
                        <img src="{{ asset('/assets/images/instagram.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="grid md:grid-cols-3 grid-cols-2 md:gap-x-5 md:gap-y-0 gap-y-10 lg:mt-0 mt-10 lg:ml-[-3rem]">
                <!-- navigation -->
                <div data-aos="fade-up" data-aos-duration="1400" class="space-y-5">
                    <h4 class="text-[1.2rem] font-semibold">Navigation</h4>
                    <li class="text-[#969696] text-[.9rem] list-none">
                        <a href="home.html">Home</a>
                    </li>
                    <li class="text-[#969696] text-[.9rem] list-none">
                        <a href="info.html">Info</a>
                    </li>
                    <li class="text-[#969696] text-[.9rem] list-none">
                        <a href="news.html">News</a>
                    </li>
                    <li class="text-[#969696] text-[.9rem] list-none">
                        <a href="about.html">About Us</a>
                    </li>
                    <li class="text-[#969696] text-[.9rem] list-none">
                        <a href="#contact">Contact Us</a>
                    </li>
                </div>

                <!-- Address -->
                <div class="space-y-5" data-aos="fade-up" data-aos-duration="1600">
                    <h4 class="text-[1.2rem] font-semibold">Address</h4>
                    <p class="text-[#969696] text-[.9rem]">Jl. Al-Muwahhiddin, Karangtengah, Cibadak, Kab. Sukabumi.
                        Sukabumi 43351</p>
                </div>

                <!-- Contact Us -->
                <div class="space-y-5" data-aos="fade-up" data-aos-duration="1200">
                    <h4 class="text-[1.2rem] font-semibold">Contact Us</h4>
                    <div class="flex items-center space-x-3">
                        <ion-icon name="call-outline"></ion-icon>
                        <p class="text-[#969696] text-[.9rem]">(0266) 532510</p>
                    </div>
                    <div class="flex items-center space-x-3">
                        <ion-icon name="mail-outline"></ion-icon>
                        <p class="text-[#969696] text-[.9rem]">smkn1_cibadak@yahoo.co.id</p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mt-14">
            <p>&copy; MaemMamam, 2022</p>
        </footer>
    </div>
    <!-- End Footer -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
<!-- <script src="index.js"></script> -->
<script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }
  </script>