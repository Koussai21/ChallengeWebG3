<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Alpine.js CDN -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- TailwindCSS CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css">
  <title>Formation alpine.js | Use API</title>
</head>

<div class="bg-blue-500" x-data="{showMenu : false}">
        <button @click.prevent="showMenu = !showMenu " class="px-2 py-4 flex justify-between bg-blue-500 text-white">
            <svg x-show="!showMenu" class="w-6 h-6 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg x-show="showMenu" class="w-6 h-6 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M6 18L18 6M6 6l12 12"></path></svg>
            Menu
        </button>
        <div x-show="showMenu">
            <button @click.prevent="showMenu = !showMenu " class="px-2 py-4 font-bold flex justify-between text-blue-900 w-full border-b border-blue-900 bg-white">
                Menu
                <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <nav class="flex flex-col">
                <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                    Home
                    <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                </a>
                <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                    Connexion
                    <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                </a>
                <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                    Inscription
                    <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                </a>
                <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                    Articles
                    <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                </a>
                <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                    Favoris
                    <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                </a>
                <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                    Forum
                    <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                </a>
                <a href="#" class="px-2 py-4 text-blue-600 bg-white flex justify-between w-full border-b border-blue-900 hover:text-blue-100 hover:bg-blue-600">
                    About us
                    <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 5l7 7-7 7"></path></svg>    
                </a>
            </nav>
        </div>
    </div><!-- .bg-blue-500 -->

<body>

</body>
