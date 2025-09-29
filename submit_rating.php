<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Ratings</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: left;
            width: 300px;
        }
        input, textarea, button {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        h2, h3 {
            color: #333;
        }
        #rating_result {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Rate Our Service</h2>
    <form action="ratings.php" method="post">
        <label for="service_name">Service Name:</label>
        <input type="text" name="service_name" required>
        
        <label for="rating">Rating (1-5):</label>
        <input type="number" name="rating" min="1" max="5" required>
        
        <label for="review">Review:</label>
        <textarea name="review"></textarea>
        
        <label for="user_name">Your Name:</label>
        <input type="text" name="user_name" required>
        
        <label for="user_email">Your Email:</label>
        <input type="email" name="user_email" required>
        
        <button type="submit" name="submit_rating">Submit Rating</button>
    </form>

    <h3>Average Rating</h3>
    <input type="text" id="service_search" placeholder="Enter service name">
    <button onclick="getAverageRating()">Get Rating</button>
    <p id="rating_result"></p>

    <script>
        function getAverageRating() {
            var serviceName = document.getElementById('service_search').value;
            if (serviceName) {
                $.ajax({
                    url: 'ratings.php?get_rating=true&service_name=' + serviceName,
                    type: 'GET',
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.avg_rating) {
                            document.getElementById('rating_result').innerText = 
                                `Average Rating: ${parseFloat(data.avg_rating).toFixed(1)} (${data.total_ratings} reviews)`;
                        } else {
                            document.getElementById('rating_result').innerText = "No ratings yet.";
                        }
                    },
                    error: function() {
                        alert("Error fetching rating");
                    }
                });
            } else {
                alert("Please enter a service name.");
            }
        }
    </script>
</body>
</html>
