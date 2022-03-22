<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $setting->website_name ?? 'HushCupid' }} | {{ $setting->sub_title ?? 'THE PLACE TO MEET LOVELY PEOPLE!' }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <style>
            /**
            * The CSS shown here will not be introduced in the Quickstart guide, but shows
            * how you can use CSS to style your Element's container.
            */
            .StripeElement {
            box-sizing: border-box;
            height: 40px;
            min-width: 280px !important;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
            }
            .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
            }
            .StripeElement--invalid {
            border-color: #fa755a;
            }
            .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;}
        </style>

        <!-- Scripts -->
        <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script> -->
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header ?? ""}}--}}
{{--                </div>--}}
{{--            </header>--}}

            <!-- Page Content -->
            <main @if(!empty($design->body_bg)) style="background-image: url('{{ asset('storage/images/'.$design->body_bg) }}')" > @else style="background-image: url('https://images.pexels.com/photos/2632670/pexels-photo-2632670.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'); background-size: cover; background-repeat: no-repeat; background-position: right bottom !important;">@endif
                {{ $slot }}
            </main>
        </div>
        <script>
            $(function() {
                $('#hideseek').hide();
                $('#design').change(function(){
                    if($('#design').val() !== '') {
                        $('#hideseek').show();
                        var conceptName = $('#design :selected').text();
                        // console.log(conceptName);
                        $('#bgbody').text(conceptName);
                        $('#bgform').text(conceptName);
                    } else {
                        $('#hideseek').hide();
                    } 
                });
            });
        </script>
        @stack('scripts')
    </body>
</html>
