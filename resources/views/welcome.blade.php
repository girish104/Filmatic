<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@700&family=Open+Sans:wght@400;700;800&family=Oswald:wght@200;300;400;500&display=swap"
        rel="stylesheet">
    <!--Google Fonts End-->
    <!--FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--FontAwesome End-->
    <!--Favicon-->
    <link rel="shortcut icon" href="images/18311976241606260003-128.png" type="favicon" />

</head>

<body class="font-open dark">
    <!--Dark/Light Mode Button-->
    <div class="absolute top-1 left-5 cursor-pointer text-lg">
        <i class="fa-solid fa-sun text-white" id="sun"></i>
        <i class="fa-solid fa-moon text-black hidden" id="moon"></i>
    </div>


    <!--Header-->
    <header class="dark:bg-black bg-white py-6 lg:py-12 dark:text-gega-grey text-black font-gemunu uppercase ">
        <!--py=yukarıdan aşağıya padding-->
        <!--Header Container-->
        <div class="container flex items-center justify-between space-x-8 lg:space-x-16">
            <!--Logo Kısmı-->
            <a href="#"
                class="pl-4 md:pl-0 text-4xl lg:text-6xl font-bold text-transparent bg-gradient-to-r bg-clip-text from-gega-red to-gega-grey">WATCH</a>
            <!--Menu Icon For Small Screens-->
            <div class="block md:hidden pr-4">
                <div class="space-y-1 cursor-pointer">
                    <div class="bg-gega-grey w-8 h-1 rounded-full"></div>
                    <div class="bg-gega-grey w-8 h-1 rounded-full"></div>
                    <div class="bg-gega-grey w-8 h-1 rounded-full"></div>
                </div>
            </div>
            <!--Navigation-->
            <nav class="hidden md:flex justify-between flex-1">
                <!--Menu-->
                <div class="flex items-center lg:text-lg space-x-4 lg:space-x-8">
                    <a href="#" class="hover:text-gega-melon transition duration-500">movies</a>
                    <a href="#" class="hover:text-gega-melon transition duration-500">celebrities</a>
                    <a href="#" class="hover:text-gega-melon transition duration-500">blog</a>
                    <a href="#" class="hover:text-gega-melon transition duration-500">menus</a>
                    <a href="#" class="hover:text-gega-melon transition duration-500">about</a>
                </div>
            </nav>
        </div>
    </header>



    <!--Movies Part-->
    <!--Dark Mode Added-->
    <section class="py-24 bg-black dark:bg-black bg-white dark:text-gega-grey text-black">
        <!--Movies Content-->

        <div class="container flex flex-col lg:flex-row lg:space-x-16 space-y-8 lg:space-y-0">
            <!--Left Content-->
            <div class="basis-2/3 ">
                <!--Titles-->
                <!--Added Dark/Light Mode-->
                <div class="flex space-x-2 divide-x divide-gega-red divide-opacity-50 mb-8 pl-10 lg:pl-0">
                    <h2 class="text-2xl text-gega-red tracking-wider"><a href="#">Latest</a></h2>
                    <h2 class="dark:text-gega-grey tracking-wider pl-2 hover:text-gega-red duration-500"><a
                            href="#">Popular</a></h2>
                    <h2 class="dark:text-gega-grey tracking-wider pl-2 hover:text-gega-red duration-500"><a
                            href="#">Best</a></h2>
                </div>
                <!--Images Container-->
                <div class="flex flex-wrap">
                    <!--Image 1-->
                    <div class="group relative overflow-hidden basis-1/3 md:basis-1/4 lg:basis-1/3">
                        <!--Image-->
                        <img src="images/freeguy2.jpg"
                            class="group-hover:scale-110 group-hover:opacity-50 duration-500">
                        <!--Image Detail Container-->
                        <div class="absolute px-6 bottom-8">
                            <h3 class="dark:text-gega-grey group-hover:text-gega-melon group-hover:mb-2 duration-500">
                                Free Guy</h3>
                            <p
                                class="text-xs opacity-0 group-hover:opacity-100 group-hover:mb-10 duration-500 dark:text-gega-grey">
                                Lorem
                                ipsum dolor sit amet
                                consectetur adipisicing elit. Praesentium,
                                impedit.</p>
                            <!--Icons Container-->
                            <div
                                class="absolute flex space-x-8 text-gega-grey opacity-0 -bottom-2 group-hover:bottom-2 group-hover:opacity-100 duration-500">
                                <a class="hover:text-gega-red" href="#"><i class="fa-solid fa-play"></i></a>
                                <a class="hover:text-gega-red" href="#"><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Image 2-->
                    <div class="group relative overflow-hidden basis-1/3 md:basis-1/4  lg:basis-1/3">
                        <!--Image-->
                        <img src="images/trumanshow (1).webp"
                            class="group-hover:scale-110 group-hover:opacity-50 duration-500">
                        <!--Image Detail Container-->
                        <div class="absolute px-6 bottom-8">
                            <h3 class="dark:text-gega-grey group-hover:text-gega-melon group-hover:mb-2 duration-500">
                                Truman Show</h3>
                            <p
                                class="text-xs opacity-0 group-hover:opacity-100 group-hover:mb-10 duration-500 dark:text-gega-grey">
                                Lorem
                                ipsum dolor sit amet
                                consectetur adipisicing elit. Praesentium,
                                impedit.</p>
                            <!--Icons Container-->
                            <div
                                class="absolute flex space-x-8 text-gega-grey opacity-0 -bottom-2 group-hover:bottom-2 group-hover:opacity-100 duration-500">
                                <a class="hover:text-gega-red" href="#"><i class="fa-solid fa-play"></i></a>
                                <a class="hover:text-gega-red" href="#"><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Image 3-->
                    <div class="group relative overflow-hidden basis-1/3 md:basis-1/4  lg:basis-1/3">
                        <!--Image-->
                        <img src="images/intime.jpg" class="group-hover:scale-110 group-hover:opacity-50 duration-500">
                        <!--Image Detail Container-->
                        <div class="absolute px-6 bottom-8">
                            <h3 class="dark:text-gega-grey group-hover:text-gega-melon group-hover:mb-2 duration-500">
                                In Time</h3>
                            <p
                                class="text-xs opacity-0 group-hover:opacity-100 group-hover:mb-10 duration-500 dark:text-gega-grey">
                                Lorem
                                ipsum dolor sit amet
                                consectetur adipisicing elit. Praesentium,
                                impedit.</p>
                            <!--Icons Container-->
                            <div
                                class="absolute flex space-x-8 text-gega-grey opacity-0 -bottom-2 group-hover:bottom-2 group-hover:opacity-100 duration-500">
                                <a class="hover:text-gega-red" href="#"><i class="fa-solid fa-play"></i></a>
                                <a class="hover:text-gega-red" href="#"><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Image 4-->
                    <div class="group relative overflow-hidden basis-1/3 md:basis-1/4 lg:basis-1/3">
                        <!--Image-->
                        <img src="images/shazam (1).webp"
                            class="group-hover:scale-110 group-hover:opacity-50 duration-500">
                        <!--Image Detail Container-->
                        <div class="absolute px-6 bottom-8">
                            <h3 class="dark:text-gega-grey group-hover:text-gega-melon group-hover:mb-2 duration-500">
                                Shazam</h3>
                            <p
                                class="text-xs opacity-0 group-hover:opacity-100 group-hover:mb-10 duration-500 dark:text-gega-grey">
                                Lorem
                                ipsum dolor sit amet
                                consectetur adipisicing elit. Praesentium,
                                impedit.</p>
                            <!--Icons Container-->
                            <div
                                class="absolute flex space-x-8 text-gega-grey opacity-0 -bottom-2 group-hover:bottom-2 group-hover:opacity-100 duration-500">
                                <a class="hover:text-gega-red" href="#"><i class="fa-solid fa-play"></i></a>
                                <a class="hover:text-gega-red" href="#"><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Image 5-->
                    <div class="group relative overflow-hidden basis-1/3 md:basis-1/4 lg:basis-1/3">
                        <!--Image-->
                        <img src="images/prisonbreak.jpg"
                            class="group-hover:scale-110 group-hover:opacity-50 duration-500">
                        <!--Image Detail Container-->
                        <div class="absolute px-6 bottom-8">
                            <h3 class="dark:text-gega-grey group-hover:text-gega-melon group-hover:mb-2 duration-500">
                                Prison Break</h3>
                            <p
                                class="text-xs opacity-0 group-hover:opacity-100 group-hover:mb-10 duration-500 dark:text-gega-grey">
                                Lorem
                                ipsum dolor sit amet
                                consectetur adipisicing elit. Praesentium,
                                impedit.</p>
                            <!--Icons Container-->
                            <div
                                class="absolute flex space-x-8 text-gega-grey opacity-0 -bottom-2 group-hover:bottom-2 group-hover:opacity-100 duration-500">
                                <a class="hover:text-gega-red" href="#"><i class="fa-solid fa-play"></i></a>
                                <a class="hover:text-gega-red" href="#"><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Image 6-->
                    <div class="group relative overflow-hidden basis-1/3 md:basis-1/4  lg:basis-1/3">
                        <!--Image-->
                        <img src="images/hr (1).webp"
                            class="group-hover:scale-110 group-hover:opacity-50 duration-500">
                        <!--Image Detail Container-->
                        <div class="absolute px-6 bottom-8">
                            <h3 class="dark:text-gega-grey group-hover:text-gega-melon group-hover:mb-2 duration-500">
                                Hacksaw Ridge</h3>
                            <p
                                class="text-xs opacity-0 group-hover:opacity-100 group-hover:mb-10 duration-500 dark:text-gega-grey">
                                Lorem
                                ipsum dolor sit amet
                                consectetur adipisicing elit. Praesentium,
                                impedit.</p>
                            <!--Icons Container-->
                            <div
                                class="absolute flex space-x-8 text-gega-grey opacity-0 -bottom-2 group-hover:bottom-2 group-hover:opacity-100 duration-500">
                                <a class="hover:text-gega-red" href="#"><i class="fa-solid fa-play"></i></a>
                                <a class="hover:text-gega-red" href="#"><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Image 7-->
                    <div
                        class="group relative overflow-hidden basis-1/3 md:basis-1/4  lg:basis-1/3 hidden md:block lg:hidden">
                        <!--Image-->
                        <img src="images/lifeisbeatifull.jpg"
                            class="group-hover:scale-110 group-hover:opacity-50 duration-500">
                        <!--Image Detail Container-->
                        <div class="absolute px-6 bottom-8">
                            <h3 class="dark:text-gega-grey group-hover:text-gega-melon group-hover:mb-2 duration-500">
                                Life Is Beatifull</h3>
                            <p
                                class="text-xs opacity-0 group-hover:opacity-100 group-hover:mb-10 duration-500 dark:text-gega-grey">
                                Lorem
                                ipsum dolor sit amet
                                consectetur adipisicing elit. Praesentium,
                                impedit.</p>
                            <!--Icons Container-->
                            <div
                                class="absolute flex space-x-8 text-gega-grey opacity-0 -bottom-2 group-hover:bottom-2 group-hover:opacity-100 duration-500">
                                <a class="hover:text-gega-red" href="#"><i class="fa-solid fa-play"></i></a>
                                <a class="hover:text-gega-red" href="#"><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--Image 8-->
                    <div
                        class="group relative overflow-hidden basis-1/3 md:basis-1/4  lg:basis-1/3  hidden md:block lg:hidden">
                        <!--Image-->
                        <img src="images/liarliar (1).jpg"
                            class="group-hover:scale-110 group-hover:opacity-50 duration-500">
                        <!--Image Detail Container-->
                        <div class="absolute px-6 bottom-8">
                            <h3 class="dark:text-gega-grey group-hover:text-gega-melon group-hover:mb-2 duration-500">
                                LIAR LIAR</h3>
                            <p
                                class="text-xs opacity-0 group-hover:opacity-100 group-hover:mb-10 duration-500 dark:text-gega-grey">
                                Lorem
                                ipsum dolor sit amet
                                consectetur adipisicing elit. Praesentium,
                                impedit.</p>
                            <!--Icons Container-->
                            <div
                                class="absolute flex space-x-8 text-gega-grey opacity-0 -bottom-2 group-hover:bottom-2 group-hover:opacity-100 duration-500">
                                <a class="hover:text-gega-red" href="#"><i class="fa-solid fa-play"></i></a>
                                <a class="hover:text-gega-red" href="#"><i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Matrix :)-->
    <section class="dark:bg-white bg-black dark:text-black text-white
