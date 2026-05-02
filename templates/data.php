<h2 class="text-3xl font-bold mb-2">The Data</h2>

<div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-8 fade-in">

    <!-- LEFT: visual data card -->
    <div class="space-y-6">

        <!-- Progress card -->
        <div class="relative bg-white rounded-xl shadow-sm p-6 border border-gray-100">

            <p class="text-sm text-gray-500 mb-3">AI Impact Estimate</p>

            <!-- Progress bar -->
            <div class="w-full bg-gray-200 rounded-full h-5 overflow-hidden cursor-pointer mb-2">
                <div class="bg-blue-500 h-5 text-white text-xs flex items-center justify-center font-medium"
                    style="width: 25%">
                    25%
                </div>
            </div>

            <!-- Tooltip -->
            <div class="absolute left-1/2 -top-10 -translate-x-1/2
                        bg-gray-800 text-white text-xs px-3 py-1 rounded
                        opacity-0 group-hover:opacity-100
                        transition-opacity duration-300
                        pointer-events-none whitespace-nowrap z-10">

                AI could automate ~25% of work tasks

            </div>

            <p class="text-xs text-gray-500">
                ~25% of work tasks could be automated
            </p>

        </div>

        <!-- Image card -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">

            <img src="./images/graph.png" alt="Goldman Sachs Graph" class="w-full object-cover">

            <div class="p-4">
                <p class="text-sm text-gray-600">
                    Goldman Sachs projection on AI-driven task automation
                </p>
            </div>

        </div>

        <!-- Source -->
        <p class="text-xs text-gray-400">
            Source: Goldman Sachs Research
        </p>

    </div>

    <!-- RIGHT: explanation -->
    <div class="flex flex-col justify-center space-y-4">

        <h3 class="text-xl font-semibold text-gray-800">
            What this means
        </h3>

        <p class="text-gray-600 leading-relaxed">
            Artificial intelligence is expected to automate a significant portion of routine and repetitive work tasks.
            This does not necessarily mean job loss, but rather a shift in how work is performed across industries.
        </p>

        <p class="text-gray-600 leading-relaxed">
            Roles involving data processing, administration, and structured decision-making are most likely to be affected,
            while creative and human-centered work remains more resilient.
        </p>

    </div>

</div>