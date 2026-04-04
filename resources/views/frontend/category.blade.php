@extends('frontend.app.app')
@section('main')
 <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- ==================== PAGE CATÉGORIE (ÉLECTRONIQUE) ==================== -->
    <section id="category" class="mb-16">
        <div class="flex justify-between items-center flex-wrap gap-4 mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Électronique</h1>
            <div class="flex gap-2">
                <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm bg-white">
                    <option>Tri par : Pertinence</option>
                    <option>Prix croissant</option>
                    <option>Prix décroissant</option>
                    <option>Meilleures ventes</option>
                </select>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Produit catégorie 1 -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                <a  href="{{ route('produit') }}" >
                    <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=300&h=200&fit=crop" class="h-48 w-full object-cover">
                </a>
                <div class="p-4">
                    <h3 class="font-semibold">PC Portable Gamer</h3>
                    <div class="mt-1 text-lg font-bold text-blue-600">899€</div>
                    <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition">Ajouter au panier</button>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                <a  href="{{ route('produit') }}" >
                    <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=300&h=200&fit=crop" class="h-48 w-full object-cover">
                </a>
                <div class="p-4">
                    <h3 class="font-semibold">Clavier Mécanique RGB</h3>
                    <div class="mt-1 text-lg font-bold text-blue-600">89€</div>
                    <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition">Ajouter au panier</button>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                <a  href="{{ route('produit') }}" >
                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?w=300&h=200&fit=crop" class="h-48 w-full object-cover">
                </a>
                <div class="p-4">
                    <h3 class="font-semibold">Montre Connectée Pro</h3>
                    <div class="mt-1 text-lg font-bold text-blue-600">149€</div>
                    <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition">Ajouter au panier</button>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover">
                <a  href="{{ route('produit') }}" >
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop" class="h-48 w-full object-cover">
                </a>
                <div class="p-4">
                    <h3 class="font-semibold">Casque Audio Sans Fil</h3>
                    <div class="mt-1 text-lg font-bold text-blue-600">79€</div>
                    <button class="mt-3 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg transition">Ajouter au panier</button>
                </div>
            </div>
        </div>
    </section>
@endsection
