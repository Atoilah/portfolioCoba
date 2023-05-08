<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/script.js')
  <title>AtoilahPutra | Portfolio</title>
</head>
<body>
    {{-- Navbar Start --}}
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative ">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">Atoilah</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-500"></span>
                        <span class="hamburger-line transition duration-500"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-500"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5  bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-gelap py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-gelap py-2 mx-8 flex group-hover:text-primary">Tentang saya</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio" class="text-base text-gelap py-2 mx-8 flex group-hover:text-primary">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-gelap py-2 mx-8 flex group-hover:text-primary">Kontak</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- Navbar End --}}

    {{-- Hero section Start --}}
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl ">
                        hai saya <span class="block font-bold text-gelap text-4xl mt-1 lg:text-5xl">
                            {{ $port->Nama }}
                        </span>
                    </h1>
                    <h2 class="font-medium text-semi text-lg mb-5 lg:text-2xl">
                        {{ $port->Title }}<span class="text-gelap">
                            {{ $port->TitleSpan }}
                        </span>
                    </h2>
                    <p class="font-medium text-slate-500 mb-10 leading-relaxed">
                        {{ $port->NamaDes }}
                    </p>
                    <a href="#contact" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">
                        hubungi saya
                    </a>
                </div>

                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="{{ $port->Foto }}" alt="" class="max-w-full mx-auto">
                        <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="350" height="350" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#810CA8" d="M47.7,-37C62.9,-19,77,0.9,75.1,20.4C73.2,39.9,55.4,58.9,35.1,66.2C14.8,73.4,-8.1,68.7,-26.3,58.5C-44.5,48.2,-58,32.3,-60.5,15.5C-62.9,-1.2,-54.2,-18.8,-42.3,-36C-30.4,-53.3,-15.2,-70.3,0.5,-70.7C16.3,-71.1,32.5,-55,47.7,-37Z" transform="translate(100 100) scale(1.1)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Hero section End --}}

    {{-- Abour Section Start --}}
    <section id="about" class="pt-36 pb-32">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg mb-3">
                        Tentang saya
                    </h4>
                    <h2 class="font-bold text-gelap text-3xl lg:text-4xl mb-5 max-w-md ">
                        {{ $port->AboutJudul }}
                    </h2>
                    <p class="font-medium text-base lg:text-lg text-slate-500 max-w-xl">
                        {{ $port->AboutDes }}
                    </p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-gelap text-2xl mb-4 lg:text-3xl lg:pt-10">
                        {{ $port->AboutSosial }}
                    </h3>
                    <h2 class="font-medium text-base text-slate-500 mb-6 lg:text-lg">
                        {{ $port->AboutSDes }}
                    </h2>
                    <div class="flex items-center">
                        {{-- Instahram --}}
                        <a href="{{ $port->Ig }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi  text-semi hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>

                        {{-- WhatsApp --}}
                        <a href="https://{{ $port->Wa }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi  text-semi hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>

                        {{-- GittHub --}}
                        <a href="{{ $port->Github }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi  text-semi hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>

                        {{-- Telegram --}}
                        <a href="https://t.me/{{ $port->Tele }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi  text-semi hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Telegram</title><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                        </a>

                        {{-- Facebook --}}
                        <a href="{{ $port->Fb }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi  text-semi hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Abour Section End --}}

    {{-- Portfolio Section Start --}}
    <section id="portfolio" class="pt-36 pb-6 bg-slate-200">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
                    <h2 class="font-bold text-gelap text-3xl mb-4 sm:text-4xl lg:text-5xl">
                        Project Saya
                    </h2>
                    <p class="font-medium text-md text-slate-500 md:text-lg">
                        {{ $port->ProjectDes }}
                    </p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center">

                {{-- <div class="mb-12 p-4 md:w-1/2 lg:w-1/3 xl:w-1/4 xl:mx-auto">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="../img/tester.png" class="w-full" alt="">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 md:text-lg">Hi</h3>
                    <p class="font-medium text-base text-slate-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad libero eos optio!</p>
                </div> --}}
                @foreach ($proj as $p )
                <div class="mb-12 p-4 md:w-1/2 lg:w-1/3 xl:w-1/4 xl:mx-auto">
                    <div class="bg-white rounded-md shadow-md overflow-hidden">
                        <img src="{{ $p->Foto }}" class="w-full" alt="">
                        <div class="py-5 px-6">
                            <h3 class="font-semibold text-xl text-dark mt-5 mb-3 md:text-lg">{{ $p->Judul }}</h3>
                            <p class="font-medium text-base text-slate-500 mb-6">{{ $p->Desk }}</p>
                            <a href="{{ $p->Repository }}" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Repository</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    {{-- Portfolio Section End --}}

    {{-- Contact Section Start --}}
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2">Kontak</h4>
                    <h2 class="font-bold text-gelap text-3xl mb-2 sm:text-4xl lg:text-5xl">
                        Hubungi Saya
                    </h2>
                    <p class="font-medium text-md text-slate-500 md:text-lg">
                        Kirim pesan kepada saya
                    </p>
                </div>
            </div>

            <form class="w-full px-4 mb-8">
                <div class="w-full max-w-lg mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="nama" class="text-base font-bold text-primary">nama</label>
                        <input type="text" id="nama" name="nama" class="bg-slate-200 w-full text-gelap p-3 rounded-md focus:outline-none focus:outline-primary">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold text-primary">email</label>
                        <input type="text" id="email" name="Nama" class="bg-slate-200 w-full text-gelap p-3 rounded-md focus:outline-none focus:outline-primary">
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="pesan" class="text-base font-bold text-primary">pesan</label>
                        <textarea type="text" id="pesan" name="pesan" class="bg-slate-200 w-full text-gelap p-3 rounded-md focus:outline-none h-32 focus:outline-primary"></textarea>
                    </div>
                    <div class="w-full px-4">
                        <button class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:bg-semi hover:shadow-lg transition duration-500">
                            Kirim Pesan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    {{-- Contact Section End --}}

    {{-- Footer Section Start --}}
    <footer class="bg-gelap pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/2">
                    <h2 class="font-bold text-4xl text-white mb-5">{{ $port->Company }}</h2>
                    <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                    <p>tuttifruitti.team@gmail.com</p>
                    <p>-</p>
                    <p>Pasuruan</p>
                </div>
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/2">
                    <h3 class="font-semibold text-xl mb-5 text-white">Tautan</h3>
                    <ul class="text-slate 300">
                        <li>
                            <a href="#home" class="text-base inline-block group-hover:text-primary">Beranda</a>
                        </li>
                        <li>
                            <a href="#about" class="text-base inline-block group-hover:text-primary">About</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="text-base inline-block group-hover:text-primary">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="text-base inline-block group-hover:text-primary">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-400">
                <div class="flex items-center justify-center mb-5">
                        {{-- Instahram --}}
                        <a href="{{ $port->Ig }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi  text-semi hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>

                        {{-- WhatsApp --}}
                        <a href="https://{{ $port->Wa }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi  text-semi hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>

                        {{-- GittHub --}}
                        <a href="{{ $port->Github }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi  text-semi hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>

                        {{-- Telegram --}}
                        <a href="https://t.me/{{ $port->Tele }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi  text-semi hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Telegram</title><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                        </a>

                        {{-- Facebook --}}
                        <a href="{{ $port->Fb }}" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-semi  text-semi hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" width="20" class="fill-current"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                </div>
                <p class="font-medium text-sm text-slate-500 text-center">Dibuat Oleh <a href="{{ $port->Ig }}" class="font-bold text-terang">AtoilahPutra</a>, With ❤ </p>
            </div>
        </div>
    </footer>
    {{-- Footer Section End --}}

    {{-- Back Start --}}
    <a href="#home" id="backtop" class="fixed hidden bottom-4 right-4 z-[999] h-14 w-14 items-center justify-center rounded-full bg-semi p-4" >
        <span class="block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
    </a>
    {{-- Back End --}}

</body>
</html>
