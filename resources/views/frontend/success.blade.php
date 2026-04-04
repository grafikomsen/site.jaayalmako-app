@extends('frontend.app.app')
@section('main')

     <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- ==================== PAGE CONFIRMATION (COMMANDE REÇUE) ==================== -->
        <section id="confirmation" class="mb-16">
        <div class="bg-white rounded-2xl shadow-lg p-8 text-center max-w-2xl mx-auto border border-green-100">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <h2 class="text-3xl font-bold text-gray-800">Merci pour votre commande !</h2>
            <p class="text-gray-600 mt-2">Votre commande n° <strong class="text-blue-600">#MM-2025-0421</strong> a bien été reçue.</p>
            <div class="bg-gray-50 p-4 rounded-xl my-6 text-left">
            <p class="font-semibold">Résumé de la commande :</p>
            <div class="flex justify-between text-sm mt-2"><span>PC Portable Gamer</span><span>899€</span></div>
            <div class="flex justify-between text-sm"><span>Casque Audio Sans Fil (x2)</span><span>158€</span></div>
            <div class="flex justify-between font-bold border-t mt-2 pt-2"><span>Total payé</span><span>1 057€</span></div>
            <p class="text-xs text-gray-500 mt-2">Livraison estimée : 2-3 jours ouvrables</p>
            </div>
            <div class="flex gap-4 justify-center">
            <a href="#" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">Continuer mes achats</a>
            <a href="#" class="border border-gray-300 text-gray-700 px-6 py-2 rounded-full hover:bg-gray-50 transition">Voir mes commandes</a>
            </div>
            <p class="text-sm text-gray-400 mt-6">Un email de confirmation vous a été envoyé à votre adresse.</p>
        </div>
        </section>
    </main>

@endsection
