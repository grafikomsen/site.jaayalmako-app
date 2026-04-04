@extends('frontend.app.app')
@section('main')
    <!-- ========================== HERO SECTION ========================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 mb-12">
      <div class="relative rounded-2xl overflow-hidden bg-gradient-to-r from-blue-700 via-blue-600 to-indigo-700 shadow-xl">
        <div class="absolute inset-0 bg-black opacity-10 mix-blend-overlay"></div>
        <div class="relative z-10 flex flex-col md:flex-row items-center justify-between p-6 md:p-12">
          <div class="text-white max-w-xl">
            <span class="text-orange-300 text-sm font-semibold uppercase tracking-wider">Limited Time Offer</span>
            <h1 class="text-3xl md:text-5xl font-bold mt-2 leading-tight">Big Summer Blowout</h1>
            <p class="text-blue-100 mt-4 text-lg">Up to 70% off on top brands. Free shipping on orders over $50.</p>
            <button class="mt-6 bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition transform hover:scale-105 btn-scale">
              Shop Now →
            </button>
          </div>
          <div class="mt-6 md:mt-0">
            <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=400&h=300&fit=crop" alt="hero sale" class="rounded-2xl w-64 md:w-80 shadow-2xl object-cover">
          </div>
        </div>
      </div>
    </section>

    <!-- ========================== CATEGORIES SECTION ========================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Shop by Category</h2>
        <a href="{{ route('categorie') }}" class="text-blue-600 font-medium hover:underline">View all →</a>
      </div>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5">
        <!-- Category Card 1 -->
        <div class="bg-white rounded-2xl p-4 text-center shadow-sm hover:shadow-md transition cursor-pointer border border-gray-100 card-hover">
          <div class="w-16 h-16 mx-auto bg-blue-50 rounded-full flex items-center justify-center mb-3">
            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 7h14M5 17h14M5 12h14" /></svg>
          </div>
          <span class="font-medium text-gray-800">Electronics</span>
        </div>
        <div class="bg-white rounded-2xl p-4 text-center shadow-sm hover:shadow-md transition cursor-pointer border border-gray-100 card-hover">
          <div class="w-16 h-16 mx-auto bg-orange-50 rounded-full flex items-center justify-center mb-3">
            <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.871m5.5 0L12 9.75m0 0l-2.625 5.625M12 9.75L9.375 15.375" /></svg>
          </div>
          <span class="font-medium text-gray-800">Fashion</span>
        </div>
        <div class="bg-white rounded-2xl p-4 text-center shadow-sm hover:shadow-md transition cursor-pointer border border-gray-100 card-hover">
          <div class="w-16 h-16 mx-auto bg-green-50 rounded-full flex items-center justify-center mb-3">
            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h7.5" /></svg>
          </div>
          <span class="font-medium text-gray-800">Home</span>
        </div>
        <div class="bg-white rounded-2xl p-4 text-center shadow-sm hover:shadow-md transition cursor-pointer border border-gray-100 card-hover">
          <div class="w-16 h-16 mx-auto bg-purple-50 rounded-full flex items-center justify-center mb-3">
            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.871m5.5 0L12 9.75m0 0l-2.625 5.625M12 9.75L9.375 15.375" /></svg>
          </div>
          <span class="font-medium text-gray-800">Sports</span>
        </div>
        <div class="bg-white rounded-2xl p-4 text-center shadow-sm hover:shadow-md transition cursor-pointer border border-gray-100 card-hover">
          <div class="w-16 h-16 mx-auto bg-yellow-50 rounded-full flex items-center justify-center mb-3">
            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-.978 0-1.86-1.8-2.9-3.5-2.9s-3.5 1.04-3.5 2.9c0 .344.128.688.349.978.215.283.401.604.401.959v0m4.5 0v.75a4.5 4.5 0 01-9 0v-.75m4.5 0h-9" /></svg>
          </div>
          <span class="font-medium text-gray-800">Toys</span>
        </div>
        <div class="bg-white rounded-2xl p-4 text-center shadow-sm hover:shadow-md transition cursor-pointer border border-gray-100 card-hover">
          <div class="w-16 h-16 mx-auto bg-rose-50 rounded-full flex items-center justify-center mb-3">
            <svg class="w-8 h-8 text-rose-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 6h12.974c.576 0 1.059.435 1.119 1.007z" /></svg>
          </div>
          <span class="font-medium text-gray-800">Beauty</span>
        </div>
      </div>
    </section>

    <!-- ========================== FLASH DEALS + COUNTDOWN TIMER ========================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
      <div class="flex flex-wrap justify-between items-center mb-6 border-b border-orange-200 pb-2">
        <div class="flex items-center gap-3">
          <span class="bg-orange-100 text-orange-700 text-xs font-bold px-3 py-1 rounded-full">🔥</span>
          <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Flash Deals</h2>
          <div id="countdown-timer" class="flex gap-2 ml-2">
            <div class="timer-digit"><span id="hours">00</span><span class="text-xs ml-1">h</span></div>
            <span class="text-xl font-bold text-gray-700">:</span>
            <div class="timer-digit"><span id="minutes">00</span><span class="text-xs ml-1">m</span></div>
            <span class="text-xl font-bold text-gray-700">:</span>
            <div class="timer-digit"><span id="seconds">00</span><span class="text-xs ml-1">s</span></div>
          </div>
        </div>
        <a href="#" class="text-orange-600 font-medium hover:underline">View All Deals →</a>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Flash Deal Product 1 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover transition-smooth relative border border-gray-100">
          <div class="absolute top-2 left-2 bg-red-600 text-white text-xs px-2 py-1 rounded-full font-bold z-10">-40%</div>
          <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=300&h=200&fit=crop" alt="laptop" class="h-48 w-full object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-gray-800">Gaming Laptop Ultra</h3>
            <div class="mt-2 flex items-baseline gap-2">
              <span class="text-xl font-bold text-blue-600">$899</span>
              <span class="text-sm text-gray-400 line-through">$1,499</span>
            </div>
            <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-lg transition btn-scale">Add to Cart</button>
          </div>
        </div>
        <!-- Flash Deal Product 2 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover relative border border-gray-100">
          <div class="absolute top-2 left-2 bg-red-600 text-white text-xs px-2 py-1 rounded-full font-bold">-30%</div>
          <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=300&h=200&fit=crop" alt="watch" class="h-48 w-full object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-gray-800">Smart Watch Pro</h3>
            <div class="mt-2 flex items-baseline gap-2">
              <span class="text-xl font-bold text-blue-600">$129</span>
              <span class="text-sm text-gray-400 line-through">$189</span>
            </div>
            <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-lg transition">Add to Cart</button>
          </div>
        </div>
        <!-- Flash Deal Product 3 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover relative border border-gray-100">
          <div class="absolute top-2 left-2 bg-red-600 text-white text-xs px-2 py-1 rounded-full font-bold">-50%</div>
          <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=300&h=200&fit=crop" alt="camera" class="h-48 w-full object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-gray-800">Polaroid Instant Camera</h3>
            <div class="mt-2 flex items-baseline gap-2">
              <span class="text-xl font-bold text-blue-600">$79</span>
              <span class="text-sm text-gray-400 line-through">$158</span>
            </div>
            <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-lg transition">Add to Cart</button>
          </div>
        </div>
        <!-- Flash Deal Product 4 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover relative border border-gray-100">
          <div class="absolute top-2 left-2 bg-red-600 text-white text-xs px-2 py-1 rounded-full font-bold">-25%</div>
          <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop" alt="headphones" class="h-48 w-full object-cover">
          <div class="p-4">
            <h3 class="font-semibold text-gray-800">Noise Cancelling Headphones</h3>
            <div class="mt-2 flex items-baseline gap-2">
              <span class="text-xl font-bold text-blue-600">$149</span>
              <span class="text-sm text-gray-400 line-through">$199</span>
            </div>
            <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded-lg transition">Add to Cart</button>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================== PRODUCTS SECTION (recommended) ========================== -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Trending Now</h2>
            <a href="{{ route('produit') }}" class="text-blue-600 font-medium hover:underline">See more →</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover transition-all relative">
                <div class="absolute top-2 left-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full">Best Seller</div>
                    <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?w=300&h=200&fit=crop" class="h-48 w-full object-cover">
                    <div class="p-4">
                        <h3 class="font-medium text-gray-800">Ergonomic Office Chair</h3>
                        <div class="mt-1 flex items-center gap-2">
                            <span class="text-lg font-bold text-gray-900">$249</span>
                            <span class="text-sm text-gray-500 line-through">$329</span>
                            <span class="text-xs text-green-600 font-semibold">-24%</span>
                        </div>
                        <button class="mt-3 w-full bg-gray-100 hover:bg-blue-600 hover:text-white text-gray-800 font-medium py-2 rounded-lg transition">Add to Cart</button>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=300&h=200&fit=crop" class="h-48 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-medium">Wireless Mechanical Keyboard</h3>
                    <div class="mt-1 flex items-center gap-2">
                    <span class="text-lg font-bold text-gray-900">$89</span>
                    <span class="text-xs text-gray-400 line-through">$129</span>
                    </div>
                    <button class="mt-3 w-full bg-gray-100 hover:bg-blue-600 hover:text-white transition font-medium py-2 rounded-lg">Add to Cart</button>
                </div>
                </div>
                <!-- Product Card 3 with discount badge -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover relative">
                <span class="absolute top-2 left-2 bg-orange-500 text-white text-xs px-2 py-1 rounded-full">-15%</span>
                <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=300&h=200&fit=crop" class="h-48 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-medium">Classic White Sneakers</h3>
                    <div class="mt-1 flex items-baseline gap-2">
                    <span class="text-lg font-bold text-gray-900">$59</span>
                    <span class="text-sm text-gray-400 line-through">$69</span>
                    </div>
                    <button class="mt-3 w-full bg-gray-100 hover:bg-blue-600 hover:text-white transition font-medium py-2 rounded-lg">Add to Cart</button>
                </div>
                </div>
                <!-- Product Card 4 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=300&h=200&fit=crop" class="h-48 w-full object-cover">
                <div class="p-4">
                    <h3 class="font-medium">Sport Shoes Ultra</h3>
                    <div class="mt-1 text-lg font-bold text-gray-900">$99</div>
                    <button class="mt-3 w-full bg-gray-100 hover:bg-blue-600 hover:text-white transition font-medium py-2 rounded-lg">Add to Cart</button>
                </div>
                </div>
        </div>
    </section>
@endsection
