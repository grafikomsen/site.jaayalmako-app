<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'eshop') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/assets/select2/css/select2.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/assets/dropzone/min/dropzone.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('vendor/assets/fontawesome/css/all.min.css') }}" />
    </head>
    <body class="bg-gray-100 font-sans antialiased">

        <!-- ==================== DASHBOARD LAYOUT ==================== -->
        <div class="flex h-screen overflow-hidden">

            <!-- ==================== SIDEBAR (Navigation principale) ==================== -->
            @include('vendor.app.sideBar')

            <!-- ==================== MAIN CONTENT ==================== -->
            <main class="flex-1 overflow-y-auto">
            <!-- Top Header Dashboard -->
            @include('vendor.app.topBar')

            @yield('vendorContent')
            </main>
        </div>

        <!-- jquery js -->
        <script src="{{ asset('vendor/assets/libs/jquery/jquery.min.js') }}"></script>

        <!-- dropzone js -->
        <script src="{{ asset('vendor/assets/dropzone/min/dropzone.min.js') }}"></script>

        <!-- Select2 -->
        <script src="{{ asset('vendor/assets/select2/js/select2.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function(){
                $(".summernote").summernote({
                    height: 200
                });
            });
        </script>

        <script>
            // Graphique des ventes avec Chart.js
            const ctx = document.getElementById('salesChart').getContext('2d');
            new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
                datasets: [{
                label: 'Ventes (€)',
                data: [3200, 4100, 3780, 5200, 6800, 5900, 4300],
                borderColor: '#2563EB',
                backgroundColor: 'rgba(37, 99, 235, 0.05)',
                tension: 0.3,
                fill: true,
                pointBackgroundColor: '#2563EB',
                pointBorderColor: '#fff',
                pointRadius: 4,
                pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                legend: { display: false },
                tooltip: { callbacks: { label: (ctx) => `${ctx.raw} €` } }
                },
                scales: {
                y: { ticks: { callback: (val) => val + '€' }, grid: { color: '#f0f0f0' } }
                }
            }
            });
        </script>
        @yield('vendorJs')
    </body>
</html>
