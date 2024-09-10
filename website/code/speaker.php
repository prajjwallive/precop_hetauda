<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speakers | Pre-COP Event</title>
    <?php include "imports.php" ?>
    <style>
        /* Custom animations */
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
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Circular image styling */
        .circular-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .description {
            font-size: 0.875rem;
            color: #4A5568;
        }
    </style>
</head>

<body class="bg-gray-100">
    <?php include "header.php" ?>
    <section id="speakers" class="py-8 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Meet Our Distinguished Speakers</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <!-- Speaker Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover-card fade-in-up transition-transform duration-300">
                    <img src="./Assets/Speakers/ganesh.jpg" alt="Speaker 1" class="circular-image mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Er. Ganesh Shah</h3>
                    <p class="description">Former Minister, Ministry of Education Science & Technology, Government of
                        Nepal</p>
                </div>

                <!-- Speaker Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover-card fade-in-up transition-transform duration-300">
                    <img src="./Assets/Speakers/ananda.jpg" alt="Speaker 2" class="circular-image mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Ananda Raj Tripathi</h3>
                    <p class="description">Mayor, Bhanu Municipality</p>
                </div>

                <!-- Speaker Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover-card fade-in-up transition-transform duration-300">
                    <img src="./Assets/Speakers/nischal.jpg" alt="Speaker 3" class="circular-image mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Nischal Baniya</h3>
                    <p class="description">Nuclear Scientist, European Center for Nuclear Research</p>
                </div>

                <!-- Speaker Card 4 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover-card fade-in-up transition-transform duration-300">
                    <img src="./Assets/Speakers/prahlad.jpg" alt="Speaker 4" class="circular-image mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Prahlad Sapkota</h3>
                    <p class="description">Mayor, Ratnanagar Municipality</p>
                </div>

                <!-- Speaker Card 5 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover-card fade-in-up transition-transform duration-300">
                    <img src="./Assets/Speakers/prakash.jpg" alt="Speaker 5" class="circular-image mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Prakash Bhandari</h3>
                    <p class="description">Mayor,Sharada Municipality</p>
                </div>

                <!-- Speaker Card 6 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover-card fade-in-up transition-transform duration-300">
                    <img src="./Assets/Speakers/prakash.jpg" alt="Speaker 6" class="circular-image mx-auto">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Dr. Laura Kim</h3>
                    <p class="description">Researcher in Climate Change Impact, specializing in ecosystem resilience.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
</body>

</html>