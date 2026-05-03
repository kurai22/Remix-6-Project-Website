<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Digital Revolution</title>
    <script src="//cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="./styles/main.css">
</head>

<body class="bg-[#FCFCFC] text-gray-800">

<header class="sticky top-0 bg-white border-b border-b-gray-300 h-20 shadow-sm z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between h-full px-4">

        <!-- SPA-safe logo (no page reload) -->
        <div class="flex items-center space-x-4">
            <div class="bg-indigo-600 p-2 rounded-xl shadow-indigo-200 shadow-lg">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            
            <div class="flex flex-col">
                <h1 class="text-2xl font-black tracking-tighter leading-none">
                    <a href="#overview" id="logo" class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-blue-500 hover:from-blue-500 hover:to-indigo-600 transition-all duration-300">
                        DIGITAL<span class="text-gray-900">REVOLUTION</span>
                    </a>
                </h1>
                <p class="text-[10px] sm:text-xs font-medium text-gray-500 uppercase tracking-[0.15em] mt-1">
                    Analyzing the intersection of AI, Labor, and Human Potential
                </p>
            </div>
        </div>

        <nav class="text-gray-600 space-x-6">
            <a href="#overview" data-section="overview">Overview</a>
            <a href="#data" data-section="data">The Data</a>
            <a href="#jobCreation" data-section="jobCreation">Job Creation</a>
        </nav>

    </div>
</header>

<main class="container mx-auto px-4">

    <section id="overview" class="min-h-screen py-24">
        <?php include 'templates/overview.php'; ?> 
    </section>

    <section id="data" class="min-h-screen py-24">
        <?php include 'templates/data.php'; ?>
    </section>

    <section id="jobCreation" class="min-h-screen py-24">
        <?php include 'templates/jobs.php'; ?>
    </section>

</main>

<!-- <script src="//cdn.jsdelivr.net/npm/@glidejs/glide"></script> -->
<script src="./scripts/main.js"></script>
</body>
</html>