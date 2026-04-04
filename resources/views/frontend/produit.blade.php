@extends('frontend.app.app')
@section('main')
    <!-- ==================== PAGE PRODUIT (DÉTAIL) ==================== -->
    <section id="product" class="mb-16 bg-white rounded-2xl shadow-sm p-6 border border-gray-100">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 border-b pb-3">Détail produit</h2>
      <div class="flex flex-col md:flex-row gap-8">
        <div class="md:w-1/2">
          <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=500&h=400&fit=crop" class="rounded-2xl w-full object-cover shadow-md">
        </div>
        <div class="md:w-1/2">
          <div class="flex items-center gap-2 mb-2">
            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">En stock</span>
            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-full">-20%</span>
          </div>
          <h1 class="text-3xl font-bold text-gray-900">PC Portable Gamer Xtreme</h1>
          <div class="flex items-baseline gap-3 mt-3">
            <span class="text-3xl font-bold text-blue-600">899€</span>
            <span class="text-gray-400 line-through">1 199€</span>
            <span class="text-green-600 font-semibold">Économisez 300€</span>
          </div>
          <p class="text-gray-600 mt-4">Processeur Intel Core i7, 16Go RAM, SSD 512Go, RTX 4060, écran 144Hz. Idéal pour le gaming et la création.</p>
          <div class="mt-6 flex items-center gap-4">
            <div class="flex border border-gray-300 rounded-lg">
              <button class="px-3 py-1 text-lg font-bold border-r">-</button>
              <span class="px-4 py-1">1</span>
              <button class="px-3 py-1 text-lg font-bold border-l">+</button>
            </div>
            <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl transition btn-scale">Ajouter au panier</button>
            <button class="p-3 border border-gray-300 rounded-xl hover:bg-gray-50"><svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" /></svg></button>
          </div>
        </div>
      </div>
    </section>
@endsection
