<section class="banner_section">
    <!-- slider -->
    <div class="banner_slider">

        @foreach (homePage() as $item)
            <!-- slider -->
            <div class="slider_inage">
                <img src="{{ asset('storage/Banner/Banner1/' . $item->branner1) }}" alt="">
            </div>

            <div class="slider_inage">
                <img src="{{ asset('storage/Banner/Banner2/' . $item->branner2) }}" alt="">
            </div>

            <div class="slider_inage">
                <img src="{{ asset('storage/Banner/Banner3/' . $item->branner3) }}" alt="">
            </div>
        @endforeach

    </div>
</section>
