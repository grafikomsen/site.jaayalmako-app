@extends('frontend.app.app')
@section('main')
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- ==================== PAGE PANIER ==================== -->
        <section id="cart" class="mb-16">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Mon panier <span class="text-sm font-normal text-gray-500">(2 articles)</span></h2>
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3 space-y-4">
            <!-- Article panier 1 -->
            <div class="bg-white rounded-xl shadow-sm p-4 flex flex-wrap gap-4 items-center border">
                <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=100&h=100&fit=crop" class="w-20 h-20 rounded-lg object-cover">
                <div class="flex-1">
                <h3 class="font-semibold">PC Portable Gamer</h3>
                <p class="text-sm text-gray-500">Réf: GAMER-X7</p>
                <div class="flex items-center gap-3 mt-1">
                    <span class="text-blue-600 font-bold">899€</span>
                    <span class="text-gray-400 line-through text-sm">1 199€</span>
                </div>
                </div>
                <div class="flex items-center gap-3">
                <div class="flex border rounded-lg">
                    <button class="px-2 py-1 border-r">-</button>
                    <span class="px-3 py-1">1</span>
                    <button class="px-2 py-1 border-l">+</button>
                </div>
                <button class="text-red-500 hover:text-red-700"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" /></svg></button>
                </div>
            </div>
            <!-- Article panier 2 -->
            <div class="bg-white rounded-xl shadow-sm p-4 flex flex-wrap gap-4 items-center border">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=100&h=100&fit=crop" class="w-20 h-20 rounded-lg object-cover">
                <div class="flex-1">
                <h3 class="font-semibold">Casque Audio Sans Fil</h3>
                <p class="text-sm text-gray-500">Réf: AUDIO-PRO</p>
                <div class="text-blue-600 font-bold">79€</div>
                </div>
                <div class="flex items-center gap-3">
                <div class="flex border rounded-lg">
                    <button class="px-2 py-1 border-r">-</button>
                    <span class="px-3 py-1">2</span>
                    <button class="px-2 py-1 border-l">+</button>
                </div>
                <button class="text-red-500 hover:text-red-700"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" /></svg></button>
                </div>
            </div>
            <div class="bg-gray-50 p-4 rounded-xl text-center text-gray-500 text-sm">Livraison gratuite dès 50€ d'achat</div>
            </div>
            <!-- Résumé panier -->
            <div class="lg:w-1/3">
            <div class="bg-white rounded-xl shadow-md p-6 sticky top-24">
                <h3 class="text-xl font-bold mb-4">Récapitulatif</h3>
                <div class="space-y-2 border-b pb-3">
                <div class="flex justify-between"><span>Sous-total</span><span>1 057€</span></div>
                <div class="flex justify-between"><span>Livraison</span><span>Gratuite</span></div>
                <div class="flex justify-between font-semibold text-lg pt-2"><span>Total</span><span class="text-blue-600">1 057€</span></div>
                </div>
                <a href="#checkout" class="block text-center mt-5 bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 rounded-xl transition">Procéder à la commande</a>
            </div>
            </div>
        </div>
        </section>
    </main>
@endsection
