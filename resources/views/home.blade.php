<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js');
</head>

<body>
    <header class="container">
        <nav>
            <img src="../img/dc-logo.png" alt="">
            <ul>
                {{-- <li v-for="link in links" :key="link.text" :class="{ active: link.current }"><a
                        :href="link.url">{{ link . text }}</a></li> --}}
            </ul>
        </nav>
    </header>
    {{-- Jumbotron --}}
    <div class="height">
        <figure class="container">
            <div class="row" v-for="image in images">
                <img :src="getImage(image.image)" alt="">
                {{-- <p>{{ image . text }}</p> --}}
            </div>
        </figure>
    </div>
    {{-- Main --}}
    <main>
        <h1 class="container">Contents goes here </h1>
        <figure class="container">
            <div v-for="comic in comics">
                <div class="card-container">
                    <img :src="comic.thumb" :key="comic.series" :alt="comic.series">
                </div>
                {{-- <figcaption>{{ comic . series }}</figcaption> --}}
            </div>
        </figure>
    </main>
    {{-- Footer --}}
    <div>
        <main>
            <div class="container">
                <div class="ul-flex">
                    <div>
                        <ul>DC COMICS
                            <li>Characters</li>
                            <li>Comics</li>
                            <li>Movies</li>
                            <li>TV</li>
                            <li>Games</li>
                            <li>Videos</li>
                            <li>News</li>
                        </ul>
                        <ul>SHOP
                            <li>Shop DC</li>
                            <li>Shop DC Collactibles</li>
                        </ul>
                    </div>
                    <ul>DC
                        <li>Terms of Use</li>
                        <li>Privacy plicy(New)</li>
                        <li>Ad Choices</li>
                        <li>Advertising</li>
                        <li>Jobs</li>
                        <li>Subscriptions</li>
                        <li>Talent Workshops</li>
                        <li>CPSC Certificates</li>
                        <li>Ratings</li>
                        <li>Shop Help</li>
                        <li>Contacts Us</li>
                    </ul>
                    <ul>SITES
                        <li>DC</li>
                        <li>MAD magazine</li>
                        <li>DC Kids</li>
                        <li>DC Universe</li>
                        <li>Dc Power Visa</li>
                    </ul>
                </div>
            </div>

        </main>
        <footer>
            <div class="container f-flex">
                <button>SING-UP NOW</button>
                <div class="flex">
                    <div v-for="icon in icons">
                        <img :src="getIcon(icon.icon)" alt="">
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>