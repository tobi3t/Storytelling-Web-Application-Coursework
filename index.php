<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="browsestories.php">Stories</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            <form class="search-form" action="search_results.php" method="post">
                <input type="text" placeholder="Search" name="search" id="search" required>
                <input type="submit" value="Search">
            </form>
        </div><br>
        <section class="hero">
			<h2>Discover the beauty of the UK through the eyes of tourists</h2>
			<p>Explore unique experiences and hidden gems shared by fellow travelers.</p>
			<a href="#" class="btn">Explore Stories</a>
		</section>
		<section class="stories">
			<h2>Featured Stories</h2>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="https://via.placeholder.com/400x200" alt="story image">
                        <h3>Exploring the Scottish Highlands</h3>
                        <p>By John Smith</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                    <div class="col">
                        <img src="https://via.placeholder.com/400x200" alt="story image">
                        <h3>A Day in London</h3>
                        <p>By Sarah Johnson</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                    <div class="col">
                        <img src="https://via.placeholder.com/400x200" alt="story image">
                        <h3>Discovering Cornwall's Charm</h3>
                        <p>By Mark Lee</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                    <div class="col">
                        <img src="https://via.placeholder.com/400x200" alt="story image">
                        <h3>Gatehead is beautiful</h3>
                        <p>By John Snow</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
		</section>
    </main>
    <footer>
        <p>&copy; 2023 Touries Inc. All rights reserved.</p>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <ul>
                            <li><a href="faq.php">Frequently Asked Questions</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col">
                    <nav>
                        <ul>
                            <li><a href="contactus.php">Reader's Feedback</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
</body>

</html>