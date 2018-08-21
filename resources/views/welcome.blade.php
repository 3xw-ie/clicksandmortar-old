<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Clicks &amp; Mortar</title>
    
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/site.css') }}">
</head>
<body class="antialiased">
    <header class="bg-blue p-4 bg-image-shopping-bags bg-cover bg-center bg-black-50 bg-multiply">
        <nav class="flex flex-col md:flex-row md:items-center md:justify-between md:mx-12">
            <span>
                <h1 class="text-white font-light mb-4 md:mb-0">Clicks &amp; Mortar</h1>
            </span>
            <span>
                <ul class="list-reset flex">
                    <li>
                        <a href="" class="text-white uppercase no-underline tracking-wide border-b-2 mr-8">Blog</a>
                    </li>
                    <li>
                        <a href="" class="text-white uppercase no-underline tracking-wide mr-8">About</a>
                    </li>
                    <li>
                        <a href="" class="text-white uppercase no-underline tracking-wide">Contact</a>
                    </li>
                </ul>
            </span>
        </nav>
        <h1 class="font-serif text-2xl sm:text-3xl md:text-4xl font-semibold text-white md:w-screen-60 mx-auto mt-12 mb-24 md:mt-24 md:mb-32">Find a store near you offering <br class="hidden lg:inline">click-and-collect.</h1>
    </header>
    <main>
        <section class="mb-8">
            <form class="bg-white rounded md:h-48 md:w-screen-60 mx-4 md:mx-auto -mt-16 md:-mt-24 p-4 sm:p-8 md:py-0 shadow-lg flex flex-col justify-center">
                <label for="search" class="mb-4 md:mb-6 text-xl md:text-3xl">
                    Search by store name, type or city/town.
                </label>
                <div class="flex">
                    <input type="text" name="search" class="min-w-0 bg-grey-light rounded-l flex-grow p-2 md:p-3 lg:p-4">
                    <button type="button" class="inline-block bg-indigo text-white uppercase p-2 md:p-3 lg:p-4 rounded-r">Search</button>
                </div>
            </form>
        </section>
        <section class="p-4 md:p-8 sm:flex flex-wrap">
            <div class="sm:w-1/2 lg:w-1/3 pb-6 sm:p-2 md:p-4">
                <figure class="background-white rounded shadow-lg">
                    <header>
                        <img src="/img/store-4.jpg" alt="" class="rounded-t">
                    </header>
                    <main class="p-4">
                        <p class="uppercase tracking-wide text-xs">Fashion · Shoes · Women</p>
                        <h1 class="text-2xl font-normal my-2">Walk Shoes</h1>
                        <p class="text-indigo font-semibold text-sm">5 Paul Street, Cork</p>
                    </main>
                    <footer class="bg-grey-lighter px-4 py-6">
                        <a class="bg-indigo text-white uppercase tracking-wide p-2 rounded shadow-md">Visit Site</a>
                        <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-1">More Info</a>
                    </footer>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 pb-6 sm:p-2 md:p-4">
                <figure class="background-white rounded shadow-lg">
                    <header>
                        <img src="/img/store-4.jpg" alt="" class="rounded-t">
                    </header>
                    <main class="p-4">
                        <p class="uppercase tracking-wide text-xs">Fashion · Shoes · Women</p>
                        <h1 class="text-2xl font-normal my-2">Walk Shoes</h1>
                        <p class="text-indigo font-semibold text-sm">5 Paul Street, Cork</p>
                    </main>
                    <footer class="bg-grey-lighter px-4 py-6">
                        <a class="bg-indigo text-white uppercase tracking-wide p-2 rounded shadow-md">Visit Site</a>
                        <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-1">More Info</a>
                    </footer>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 pb-6 sm:p-2 md:p-4">
                <figure class="background-white rounded shadow-lg">
                    <header>
                        <img src="/img/store-4.jpg" alt="" class="rounded-t">
                    </header>
                    <main class="p-4">
                        <p class="uppercase tracking-wide text-xs">Fashion · Shoes · Women</p>
                        <h1 class="text-2xl font-normal my-2">Walk Shoes</h1>
                        <p class="text-indigo font-semibold text-sm">5 Paul Street, Cork</p>
                    </main>
                    <footer class="bg-grey-lighter px-4 py-6">
                        <a class="bg-indigo text-white uppercase tracking-wide p-2 rounded shadow-md">Visit Site</a>
                        <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-1">More Info</a>
                    </footer>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 pb-6 sm:p-2 md:p-4">
                <figure class="background-white rounded shadow-lg">
                    <header>
                        <img src="/img/store-4.jpg" alt="" class="rounded-t">
                    </header>
                    <main class="p-4">
                        <p class="uppercase tracking-wide text-xs">Fashion · Shoes · Women</p>
                        <h1 class="text-2xl font-normal my-2">Walk Shoes</h1>
                        <p class="text-indigo font-semibold text-sm">5 Paul Street, Cork</p>
                    </main>
                    <footer class="bg-grey-lighter px-4 py-6">
                        <a class="bg-indigo text-white uppercase tracking-wide p-2 rounded shadow-md">Visit Site</a>
                        <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-1">More Info</a>
                    </footer>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 pb-6 sm:p-2 md:p-4">
                <figure class="background-white rounded shadow-lg">
                    <header>
                        <img src="/img/store-4.jpg" alt="" class="rounded-t">
                    </header>
                    <main class="p-4">
                        <p class="uppercase tracking-wide text-xs">Fashion · Shoes · Women</p>
                        <h1 class="text-2xl font-normal my-2">Walk Shoes</h1>
                        <p class="text-indigo font-semibold text-sm">5 Paul Street, Cork</p>
                    </main>
                    <footer class="bg-grey-lighter px-4 py-6">
                        <a class="bg-indigo text-white uppercase tracking-wide p-2 rounded shadow-md">Visit Site</a>
                        <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-1">More Info</a>
                    </footer>
                </figure>
            </div>
            <div class="sm:w-1/2 lg:w-1/3 pb-6 sm:p-2 md:p-4">
                <figure class="background-white rounded shadow-lg">
                    <header>
                        <img src="/img/store-4.jpg" alt="" class="rounded-t">
                    </header>
                    <main class="p-4">
                        <p class="uppercase tracking-wide text-xs">Fashion · Shoes · Women</p>
                        <h1 class="text-2xl font-normal my-2">Walk Shoes</h1>
                        <p class="text-indigo font-semibold text-sm">5 Paul Street, Cork</p>
                    </main>
                    <footer class="bg-grey-lighter px-4 py-6">
                        <a class="bg-indigo text-white uppercase tracking-wide p-2 rounded shadow-md">Visit Site</a>
                        <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-1">More Info</a>
                    </footer>
                </figure>
            </div>
            <div class="w-full flex">
                <a class="inline-block bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md my-4 mx-auto">Load more stores</a>
            </div>
        </section>
        <section class="bg-grey-light">
            <div class="md:pt-24 md:pr-8 pb-0 md:pl-24 flex flex-column">
                <svg class="h-96 flex-no-shrink text-indigo fill-current hidden md:inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16 2h4v15a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V0h16v2zm0 2v13a1 1 0 0 0 1 1 1 1 0 0 0 1-1V4h-2zM2 2v15a1 1 0 0 0 1 1h11.17a2.98 2.98 0 0 1-.17-1V2H2zm2 8h8v2H4v-2zm0 4h8v2H4v-2zM4 4h8v4H4V4z"/></svg>
                <div class="pt-8 px-8 md:p-0 md:pt-12 md:pl-12 md:w-144">
                    <div class="flex items-center mb-4">
                        <svg class="md:hidden h-24 mr-4 flex-no-shrink text-indigo fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16 2h4v15a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V0h16v2zm0 2v13a1 1 0 0 0 1 1 1 1 0 0 0 1-1V4h-2zM2 2v15a1 1 0 0 0 1 1h11.17a2.98 2.98 0 0 1-.17-1V2H2zm2 8h8v2H4v-2zm0 4h8v2H4v-2zM4 4h8v4H4V4z"/></svg>
                        <h1 class="font-serif text-indigo text-4xl">Our <br class="inline md:hidden">Blog &rarr;</h1>
                    </div>
                    <p class="text-black text-xl my-2">
                        Learn how to make your retail business more digital to truly become a clicks-and-mortar business.
                    </p>
                    <a class="inline-block bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md">Visit the blog</a>
                </div>
            </div>
            <div id="blog-wrapper" class="relative py-8 md:-mt-40 lg:-mt-40 md:pl-64 w-screen flex overflow-x-scroll no-scrollbar" style="-webkit-overflow-scrolling: touch;">
                <div class="w-80 md:w-96 px-4 md:px-6 flex-no-shrink">
                    <figure class="bg-white rounded shadow-lg">
                        <header>
                            <img src="/img/store-4.jpg" alt="" class="rounded-t">
                        </header>
                        <main class="p-4">
                            <h1 class="text-2xl font-normal my-2">From 2000 SKUs to just 1</h1>
                            <p class="uppercase tracking-wide text-xs">4 min read</p>
                            <p class="mt-4 mb-2">
                                This week we launched Custom Bots, a powerful new way to build completely customizable chatbots that work right…
                            </p>
                            <p class="text-sm italic underline p-2 -mx-2 rounded hover:bg-grey-lighter w-auto inline-block">Read more &rarr;</p>
                        </main>
                    </figure>
                </div>
                <div class="w-80 md:w-96 px-4 md:px-6 flex-no-shrink">
                    <figure class="bg-white rounded shadow-lg">
                        <header>
                            <img src="/img/store-4.jpg" alt="" class="rounded-t">
                        </header>
                        <main class="p-4">
                            <h1 class="text-2xl font-normal my-2">Intro to Omnichanell Retail</h1>
                            <p class="uppercase tracking-wide text-xs">4 min read</p>
                            <p class="mt-4 mb-2">
                                This week we launched Custom Bots, a powerful new way to build completely customizable chatbots that work right…
                            </p>
                            <p class="text-sm italic underline p-2 -mx-2 rounded hover:bg-grey-lighter w-auto inline-block">Read more &rarr;</p>
                        </main>
                    </figure>
                </div>
                <div class="w-80 md:w-96 px-4 md:px-6 flex-no-shrink">
                    <figure class="bg-white rounded shadow-lg">
                        <header>
                            <img src="/img/store-4.jpg" alt="" class="rounded-t">
                        </header>
                        <main class="p-4">
                            <h1 class="text-2xl font-normal my-2">Launching your store 101</h1>
                            <p class="uppercase tracking-wide text-xs">4 min read</p>
                            <p class="mt-4 mb-2">
                                This week we launched Custom Bots, a powerful new way to build completely customizable chatbots that work right…
                            </p>
                            <p class="text-sm italic underline p-2 -mx-2 rounded hover:bg-grey-lighter w-auto inline-block">Read more &rarr;</p>
                        </main>
                    </figure>
                </div>
                <div class="w-80 md:w-96 px-4 md:px-6 flex-no-shrink">
                    <figure class="bg-white rounded shadow-lg h-full flex flex-col">
                        <header>
                            <img src="/img/store-4.jpg" alt="" class="rounded-t">
                        </header>
                        <main class="h-full flex flex-col p-4">
                            <h1 class="text-2xl font-normal my-2">Walk Shoes</h1>
                            <p class="uppercase tracking-wide text-xs">4 min read</p>
                            <p class="mt-4 mb-2">
                                This week we launched Custom Bots, a powerful new way to build completely customizable chatbots that work right…
                            </p>
                            <p class="flex-1 text-sm italic underline p-2 -mx-2 rounded hover:bg-grey-lighter w-auto inline-block">Read more &rarr;</p>
                        </main>
                    </figure>
                </div>
                <div class="w-80 md:w-96 px-4 md:px-6 flex-no-shrink">
                    <figure class="bg-white rounded shadow-lg">
                        <header>
                            <img src="/img/store-4.jpg" alt="" class="rounded-t">
                        </header>
                        <main class="p-4">
                            <h1 class="text-2xl font-normal my-2">Walk Shoes</h1>
                            <p class="uppercase tracking-wide text-xs">4 min read</p>
                            <p class="mt-4 mb-2">
                                This week we launched Custom Bots, a powerful new way to build completely customizable chatbots that work right…
                            </p>
                            <p class="text-sm italic underline p-2 -mx-2 rounded hover:bg-grey-lighter w-auto inline-block">Read more &rarr;</p>
                        </main>
                    </figure>
                </div>
                <div class="w-80 md:w-96 px-4 md:px-6 flex-no-shrink">
                    <figure class="bg-white rounded shadow-lg">
                        <header>
                            <img src="/img/store-4.jpg" alt="" class="rounded-t">
                        </header>
                        <main class="p-4">
                            <h1 class="text-2xl font-normal my-2">Walk Shoes</h1>
                            <p class="uppercase tracking-wide text-xs">4 min read</p>
                            <p class="mt-4 mb-2">
                                This week we launched Custom Bots, a powerful new way to build completely customizable chatbots that work right…
                            </p>
                            <p class="text-sm italic underline p-2 -mx-2 rounded hover:bg-grey-lighter w-auto inline-block">Read more &rarr;</p>
                        </main>
                    </figure>
                </div>
            </div>
            <div class="flex justify-center pb-8">
                <button id="blog-previous-button" class="bg-white shadow-md text-indigo-lightest text-2xl rounded-full p-2 h-12 focus:outline-none focus:shadow-outline">
                    <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7.05 9.293L6.343 10 12 15.657l1.414-1.414L9.172 10l4.242-4.243L12 4.343z"/></svg>
                </button>
                <button id="blog-next-button" class="bg-white shadow-md text-indigo text-2xl rounded-full p-2 h-12 ml-4 focus:outline-none focus:shadow-outline">
                    <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                </button>
            </div>
        </section>
        <section class="bg-indigo text-white">
            <div class="p-8 md:pt-24 md:pr-12 md:pb-12 md:pl-24 flex flex-column">
                <svg class="hidden md:block h-96 flex-no-shrink fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/></svg>
                <div class="md:pt-12 md:pl-12 md:w-144">
                    <div class="flex items-center mb-4">
                        <svg class="md:hidden h-24 mr-4 flex-no-shrink fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/></svg>
                        <h1 class="font-serif text-4xl">Our <br class="inline md:hidden">Mission<span class="hidden xs:inline"> &rarr;</span></h1>
                    </div>
                    <div class="text-grey-lightest text-xl my-2">
                        <p class="mb-4">
                            Irish businesses are being outperformed online.
                        </p>
                        <p>
                            We are determined to empower Irish businesses with the knowledge, tools, and help to succeed.
                        </p>
                    </div>
                    <a class="inline-block bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md">Visit the blog</a>
                </div>
            </div>
        </section>
        <section class="bg-white text-grey-darker">
            <div class="p-8 md:pt-24 md:pr-12 md:pb-12 md:pl-24 flex flex-column">
                <svg class="hidden md:block h-96 flex-no-shrink fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V0L8.11 5.87 3 12h4v8L17 8h-4z"/></svg>
                <div class="md:ml-12 md:mt-12 md:w-144">
                    <div class="flex items-center mb-4">
                        <svg class="md:hidden h-24 flex-no-shrink fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V0L8.11 5.87 3 12h4v8L17 8h-4z"/></svg>
                        <h1 class="font-serif text-grey-darkest text-4xl">About <br class="inline md:hidden">3xW &rarr;</h1>
                    </div>
                    <div class="text-xl text-grey-dark my-2">
                        <p class="mb-4">
                            3xW Digital helps small businesses and freelancers grow.
                        </p>
                        <p>
                            If you think you could do with some help growing your business online or bringing your customer experience to the next level, we’d love to work with you.
                        </p>
                    </div>
                    <a class="inline-block bg-indigo text-white uppercase tracking-wide p-2 rounded shadow-md">Visit Site</a>
                    <a class="inline-block bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-1">Get in touch</a>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-grey-light md:flex p-8 md:px-64 md:py-16">
        <div class="md:w-1/3 md:flex flex-col items-center pb-8 md:pb-0">
            <div>
                <h1 class="text-semibold font-serif">by 3xW</h1>
                <ul class="list-reset">
                    <li class="my-4">
                        <a href="" class="no-underline text-grey-darkest">About 3xW</a>
                    </li>
                    <li class="my-4">
                        <a href="" class="no-underline text-grey-darkest">Work with 3xW</a>
                    </li>
                    <li class="hidden md:block my-4">
                        <a href="" class="invisible">You found this. Well done.</a>
                    </li>
                    <li class="my-4">
                        <p class="no-underline text-grey-darkest">&copy; 3xW Digital Limited, 2018</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="md:w-1/3 md:flex flex-col items-center pb-8 md:pb-0">
            <div>
                <p class="uppercase tracking-wide leading-looser">Navigation</p>
                <ul class="list-reset">
                    <li class="my-4">
                        <a href="" class="no-underline text-grey-darkest">Home</a>
                    </li>
                    <li class="my-4">
                        <a href="" class="no-underline text-grey-darkest">Mission</a>
                    </li>
                    <li class="my-4">
                        <a href="" class="no-underline text-grey-darkest">Contact</a>
                    </li>
                    <li class="my-4">
                        <a href="" class="no-underline text-grey-darkest">Submit a Store</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="md:w-1/3 md:flex flex-col items-center">
            <div>
                <p class="uppercase tracking-wide leading-looser">Click &amp; Collect</p>
                <ul class="list-reset">
                    <li class="my-4">
                        <a href="" class="no-underline text-grey-darkest">Cork</a>
                    </li>
                    <li class="my-4">
                        <a href="" class="no-underline text-grey-darkest">Dublin</a>
                    </li>
                    <li class="my-4">
                        <a href="" class="no-underline text-grey-darkest">Galway</a>
                    </li>
                    <li class="my-4">
                        <a href="" class="no-underline text-grey-darkest">Limerick</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        blogWrapper = document.querySelector('#blog-wrapper');

        nextBlogButton = document.querySelector('#blog-next-button');
        previousBlogButton = document.querySelector('#blog-previous-button');

        blogWrapper.addEventListener('scroll', function(event) {
            if (blogWrapper.scrollLeft > 0 && previousBlogButton.classList.contains('text-indigo-lightest')) {
                previousBlogButton.classList.remove('text-indigo-lightest');
                previousBlogButton.classList.add('text-indigo');
            }
            if (blogWrapper.scrollLeft === 0 && previousBlogButton.classList.contains('text-indigo')) {
                previousBlogButton.classList.remove('text-indigo');
                previousBlogButton.classList.add('text-indigo-lightest');
            }
            if (blogWrapper.scrollLeft === blogWrapper.scrollWidth - blogWrapper.clientWidth && nextBlogButton.classList.contains('text-indigo')) {
                nextBlogButton.classList.remove('text-indigo');
                nextBlogButton.classList.add('text-indigo-lightest');
            }
            if (blogWrapper.scrollLeft < blogWrapper.scrollWidth - blogWrapper.clientWidth && nextBlogButton.classList.contains('text-indigo-lightest')) {
                nextBlogButton.classList.remove('text-indigo-lightest');
                nextBlogButton.classList.add('text-indigo');
            }
        });

        nextBlogButton.onclick = function () {
            blogWrapper.scrollBy({left: 320, behavior: 'smooth'});
        }

        previousBlogButton.onclick = function () {
            blogWrapper.scrollBy({left: -320, behavior: 'smooth'});
        }
    </script>
</body>
</html>
