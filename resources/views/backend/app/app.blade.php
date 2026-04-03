<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'eshop') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/select2/css/select2.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/dropzone/min/dropzone.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/assets/fontawesome/css/all.min.css') }}" />
    </head>
    <body class="font-poppins h-screen overflow-hidden">
        <div class="h-screen flex overflow-hidden">
            <aside class="hidden lg:block w-[230px] h-screen sticky top-0 shrink-0">
                @include('backend.app.sideBar')
            </aside>

            <div class="flex-1 min-h-0 flex flex-col overflow-hidden">
                <header class="sticky top-0 z-20">
                    @include('backend.app.topBar')
                </header>

                <main class="flex-1 min-h-0 overflow-y-auto">
                    @yield('backendContent')
                </main>

                <footer class="sticky bottom-0 z-10">
                    @include('backend.app.footer')
                </footer>
            </div>
        </div>

        <!-- jquery js -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>

        <!-- dropzone js -->
        <script src="{{ asset('backend/assets/dropzone/min/dropzone.min.js') }}"></script>

        <!-- Select2 -->
        <script src="{{ asset('backend/assets/select2/js/select2.min.js') }}"></script>

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

        @yield('backendJs')
    </body>
</html>
