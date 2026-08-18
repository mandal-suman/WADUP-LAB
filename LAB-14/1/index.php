<!DOCTYPE html>
<html>

<head>
    <title>AJAX Navigation Menu</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        nav a {
            margin-right: 20px;
            cursor: pointer;
        }

        #content {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>

    <h1>My Website</h1>

    <nav>
        <a href="#" data-page="home.php">Home</a>
        <a href="#" data-page="about.php">About</a>
        <a href="#" data-page="products.php">Products</a>
        <a href="#" data-page="contact.php">Contact</a>
    </nav>

    <div id="content">
        <h2>Welcome</h2>
        <p>Click a menu item to load content.</p>
    </div>

    <script>
        $(document).ready(function() {

            $("nav a").click(function(event) {
                event.preventDefault();

                var page = $(this).data("page");

                $.ajax({
                    url: page,
                    type: "GET",
                    success: function(data) {
                        $("#content").html(data);
                    },
                    error: function() {
                        $("#content").html("<p>Unable to load content.</p>");
                    }
                });
            });

        });
    </script>

</body>

</html>