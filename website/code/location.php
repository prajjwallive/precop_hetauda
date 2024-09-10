<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location | Pre-COP 29 Hetauda</title>
    <?php include "imports.php" ?>
    <style>
        /* Custom styling for the map container */
        .map-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Shadow effect */
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Navigation -->

    <?php include "header.php" ?>
    <section id="contact" class="bg-gray-100 py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-start">
                <!-- Left Side: Contact Information -->
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Get in Touch with Us</h2>
                    <p class="text-lg text-gray-700 mb-6">Have questions or need more information? Reach out to us via:
                    </p>

                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Event Inquiries:</h3>
                        <p class="text-lg text-gray-600 mb-2"><strong>Email:</strong> <a
                                href="mailto:precophetauda@gmail.com"
                                class="text-blue-500 hover:underline">precophetauda@gmail.com</a></p>
                        <p class="text-lg text-gray-600"><strong>Phone:</strong> +977-9868806000</p>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Event Location:</h3>
                        <p class="text-lg text-gray-600 mb-2">Venue: Hetauda City Hall, Bagmati Province, Nepal</p>
                        <!-- Embed Google Map -->
                        <div class="relative w-full h-64 mb-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14174.026860702893!2d85.0790303!3d27.4091556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995a05780d52e37%3A0x5e5ed6e7e9b2a462!2sHetauda%2C%20Nepal!5e0!3m2!1sen!2sus!4v1634706833471!5m2!1sen!2sus"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Follow Us on Social Media:</h3>
                        <div class="flex space-x-4">
                            <a href="[Facebook Link]" class="text-blue-600 hover:text-blue-800" target="_blank"
                                aria-label="Facebook">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22 12.1c0-5.5-4.5-10-10-10s-10 4.5-10 10c0 5.2 4.2 9.5 9.4 9.9v-7h-2.8v-2.9h2.8v-2.2c0-2.7 1.6-4.1 4-4.1 1.1 0 2.3.2 2.3.2v2.5h-1.3c-1.3 0-1.7.8-1.7 1.7v2.1h2.9l-.5 2.9h-2.4v7.9c5.3-.4 9.5-4.7 9.5-10.1z" />
                                </svg>
                            </a>
                            <a href="[Instagram Link]" class="text-pink-600 hover:text-pink-800" target="_blank"
                                aria-label="Instagram">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.2c3.4 0 3.8.01 5.1.07 1.3.06 2.6.34 3.6 1.43.98.98 1.37 2.27 1.43 3.6.06 1.3.07 1.7.07 5.1 0 3.4-.01 3.8-.07 5.1-.06 1.3-.34 2.6-1.43 3.6-.98.98-2.27 1.37-3.6 1.43-1.3.06-1.7.07-5.1.07s-3.8-.01-5.1-.07c-1.3-.06-2.6-.34-3.6-1.43-.98-.98-1.37-2.27-1.43-3.6-.06-1.3-.07-1.7-.07-5.1 0-3.4.01-3.8.07-5.1.06-1.3.34-2.6 1.43-3.6.98-.98 2.27-1.37 3.6-1.43 1.3-.06 1.7-.07 5.1-.07zM12 6.6c-3.03 0-5.5 2.47-5.5 5.5s2.47 5.5 5.5 5.5 5.5-2.47 5.5-5.5-2.47-5.5-5.5-5.5zm0 9.6c-2.3 0-4.1-1.87-4.1-4.1s1.87-4.1 4.1-4.1 4.1 1.87 4.1 4.1-1.87 4.1-4.1 4.1zM16.3 6.8c-.76 0-1.37.61-1.37 1.37s.61 1.37 1.37 1.37 1.37-.61 1.37-1.37-.61-1.37-1.37-1.37z" />
                                </svg>
                            </a>
                            <a href="[Twitter Link]" class="text-blue-400 hover:text-blue-600" target="_blank"
                                aria-label="Twitter">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22.46 6c-.77.35-1.6.59-2.48.69.89-.53 1.58-1.37 1.9-2.37-.83.49-1.75.84-2.73 1.03-.78-.83-1.89-1.34-3.12-1.34-2.36 0-4.27 1.92-4.27 4.28 0 .33.04.66.1.97-3.55-.18-6.71-1.88-8.81-4.48-.37.63-.58 1.36-.58 2.13 0 1.47.75 2.76 1.89 3.52-.7-.02-1.37-.21-1.96-.52v.01c0 2.05 1.45 3.77 3.37 4.16-.35.1-.72.16-1.11.16-.27 0-.53-.03-.78-.07.53 1.66 2.07 2.88 3.9 2.91-1.43 1.12-3.22 1.78-5.17 1.78-.34 0-.67-.02-1-.07 1.84 1.17 4.02 1.85 6.36 1.85 7.64 0 11.85-6.33 11.85-11.85 0-.18-.01-.35-.02-.53.81-.58 1.51-1.3 2.07-2.12z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Registration Reminder Cards -->
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Register for the Event</h2>
                    <p class="text-lg text-gray-700 mb-6">Don't miss out on this important event. Register now to secure
                        your spot and be part of the conversation!</p>

                    <!-- Registration Cards -->
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Did you Register for event?</h3>
                            <p class="text-gray-600 mb-4">Register by September 30th to take advantage of our early bird
                                discount. Secure your spot and enjoy reduced rates!</p>
                            <a href="[Early Bird Registration Link]"
                                class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition">Register
                                Now</a>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Interesting Facts from Past COP Events
                            </h3>
                            <ul class="list-disc list-inside text-gray-600 mb-4 space-y-2">
                                <li><strong>COP3 (Kyoto, 1997):</strong> The Kyoto Protocol was adopted, establishing
                                    legally binding emissions reduction targets for developed countries.</li>
                                <li><strong>COP15 (Copenhagen, 2009):</strong> The Copenhagen Accord was noted, though
                                    not legally binding, it marked a significant step towards global climate action with
                                    pledges from over 100 countries.</li>
                                <li><strong>COP21 (Paris, 2015):</strong> The Paris Agreement was adopted, committing to
                                    limit global warming to well below 2°C above pre-industrial levels and to pursue
                                    efforts to limit the temperature increase to 1.5°C.</li>
                                <li><strong>COP22 (Marrakech, 2016):</strong> The Marrakech Action Proclamation was
                                    adopted, emphasizing the importance of collective action and the need for increased
                                    ambition in climate commitments.</li>
                                <li><strong>COP26 (Glasgow, 2021):</strong> The Glasgow Climate Pact was adopted, with
                                    key outcomes including commitments to accelerate the phase-down of coal and increase
                                    climate finance for developing countries.</li>
                            </ul>
                            <a href="./about.php"
                                class="bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition">Learn
                                More</a>
                        </div>
                        <!-- Social Media -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Social Media -->
    </section>



    <!-- Footer -->
    <?php include "footer.php" ?>
</body>

</html>