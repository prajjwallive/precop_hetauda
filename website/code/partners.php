<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsors | Pre-COP Event</title>
    <?php include "imports.php" ?>
    <style>
        /* Custom animation for sponsor cards */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-100">
    <?php include "header.php" ?>
    <section id="sponsors" class="py-12 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Our Partners</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Sponsor Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover-card fade-in-up transition-transform duration-300">
                    <img src="path/to/sponsor1-logo.png" alt="Sponsor 1"
                        class="w-full h-32 object-contain mb-4 mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Sponsor 1</h3>
                    <p class="text-gray-600 mb-4">Brief description of Sponsor 1 and their contribution to the event.
                    </p>
                    <a href="[Sponsor 1 Website]" class="text-blue-500 hover:underline">Learn More</a>
                </div>

                <!-- Sponsor Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover-card fade-in-up transition-transform duration-300">
                    <img src="path/to/sponsor2-logo.png" alt="Sponsor 2"
                        class="w-full h-32 object-contain mb-4 mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Sponsor 2</h3>
                    <p class="text-gray-600 mb-4">Brief description of Sponsor 2 and their support for the event.</p>
                    <a href="[Sponsor 2 Website]" class="text-blue-500 hover:underline">Learn More</a>
                </div>

                <!-- Sponsor Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover-card fade-in-up transition-transform duration-300">
                    <img src="path/to/sponsor3-logo.png" alt="Sponsor 3"
                        class="w-full h-32 object-contain mb-4 mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Sponsor 3</h3>
                    <p class="text-gray-600 mb-4">Brief description of Sponsor 3 and their impact on the event.</p>
                    <a href="[Sponsor 3 Website]" class="text-blue-500 hover:underline">Learn More</a>
                </div>

                <!-- Sponsor Card 4 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover-card fade-in-up transition-transform duration-300">
                    <img src="path/to/sponsor4-logo.png" alt="Sponsor 4"
                        class="w-full h-32 object-contain mb-4 mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Sponsor 4</h3>
                    <p class="text-gray-600 mb-4">Brief description of Sponsor 4 and their role in supporting the event.
                    </p>
                    <a href="[Sponsor 4 Website]" class="text-blue-500 hover:underline">Learn More</a>
                </div>

                <!-- Add more sponsor cards as needed -->
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
</body>

</html>