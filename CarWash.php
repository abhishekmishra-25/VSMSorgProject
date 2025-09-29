<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Wash Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .service-container {
            max-width: 800px;
            background: white;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .service-header {
            color: #007bff;
        }
        .service-details {
            text-align: left;
            line-height: 1.6;
        }
        .service-details ul {
            list-style-type: none;
            padding: 0;
        }
        .service-details ul li {
            padding: 5px 0;
        }
        .highlight {
            font-weight: bold;
            color: #5cb85c;
        }
        .price-box {
            background: #f1f1f1;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
            border-radius: 5px;
            margin-top: 10px;
        }
        .book-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .book-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="service-container">
    <h2 class="service-header">Car Wash Service</h2>
    <p class="service-details">
        Give your car a fresh, clean look with our professional car wash service. Our experts use high-quality products to ensure a spotless and shining finish.
    </p>

    <h3>What’s Included?</h3>
    <ul class="service-details">
        <li>✔ Exterior body wash</li>
        <li>✔ Interior vacuum cleaning</li>
        <li>✔ Tire and rim cleaning</li>
        <li>✔ Dashboard and console polishing</li>
        <li>✔ Underbody wash</li>
    </ul>

    <h3>Service Options Available</h3>
    <ul class="service-details">
        <li><span class="highlight">Basic Car Wash:</span> Exterior wash & tire cleaning</li>
        <li><span class="highlight">Standard Car Wash:</span> Interior vacuuming & polishing</li>
        <li><span class="highlight">Premium Car Wash:</span> Full cleaning, waxing & underbody wash</li>
    </ul>

    <h3>Benefits of Regular Car Washing</h3>
    <ul class="service-details">
        <li>✔ Protects the paint & finish</li>
        <li>✔ Maintains a clean and hygienic interior</li>
        <li>✔ Enhances vehicle resale value</li>
        <li>✔ Prevents rust and corrosion</li>
    </ul>

    <div class="price-box">💰 Price: ₹500 – ₹2,500 (Based on service type & vehicle size)</div>

    <a href="Requester/SubmitRequest.php" class="book-btn">Book Now</a>
</div>

</body>
</html>
