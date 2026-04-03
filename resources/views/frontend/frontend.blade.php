@extends('frontend.app.app')
@section('main')
    <section class="hero font-poppins">
        <div style="background-image: url('{{ asset('frontend/assets/images/banner.jpg') }}'); background-position: center; background-size: cover; height: 50vh" class="flex justify-center items-end mt-28">
            <div class="flex lg:flex-wrap justify-between items-center bg-white px-4 mb-5">
                <div><p class="text-xs md:text-base">You are on amazon.com. You can also shop on Amazon India for millions of products with fast local delivery.</p></div>
                <div><a class="px-3 text-[#007185] text-xs md:text-base" href="">Click here to go to amazon.in</a></div>
            </div>
        </div>
    </section>
@endsection
