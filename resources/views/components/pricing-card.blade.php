<div class="bg-white text-black rounded-3xl p-8 shadow-lg hover:shadow-2xl transition">


    <!-- Plan Name -->
    <h3 class="text-2xl font-bold">
        {{ $name }}
    </h3>


    <!-- Price -->
    <p class="text-4xl font-bold mt-5">
        {{ $price }}
    </p>


    <p class="text-gray-500 mt-2">
        {{ $description }}
    </p>



    <!-- Features -->
    <ul class="mt-6 space-y-3 text-gray-600">


        @foreach($features as $feature)

            <li class="flex items-center gap-2">

                <span class="text-black">
                    ✓
                </span>

                {{ $feature }}

            </li>

        @endforeach


    </ul>



    <!-- Button -->
    <button
        class="mt-8 w-full bg-black text-white py-3 rounded-full hover:bg-gray-800 transition">

        Shop Now

    </button>


</div>