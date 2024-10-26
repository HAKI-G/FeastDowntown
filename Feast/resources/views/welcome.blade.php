<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feast Downtown</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Anton+SC&display=swap');
        body {
            font-family: "Anton SC", serif;
        }
    </style>
</head>

<body class="bg-[#FED801]  ">


<main >
    <div class="carousel">
    <header>
    <nav class="flex justify-between items-center p-4 ">
        <img class="w-32" src="/images/logo.png" alt="Feast Downtown">
        
        <nav-list class="flex items-center relative"> 
            <div>
                <svg class="w-10 hidden sm:block" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0L0 6V8H1V15H4V10H7V15H15V8H16V6L14 4.5V1H11V2.25L8 0ZM9 10H12V13H9V10Z" fill="#000000"></path> </g></svg>
            </div>
            <div>
                <svg class="w-10 hidden sm:block" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2.08416 2.7512C2.22155 2.36044 2.6497 2.15503 3.04047 2.29242L3.34187 2.39838C3.95839 2.61511 4.48203 2.79919 4.89411 3.00139C5.33474 3.21759 5.71259 3.48393 5.99677 3.89979C6.27875 4.31243 6.39517 4.76515 6.4489 5.26153C6.47295 5.48373 6.48564 5.72967 6.49233 6H17.1305C18.8155 6 20.3323 6 20.7762 6.57708C21.2202 7.15417 21.0466 8.02369 20.6995 9.76275L20.1997 12.1875C19.8846 13.7164 19.727 14.4808 19.1753 14.9304C18.6236 15.38 17.8431 15.38 16.2821 15.38H10.9792C8.19028 15.38 6.79583 15.38 5.92943 14.4662C5.06302 13.5523 4.99979 12.5816 4.99979 9.64L4.99979 7.03832C4.99979 6.29837 4.99877 5.80316 4.95761 5.42295C4.91828 5.0596 4.84858 4.87818 4.75832 4.74609C4.67026 4.61723 4.53659 4.4968 4.23336 4.34802C3.91052 4.18961 3.47177 4.03406 2.80416 3.79934L2.54295 3.7075C2.15218 3.57012 1.94678 3.14197 2.08416 2.7512Z" fill="#000"></path> <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" fill="#000"></path> <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" fill="#000"></path> </g></svg>
            </div>
            <div class="relative">
                <div class="hamburger-menu" onclick="toggleDropdown()">
                    <svg class="w-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 12H20" stroke="#000" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M5 17H20" stroke="#000" stroke-width="2" stroke-linecap="round"></path>
                        <path d="M5 7H20" stroke="#000" stroke-width="2" stroke-linecap="round"></path>
                    </svg>
                </div>

                <!-- Dropdown Menu -->
                <div id="dropdown-menu" class="dropdown hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-10">
                    <ul class="py-2 text-gray-700">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">HOME</a></li>
                        <li><a href="{{ route('login') }}" class="block px-4 py-2 hover:bg-gray-200">LOGIN</a></li>
                        <li><a href="{{ route('register') }}" class="block px-4 py-2 hover:bg-gray-200">REGISTER</a></li>
                    </ul>
                </div>
            </div>
        </nav-list>
    </nav>
