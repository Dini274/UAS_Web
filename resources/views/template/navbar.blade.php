<!-- Navbar -->
    
    <nav class="md:px-10 lg:px-32 px-8 py-5 flex items-center relative">
        <div class="flex lg:space-x-20 md:space-x-10 items-center">
            <!-- Logo -->
            <div class="logo">
                <a href="home.html" class="navbrand flex space-x-3 text-white items-center">
                    <img src="{{ asset('/assets/images/maemmamam.svg') }}" alt="">
                    <h4 class="font-content font-bold">MaemMamam</h4>
                </a>
            </div>

            <!-- Toggle Nav -->
            <div id="toggle" class="text-white text-[2rem] md:hidden absolute right-10 mt-2">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </div>
            <!-- Navigation Item -->
            <ul id="sidebar" class="md:flex md:space-x-10 space-x-0 md:space-y-0 space-y-8 text-white md:items-center md:z-auto z-10 md:static absolute md:bg-transparent bg-white/20 backdrop-blur-md w-full md:h-0 md:w-auto md:py-0 py-10 md:text-[.9rem] text-[1.2rem] md:pl-0 px-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 left-0">
                <li>
                    <a href="/" class=" hover:text-text hover:font-medium">
                        Home
                    </a>
                </li>
                <li >
                    <a href="/about" class="hover:text-text hover:font-medium">
                        About
                    </a>
                </li>
                <li >
                    <a href="/comunity" class="hover:text-text hover:font-medium">
                        Comunity
                    </a>
                </li>
                <div class="login-mobile md:hidden block space-y-4 pt-5">
                    <button class="login flex border px-10 py-2.5 rounded-[50px] space-x-3 text-white w-full">
                        <a href="/login" class="font-button text-[.9rem] mx-auto">Login</a>
                    </button>
                    <button href="#" class="login flex bg-text px-10 py-2.5 rounded-[50px] space-x-3 text-white w-full">
                        <a href="#" class="font-button text-[.9rem] text-center mx-auto">Register</a>
                    </button>
                    
                </div>
            </ul>
        </div>

        <div class="ml-auto md:flex items-center space-x-10">
            <a href="#" class="cart flex text-white md:mr-0 mr-[5rem]">
                <img src="{{ asset('/assets/images/cart.svg') }}" alt="" class="w-5">
                <span class="absolute ml-2 -mt-2 rounded-full bg-red-600 text-[.7rem] p-1 m-0 text-white font-content leading-tight text-center">10</span>
            </a>
            <a href="/login" class="login md:flex hidden items-center space-x-3 text-white">
                <p class="font-button text-[.9rem]">Login</p>
                <img src="{{ asset('/assets/images/login-icon.svg') }}" alt="">
            </a>
            <a href="#" class="register md:flex hidden bg-text px-6 py-2.5 text-button text-[.9rem] text-white rounded-[50px]">
                Register
            </a>
        </div>
    </nav>
    <!-- End Navbar -->