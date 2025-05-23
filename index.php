<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UIU Robotics Club</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="/includes/Icon.png" type="image/png">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Exo 2', sans-serif;
        }

        .animate-fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.7s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .main-btn {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
        }

        .main-btn:hover .pulse {
            fill: #F79B72;
            /* Darker red on hover for effect */
        }

        .main-btn:focus {
            outline: none;
        }
    </style>
</head>

<body class="overflow-x-clip m-0 min-h-screen flex flex-col ">
    <main class="flex-grow">
        <nav class="w-[625px] h-[143px] flex-shrink-0 p-0 m-0" style="z-index: 20;">
            <?php include 'includes/Navbar.php'; ?>
        </nav>
        <section class="main p-10 m-20">
            <section class="pt-20 pb-10 flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-5xl font-bold mb-6 text-[#ff0302]">UIU Robotics Club</h1>
                    <p class="text-xl mb-10 text-[#273F4F]">A Step Towards Infinity</p>
                    <span class="flex items-center gap-4">
                        <p class="text-nowrap">Explore More</p>
                        <button
                            class="flex items-center justify-center w-12 h-12 bg-[#ff0302] text-white rounded-full hover:bg-[#cc0202] group">
                            <svg class="transform transition-transform duration-200 group-hover:translate-x-1"
                                width="50%" height="50%" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </span>

                </div>
                <div class="md:w-1/2 relative photo-carousel">
                    <img src="includes/photo1.jpg" class="h-20 w-20 rounded-xl">
                </div>
            </section>
            <section>
                <div class="text-nowrap flex items-center flex-row justify-center gap-[22px] text-primary">
                    <span class="font-mono text-xl text-nowrap font-semibold uppercase text-[#ff0302]">:: What we
                        do?</span>
                    <div class="relative w-full h-[2px] bg-[#F0F0F0]">
                        <div class="bg-[#ff0302] absolute -top-[3px] left-0 bottom-0 w-[8px] h-[8px] rounded-full">
                        </div>
                    </div>
                </div>
                <div class="max-w-5xl mx-auto my-12 py-12 rounded-xl">

                    <div
                        class="relative flex flex-col md:flex-row items-center justify-between space-y-8 md:space-y-0 md:space-x-8">
                        <!-- Guideline -->
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-[#ff0302] mb-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253" />
                            </svg>
                            <span class="text-[#273F4F] text-lg font-semibold">Guideline</span>
                        </div>
                        <!-- Connecting Line -->
                        <div class="line-connector line-1 hidden md:block w-24 h-1 bg-[#ff0302] dashed-line"></div>
                        <!-- Leadership -->
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-[#ff0302] mb-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="text-[#273F4F] text-lg font-semibold">Leadership</span>
                        </div>
                        <!-- Connecting Line -->
                        <div class="line-connector line-2 hidden md:block w-24 h-1 bg-[#ff0302] dashed-line"></div>
                        <!-- Team Work -->
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-[#ff0302] mb-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="text-[#273F4F] text-lg font-semibold">Team Work</span>
                        </div>
                        <!-- Connecting Line -->
                        <div class="line-connector line-3 hidden md:block w-24 h-1 bg-[#ff0302] dashed-line"></div>
                        <!-- Career Opportunities -->
                        <div class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-[#ff0302] mb-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-[#273F4F] text-lg font-semibold">Career Opportunities</span>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="text-nowrap flex items-center flex-row justify-center gap-[22px] text-primary">
                    <span class="font-mono text-xl text-nowrap font-semibold uppercase text-[#ff0302]">:: OUR
                        MISSION</span>
                    <div class="relative w-full h-[2px] bg-[#F0F0F0]">
                        <div class="bg-[#ff0302] absolute -top-[3px] left-0 bottom-0 w-[8px] h-[8px] rounded-full">
                        </div>
                    </div>
                </div>
            </section>
            <section class="flex">
                <div class="container">
                    <svg width="200" height="150" viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg">
                        <!-- Main box with rounded corners -->
                        <rect x="20" y="20" width="160" height="110" rx="10" ry="10" fill="#f0f0f0" />
                        <!-- Screws (circles) on each side -->
                        <circle cx="30" cy="30" r="5" fill="#666" />
                        <circle cx="170" cy="30" r="5" fill="#666" />
                        <circle cx="30" cy="120" r="5" fill="#666" />
                        <circle cx="170" cy="120" r="5" fill="#666" />
                    </svg>
                </div>
            </section>
            <section class="flex">
                <div class="container">
                    <svg width="200" height="150" viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg">
                        <!-- Main box with rounded corners -->
                        <rect x="20" y="20" width="160" height="110" rx="10" ry="10" fill="#f0f0f0" />
                        <!-- Screws (circles) on each side -->
                        <circle cx="30" cy="30" r="5" fill="#666" />
                        <circle cx="170" cy="30" r="5" fill="#666" />
                        <circle cx="30" cy="120" r="5" fill="#666" />
                        <circle cx="170" cy="120" r="5" fill="#666" />
                    </svg>
                </div>
            </section>
        </section>
    </main>

</body>
<footer class="relative text-white bg-[#262626] lg:bg-transparent h-auto lg:h-[494px]">
    <?php include 'includes/Footer.php'; ?>
</footer>

</html>