</header>
    <div class="img-box">
        <div class="img-list">
        <div class="img-slider">
            <div class="img-item putahi active" style="--i:0;">
                <img src="/images/potatobg.png" alt="burgerbg.png">
            </div>
            <div class="img-item putahi " style="--i:1;">
                <img  src="/images/tomatobg.png" alt="pizza">
            </div>
            <div class="img-item putahi" style="--i:2;">
                <img  src="/images/onionsbg.png" alt="friedchicken.png">
            </div>
            <div class="img-item putahi" style="--i:3;">
                <img   src="/images/greenbg.png" alt="lasagna.png">
            </div> 

            <div class="img-item" style="--i:0;">
                <img src="/images/burger.png" alt="burger.png">
            </div>
            <div class="img-item" style="--i:1;">
                <img src="/images/burger.png" alt="burger.png">
            </div>
            <div class="img-item" style="--i:2;">
                <img src="/images/burger.png" alt="burger.png">
            </div>
            <div class="img-item" style="--i:3;">
                <img src="/images/burger.png" alt="burger.png">
            </div>
        </div>
        </div>
    </div>

    <div class="info-box">
        <div class="info-slider">
            <div class="info-item">
                <h2 class="text-[#C7253E]">burger</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores sed atque facere molestias modi voluptates nemo aliquid deleniti numquam quos.</p>
            </div>
            <div class="info-item">
                <h2 class="text-[#C7253E]">burger</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores sed atque facere molestias modi voluptates nemo aliquid deleniti numquam quos.</p>
            </div>
            <div class="info-item">
                <h2 class="text-[#C7253E]">burger</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores sed atque facere molestias modi voluptates nemo aliquid deleniti numquam quos.</p>
            </div>
            <div class="info-item">
                <h2 class="text-[#C7253E]">burger</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores sed atque facere molestias modi voluptates nemo aliquid deleniti numquam quos.</p>
            </div>
        </div>
    </div>


    <div class="navigation">
        <span class="prev-btn"><i class='bx bx-chevron-left'></i></span>
        <span class="next-btn"><i class='bx bx-chevron-right' ></i></span>
    </div>
    </div>
    <div class="show-food mt-6">
                    <div class="product-list grid grid-cols-2 sm:grid sm:grid-cols-3 lg:grid lg:grid-cols-4 grid-flow-row ">
                        <div class="bg-[#FFC82A] flex items-center justify-center m-2">
                            <img class="w-full h-full object-contain" src="/images/burger.png" alt="burger">
                        </div>
                        <div class="bg-[#FFC82A]  flex items-center justify-center m-2">
                            <img class="w-full h-full object-contain" src="/images/tomato2.png" alt="pizza tomato">
                        </div>
                        <div class="bg-[#FFC82A]  flex items-center justify-center m-2">
                            <img class="w-full h-full object-contain" src="/images/friedchicken.png" alt="friedchicken">
                        </div>
                        <div class="bg-[#FFC82A] flex items-center justify-center m-2">
                            <img class="w-full h-full object-contain" src="/images/lasagna.png" alt="lasagna">
                        </div>
                        <div class="bg-[#FFC82A]  flex items-center justify-center m-2">
                            <img class="w-full h-full object-contain" src="/images/chickenwings.png" alt="chickenwings">
                        </div>
                        <div class="bg-[#FFC82A] flex items-center justify-center m-2">
                            <img class="w-full h-full object-contain" src="/images/spag.png" alt="spag">
                        </div>
                        <div class="bg-[#FFC82A]  flex items-center justify-center m-2">
                            <img class="w-full h-full object-contain" src="/images/halohalo.png" alt="halohalo">
                        </div>
                        <div class="bg-[#FFC82A] flex items-center justify-center m-2">
                            <img class="w-full h-full object-contain" src="/images/pizza 2.png" alt="pizza">
                        </div>
                    </div>
                </div>

                

                <div class="special-offer mt-6 flex lg:h-[50vh]">
                    <div class="produc-special-offer lg:flex  m-auto">
                        <div class="product-special-offer-text text-center lg:m-auto basis-1/2">
                            <h1 class="text-4xl">special offer <br/><span class="text-[#C7253E] ">50% off</span></h1>
                            <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, quisquam!</p> 
                            <button class="bg-[#C7253E] w-24 rounded-lg mt-6">order now</button>
                        </div>
                        <div class="product-special-offer-image grid justify-center items-center basis-1/2">
                            <img src="/images/burger.png" alt="burger">
                        </div>
                    </div>
                </div>

            <div class="why-choose-us lg:gap-10  ">
                <h2 class="text-center text-4xl lg:mb-16">why choose us</h2>
                <div class="why-us grid grid-cols-2 grid-rows-2 mt-6 sm:flex gap-x-8 sm:gap-x-12 lg:gap-x-16 ">
                    <div class="bag w-16 grid m-auto ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64l0 48-128 0 0-48zm-48 48l-64 0c-26.5 0-48 21.5-48 48L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-208c0-26.5-21.5-48-48-48l-64 0 0-48C336 50.1 285.9 0 224 0S112 50.1 112 112l0 48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg>
                        <p class="text-center text-sm sm:text-base lg:text-lg">10 years of experience</p>
                    </div>

                    <div class="person w-16 m-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
                        <p class="text-center text-sm sm:text-base lg:text-lg">200+ professional chefs</p>
                    </div>

                    <div class="people w-16 m-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                        <p class="text-center text-sm sm:text-base lg:text-lg">5000+ happy customers</p>
                    </div>

                    <div class="awards w-16 m-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M400 0L176 0c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8L24 64C10.7 64 0 74.7 0 88c0 92.6 33.5 157 78.5 200.7c44.3 43.1 98.3 64.8 138.1 75.8c23.4 6.5 39.4 26 39.4 45.6c0 20.9-17 37.9-37.9 37.9L192 448c-17.7 0-32 14.3-32 32s14.3 32 32 32l192 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-26.1 0C337 448 320 431 320 410.1c0-19.6 15.9-39.2 39.4-45.6c39.9-11 93.9-32.7 138.2-75.8C542.5 245 576 180.6 576 88c0-13.3-10.7-24-24-24L446.4 64c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zM48.9 112l84.4 0c9.1 90.1 29.2 150.3 51.9 190.6c-24.9-11-50.8-26.5-73.2-48.3c-32-31.1-58-76-63-142.3zM464.1 254.3c-22.4 21.8-48.3 37.3-73.2 48.3c22.7-40.3 42.8-100.5 51.9-190.6l84.4 0c-5.1 66.3-31.1 111.2-63 142.3z"/></svg>
                        <p class="text-center text-sm sm:text-base lg:text-lg">20+ awards won</p>
                    </div>
                </div>
            </div>
        </div>

    

