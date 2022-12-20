<nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">JobFinder</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
					$current_url = basename($_SERVER['PHP_SELF']);
					$active = "class=\"active\"";
                    $conn = new mysqli("localhost", "usename", "dgh");
									?>
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./blog.html">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="./About.html">
                            About
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.html">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn0">Register</button>
                    <button class="btn1 mx-2">Login</button>
                </form>
            </div>
        </div>
    </nav>