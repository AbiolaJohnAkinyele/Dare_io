<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Landing Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            line-height: 1.6;
        }

        /* Hero Section */
        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            background: #f4f4f4;
            padding: 20px;
        }

        .hero h1 {
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .hero button {
            padding: 10px 20px;
            font-size: 1rem;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        /* Features Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 50px;
            text-align: center;
            background: #fff;
        }

        .feature {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .feature img {
            width: 50px;
            height: 50px;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            background: #333;
            color: white;
        }
    </style>
</head>
<body>
    
    <section class="hero">
        <h1>Welcome to Our Service</h1>
        <p>Your perfect solution for modern needs.</p>
        <button>Sign Up Now</button>
    </section>

    <section class="features">
        <div class="feature">
            <img src="feature1.png" alt="Feature 1">
            <h3>Feature One</h3>
            <p>Short description of the feature.</p>
        </div>
        <div class="feature">
            <img src="feature2.png" alt="Feature 2">
            <h3>Feature Two</h3>
            <p>Short description of the feature.</p>
        </div>
        <div class="feature">
            <img src="feature3.png" alt="Feature 3">
            <h3>Feature Three</h3>
            <p>Short description of the feature.</p>
        </div>
    </section>

    <footer class="footer">
        <p>Contact us: email@example.com | +123456789</p>
        <p>&copy; 2025 Your Company. All rights reserved.</p>
    </footer>

</body>
</html>
