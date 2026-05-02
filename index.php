<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Digital Revolution</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./styles/main.css">
</head>

<body class="bg-[#F8FAFC] text-gray-800">

<header class="sticky top-0 bg-white border-b border-b-gray-300 h-20 shadow-sm z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between h-full px-4">

        <!-- SPA-safe logo (no page reload) -->
        <h1 class="text-2xl font-bold">
            <a href="#overview" id="logo">The Digital Revolution</a>
        </h1>

        <nav class="text-gray-600 space-x-6">
            <a href="#overview" data-section="overview">Overview</a>
            <a href="#data" data-section="data">The Data</a>
        </nav>

    </div>
</header>

<main class="container mx-auto px-4">

    <section id="overview" class="min-h-screen py-24">
        <h2 class="text-3xl font-bold mb-4">Overview</h2>
        <p class="text-lg text-gray-600">
            Welcome to our exploration of AI and its impact on the workforce.
        </p>
    </section>

    <section id="data" class="min-h-screen py-24">
        <?php include 'templates/data.php'; ?>
    </section>

</main>

<script src="./scripts/index.js"></script>
</body>
</html>