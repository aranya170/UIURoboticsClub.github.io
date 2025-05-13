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
    <nav class="w-[625px] h-[143px] flex-shrink-0 p-0 m-0" style="z-index: 20;">
        <?php include 'includes/Navbar.php'; ?>
    </nav>

    <main class="flex-grow">
        <!-- Write your code here -->

    </main>

    <footer class="relative text-white bg-[#262626] lg:bg-transparent h-auto lg:h-[494px]">
        <?php include 'includes/Footer.php'; ?>
    </footer>

</html>