<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Browse through stories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <header>
        <nav>
            <ul id>
                <li><a href="index.html">Home</a></li>
                <li><a href="browsestories.php">Stories</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.html">Sign Up</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            <h2>View Stories</h2>
            <div class="centre">
                <?php
                    include("connection.php");
                
                    $sql = "SELECT * FROM stories";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        echo "<div class='story-list'>";
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='story-item'>" . $row["title"] . " (" . $row["location"] . ") <a href='viewstory.php?id=" . $row["id"] . "'>View</a></div>";
                        }
                        echo "</div>";
                    } else {
                        echo "0 results";
                    }
                
                    $conn->close();
                ?>                
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Touries Inc. All rights reserved.</p>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <ul>
                            <li><a href="faq.html">Frequently Asked Questions</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col">
                    <nav>
                        <ul>
                            <li><a href="contactus.html">Reader's Feedback</a></li>  
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