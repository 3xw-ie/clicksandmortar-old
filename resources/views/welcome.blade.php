<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clicks &amp; Mortar</title>

        <link rel="stylesheet" type="text/css" href="{{ mix('/css/site.css') }}">
    </head>
    <body>
        <header class="bg-blue px-12 py-4 min-h-screen-50 bg-image-shopping-bags bg-cover bg-center bg-black-50 bg-multiply">
            <nav class="flex items-center justify-between">
                <span>
                    {{-- <img src="" alt=""> --}}
                    <h1 class="text-white font-light">Clicks &amp; Mortar</h1>
                </span>
                <span>
                    <ul class="list-reset flex">
                        <li>
                            <a href="" class="mr-8 text-white uppercase no-underline tracking-wide border-b-2">Home</a>
                        </li>
                        <li>
                            <a href="" class="mr-8 text-white uppercase no-underline tracking-wide">Our Mission</a>
                        </li>
                        <li>
                            <a href="" class="mr-8 text-white uppercase no-underline tracking-wide">Contact</a>
                        </li>
                        <li>
                           <a href="" class="text-white uppercase no-underline">Submit a Store</a>
                        </li>
                    </ul>
                </span>
            </nav>
            <h1 class="font-serif text-5xl font-semibold text-white w-screen-60 mx-auto mt-24">Find a store near you offering click-and-collect.</h1>
        </header>
        <main>
            <section>
                <form class="bg-white rounded h-48 w-screen-60 mx-auto -mt-24 shadow-lg flex flex-col justify-center">
                    <label for="search" class="mx-12 mb-6 text-4xl">
                        Search by store name, type or city/town.
                    </label>
                    <div class="flex mx-12">
                        <input type="text" name="search" class="bg-grey-light rounded-l flex-grow p-4">
                        <button type="button" class="bg-indigo text-white uppercase p-4 rounded-r">Search</button>
                    </dov>
                </form>
            </section>
            <section class="m-16 flex flex-wrap">
                <div class="w-1/3 p-6">
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
                            <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-2">More Info</a>
                        </footer>
                    </figure>
                </div>
                <div class="w-1/3 p-6">
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
                            <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-2">More Info</a>
                        </footer>
                    </figure>
                </div>
                <div class="w-1/3 p-6">
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
                            <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-2">More Info</a>
                        </footer>
                    </figure>
                </div>
                <div class="w-1/3 p-6">
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
                            <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-2">More Info</a>
                        </footer>
                    </figure>
                </div>
                <div class="w-1/3 p-6">
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
                            <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-2">More Info</a>
                        </footer>
                    </figure>
                </div>
                <div class="w-1/3 p-6">
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
                            <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-2">More Info</a>
                        </footer>
                    </figure>
                </div>
                <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md mx-auto mt-8">Load more stores</a>
            </section>
            <section class="bg-grey-light">
                <div class="pt-24 pr-12 pb-0 pl-24 flex flex-column">
                   <svg class="h-96 flex-no-shrink text-indigo fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16 2h4v15a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V0h16v2zm0 2v13a1 1 0 0 0 1 1 1 1 0 0 0 1-1V4h-2zM2 2v15a1 1 0 0 0 1 1h11.17a2.98 2.98 0 0 1-.17-1V2H2zm2 8h8v2H4v-2zm0 4h8v2H4v-2zM4 4h8v4H4V4z"/></svg>
                   <div class="ml-12 mt-12 w-144">
                       <h1 class="font-serif text-indigo text-4xl">Our Blog &rarr;</h1>
                       <p class="text-black text-xl mt-2 mb-6">
                           Learn how to make your retail business more digital to truly become a clicks-and-mortar business.
                       </p>
                       <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md">Visit the blog</a>
                   </div>
                </div>
                <div class="relative -mt-40 pl-64 w-screen flex overflow-x-scroll no-scrollbar">
                    <div class="w-96 px-6 flex-no-shrink">
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
                    <div class="w-96 px-6 flex-no-shrink">
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
                    <div class="w-96 px-6 flex-no-shrink">
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
                    <div class="w-96 px-6 flex-no-shrink">
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
                    <div class="w-96 px-6 flex-no-shrink">
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
                    <div class="w-96 px-6 flex-no-shrink">
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
                <div class="flex justify-center py-8">
                    <button class="bg-white shadow-md text-indigo-lightest text-2xl rounded-full p-2 h-12">
                        <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M7.05 9.293L6.343 10 12 15.657l1.414-1.414L9.172 10l4.242-4.243L12 4.343z"/></svg>
                    </button>
                    <button class="bg-white shadow-md text-indigo text-2xl rounded-full p-2 h-12 ml-4">
                        <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                    </button>
                </div>
            </section>
            <section class="bg-indigo text-white">
                <div class="pt-24 pr-12 pb-12 pl-24 flex flex-column">
                   <svg class="h-96 flex-no-shrink fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/></svg>
                   <div class="ml-12 mt-12 w-144">
                       <h1 class="font-serif text-4xl">Our Mission &rarr;</h1>
                       <p class="text-grey-lightest text-xl mt-2 mb-6">
                           Learn how to make your retail business more digital to truly become a clicks-and-mortar business.
                       </p>
                       <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md">Visit the blog</a>
                   </div>
                </div>
            </section>
            <section class="bg-white text-grey-darker">
                <div class="pt-24 pr-12 pb-12 pl-24 flex flex-column">
                   <svg class="h-96 flex-no-shrink fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V0L8.11 5.87 3 12h4v8L17 8h-4z"/></svg>
                   <div class="ml-12 mt-12 w-144">
                       <h1 class="font-serif text-4xl">About 3xW &rarr;</h1>
                       <p class="text-xl text-grey-dark mt-2 mb-6">
                           3xW Digital helps small businesses and freelancers grow.
                       </p>
                       <p class="text-xl text-grey-dark mb-6">
                            If you think you could do with some help growing your business online or bringing your customer experience to the next level, we’d love to work with you.
                       </p>
                       <a class="bg-indigo text-white uppercase tracking-wide p-2 rounded shadow-md">Visit Site</a>
                       <a class="bg-white text-indigo uppercase tracking-wide p-2 rounded shadow-md ml-2">Get in touch</a>
                   </div>
                </div>
            </section>
        </main>
        <footer class="bg-grey-light flex px-64 py-16">
            <div class="w-1/3 flex flex-col items-center">
                <div>
                    <h1 class="text-semibold font-serif">by 3xW</h1>
                    <ul class="list-reset">
                        <li class="my-4">
                            <a href="" class="no-underline text-grey-darkest">About 3xW</a>
                        </li>
                        <li class="my-4">
                            <a href="" class="no-underline text-grey-darkest">Work with 3xW</a>
                        </li>
                        <li class="my-4">
                            <a href="" class="invisible">You found this. Well done.</a>
                        </li>
                        <li class="my-4">
                            <p class="no-underline text-grey-darkest">&copy; 3xW Digital Limited, 2018</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-1/3 flex flex-col items-center">
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
            <div class="w-1/3 flex flex-col items-center">
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
    </body>
</html>
