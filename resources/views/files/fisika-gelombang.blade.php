<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fisika Gelombang</title>
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
            color: #32cd32;
        }

        .navbar .logo span {
            color: #fff;
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

        /* Page Title */
        .page-title {
            padding: 20px;
            background-color: #e0e0e0;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            margin: 0;
        }

        /* Content Section */
        .content-section {
            display: flex;
            padding: 20px;
            background-color: #fff;
        }

        .content-section .video-container {
            flex: 2;
            padding-right: 20px;
        }

        .content-section .video-container img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content-section .description {
            flex: 1;
            padding-left: 20px;
            background-color: #f8f8f8;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }

        .content-section .description h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .content-section .description ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .content-section .description ul li {
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        /* Accordion Section */
        .accordion {
            margin: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .accordion-item {
            border-top: 1px solid #ddd;
        }

        .accordion-item:first-of-type {
            border-top: none;
        }

        .accordion-header {
            background-color: #e0e0e0;
            padding: 15px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .accordion-header:hover {
            background-color: #d4d4d4;
        }

        .accordion-header i {
            transition: transform 0.3s ease;
        }

        .accordion-content {
            padding: 15px;
            display: none;
        }

        .accordion-content a {
            color: #007bff;
            text-decoration: none;
        }

        .accordion-content a:hover {
            text-decoration: underline;
        }

        .accordion-item.active .accordion-content {
            display: block;
        }

        .accordion-item.active .accordion-header i {
            transform: rotate(180deg);
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

    <!-- Page Title -->
    <div class="page-title">
        Fisika Gelombang    
    </div>

    <!-- Content Section -->
    <div class="content-section">
        <div class="description">
            <h3>Materi</h3>
            <ul>
                <li>1. Atom Hidrogen</li>
                <li>2. Spin</li>
            </ul>
        </div>
    </div>

    <!-- Accordion Section -->
    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                Ebook <i class="fas fa-chevron-down"></i>
            </div>
            <div class="accordion-content">
                <div class="accordion-content">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card rounded">
                                    <div class="card-body">
                                        <h4>Files: Ebook</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nama File</th>
                                                    <th scope="col" style="width: 20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($files['ebook'] as $file)
                                                    <tr>
                                                        <td>{{ $file->original_name }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('files.downloadfisgel', $file) }}" class="btn btn-sm btn-primary">Download</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="2" class="text-muted text-center">Data file belum tersedia</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        {{ $files['ebook']->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                PowerPoint <i class="fas fa-chevron-down"></i>
            </div>
            <div class="accordion-content">
                <div class="accordion-content">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card rounded">
                                    <div class="card-body">
                                        <a href="{{ route('files.createfisgel') }}" class="btn btn-md btn-primary mb-3 float-end">Upload File</a>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nama File</th>
                                                    <th scope="col" style="width: 20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($files['ppt'] as $file)
                                                    <tr>
                                                        <td>{{ $file->original_name }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('files.downloadfisgel', $file) }}" class="btn btn-sm btn-primary">Download</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="2" class="text-muted text-center">Data file belum tersedia</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        {{ $files['ppt']->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header" onclick="toggleAccordion(this)">
                Latihan Soal dan Ujian <i class="fas fa-chevron-down"></i>
            </div>
            <div class="accordion-content">
                <div class="accordion-content">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card rounded">
                                    <div class="card-body">
                                        <h4>Files: Ebook</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Nama File</th>
                                                    <th scope="col" style="width: 20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($files['soal'] as $file)
                                                    <tr>
                                                        <td>{{ $file->original_name }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('files.downloadfisgel', $file) }}" class="btn btn-sm btn-primary">Download</a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="2" class="text-muted text-center">Data file belum tersedia</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        {{ $files['soal']->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAccordion(element) {
            const accordionItem = element.parentElement;
            accordionItem.classList.toggle('active');
        }
    </script>

</body>
</html>