</main>

<footer>
    <div class="grid grid-cols-2 grid-rows-2 gap-10 mt-10 text-center lg:flex lg:mt-20">
        <div class="popular-page-list flex-1">
            <div>
                <h2 class="text-[#C7253E]">reach us</h2>
                <h3>home</h3>
                <h3>about us</h3>
                <h3>our chefs</h3>
                <h3>our blogs</h3>
                <h3>faqs</h3>
                <h3>contact us</h3>
            </div>
        </div>

        <div class="flex-1">
            <div class="popular-category-list">
                <h2 class="text-[#C7253E]">popular category</h2>
                <h3>burger</h3> 
                <h3>spicy chicken</h3>
                <h3>lasagna</h3>
                <h3>halo-halo</h3>
                <h3>ham & cheeze pizza</h3>
            </div>
        </div>

        <div class="flex-1">
            <div class="reach-us">
                <h2 class="text-[#C7253E]">reach us</h2>
                <div class="mobile-number">
                    <h3>09090909</h3>
                </div>
                <div class="email">
                    <h3>info@gmail.com</h3>
                </div>
                <div class="website">
                    <h3>www.feastDowntown.com</h3>
                </div>
            </div>
        </div>

        <div class="flex-1">
            <div class="social-page">
                <h2 class="text-[#C7253E]">social page</h2>
                <div class="facebook">
                    <!-- Add your social media icons here -->
                </div>
                <div class="twitter">
                    <!-- Add your social media icons here -->
                </div>
                <div class="instagram">
                    <!-- Add your social media icons here -->
                </div>
                <div class="twitch">
                    <!-- Add your social media icons here -->
                </div>
            </div>
        </div>
    </div>
</footer>




<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>