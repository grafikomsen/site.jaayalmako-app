@extends('frontend.app.app')
@section('main')
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- ==================== PAGE VALIDATION COMMANDE (CHECKOUT) ==================== -->
        <section id="checkout" class="mb-16">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Validation de commande</h2>
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="lg:w-2/3 space-y-6">
            <!-- Formulaire livraison -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold mb-4 flex items-center gap-2"><span class="bg-blue-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-sm">1</span> Informations de livraison</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" placeholder="Prénom" class="border border-gray-300 rounded-lg p-3 focus:ring-blue-400 focus:outline-none">
                <input type="text" placeholder="Nom" class="border border-gray-300 rounded-lg p-3">
                <input type="email" placeholder="Email" class="border border-gray-300 rounded-lg p-3">
                <input type="tel" placeholder="Téléphone" class="border border-gray-300 rounded-lg p-3">
                <input type="text" placeholder="Adresse" class="border border-gray-300 rounded-lg p-3 md:col-span-2">
                <input type="text" placeholder="Code postal" class="border border-gray-300 rounded-lg p-3">
                <input type="text" placeholder="Ville" class="border border-gray-300 rounded-lg p-3">
                </div>
            </div>
            <!-- Méthode de livraison -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold mb-4 flex items-center gap-2"><span class="bg-blue-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-sm">2</span> Mode de livraison</h3>
                <div class="space-y-3">
                <label class="flex items-center justify-between p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                    <div><input type="radio" name="shipping" class="mr-3" checked> Livraison standard (2-3 jours) - Gratuite</div>
                </label>
                <label class="flex items-center justify-between p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                    <div><input type="radio" name="shipping" class="mr-3"> Livraison express (24h) - 7,99€</div>
                </label>
                </div>
            </div>
            <!-- Paiement -->
            <div class="bg-white rounded-xl shadow-sm p-6">
                <h3 class="text-lg font-semibold mb-4 flex items-center gap-2"><span class="bg-blue-600 text-white w-6 h-6 rounded-full inline-flex items-center justify-center text-sm">3</span> Paiement</h3>
                <div class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Numéro de carte" class="border rounded-lg p-3">
                    <input type="text" placeholder="MM/AA" class="border rounded-lg p-3">
                    <input type="text" placeholder="CVV" class="border rounded-lg p-3">
                    <input type="text" placeholder="Titulaire de la carte" class="border rounded-lg p-3">
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-500"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.746 3.746 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" /></svg> Paiement 100% sécurisé</div>
                </div>
            </div>
            <a href="#confirmation" class="block w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 rounded-xl text-center transition">Confirmer la commande</a>
            </div>
            <!-- Récap commande -->
            <div class="lg:w-1/3">
            <div class="bg-gray-50 rounded-xl p-6 sticky top-24">
                <h3 class="font-bold text-lg">Récapitulatif commande</h3>
                <div class="mt-4 space-y-2">
                <div class="flex justify-between"><span>PC Portable Gamer</span><span>899€</span></div>
                <div class="flex justify-between"><span>Casque Audio (x2)</span><span>158€</span></div>
                <div class="border-t pt-2 mt-2 font-semibold flex justify-between"><span>Total</span><span>1 057€</span></div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </main>
@endsection