">
        <!--Matrix Container-->
        <div class=" container flex items-center justify-center relative">
            <!--Left Content-->
            <div class="md:basis-1/3 lg:basis-1/2">
                <img src="images/matrix.png" alt="Matrix Image" class="lg:absolute lg:bottom-0 ">

            </div>
            <!--Right Content-->
            <div class="md:basis-2/3 lg:basis-1/2">
                <!--Right Content-->
                <div class="flex flex-col justify-center py-10">
                    <h3 class="tracking-wider text-gega-melon">ACTION, DRAMA, THRILLER</h3>
                    <h2 class="mb-2">Matrix Reloaded</h2>
                    <p class="text-sm mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste repudiandae
                        temporibus molestias magni aliquid dolorem impedit suscipit quisquam inventore iusto?</p>
                    <h3 class="tracking-wider text-gega-red">8 WINS 34 NOMINATIONS</h3>
                </div>
            </div>
            <!--Oldie-Goldie-->
            <div
                class=" left-10 absolute -top-12 lg:left-0 w-24 h-24 bg-gega-melon rounded-full text-center flex items-center ">
                <p class="font-gemunu uppercase font-bold text-xl text-gega-red -rotate-45 ">Oldie & Goldie</p>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer class="bg-black text-gega-grey ">
        <div class="container flex flex-col md:flex-row px-10 lg:px-0  pb-8">
            <!--Left-->
            <div class="basis-1/3">
                <a href="#"
                    class="text-3xl lg:text-6xl font-bold text-transparent bg-gradient-to-r bg-clip-text from-gega-red to-gega-grey">WATCH</a>
                <p class="text-sm ml-2"> 2023 Buse Nur Çetin &copy; COPYRIGHT</p>

            </div>
            <!--Middle-->
            <div class="basis-1/3">
                <h2 class="mb-2 text-gega-red">LINKS</h2>
                <div class="grid grid-cols-5 gap-2 uppercase">

                    <a class="col-span-2 hover:text-gega-melon duration-500" href="#">Movies</a>
                    <a class="col-span-2 hover:text-gega-melon duration-500" href="#">Celebrities</a>
                    <a class="col-span-2 hover:text-gega-melon duration-500" href="#">Blog</a>
                    <a class="col-span-2 hover:text-gega-melon duration-500" href="#">News</a>
                    <a class="col-span-2 hover:text-gega-melon duration-500" href="#">About</a>

                </div>

            </div>
            <!--Right Section-->
            <div class="basis-1/3">
                <h2 class="mb-2 text-gega-red ">FOLLOW US</h2>
                <form action="" class="flex">
                    <input type="text"
                        class="py-1 px-2 bg-transparent border border-gega-red placeholder:text-xs outline-none"
                        placeholder="TYPE YOUR EMAIL">
                    <button
                        class="py-1 px-2 bg-transparent border border-gega-red bg-gega-red font-gemunu uppercase hover:text-gega-melon duration-500">Subscribe</button>
                </form>

            </div>

        </div>

    </footer>

    <script src="js/script.js"></script>

</body>

</html>
