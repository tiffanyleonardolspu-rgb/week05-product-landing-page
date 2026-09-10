<nav class="fixed top-0 left-0 w-full z-50">

    <div class="max-w-7xl mx-auto px-6 py-5">


        <!-- Main Navbar Box -->

        <div class="border border-white/20 bg-black/40 backdrop-blur-md rounded-2xl px-6 py-4 flex items-center justify-between">


            <!-- Logo Section -->

            <a href="#" 
               class="flex items-center gap-3 border border-white/20 rounded-xl px-4 py-2 hover:bg-white/10 transition">


                <img
                    src="{{ asset('images/mnml-logo.png') }}"
                    alt="MNML.MN Logo"
                    class="w-10 h-10 rounded-full object-cover"
                >


                <span class="text-white text-lg font-semibold tracking-[0.25em]">
                    MNML.MN
                </span>


            </a>





            <!-- Navigation Links -->

            <div class="hidden md:flex items-center gap-2 border border-white/20 rounded-xl p-2">


                <a href="#"
                   class="text-gray-400 px-5 py-2 rounded-lg text-sm uppercase tracking-widest hover:text-white hover:bg-white/10 transition">

                    Home

                </a>



                <a href="#collection"
                   class="text-gray-400 px-5 py-2 rounded-lg text-sm uppercase tracking-widest hover:text-white hover:bg-white/10 transition">

                    Collection

                </a>



                <a href="#about"
                   class="text-gray-400 px-5 py-2 rounded-lg text-sm uppercase tracking-widest hover:text-white hover:bg-white/10 transition">

                    About

                </a>

<!-- MNML.MN Navigation Component -->

                <a href="#contact"
                   class="text-gray-400 px-5 py-2 rounded-lg text-sm uppercase tracking-widest hover:text-white hover:bg-white/10 transition">

                    Contact

                </a>

<!-- Mobile Menu Button -->

<button 
    class="md:hidden border border-white/30 rounded-xl px-4 py-3 text-white">

    ☰

</button>

            </div>







            <!-- Shop Button -->

            <a href="#collection"
               class="border border-white bg-white text-black px-8 py-3 rounded-xl text-sm font-medium hover:bg-transparent hover:text-white transition">


                Shop Now


            </a>




        </div>


    </div>


</nav>