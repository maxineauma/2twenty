<!DOCTYPE html>
<html>

    <?php 
        include("vars/header.php");
        include("vars/navbar.php");
        include("src/featured.php");

        $featured = (show_featured());
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
                    <form class="field" action="search.php" method="POST">
                        <div class="control">
                            <input class="input is-rounded" type="text" name="desc" placeholder="Search for sellers and items">
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
                    <?php 
                        foreach($featured as &$item) {
                            $title = $item[0][1];
                            $image_url = $item[0][2];
                            $seller = $item[0][5];

                            echo('
                            <div class="column is-4">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-256x256"><img src="'.$image_url.'"></figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-content">
                                                <p class="title is-4">'.$title.'</p>
                                                <p class="subtitle is-6">by @'.$seller.'</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ');
                        }
                    ?>
                </div>
            </div>
        </section>

        <?php
            include("vars/footer.php");
        ?>

    </body>

</html>