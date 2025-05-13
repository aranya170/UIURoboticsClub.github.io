<style>
    body {
        font-family: 'Exo 2', sans-serif;
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
<nav class="w-[625px] h-[143px] flex-shrink-0 p-0 m-0" style="z-index: 20;">
    <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0" width="625" height="143" fill="none"
        viewBox="0 0 625 143">
        <path fill="#262626"
            d="M625 0v79.396H304.73a61.195 61.195 0 01-.844.557c-8.001 5.649-25.531 18.001-31.642 22.269-3.847 2.682-5.59 5.761-6.26 8.197v15.621A15.896 15.896 0 01250 142.366H0V0h625z">
        </path>
    </svg>
    <hr class="w-full -z-10 bg-black h-[2px] absolute top-[78.5px] -translate-y-[1px]">
    <svg fill="#000000" width="15px" height="15px" class="absolute top-[10px] left-[10px] z-10" viewBox="0 0 24 24"
        id="nut-2" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
        <path id="primary"
            d="M20,6.2,13,2.26a2,2,0,0,0-2,0L4,6.19A2,2,0,0,0,3,7.94v8.12A2,2,0,0,0,4,17.8l7,3.94a2,2,0,0,0,2,0l7-3.93a2,2,0,0,0,1-1.75V7.94A2,2,0,0,0,20,6.2ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
            style="fill: #fff;"></path>
    </svg>
    <svg fill="#000000" width="15px" height="15px" class="absolute top-[110px] left-[10px] z-10" viewBox="0 0 24 24"
        id="nut-2" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
        <path id="primary"
            d="M20,6.2,13,2.26a2,2,0,0,0-2,0L4,6.19A2,2,0,0,0,3,7.94v8.12A2,2,0,0,0,4,17.8l7,3.94a2,2,0,0,0,2,0l7-3.93a2,2,0,0,0,1-1.75V7.94A2,2,0,0,0,20,6.2ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
            style="fill: #fff;"></path>
    </svg>
    <svg fill="#000000" width="15px" height="15px" class="absolute top-[110px] left-[240px] z-10" viewBox="0 0 24 24"
        id="nut-2" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
        <path id="primary"
            d="M20,6.2,13,2.26a2,2,0,0,0-2,0L4,6.19A2,2,0,0,0,3,7.94v8.12A2,2,0,0,0,4,17.8l7,3.94a2,2,0,0,0,2,0l7-3.93a2,2,0,0,0,1-1.75V7.94A2,2,0,0,0,20,6.2ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
            style="fill: #fff;"></path>
    </svg>
    <svg fill="#000000" width="15px" height="15px" class="absolute top-[10px] left-[600px] z-10" viewBox="0 0 24 24"
        id="nut-2" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
        <path id="primary"
            d="M20,6.2,13,2.26a2,2,0,0,0-2,0L4,6.19A2,2,0,0,0,3,7.94v8.12A2,2,0,0,0,4,17.8l7,3.94a2,2,0,0,0,2,0l7-3.93a2,2,0,0,0,1-1.75V7.94A2,2,0,0,0,20,6.2ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
            style="fill: #fff;"></path>
    </svg>
    <svg fill="#000000" width="15px" height="15px" class="absolute top-[55px] left-[600px] z-10" viewBox="0 0 24 24"
        id="nut-2" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
        <path id="primary"
            d="M20,6.2,13,2.26a2,2,0,0,0-2,0L4,6.19A2,2,0,0,0,3,7.94v8.12A2,2,0,0,0,4,17.8l7,3.94a2,2,0,0,0,2,0l7-3.93a2,2,0,0,0,1-1.75V7.94A2,2,0,0,0,20,6.2ZM12,15a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"
            style="fill: #fff;"></path>
    </svg>
    <img src="includes/Icon.png" class="h-20 w-20 absolute top-[25px] left-[70px] z-10" alt="">
</nav>
<!-- Full Menu (visible when viewport > 1022px) -->
<div id="fullMenu" class="hidden lg:flex items-center justify-center gap-[30px] absolute top-[25px] right-10">
    <a href=""
        class="text-[#262626] hover:text-[#ff0302] text-lg font-medium relative transition-colors duration-300 group">
        Home
    </a>
    <a href=""
        class="text-[#262626] hover:text-[#ff0302] text-lg font-medium relative transition-colors duration-300 group">
        About Us
    </a>
    <a href=""
        class="text-[#262626] hover:text-[#ff0302] text-lg font-medium relative transition-colors duration-300 group">
        Events
    </a>
    <a href=""
        class="text-[#262626] hover:text-[#ff0302] text-lg font-medium relative transition-colors duration-300 group">
        Achievements
    </a>
    <a href=""
        class="text-[#262626] hover:text-[#ff0302] text-lg font-medium relative transition-colors duration-300 group">
        Contact Us
    </a>
</div>
<div class="lg:hidden absolute top-[13px] right-2 z-20">
    <!-- Boxed Hamburger Icon -->
    <div class="bg-[#262626] p-2 rounded-md">
        <button id="hamburger-btn" class="text-white focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                </path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden absolute top-[60px] right-0 bg-[#262626] shadow-lg rounded-lg p-4 w-48">
        <a href=""
            class="block text-white hover:text-[#ff0302] text-lg font-medium py-2 transition-colors duration-300">Home</a>
        <a href=""
            class="block text-white hover:text-[#ff0302] text-lg font-medium py-2 transition-colors duration-300">About
            Us</a>
        <a href=""
            class="block text-white hover:text-[#ff0302] text-lg font-medium py-2 transition-colors duration-300">Events</a>
        <a href=""
            class="block text-white hover:text-[#ff0302] text-lg font-medium py-2 transition-colors duration-300">Achievements</a>
        <a href=""
            class="block text-white hover:text-[#ff0302] text-lg font-medium py-2 transition-colors duration-300">Contact
            Us</a>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("hamburger-btn").addEventListener("click", function() {
            const menu = document.getElementById("mobile-menu");
            menu.classList.toggle("hidden");
        });
    });
</script>