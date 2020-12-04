<!DOCTYPE html>
<html>
<?php 
        include("vars/header.php");
        include("vars/navbar.php");
        include("src/search.php");

        $items_sale = (getUserSelling(getUserName($_GET["id"])));
    ?>

	<body>
		<section class="section" id="body">
			<div class="container">
                <div class="card">
                    <div class="card-content">
                        <div class="media">
                        <div class="media-left">
                            <figure class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">@<?php echo getUserName($_GET["id"]) ?>'s User Page</p>
                            <p class="subtitle is-6"><span class="tag is-success">Registered 2Twenty User</span> <span class="tag is-danger">ID <?php echo getUserId(getUserName($_GET["id"])); ?></span></p>
                        </div>
                        </div>

                        <div class="content">
                            <div class="columns is-multiline">
                            <?php 
                                if($items_sale) {
                                    foreach($items_sale as &$item) {
                                        $title = $item[1];
                                        $image_url = $item[2];
                                        $tags = explode(", ",$item[3]);
                                        $desc = $item[4];
                                        $seller = $item[5];
                                        $price = $item[6];

                                        echo('
                                        <div class="column is-full-mobile is-half">
                                            <div class="box">
                                                <article class="media">
                                                    <div class="media-left">
                                                        <figure class="image is-64x64">
                                                            <img src="'.$image_url.'" alt="'.$title.'">
                                                        </figure>
                                                    </div>
                                                    <div class="media-content">
                                                        <div class="content">
                                                            <p>
                                                                <strong>@'.$seller.'</strong> is selling <strong>'.$title.'</strong> for <span class="tag is-success">$'.$price.'</span>
                                                                <br/>
                                                                <div class="notification is-light">'.$desc.'</div>
                                                                
                                        ');
                    
                                                            foreach($tags as &$tag) {
                                                                echo(' <a href="search.php?desc='.$tag.'"><span class="tag is-danger">'.$tag.'</span></a> ');
                                                            }

                                        echo('
                                                            </p>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        ');
                                    }
                                } else {
                                    echo('User is not selling any items currently.');
                                }

                            ?> </div>
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