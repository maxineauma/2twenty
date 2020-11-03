<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test</title>
        <link rel="stylesheet" href="css/bulma.css">
        <link rel="stylesheet" href="css/twenty.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".navbar-burger").click(function() {
                    $(".navbar-burger").toggleClass("is-active");
                    $(".navbar-menu").toggleClass("is-active");
                });
            });
        </script>
    </head>

    <body>

        <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item">
                    <img src="https://via.placeholder.com/112x28">
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div class="navbar-menu" id="navMenu">
                <div class="navbar-start">
                    <a class="navbar-item">Home</a>
                    <a class="navbar-item">About</a>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-light"><b>Sign up</b></a>
                            <a class="button is-dark">Log in</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section class="hero is-danger">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Welcome to <span class='twenty-title'>2Twenty</span> Marketplace!
                    </h1>
                    <h2 class="subtitle">
                        Find things you love. Become an independent seller. All right here.
                    </h2>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h1 class="title">Container</h1>
            </div>
        </section>

    </body>

</html>