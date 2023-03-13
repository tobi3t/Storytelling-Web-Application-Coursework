<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Story</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <header>
        <nav>
            <ul id>
                <li><a href="index.php">Home</a></li>
                <li><a href="browsestories.php">Stories</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <li><a href="contactus.php">Contact Us</a></li>

            </ul>
        </nav>
    </header>
    <main>
        <div class="formholder">
            <form action="submit_story.php" method="post" enctype="multipart/form-data">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="location">Location:</label>
                <select id="location" name="location" required>
                    <option value="London">London</option>
                    <option value="Manchester">Manchester</option>
                    <option value="Birmingham">Birmingham</option>
                    <option value="Liverpool">Liverpool</option>
                    <option value="Glasgow">Glasgow</option>
                    <option value="Edinburgh">Edinburgh</option>
                    <option value="Belfast">Belfast</option>
                    <option value="Dublin">Dublin</option>
                    <option value="Newcastle">Newcastle</option>
                    <option value="Leeds">Leeds</option>
                    <option value="Cardiff">Cardiff</option>
                    <option value="Bristol">Bristol</option>
                    <option value="Southampton">Southampton</option>
                    <option value="Portsmouth">Portsmouth</option>
                    <option value="Sheffield">Sheffield</option>
                    <option value="Nottingham">Nottingham</option>
                    <option value="Cambridge">Cambridge</option>
                    <option value="Norwich">Norwich</option>
                    <option value="Plymouth">Plymouth</option>
                    <option value="Exeter">Exeter</option>
                </select>
                <label for="subject">Subject:</label>
                <textarea id="subject" name="subject" required></textarea>

                <label for="story">User Story:</label>
                <textarea id="story" name="story" required></textarea>

                <label for="image">Attach Image:</label>
                <input type="file" id="image" name="image">

                <button type="submit">Submit</button>
            </form>
        </div>
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