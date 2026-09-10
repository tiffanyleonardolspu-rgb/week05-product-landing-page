<!-- Customer Testimonial Card -->
 <div class="bg-white text-black rounded-3xl p-8 shadow-lg hover:shadow-xl transition text-center">


    <!-- Customer Image -->
    <div class="flex justify-center mb-6">

        <img
            src="{{ asset($image) }}"
            alt="{{ $name }}"
            style="width:96px; height:96px; object-fit:cover; border-radius:50%;"
        >

    </div>


    <!-- Review -->
    <p class="text-gray-600 leading-relaxed mb-8">
        "{{ $review }}"
    </p>


    <!-- Name -->
    <h3 class="text-xl font-bold">
        {{ $name }}
    </h3>


    <!-- Position -->
    <p class="text-gray-500 text-sm mt-2">
        {{ $position }}
    </p>


</div>