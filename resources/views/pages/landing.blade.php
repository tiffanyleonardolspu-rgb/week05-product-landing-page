@extends('layouts.app')

@section('content')


<!-- Navbar -->
<x-navbar />



<!-- Hero Section -->
<x-hero />
<x-about-section />
{{-- MNML.MN Landing Page Layout --}}

<!-- Features Section -->

<section class="bg-gray-50 py-24">

    <div class="max-w-7xl mx-auto px-6">


        <div class="text-center mb-16">

            <p class="uppercase tracking-[0.3em] text-gray-500 text-sm">
                MNML.MN
            </p>


            <h2 class="text-4xl md:text-5xl font-bold mt-4">
                Designed With Purpose
            </h2>


            <p class="text-gray-500 mt-4">
                Minimal fashion created for modern individuals.
            </p>

        </div>



        <div class="grid md:grid-cols-3 gap-8">


            <x-feature-card
                icon="✦"
                title="Premium Materials"
                description="High-quality fabrics made for comfort and durability."
            />


            <x-feature-card
                icon="◯"
                title="Minimal Design"
                description="Clean and timeless designs inspired by simplicity."
            />


            <x-feature-card
                icon="◇"
                title="Elegant Style"
                description="Fashion pieces that represent confidence."
            />


            <x-feature-card
                icon="✧"
                title="Perfect Fit"
                description="Designed for everyday comfort and movement."
            />


            <x-feature-card
                icon="◆"
                title="Exclusive Collection"
                description="Unique pieces made with attention to detail."
            />


            <x-feature-card
                icon="★"
                title="Modern Lifestyle"
                description="Style that matches your personality."
            />


        </div>


    </div>

</section>





<!-- Product Showcase -->

<x-product-showcase />






<!-- Pricing Section -->

<section class="bg-gray-100 py-24">


    <div class="max-w-7xl mx-auto px-6">


        <div class="text-center mb-16">


            <p class="uppercase tracking-[0.3em] text-gray-500 text-sm">
                MNML.MN Collection
            </p>


            <h2 class="text-4xl md:text-5xl font-bold mt-4">
                Choose Your Style
            </h2>


        </div>




        <div class="grid md:grid-cols-3 gap-8">



            <x-pricing-card

                name="Essential Tee"

                price="₱899"

                description="Perfect everyday minimalist wear."

                :features="[
                    'Premium cotton fabric',
                    'Classic MNML.MN design',
                    'Comfort fit'
                ]"

            />




            <x-pricing-card

                name="Signature Collection"

                price="₱1,799"

                description="Elevated pieces for modern style."

                :features="[
                    'Exclusive designs',
                    'Premium quality materials',
                    'Limited collection access'
                ]"

            />




            <x-pricing-card

                name="Premium Bundle"

                price="₱2,999"

                description="Complete MNML.MN experience."

                :features="[
                    'Multiple fashion pieces',
                    'Signature packaging',
                    'Premium customer service'
                ]"

            />



        </div>


    </div>


</section>







<!-- Testimonials Section -->


<section class="bg-black text-white py-24">


    <div class="max-w-7xl mx-auto px-6">


        <div class="text-center mb-16">


            <p class="uppercase tracking-[0.3em] text-gray-400 text-sm">
                Customer Reviews
            </p>


            <h2 class="text-4xl md:text-5xl font-bold mt-4">
                Loved By Our Community
            </h2>


        </div>




        <div class="grid md:grid-cols-3 gap-8">



            <x-testimonial-card

                image="images/customers/customer1.png"

                name="Tiffany Leonardo"

                position="Fashion Enthusiast"

                review="MNML.MN delivers elegant and comfortable designs. The quality and minimalist style make every piece special."

            />




            <x-testimonial-card

                image="images/customers/customer2.png"

                name="Darren Abay"

                position="Style Customer"

                review="The designs are simple, modern, and easy to wear. MNML.MN is my favorite choice for everyday fashion."

            />




            <x-testimonial-card

                image="images/customers/customer3.png"

                name="Gemma Leonardo"

                position="Lifestyle Customer"

                review="MNML.MN combines comfort and elegance perfectly. Every collection feels premium and timeless."

            />



        </div>


    </div>


</section>






<!-- Call To Action -->

<section class="bg-white py-24">


    <div class="max-w-5xl mx-auto px-6 text-center">


        <p class="uppercase tracking-[0.3em] text-gray-500 text-sm">
            MNML.MN
        </p>


        <h2 class="text-4xl md:text-6xl font-bold mt-5">
            Define Your
            <span class="text-gray-400">
                Own Style
            </span>
        </h2>


        <p class="text-gray-500 mt-6 max-w-2xl mx-auto">

            Experience minimalist fashion designed
            with elegance, confidence, and individuality.

        </p>



        <div class="mt-8 flex justify-center gap-4">


            <button
                class="bg-black text-white px-10 py-4 rounded-full hover:bg-gray-800 transition">

                Shop Collection

            </button>



            <button
                class="border border-black px-10 py-4 rounded-full hover:bg-black hover:text-white transition">

                Contact Us

            </button>


        </div>


    </div>


</section>





<!-- Footer -->

<x-footer />




@endsection