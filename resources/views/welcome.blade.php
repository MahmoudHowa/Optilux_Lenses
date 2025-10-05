<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        /* Force dark mode permanently */
        html {
            color-scheme: dark;
        }
        body {
            background-color: #1a202c !important;
        }
        .bg-white {
            background-color: #2d3748 !important;
        }
        .bg-gray-100 {
            background-color: #1a202c !important;
        }
        .text-gray-900 {
            color: #fff !important;
        }
        .text-gray-600 {
            color: #cbd5e0 !important;
        }
        .text-gray-700 {
            color: #6b7280 !important;
        }
        .text-gray-500 {
            color: #6b7280 !important;
        }
        .border-gray-200 {
            border-color: #4a5568 !important;
        }
    </style>
</head>
<body class="antialiased dark:bg-gray-900">
    @include('Header')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            {{--  <div class="flex justify-center items-center">
                <img src="{{ asset('resources/photo/OptiluxLogo.png') }}" alt="Optilux Logo"/ width="40%" height="40%" style="margin-top: 20px">
            </div>  --}}
            <div class="flex justify-center items-center" style="margin-top: 0px;">
                <img src="{{ asset('resources/photo/OptiluxLogo01.png') }}" alt="Optilux Logo" width="55%" height="55%">
            </div>
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="margin-top: 1rem;">
                <h1 style="color: #9E5727; font-size: 25px; font-weight: bold;" class="text-center"> <marquee behavior="scroll" direction="right" loop="infinite">أهـــــلاً وســـــهـــــلاً بــــكـــم فــــي شـــــركــــة أوبـــتـــيـــفـــا للــــبــــصــــريـــات ذات الـــمـــســـؤولـــيـــة الـــمــــحـــدودة</marquee> </h1>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="margin-top: 0.5rem;">
                <div class="grid grid-cols-1 md:grid-cols-2" >
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0">
                        <div class="flex items-center" style="direction: rtl">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><image href="resources/photo/lens.svg" width="24" height="24"/></svg>
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="ml-4 text-lg leading-7 font-semibold"><h3>عـــد ســـات &nbsp; طـــبــيــة</h3></div>
                        </div>

                        <div class="ml-14">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="direction: rtl; margin-right: 11%; margin-top: 25px">
                                {{--  Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.  --}}
                            </div>
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center items-start gap-4 flex-wrap">
                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_56_CM_HMC_70_65mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.56_CM_HMC_70_65mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-top: 3px; margin-left: 25px; width: 80px;">بلاستيك</div>
                                    <div style="font-size: 1.1rem; margin-top: -8px; margin-left: 20px; width: 80px;">فوتوغري</div>
                                    <div style="font-size: 1.1rem; margin-top: -7px; margin-left: 30px; width: 80px;">أنترفليه</div>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_56_BCC_70_65mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.56_BCC_HMC_70_65mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-left: 45px; margin-top: 0px; width: 100px;">بلاستيك</div>
                                    <div style="font-size: 1.1rem; margin-left: 25px; margin-top: -8px; width: 100px;">بلوكات كلير</div>
                                    <div style="font-size: 1.1rem; margin-left: 50px; margin-top: -7px; width: 100px;">أنترفليه</div>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_56_HMC_70_65mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.56_HMC_70_65mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-top: 0px; margin-left: 25px; width: 80px;">بلاستيك</div>
                                    <div style="font-size: 1.1rem; margin-top: -8px; margin-left: 30px; width: 80px;">أنترفليه</div>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_56_UC_70_65mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.56_UC_70_65mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-left: 60px; margin-top: 0px; width: 110px;">بلاستيك</div>
                                    <div style="font-size: 1.1rem; margin-left: 75px; margin-top: -8px; width: 110px;">أبيض</div>
                                </div>

                            </div>
                            {{--  <div class="text-gray-600 dark:text-gray-400 text-sm" style="display: inline-block; text-align: center; margin-left: 10%; padding: 0px; border: 0px">
                                <pre style="padding: 0px;"><a href="http://www.google.com" style="display:inline-block; width:40%; text-align:center;  padding:0px; border-radius:15%;"><h2 style="padding: 0px;">بلاستيك أبيض</h2></a>   <a href="http://www.google.com" style="display:inline-block; width:30%; text-align:center; padding: 0px; border-radius:15%;"><h2 style="padding: 0px;">إنتر فلي</h2></a>  <a href="http://www.google.com" style="display:inline-block; width:40%; text-align:center; padding: 0px; border-radius:15%;"><h2 style="padding: 0px;">بلوكات كلير</h2></a></pre>
                            </div>  --}}
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center items-start gap-4 flex-wrap">
                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_56_UC_55mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.56_UC_55mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-top: 0px;">بلاستيك</div>
                                    <div style="font-size: 1.1rem; margin-top: -8px;">أبيض</div>
                                    <div style="font-size: 1.0rem; margin-top: -5px;">قطر 55</div>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_56_HMC_55mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.56_HMC_55mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-top: 0px;">بلاستيك</div>
                                    <div style="font-size: 1.1rem; margin-top: -8px;">أنترفليه</div>
                                    <div style="font-size: 1.0rem; margin-top: -5px;">قطر 55</div>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_56_BC_HMC_60mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.56_BC_HMC_60mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-top: 0px;">بلوكات</div>
                                    <div style="font-size: 1.1rem; margin-top: -8px;">أنترفليه</div>
                                    <div style="font-size: 1.0rem; margin-top: -5px;">قطر 60</div>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_59_PC_HMC_70_65mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.56_PC_HMC_70_65mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-top: 0px;">بولي</div>
                                    <div style="font-size: 1.1rem; margin-top: -7px;">كربونات</div>
                                    <div style="font-size: 1.1rem; margin-top: -8px;">أنترفليه</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center" style="direction: rtl">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><image href="resources/photo/lens.svg" width="24" height="24"/></svg>
                            &nbsp;&nbsp;&nbsp;&nbsp;<div class="ml-4 text-lg leading-7 font-semibold"><h3>عـــد ســـات &nbsp; طــبــيــة &nbsp مضغوطة</h3></div>
                        </div>

                        <div class="ml-14">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="direction: rtl; margin-right: 11%">
                                {{--  Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.  --}}
                            </div>
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center items-start gap-4 flex-wrap" style="margin-top: 85px">

                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_67_HMC_70_75mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.67_HMC_70_75mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-top: 0px; margin-left: 30px; width: 80px;">أنترفليه</div>
                                    <div style="font-size: 1.0rem; margin-top: 0px; margin-left: 15px; width: 80px;">ضغط عالي</div>
                                    <div style="font-size: 1.0rem; margin-top: 0px; margin-left: 25px; width: 80px;">1.67قطر</div>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_67_BCC_HMC_70_65mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.67_BC_HMC_70_65mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-top: 0px; margin-left: 10px; width: 100px;">بلوكات-أنترفليه</div>
                                    <div style="font-size: 1.0rem; margin-top: 0px; margin-left: 20px; width: 80px;">ضغط عالي</div>
                                    <div style="font-size: 1.0rem; margin-top: 0px; margin-left: 30px; width: 80px;">1.67قطر</div>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div style="display:flex; flex-direction:column; align-items:center; width: 18%;">
                                    <a href="{{ route('Lenses.Store_1_74_HMC_70_75mm_Degree') }}"><img src="{{ asset('resources/photo/LensesType/1.74_HMC_70_65mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                    <div style="font-size: 1.1rem; margin-top: 0px; margin-left: 5px;">أنترفليه</div>
                                    <div style="font-size: 1.0rem; margin-top: 0px; margin-left: 20px; width: 80px;">ضغط عالي</div>
                                    <div style="font-size: 1.0rem; margin-top: 0px; margin-left: 30px; width: 80px;">1.74قطر</div>
                                </div>
                            </div>
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center items-start gap-4 flex-wrap">

                            </div>
                        </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center" style="direction: rtl">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><image href="resources/photo/lens.svg" width="24" height="24"></svg>
                                &nbsp;&nbsp;&nbsp;&nbsp;<div class="ml-4 text-lg leading-7 font-semibold"><h3>عـــد ســـات  &nbsp; شـــمـــســـيــة</h3></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="direction: rtl; margin-right: 11%; margin-top: 25px;">
                                    {{--  Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>,  --}}
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center; align-items:center; gap-4 flex-wrap">
                                    <div style="display:flex; flex-direction:column; align-items:center; width: 80%;">
                                        <a href="{{ route('Lenses.Store_CR39_sunlens_75mm_base6_HMC') }}"><img src="{{ asset('resources/photo/Degrees/Sunlens_Polarized/CR39_sunlens_75mm_base6_HMC/CR39_sunlens_75mm_base6_HMC.png') }}" alt="Optilux Logo" style="border-radius: 40%; width: 100%; height: auto;"></a>
                                        <div style="font-size: 1.1rem; margin-top: 0px;">عدسات شمسية, باز6</div>
                                        <div style="font-size: 1.1rem; margin-top: 0px;">مع أنترفليه داخلي</div>
                                        <div style="font-size: 1.1rem; margin-top: -5px; color: #4A5568">-----------------------------</div>
                                    </div>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center; align-items:center; gap-4 flex-wrap">
                                    <div style="display:flex; flex-direction:column; align-items:center; width: 80%;">
                                        <a href="{{ route('Lenses.Store_CR39_sunlens_75mm_base2_HMC') }}"><img src="{{ asset('resources/photo/Degrees/Sunlens_Polarized/CR39_sunlens_75mm_base2_HMC/CR39_sunlens_75mm_base2_HMC.png') }}" alt="Optilux Logo" style="border-radius: 40%; width: 100%; height: auto;"></a>
                                        <div style="font-size: 1.1rem; margin-top: 0px;">عدسات شمسية, باز2</div>
                                        <div style="font-size: 1.1rem; margin-top: 0px;">مع أنترفليه داخلي</div>
                                        <div style="font-size: 1.1rem; margin-top: -5px; color: #4A5568">-----------------------------</div>
                                    </div>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center; align-items:center; gap-4 flex-wrap">
                                    <div style="display:flex; flex-direction:column; align-items:center; width: 80%;">
                                        <a href="{{ route('Lenses.CR39_polarized_80mm_base6_HMC') }}"><img src="{{ asset('resources/photo/Degrees/Sunlens_Polarized/CR39_polarized_80mm_base6_HMC/CR39_polarized_80mm_base6_HMC.png') }}" alt="Optilux Logo" style="border-radius: 40%; width: 100%; height: auto;"></a>
                                        <div style="font-size: 1.1rem; margin-top: 0px;">عدسات شمسية, باز6, بولارايز</div>
                                        <div style="font-size: 1.1rem; margin-top: 0px;">مع أنترفليه داخلي</div>
                                        <div style="font-size: 1.1rem; margin-top: -5px; color: #4A5568">-----------------------------</div>
                                    </div>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center; align-items:center; gap-4 flex-wrap">
                                    <div style="display:flex; flex-direction:column; align-items:center; width: 80%;">
                                        <a href="{{ route('Lenses.1_523_mineral_sunlens_70mm_base6_HMC') }}"><img src="{{ asset('resources/photo/Degrees/Sunlens_Polarized/1_523_mineral_sunlens_70mm_base6_HMC/1_523_mineral_sunlens_70mm_base6_HMC.png') }}" alt="Optilux Logo" style="border-radius: 40%; width: 100%; height: auto;"></a>
                                        <div style="font-size: 1.1rem; margin-top: 0px;">عدسات شمسية, زجاجية, باز6</div>
                                        <div style="font-size: 1.1rem; margin-top: 0px;">قطر 70, مع أنترفليه داخلي</div>
                                        <div style="font-size: 1.1rem; margin-top: -5px; color: #4A5568">-----------------------------</div>
                                    </div>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center; align-items:center; gap-4 flex-wrap">
                                    <div style="display:flex; flex-direction:column; align-items:center; width: 80%;">
                                        <a href="{{ route('Lenses.1_523_mineral_polarized_70mm_base6_HMC') }}"><img src="{{ asset('resources/photo/Degrees/Sunlens_Polarized/1_523_mineral_polarized_70mm_base6_HMC/1_523_mineral_polarized_70mm_base6_HMC.png') }}" alt="Optilux Logo" style="border-radius: 40%; width: 100%; height: auto;"></a>
                                        <div style="font-size: 1.1rem; margin-top: 0px;">عدسات شمسية, زجاجية, بولارايز, باز6</div>
                                        <div style="font-size: 1.1rem; margin-top: 0px;">قطر70, مع أنترفليه داخلي</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center" style="direction: rtl">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><image href="resources/photo/lens.svg" width="24" height="24"></svg>
                                &nbsp;&nbsp;&nbsp;&nbsp;<div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"><h3>عــد ســات مـتــدرجــة & مــزدوجــة</h3></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm" style="direction: rtl; margin-right: 11%">
                                    {{--  Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>,  --}}
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center; align-items:center; gap-4 flex-wrap" style="margin-top: 30px;">
                                    <div style="display:flex; flex-direction:column; align-items:center; width: 80%;">
                                        <a href="{{ route('Lenses.Store_Progressive') }}"><img src="{{ asset('resources/photo/LensesType/متدرجة_13+3.png') }}" alt="Optilux Logo" style="border-radius: 10%; width: 100%; height: auto;"></a>
                                        <div style="font-size: 1.0rem; margin-top: 0px;">أنتر فليه&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;بلو كات</div>
                                        <div style="font-size: 1.3rem; margin-top: 0px;">متدرجة 3+13</div>
                                        <div style="font-size: 1.1rem; margin-top: 30px; color: #4A5568">-----------------------------</div>
                                    </div>

                                    {{--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div style="display:flex; flex-direction:column; align-items:center; width: 20%;">
                                        <a href="http://www.google.com"><img src="{{ asset('resources/photo/LensesType/1.56_BCC_HMC_70_65mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                        <div style="font-size: 1.3rem; margin-top: 0px;">بلوكات كلير</div>
                                    </div>  --}}
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm flex justify-center; align-items:center; gap-4 flex-wrap" style="margin-top: 40px;">
                                    <div style="display:flex; flex-direction:column; align-items:center; width: 80%;">
                                        <a href="{{ route('Lenses.Store_Flat_Top') }}"><img src="{{ asset('resources/photo/LensesType/مزدوجة.png') }}" alt="Optilux Logo" style="border-radius: 10%; width: 100%; height: auto;"></a>
                                        <div style="font-size: 1.0rem; margin-top: 0px;">أنتر فليه&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;بلو كات</div>
                                        <div style="font-size: 1.3rem; margin-top: 0px;">مـــزدوجــــة</div>
                                    </div>
                                    {{--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div style="display:flex; flex-direction:column; align-items:center; width: 20%;">
                                        <a href="http://www.google.com"><img src="{{ asset('resources/photo/LensesType/1.56_BCC_HMC_70_65mm.png') }}" alt="Optilux Logo" style="border-radius: 50%; width: 100%; height: auto;"></a>
                                        <div style="font-size: 1.3rem; margin-top: 0px;">بلوكات كلير</div>
                                    </div>  --}}
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="margin-top: 10px; padding: 10px; text-align: center;">
                <a href="{{ route('Accessories.Store_Cut_Lenses') }}">
                    <h1 style="color: #9E5727; font-size: 24px; font-weight: bold; display:inline;" class="text-center">
                        قــص عــدســات
                    </h1>
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #4F5A6E;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('Accessories.Store_Acc_p_1') }}">
                    <h1 style="color: #9E5727; font-size: 24px; font-weight: bold; display:inline;" class="text-center">
                        إكـسـسـوارات&nbsp;&nbsp;&nbsp;
                    </h1>
                </a>
            </div>
            @include('.Footer')

        </div>
    </div>
</body>
</html>
