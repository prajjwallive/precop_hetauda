<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About the Preparatory Youth Meeting</title>
    <?php include "imports.php" ?>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    <?php include "header.php" ?>

    <!-- Hero Section -->
    <section class="relative bg-green-600 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold mb-4">About the Preparatory Youth Meeting</h1>
            <p class="text-xl mb-6">Empowering the next generation of climate leaders</p>
            <a href="https://forms.gle/p6zqXbYa4N53nVtn7" class="bg-white text-green-600 px-8 py-3 rounded-full shadow-md hover:bg-green-200">Learn
                More</a>
        </div>
        <!-- Background Image -->
        <!-- <div class="absolute inset-0 bg-cover opacity-30"
            style="background-image: url('https://via.placeholder.com/1500');"></div> -->
    </section>

    <!-- Introduction Section -->
    <section class="container mx-auto py-16 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <!-- Text Content -->
            <div>
                <h2 class="text-4xl font-semibold text-green-700 mb-6">Introduction</h2>
                <p class="text-lg leading-relaxed text-gray-700 mb-4">
                    The Preparatory Youth Meeting for COP29 is an essential event designed to educate and engage young
                    leaders on global climate policies that shape international and local responses to climate change.
                    With a special focus on three major instruments—the Kyoto Protocol, the Paris Agreement, and the
                    Loss and Damage Fund—this meeting helps participants understand the frameworks that govern climate
                    actions globally and how they can influence local and national policy decisions.
                </p>
            </div>
            <!-- Placeholder Image -->
            <div>
                <img src="./Assets/about_cop.png" alt="Youth Meeting" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Objectives Section -->
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-semibold text-green-700 mb-10 text-center">Objectives</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-2xl font-semibold text-green-600 mb-3">Amplify Youth Engagement</h3>
                    <p class="text-gray-700">Empower young leaders to actively participate in COP29 discussions and
                        contribute to shaping policies that affect their future.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-2xl font-semibold text-green-600 mb-3">Localize Climate Policy</h3>
                    <p class="text-gray-700">Equip youth with tools to localize Nationally Determined Contributions
                        (NDCs), making global agreements like the Paris Agreement actionable in their own communities.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h3 class="text-2xl font-semibold text-green-600 mb-3">Address Key Climate Instruments</h3>
                    <p class="text-gray-700">Provide a deep dive into key legal frameworks like the Kyoto Protocol,
                        Paris Agreement, and Loss and Damage Fund.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Major Legal Instruments Section -->
    <section class="container mx-auto py-16 px-4">
        <h2 class="text-4xl font-semibold text-green-700 mb-10 text-center">Major Legal Instruments</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
            <div>
                <h3 class="text-3xl font-semibold text-green-600 mb-4">Kyoto Protocol (1997)</h3>
                <p class="text-lg text-gray-700 mb-4">The Kyoto Protocol was the first international treaty that
                    committed developed countries to legally binding greenhouse gas (GHG) emissions reduction targets.
                    Adopted at COP3 in 1997, it marked a turning point in climate policy, establishing emission caps for
                    industrialized nations.</p>
                <p class="text-lg text-gray-700"><strong>Relevance to Nepal:</strong> As a developing country, Nepal
                    benefitted from the Clean Development Mechanism (CDM).</p>
            </div>
            <div>
                <img src="./Assets/kyoto.webp" alt="Kyoto Protocol"
                    class="rounded-lg shadow-lg h-auto w-auto object-cover">
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-12">
            <div>
                <img src="./Assets/paris2015.png" alt="Paris Agreement"
                    class="rounded-lg shadow-lg h-auto w-auto object-contain">
            </div>
            <div>
                <h3 class="text-3xl font-semibold text-green-600 mb-4">Paris Agreement (2015)</h3>
                <p class="text-lg text-gray-700 mb-4">The Paris Agreement, adopted at COP21 in 2015, is the most
                    comprehensive international climate agreement, aiming to keep global temperature rise well below
                    2°C.</p>
                <p class="text-lg text-gray-700"><strong>Relevance to Nepal:</strong> Nepal’s NDCs outline its
                    commitments to reduce emissions and adapt to climate impacts.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-3xl font-semibold text-green-600 mb-4">Loss and Damage Fund (COP27, 2022)</h3>
                <p class="text-lg text-gray-700 mb-4">Established at COP27, the Loss and Damage Fund acknowledges the
                    irreversible consequences of climate change, providing financial assistance to vulnerable countries.
                </p>
                <p class="text-lg text-gray-700"><strong>Relevance to Nepal:</strong> Nepal stands to benefit from this
                    fund to cope with climate-induced disasters like glacier melts and landslides.</p>
            </div>
            <div>
                <img src="./Assets/lost_and_damage.jpeg" alt="Loss and Damage Fund"
                    class="rounded-lg shadow-lg object-cover h-auto w-auto">
            </div>
        </div>
    </section>

    <!-- About Page Section -->
    <section id="about" class="bg-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-6">About the Preparatory Youth Meeting</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-10">
                The Conference of the Parties (COP) is an annual gathering under the United Nations Framework Convention
                on Climate Change (UNFCCC). Since 1995, COP has brought together nearly every nation to negotiate
                agreements on addressing the climate crisis. COP29, to be held in Baku, Azerbaijan, will see this
                preparatory youth meeting in Nepal as a vital step in ensuring that young climate leaders are equipped
                to engage in the global conversation.
            </p>
            <!-- Second segment -->
            <div class="flex flex-col md:flex-row justify-center mb-10">
                <!-- Objectives Section -->
                <div class="md:w-1/2 md:pr-6 mb-8 md:mb-0">
                    <section id="objectives" class="bg-white py-12">
                        <div class="container mx-auto px-4 text-center">
                            <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Objectives</h2>
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white shadow-lg rounded-lg border border-gray-200">
                                    <thead class="bg-green-500 text-white">
                                        <tr>
                                            <th class="py-3 px-4 border-b">Objective</th>
                                            <th class="py-3 px-4 border-b">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="hover:bg-green-100 transition-colors duration-300">
                                            <td class="py-3 px-4 border-b text-left font-medium text-gray-800">Amplify
                                                Youth Engagement</td>
                                            <td class="py-3 px-4 border-b text-left text-gray-600">Foster meaningful
                                                youth participation in global climate policy discussions, particularly
                                                in the lead-up to COP29.</td>
                                        </tr>
                                        <tr class="hover:bg-green-100 transition-colors duration-300">
                                            <td class="py-3 px-4 border-b text-left font-medium text-gray-800">Promote
                                                Local Action</td>
                                            <td class="py-3 px-4 border-b text-left text-gray-600">Equip young leaders
                                                with the knowledge and tools to localize the implementation of the Paris
                                                Agreement and NDCs.</td>
                                        </tr>
                                        <tr class="hover:bg-green-100 transition-colors duration-300">
                                            <td class="py-3 px-4 border-b text-left font-medium text-gray-800">Address
                                                Climate Justice</td>
                                            <td class="py-3 px-4 border-b text-left text-gray-600">Highlight the
                                                disproportionate impacts of climate change on vulnerable communities and
                                                advocate for equitable solutions.</td>
                                        </tr>
                                        <tr class="hover:bg-green-100 transition-colors duration-300">
                                            <td class="py-3 px-4 border-b text-left font-medium text-gray-800">Build
                                                Awareness</td>
                                            <td class="py-3 px-4 border-b text-left text-gray-600">Raise awareness about
                                                climate finance mechanisms and the importance of supporting adaptation
                                                efforts in developing countries.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Event Partners Section -->
                <div class="md:w-1/2 md:pl-6 mt-14">
                    <h3 class="text-3xl font-semibold text-gray-800 mb-6 text-center md:text-left">Event Partners:</h3>
                    <div class="flex flex-wrap justify-center md:justify-start gap-6">
                        <!-- Partner 1 -->
                        <a href="https://nyca.net.np/" target="_blank" class="flex items-center space-x-4">
                            <img src="./Assets/NYCA.png" alt="NYCA Logo"
                                class="w-32 h-32 object-contain rounded-full shadow-lg border-green-500 border-2">
                            <span class="text-lg text-gray-800">Nepalese Youth for Climate Action (NYCA) - Hetauda Chapter</span>
                        </a>
                        <!-- Partner 2 -->
                        <a href="https://bagmatiunescoclub.org/" target="_blank" class="flex items-center space-x-4">
                            <img src="./Assets/Bagmati_UNESCO_logo.jpg" alt="BUC Logo"
                                class="w-32 h-32 object-cover rounded-full border-2 border-green-500 shadow-lg">
                            <span class="text-lg text-gray-800">Bagmati UNESCO Club (BUC)</span>
                        </a>
                    </div>
                </div>
            </div>

    </section>


    <?php include "footer.php" ?>
</body>

</html>