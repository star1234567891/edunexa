<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUnexa</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navbar styling */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #32cd32; /* Warna hijau untuk "EDU" */
        }

        .navbar .logo span {
            color: #fff; /* Warna putih untuk "nexa" */
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }

        .navbar ul li {
            margin-left: 20px;
        }

        .navbar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            padding: 5px 10px;
            transition: background-color 0.3s ease;
        }

        .navbar ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        .navbar .contact-us {
            background-color: #32cd32;
            color: #fff;
            padding: 5px 15px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .navbar .contact-us:hover {
            background-color: #28a745;
        }

        /* Hero Section */
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: url('Background.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Overlay hitam dengan opacity */
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .hero .btn {
            padding: 10px 20px;
            background-color: #32cd32;
            color: #fff;
            border-radius: 20px;
            text-decoration: none;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .hero .btn:hover {
            background-color: #28a745;
        }

        /* Popup Form */
        .popup-form {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            z-index: 3;
            width: 300px;
        }

        .popup-form h2 {
            margin-bottom: 20px;
        }

        .popup-form label {
            display: block;
            margin-bottom: 10px;
        }

        .popup-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .popup-form .submit-btn {
            background-color: #32cd32;
            color: #fff;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup-form .submit-btn:hover {
            background-color: #28a745;
        }

        .popup-form .close-btn {
            background-color: #ccc;
            color: #000;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .popup-form .close-btn:hover {
            background-color: #bbb;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            EDU<span>nexa</span>
        </div>
        <ul>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#" class="contact-us">Contact Us</a></li>
        </ul>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1>Transformative Education</h1>
            <div class="btn" id="startBtn">Let's Start</div>
        </div>
    </div>

    <!-- Overlay for Popup -->
    <div class="overlay" id="overlay"></div>

    <!-- Popup Form -->
    <div class="popup-form" id="popupForm">
        <h2>Masukkan Data</h2>
        <form method="POST" action="{{ route('redirect') }}">
            @csrf
            <label for="university">Universitas</label>
            <input type="text" id="university" name="university" required>
            <label for="program">Program Studi</label>
            <input type="text" id="program" name="program" required>
            <button type="submit" class="submit-btn">Submit</button>
            <button type="button" class="close-btn" id="closeBtn">Close</button>
        </form>
    </div>

    <script>
        // JavaScript to handle popup form
        document.getElementById('startBtn').addEventListener('click', function() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('popupForm').style.display = 'block';
        });

        document.getElementById('closeBtn').addEventListener('click', function() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('popupForm').style.display = 'none';
        });

        document.getElementById('overlay').addEventListener('click', function() {
            document.getElementById('overlay').style.display = 'none';
            document.getElementById('popupForm').style.display = 'none';
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
