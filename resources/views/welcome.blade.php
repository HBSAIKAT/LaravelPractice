<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset some default browser styles */
body, h1, p, a {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
}

/* Full height container to center content */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(to right, #105538, #feb47b); /* Background gradient */
    text-align: center;
}

/* Welcome message styling */
.welcome-message {
    background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Soft shadow */
}

/* Heading style */
.welcome-message h1 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 1rem;
}

/* Paragraph style */
.welcome-message p {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 2rem;
}

/* Button style */
.btn {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    color: #fff;
    background-color: #020803;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

/* Button hover effect */
.btn:hover {
    background-color: #03241a;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-message">
            <h1>Welcome to Our Website</h1>
            <p>We're glad you're here! Explore and enjoy our content.</p>
            <a href="#explore" class="btn">Explore Now</a>
        </div>
    </div>
</body>
</html>
