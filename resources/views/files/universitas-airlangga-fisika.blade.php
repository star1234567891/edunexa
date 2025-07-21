<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Edukasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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

        /* Body content styling */
        .content {
            padding: 20px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .cards-container {
            display: flex;
            gap: 20px;
            overflow-x: auto; /* Scroll horizontal */
            -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
            scroll-snap-type: x mandatory; /* Snapping effect for cards */
        }

        .card {
            min-width: 23%; /* Adjust the width for desktop */
            max-width: 23%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            font-family: Arial, sans-serif;
            background-color: #fff; /* Background untuk kartu */
            cursor: pointer;
            text-decoration: none;
            color: inherit;
            scroll-snap-align: start; /* Snapping effect */
            flex-shrink: 0; /* Prevent shrinking when in a row */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
            background-color: #f4f4f4;
        }

        .card-body h5 {
            font-size: 1.25rem;
            margin: 10px 0;
            font-weight: 600;
        }

        .card-body ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .card-body ul li {
            display: flex;
            align-items: center;
            margin: 5px 0;
        }

        .card-body ul li i {
            margin-right: 10px;
            color: #333;
        }

        .card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            background-color: #fff;
            border-top: 1px solid #ddd;
        }

        .card-footer i {
            color: #007bff;
            cursor: pointer;
        }

        .card-footer i:hover {
            color: #0056b3;
        }

        /* Responsive styling */
        @media (max-width: 1024px) {
            .card {
                min-width: 45%; /* Adjust width for tablets and small desktops */
                max-width: 45%;
            }
        }

        @media (max-width: 768px) {
            .cards-container {
                gap: 10px; /* Reduce the gap on smaller screens */
            }

            .card {
                min-width: 70%; /* Adjust card width for better visibility on small screens */
                max-width: 100%;
            }

            h1 {
                font-size: 1.5rem;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .card {
                min-width: 100%; /* Take up full width on very small screens */
            }

            .navbar .logo {
                font-size: 1.25rem;
            }

            .navbar ul li a {
                font-size: 0.875rem;
            }

            .content {
                padding: 10px;
            }
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

    <!-- Body Content -->
    <div class="content">
        <h1>Semester 2</h1>
        <div class="cards-container">
            <a href="{{ route('files.fisika-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>100 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.kalkulus') }}" class="card active">
                <div class="card-body">
                    <h5>Kalkulus</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>80 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>25 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.biologi-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Biologi Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>50 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>30 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.kimia-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Kimia Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasar-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-matematika') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Matematika</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasarII') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar II</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasarII-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar II Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <!-- Tambahkan lebih banyak kartu jika diperlukan -->
        </div>
    </div>

    <!-- Body Content -->
    <div class="content">
        <h1>Semester 3</h1>
        <div class="cards-container">
            <a href="{{ route('files.termodinamika') }}" class="card active">
                <div class="card-body">
                    <h5>Termodinamika</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>100 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.elektronika1') }}" class="card active">
                <div class="card-body">
                    <h5>Elektronika 1</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>80 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>25 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.elektronika1-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Elektronika 1 Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>50 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>30 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.biofisika') }}" class="card active">
                <div class="card-body">
                    <h5>Biofisika</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-gelombang') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Gelombang</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-modern') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Modern</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-matematikaII') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Matematika II</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <!-- Tambahkan lebih banyak kartu jika diperlukan -->
        </div>
    </div>

        <!-- Body Content -->
    <div class="content">
        <h1>Semester 4</h1>
        <div class="cards-container">
            <a href="{{ route('files.mekanika') }}" class="card active">
                <div class="card-body">
                    <h5>Mekanika</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>100 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.mekanika-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Mekanika Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>80 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>25 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.eksperimental1') }}" class="card active">
                <div class="card-body">
                    <h5>Eksperimental 1</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>50 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>30 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.elektronika2') }}" class="card active">
                <div class="card-body">
                    <h5>Elektronika II</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.elektronika2-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Elektronika II Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-matematika3') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Matematika III</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-komputasi1') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Komputasi I</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-komputasi1-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Komputasi I Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-kuantum') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Kuantum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <!-- Tambahkan lebih banyak kartu jika diperlukan -->
        </div>
    </div>


    <!-- Body Content -->
    <div class="content">
        <h1>Semester 5</h1>
        <div class="cards-container">
            <a href="{{ route('files.fisika-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>100 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.kalkulus') }}" class="card active">
                <div class="card-body">
                    <h5>Kalkulus</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>80 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>25 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.biologi-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Biologi Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>50 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>30 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.kimia-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Kimia Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasar-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-matematika') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Matematika</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasarII') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar II</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasarII-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar II Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <!-- Tambahkan lebih banyak kartu jika diperlukan -->
        </div>
    </div>

    <!-- Body Content -->
    <div class="content">
        <h1>Semester 6</h1>
        <div class="cards-container">
            <a href="{{ route('files.fisika-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>100 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.kalkulus') }}" class="card active">
                <div class="card-body">
                    <h5>Kalkulus</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>80 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>25 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.biologi-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Biologi Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>50 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>30 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.kimia-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Kimia Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasar-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-matematika') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Matematika</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasarII') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar II</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasarII-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar II Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <!-- Tambahkan lebih banyak kartu jika diperlukan -->
        </div>
    </div>

    <!-- Body Content -->
    <div class="content">
        <h1>Semester 7</h1>
        <div class="cards-container">
            <a href="{{ route('files.fisika-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>100 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.kalkulus') }}" class="card active">
                <div class="card-body">
                    <h5>Kalkulus</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>80 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>25 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.biologi-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Biologi Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>50 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>30 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.kimia-dasar') }}" class="card active">
                <div class="card-body">
                    <h5>Kimia Dasar</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasar-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-matematika') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Matematika</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasarII') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar II</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <a href="{{ route('files.fisika-dasarII-praktikum') }}" class="card active">
                <div class="card-body">
                    <h5>Fisika Dasar II Praktikum</h5>
                    <ul>
                        <li><i class="fas fa-book"></i>90 E-Book</li>
                        <li><i class="fas fa-file-powerpoint"></i>20 Power Points</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <span></span>
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            <!-- Tambahkan lebih banyak kartu jika diperlukan -->
        </div>
    </div>

</body>
</html>
