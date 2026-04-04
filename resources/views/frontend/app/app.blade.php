<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>ModernMarket | Your Everyday Essentials</title>
    <!-- TailwindCSS + Google Fonts + CDN for Icons -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('frontend/assets/fontawesome/css/all.min.css') }}" />
    <script src="https://unpkg.com/@heroicons/web@2.0.18/outline/index.js"></script>
</head>
<body class="bg-gray-50 font-sans antialiased">
    <!-- ========================== HEADER ========================== -->
    <header class="sticky top-0 z-30 bg-white shadow-sm border-b border-gray-200">
        <!-- Top bar: Logo, search, icons -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex flex-wrap items-center gap-3 md:gap-6">
            <!-- Logo -->
            <div class="flex items-center flex-shrink-0">
                <a href="{{ route('home') }}" class="text-2xl md:text-3xl font-extrabold tracking-tight">
                    <span class="text-blue-600">Modern</span><span class="text-gray-800">Market</span>
                </a>
            </div>

            <!-- Search Bar (center, grows) -->
            <div class="flex-1 min-w-[160px] w-full sm:w-auto order-last md:order-none mt-2 md:mt-0">
                <div class="relative">
                    <input type="text" placeholder="Search products, brands, categories..."
                            class="w-full py-2.5 pl-5 pr-12 rounded-full border border-gray-300 bg-gray-50 focus:bg-white focus:ring-2 focus:ring-blue-400 focus:outline-none text-gray-700 text-sm md:text-base transition">
                    <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-blue-600 hover:bg-blue-700 text-white p-1.5 rounded-full transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Language Dropdown Menu (FR - EN) -->
            <div class="relative flex-shrink-0">
                <button id="languageDropdownBtn" class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition px-2 py-1.5 rounded-lg hover:bg-gray-100">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.5a2.5 2.5 0 015 0 2.5 2.5 0 01-5 0zm0 0v6m15-6v6m-12 9h7.5" />
                    </svg>
                    <span class="text-sm font-medium" id="currentLang">FR</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="languageDropdown" class="absolute right-0 mt-2 w-32 bg-white rounded-lg shadow-lg border border-gray-200 hidden z-20">
                    <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition rounded-t-lg" data-lang="fr">
                        <span class="font-medium">🇫🇷</span> Français
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition rounded-b-lg" data-lang="en">
                        <span class="font-medium">🇬🇧</span> English
                    </a>
                </div>
            </div>

            <!-- Icons: Account, Wishlist, Cart -->
            <div class="flex items-center gap-4 sm:gap-5 flex-shrink-0">
                
                <!-- Account Dropdown Menu -->
                <div class="relative">
                    <button id="accountDropdownBtn" class="flex items-center gap-1 text-gray-700 hover:text-blue-600 transition focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    
                    <div id="accountDropdown" class="absolute right-0 mt-2 w-64 bg-white rounded-xl shadow-lg border border-gray-200 hidden z-20 overflow-hidden">
                        @auth
                            <!-- User Info Header -->
                            <div class="px-4 py-3 bg-gray-50 border-b border-gray-200">
                                <p class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                                <span class="inline-block mt-1 px-2 py-0.5 text-xs rounded-full 
                                    @if(Auth::user()->role === 'admin') bg-red-100 text-red-700
                                    @elseif(Auth::user()->role === 'vendor') bg-blue-100 text-blue-700
                                    @else bg-green-100 text-green-700 @endif">
                                    {{ ucfirst(Auth::user()->role) }}
                                </span>
                            </div>
                            
                            <!-- Menu Items based on role -->
                            @if(Auth::user()->role === 'admin')
                                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    <span>Tableau de bord Admin</span>
                                </a>
                                <a href="" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                    <span>Gérer les produits</span>
                                </a>
                                <a href="" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                    <span>Toutes les commandes</span>
                                </a>
                                <a href="" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>Gérer les utilisateurs</span>
                                </a>
                                <div class="border-t border-gray-200 my-1"></div>
                            @elseif(Auth::user()->role === 'vendor')
                                <a href="" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    <span>Tableau de bord Vendeur</span>
                                </a>
                                <a href="" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                    <span>Mes produits</span>
                                </a>
                                <a href="" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                    <span>Mes commandes</span>
                                </a>
                                <a href="" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                    </svg>
                                    <span>Ajouter un produit</span>
                                </a>
                                <div class="border-t border-gray-200 my-1"></div>
                            @else
                                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span>Mon profil</span>
                                </a>
                                <a href="" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                    <span>Mes commandes</span>
                                </a>
                                <a href="" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                    <span>Ma liste d'envies</span>
                                    <span class="ml-auto bg-red-500 text-white text-xs px-1.5 py-0.5 rounded-full">3</span>
                                </a>
                                <div class="border-t border-gray-200 my-1"></div>
                            @endif
                            
                            <!-- Common menu items for all authenticated users -->
                            <a href="" class="flex items-center gap-3 px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Paramètres</span>
                            </a>
                            
                            <!-- Logout Button -->
                            <form method="POST" action="{{ route('logout') }}" class="border-t border-gray-200">
                                @csrf
                                <button type="submit" class="flex items-center gap-3 w-full px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 transition text-left">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <span>Déconnexion</span>
                                </button>
                            </form>
                        @else
                            <!-- Non-authenticated user -->
                            <a href="{{ route('login') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                <span>Connexion</span>
                            </a>
                            <a href="{{ route('register') }}" class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition border-t border-gray-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                </svg>
                                <span>Inscription</span>
                            </a>
                        @endauth
                    </div>
                </div>

                <!-- Wishlist Icon -->
                <a href="" class="text-gray-700 hover:text-blue-600 transition relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                    <span class="absolute -top-1 -right-2 bg-orange-500 text-white text-[10px] font-bold rounded-full w-4 h-4 flex items-center justify-center">3</span>
                </a>

                <!-- Cart Icon -->
                <a href="" class="text-gray-700 hover:text-blue-600 transition relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                    <span class="absolute -top-1 -right-2 bg-blue-600 text-white text-[10px] font-bold rounded-full w-4 h-4 flex items-center justify-center">2</span>
                </a>
            </div>
        </div>

        <!-- Secondary Navigation Menu (categories) -->
        <nav class="bg-gray-100 border-t border-gray-200 py-2 overflow-x-auto whitespace-nowrap scrollbar-hide">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex gap-6 text-sm font-medium text-gray-700">
                <a href="#" class="hover:text-blue-600 transition">Electronics</a>
                <a href="#" class="hover:text-blue-600 transition">Fashion</a>
                <a href="#" class="hover:text-blue-600 transition">Home & Living</a>
                <a href="#" class="hover:text-blue-600 transition">Sports & Outdoors</a>
                <a href="#" class="hover:text-blue-600 transition">Toys & Games</a>
                <a href="#" class="hover:text-blue-600 transition">Health & Beauty</a>
                <a href="#" class="hover:text-blue-600 transition">Automotive</a>
                <a href="#" class="hover:text-blue-600 transition">Books</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('main')
    </main>

    <!-- ========================== FOOTER ========================== -->
    <footer class="bg-gray-900 text-gray-300 pt-12 pb-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">About ModernMarket</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Our story</a></li>
                        <li><a href="#" class="hover:text-white transition">Sustainability</a></li>
                        <li><a href="#" class="hover:text-white transition">Press</a></li>
                        <li><a href="#" class="hover:text-white transition">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Help</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Customer Service</a></li>
                        <li><a href="#" class="hover:text-white transition">Returns & Refunds</a></li>
                        <li><a href="#" class="hover:text-white transition">Shipping Info</a></li>
                        <li><a href="#" class="hover:text-white transition">FAQs</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white transition">Email Support</a></li>
                        <li><a href="#" class="hover:text-white transition">Live Chat</a></li>
                        <li><a href="#" class="hover:text-white transition">+1 (555) 123-4567</a></li>
                        <li><a href="#" class="hover:text-white transition">Help Center</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-5">
                        <a href="#" class="hover:text-blue-400 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12z"/></svg></a>
                        <a href="#" class="hover:text-blue-400 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M21.75 5.25a8.7 8.7 0 01-2.5.685 4.373 4.373 0 001.918-2.412 8.722 8.722 0 01-2.77 1.058 4.354 4.354 0 00-7.42 3.97 12.35 12.35 0 01-8.96-4.54 4.357 4.357 0 001.348 5.812 4.3 4.3 0 01-1.97-.545v.055a4.355 4.355 0 003.49 4.27 4.36 4.36 0 01-1.964.074 4.354 4.354 0 004.065 3.023 8.74 8.74 0 01-5.408 1.864c-.348 0-.693-.02-1.03-.06a12.32 12.32 0 0018.64-10.46c0-.19-.005-.38-.014-.57a8.806 8.806 0 002.16-2.24z"/></svg></a>
                        <a href="#" class="hover:text-blue-400 transition"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.332.014 7.052.072 2.695.272.273 2.69.073 7.052.014 8.332 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.332 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
                    </div>
                    <p class="text-sm mt-4">© 2025 ModernMarket. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Language Dropdown functionality
        const languageDropdownBtn = document.getElementById('languageDropdownBtn');
        const languageDropdown = document.getElementById('languageDropdown');
        const currentLangSpan = document.getElementById('currentLang');

        if (languageDropdownBtn && languageDropdown) {
            languageDropdownBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                languageDropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!languageDropdownBtn.contains(e.target) && !languageDropdown.contains(e.target)) {
                    languageDropdown.classList.add('hidden');
                }
            });
        }

        // Language selection handler
        const langOptions = document.querySelectorAll('[data-lang]');
        langOptions.forEach(option => {
            option.addEventListener('click', (e) => {
                e.preventDefault();
                const selectedLang = option.getAttribute('data-lang');
                if (currentLangSpan) {
                    currentLangSpan.textContent = selectedLang.toUpperCase();
                }
                if (languageDropdown) {
                    languageDropdown.classList.add('hidden');
                }
                console.log(`Language changed to: ${selectedLang}`);
                // Add your language switching logic here
            });
        });

        // Account Dropdown functionality
        const accountDropdownBtn = document.getElementById('accountDropdownBtn');
        const accountDropdown = document.getElementById('accountDropdown');

        if (accountDropdownBtn && accountDropdown) {
            accountDropdownBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                accountDropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', (e) => {
                if (!accountDropdownBtn.contains(e.target) && !accountDropdown.contains(e.target)) {
                    accountDropdown.classList.add('hidden');
                }
            });
        }
    </script>
</body>
</html>