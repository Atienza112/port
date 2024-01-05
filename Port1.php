<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Portfolio</title>
    <style>
  
        * 
        /* Home Page Styles */
        #home {
            height: 200px;
            background-color: #3498db;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 24px;
            position: relative;
            overflow: hidden;
        }

        #home-graphic {
            max-width: 100%;
            height: auto;
            transition: transform 0.5s;
            animation: rotateStar 4s infinite linear; /* CSS animation */
        }

        @keyframes rotateStar {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        
        
        
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            margin: 0 20px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #ffd700;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Home Page Styles */
        #home {
            height: 200px;
            background-color: #4d4dff;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 24px;
            position: relative;
            overflow: hidden;
        }

        #home-graphic {
            max-width: 100%;
            height: auto;
            transition: transform 0.5s;
        }

        #home-graphic:hover {
            transform: scale(1.1);
        }

        /* Showcase Styles */
        .showcase {
            background-color: #ecf0f1;
            padding: 30px;
            color: #333;
            border-radius: 8px;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }

        .showcase:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .showcase h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .showcase p {
            margin-bottom: 20px;
        }

        /* Additional Hover Effects */
        .hover-scale {
            transition: transform 0.3s;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        .hover-opacity {
            transition: opacity 0.3s;
        }

        .hover-opacity:hover {
            opacity: 0.8;
        }

        #css {
            background-color: #3385ff;
            color: #fff;
            padding: 40px;
            text-align: center;
        }

        #css h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        #css p {
            font-size: 18px;
            line-height: 1.5;
        }

        #css a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #fff;
            color:#3385ff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        #css a:hover {
            background-color: #3498db;
            color: #fff;
        }

        #svg {
            background-color: #2ecc71;
            color: #fff;
            padding: 40px;
            text-align: center;
        }

        #svg h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        #svg p {
            font-size: 18px;
            line-height: 1.5;
        }

        #svg .svg-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        #svg svg {
            max-width: 100%;
            height: auto;
        }

        #canvas {
            background-color: #e74c3c;
            color: #fff;
            padding: 40px;
            text-align: center;
        }

        #canvas h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        #canvas p {
            font-size: 18px;
            line-height: 1.5;
        }

        #canvas canvas {
            max-width: 100%;
            height: auto;
            border: 2px solid #fff;
            border-radius: 8px;
            margin-top: 20px;
        }
        #about{
            background-color: #ffff99;
            padding: 40px;
            text-align: center;
        }

    </style>
</head>
<body>

<header>
    <h1>Dave - Web Designer</h1>
</header>

<nav>
    <a href="#home">Home</a>
    <a href="#css">CSS</a>
    <a href="#svg">SVG</a>
    <a href="#canvas">Canvas</a>
    <a href="#about">About the Author</a>
</nav>

<main>
    <section id="home" class="hover-scale">
        <!-- Home Page Content -->
        <h2>Welcome to My Portfolio</h2>
        <img id="home-graphic" src="star.svg" alt="Rotating Star">
    </section>

    <section id="css" class="showcase hover-opacity">
        <!-- CSS Page Content -->
        <h2>CSS Showcase</h2>
       
        <p>Example: CSS-based project showcase</p>
    </section>

    <section id="svg" class="showcase hover-opacity">
        <!-- SVG Page Content -->
        <h2>SVG Showcase</h2>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="200" height="200">
    <!-- Background Circle -->
    <circle cx="100" cy="100" r="100" fill="#3498db" />

    <!-- Sun -->
    <circle cx="40" cy="40" r="20" fill="#ffd700" />

    <!-- Mountains -->
    <polygon points="0,100 50,50 100,100" fill="#95a5a6" />
    <polygon points="50,100 100,50 150,100" fill="#7f8c8d" />

    <!-- Grass -->
    <rect x="0" y="100" width="200" height="100" fill="#2ecc71" />
</svg>
        <p>Example: SVG-based project showcase</p>
    </section>

    <section id="canvas" class="showcase hover-opacity">
        <!-- Canvas Page Content -->
        <h2>Canvas Showcase</h2>
        <!-- Include your Canvas-related learning task outputs -->
        <p>Example: Canvas-based project showcase</p>
        <canvas id="canvasOutput" width="300" height="150"></canvas>
        <script>
            // Canvas drawing example
            const canvas = document.getElementById('canvasOutput');
            const ctx = canvas.getContext('2d');

            // Drawing a colorful pattern
            for (let i = 0; i < 100; i++) {
                const x = Math.random() * canvas.width;
                const y = Math.random() * canvas.height;
                const color = `rgb(${Math.random() * 255},${Math.random() * 255},${Math.random() * 255})`;

                ctx.fillStyle = color;
                ctx.fillRect(x, y, 10, 10);
            }
        </script>

    </section>

    <section id="about" class="hover-opacity">
        <h2>About the Author</h2>
        <p>Hi, I'm Dave, a passionate web designer dedicated to creating visually
                    appealing and user-friendly digital experiences. With a love for clean design
                    and effective communication, I enjoy bringing ideas to life through CSS, SVG,
                    and Canvas. Let's collaborate and turn your visions into captivating web projects!
                </p>

                </section>
</main>



</body>
</html>
