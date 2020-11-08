<!DOCTYPE html>
<html>

    <?php 
        include("vars/header.php");
        include("vars/navbar.php");
    ?>

    <body>

        <section class="hero is-primary is-fullheight is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Welcome to <span class='twenty-title'>2Twenty</span> Marketplace!
                    </h1>
                    <h2 class="subtitle">
                        Find things you love. Become an independent seller. All right here.
                    </h2>
                    <form class="field">
                        <div class="control">
                            <input class="input is-rounded" type="text" placeholder="Search for sellers and items">
                        </div>
                    </form>
                    <button class="button mt-4 is-rounded is-primary is-outlined is-inverted" id="more">
                        <span class="icon">
                            <i class="fas fa-arrow-down"></i>
                        </span>
                        <span>See More</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="section" id="body">
            <div class="container">
                <h1 class="title">Featured Items</h1>
                <h2 class="subtitle">Our top items, from our top sellers!</h2>
                <div class="columns">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image"><img src="https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-product-2_large.png?format=jpg&quality=90&v=1530129318"></figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Sample Shoes</p>
                                        <p class="subtitle is-6">by @sampleshop</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image"><img src="https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-product-5_large.png?format=jpg&quality=90&v=1530129458"></figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Sample Wrist Watch</p>
                                        <p class="subtitle is-6">by @sampleshop</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image"><img src="https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-product-4_large.png?format=jpg&quality=90&v=1530129360"></figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Sample Hat</p>
                                        <p class="subtitle is-6">by @sampleshop</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            include("vars/footer.php");
        ?>

    </body>

</html>