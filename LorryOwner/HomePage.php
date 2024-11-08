<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load Shift - Local Export Solutions</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Manrope%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />


        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- libraries Stylesheet -->
        <link href="../Asset/Templates/Main/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="../Asset/Templates/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="../Asset/Templates/Main/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../Asset/Templates/Main/css/style.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }
        .container {
            
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header styles */
        header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #3b82f6;
        }
        .nav-links {
            display: flex;
            list-style: none;
        }
        .nav-links li {
            margin-left: 1.5rem;
        }
        .nav-links a {
            text-decoration: none;
            color: #4b5563;
            transition: color 0.3s ease;
        }
        .nav-links a:hover {
            color: #3b82f6;
        }

        /* Hero section styles */
        .hero {
            background-image: url('https://images.unsplash.com/photo-1519003722824-194d4455a60c?ix../Asset/Templates/Main/lib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3540&q=80');
            background-size: cover;
            background-position: center;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            position: relative;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5);
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        .btn {
            display: inline-block;
            background-color: transparent;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #2563eb;
        }


        /* Contact section styles */
        .contact {
            padding: 4rem 0;
            background-color: #fff;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0.25rem;
        }
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        /* Footer styles */
        footer {
            background-color: #1f2937;
            color: #fff;
            padding: 3rem 0;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }
        .footer-links {
            list-style: none;
        }
        .footer-links li {
            margin-bottom: 0.5rem;
        }
        .footer-links a {
            color: #9ca3af;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer-links a:hover {
            color: #fff;
        }
        .footer-bottom {
            margin-top: 2rem;
            text-align: center;
            color: #9ca3af;
            border-top: 1px solid #374151;
            padding-top: 2rem;
        }

        /***map*/
        #location {
            padding: 4rem 0;
            background-color: var(--sage-100);
        }
        .map-container {
            background-color: #fff;
            padding: 1rem;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .hero h1 {
                font-size: 2rem;
            }
            .hero p {
                font-size: 1rem;
            }
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
    <nav class="container">
            <div class="logo">Load Shift</div>
            <ul class="nav-links">
                <li><a href="HomePage.php"><i class="fa-solid fa-house"></i></a></li>
                <li><a href="ViewOrders.php">View Orders</a></li>
                <li><a href="Complaint.php">Complaints</a></li>
                <li><a href="Feedback.php">Feedback</a></li>
                <li><a href="MyProfile.php"><i class="fa-solid fa-user"></i></a></li>
                <li><a href="../Logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <h1>LOAD SWIFT</h1>
                <p>Exporting services for vegetable,fruits,grains and living things</p>
                
                <!-- <a href="../Load Swift/Guest/Login.php" class="btn">Get Started</a> -->
            </div>
        </section>




        
        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="tab-class text-center">
                    <div class="row g-4">
                        <div class="col-lg-4 text-start">
                            <h1 style="font-size: 36px; line-height: 1.5; margin: 20px 0; font-weight: bold;">Our Organic Products</h1>
                        </div>
                        <div class="col-lg-8 text-end">
                            <ul class="nav nav-pills d-inline-flex text-center mb-5">
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 130px;">All Products</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                        <span class="text-dark" style="width: 130px;">Vegetables</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                        <span class="text-dark" style="width: 130px;">Fruits & Dry Fruits</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                        <span class="text-dark" style="width: 130px;">Grain</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                        <span class="text-dark" style="width: 130px;">Living Things</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-f.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Jackfruit</h4>
                                                    <p>Jackfruit is a tropical fruit known for its unique sweet flavor and fibrous texture.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$5.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-c.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetables</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Carrot</h4>
                                                    <p>Carrots are a versatile vegetable that can be enjoyed raw or cooked.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$3.80 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-p.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Pineapples</h4>
                                                    <p>Sweet and tangy pineapples, perfect for snacking or tropical smoothies.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$6.39 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-r.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Grains</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Rice</h4>
                                                    <p>Freshly harvested rice, ideal for a variety of dishes or a simple side dish.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$8.93 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Banana</h4>
                                                    <p>Fresh and ripe bananas, perfect for snacking, smoothies, or baking.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$7.81 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Oranges</h4>
                                                    <p>Juicy and tangy oranges, perfect for fresh juices and snacking.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-t.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetables</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Tomatoes</h4>
                                                    <p>Fresh, juicy tomatoes perfect for salads, sauces, and a variety of dishes.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$3.10 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-a.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Living Things</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Avocado Tree</h4>
                                                    <p>Grow your own Tree and enjoy fresh, creamy avocados right from your garden.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$7.80 / Piece</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-t.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetables</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Tomatoes</h4>
                                                    <p>Fresh, juicy tomatoes perfect for salads, sauces, and a variety of dishes.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$3.10 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-c.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetables</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Carrot</h4>
                                                    <p> Carrots are a versatile vegetable that can be enjoyed raw or cooked.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$3.80 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-b.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetables</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Beetroots</h4>
                                                    <p>Nutritious and earthy beetroots, great for salads, juices, and side dishes.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$5.55 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/vegetable-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetables</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Potatoes</h4>
                                                    <p>Potatoes are a staple food around the world, their versatility in various dishes.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$6.10 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-6.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Apple</h4>
                                                    <p>Crunchy and sweet apples, perfect for a healthy snack or use in pies and salads.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">  
                                                        <p class="text-dark fs-5 fw-bold mb-0">$8.76 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Oranges</h4>
                                                    <p>Juicy and tangy oranges, perfect for fresh juices and snacking.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Grapes</h4>
                                                    <p>Fresh and juicy grapes, perfect for snacking, making wine.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$5.86 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-dry.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Dry Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Dry Fruits</h4>
                                                    <p>Making them a perfect snack for boosting energy and improving heart health.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$10.77 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-r.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Grains</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Rice</h4>
                                                    <p>Freshly harvested rice, ideal for a variety of dishes or a simple side dish.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$8.93 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-w.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Grains</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Wheat</h4>
                                                    <p>Wheat is a staple grain that forms the basis of many diets around the world.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$7.39 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-teff.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Grains</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Teff</h4>
                                                    <p>Teff is a tiny ancient grain that is a staple in Ethiopian cuisine.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$5.66 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-q.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Grains</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Quinoa</h4>
                                                    <p>Quinoa is a highly nutritious grain that has gained popularity as a superfood.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$7.30 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-a.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Living Things</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Avocado Tree</h4>
                                                    <p>Grow your own Avocado Tree and enjoy fresh, creamy avocados right from your garden.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$7.80 / Piece</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-birds.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Living Things</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Birds</h4>
                                                    <p>Lovebirds are small, affectionate birds known for their strong pair bonds and playful personalities.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$10.23 / Pair</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-hg.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Living Things</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Flowers</h4>
                                                    <p>Flowers symbolize love, joy, and celebration, making them cherished gifts for every occasion.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$6.57 / Piece</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="../Asset/Templates/Main/img/fruite-item-goat.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Living Things</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Goats</h4>
                                                    <p>Goats are small, friendly, and playful animals, perfect for family farms and backyards.</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$40.33 / Each</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <!-- Fruits Shop End-->



         <!-- Banner Section Start-->
         <div class="container-fluid banner bg-secondary my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="py-4">
                            <h1 class="display-3 text-white">Fresh Exotic Fruits</h1>
                            <p class="fw-normal display-3 text-dark mb-4">in Our Store</p>
                            <p class="mb-4 text-dark">Discover a world of flavors with our handpicked selection of exotic fruits, sourced from the finest orchards and farms to ensure peak freshness and quality.</p>
                            <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">BUY</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="../Asset/Templates/Main/img/baner-1.png" class="img-fluid w-100 rounded" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                                <h1 style="font-size: 100px;">1</h1>
                                <div class="d-flex flex-column">
                                    <span class="h2 mb-0">9.77$</span>
                                    <span class="h4 text-muted mb-0">kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- Bestsaler Product Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Bestseller Products</h1>
                    <p>Explore our top-selling products, handpicked for their quality and popularity. From fresh fruits to gourmet snacks, our bestsellers reflect the tastes of our valued customers, ensuring you find only the best.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="../Asset/Templates/Main/img/birds.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Birds</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">10.23 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="../Asset/Templates/Main/img/avacado.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Avacado Tree</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">7.80 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="../Asset/Templates/Main/img/best-product-3.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Organic Banana</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">7.81 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="../Asset/Templates/Main/img/rice.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Rice</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">8.93 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="../Asset/Templates/Main/img/best-product-5.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Organic Grapes</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">5.86 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="../Asset/Templates/Main/img/best-product-6.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Organic Apple</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="mb-3">1.99 $</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="../Asset/Templates/Main/img/fruite-item-t.jpg" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Organic Tomato</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.10 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="../Asset/Templates/Main/img/fruite-item-f.jpg" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Organic Jackfruit</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">5.99 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="../Asset/Templates/Main/img/fruite-item-p.jpg" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Organic Pinapple</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">6.39 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="../Asset/Templates/Main/img/fruite-item-c.jpg" class="img-fluid rounded" alt="">
                            <div class="py-2">
                                <a href="#" class="h5">Organic Carrot</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">3.80 $</h4>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->

 <!---part2-->

 <div class="flex flex-col gap-10 px-4 py-10 @container" >
    <div class="flex flex-col gap-4">
      <h1
        class="text-[#201A09] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
      >
        Our services
      </h1>
      <p class="text-[#201A09] text-base font-normal leading-normal max-w-[720px]">
        We provide comprehensive export services for living things, vegetables, grains, fruits and dry fruits. Our services include the entire process of exporting, from the stage of
        growing until they reach the final destination.
      </p>
    </div>
    <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
      <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
        <div class="text-[#201A09]" data-icon="Truck" data-size="24px" data-weight="regular">
          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
            <path
              d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"
            ></path>
          </svg>
        </div>
        <div class="flex flex-col gap-1">
          <h2 class="text-[#201A09] text-base font-bold leading-tight">Living things</h2>
          <p class="text-[#A07D1C] text-sm font-normal leading-normal">
            We provide comprehensive export services for living things, including plants, flowers, and trees. Our services include the entire process of exporting, from
            the stage of growing until they reach the final destination.
          </p>
        </div>
      </div>
      <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
        <div class="text-[#201A09]" data-icon="Leaf" data-size="24px" data-weight="regular">
          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
            <path
              d="M223.45,40.07a8,8,0,0,0-7.52-7.52C139.8,28.08,78.82,51,52.82,94a87.09,87.09,0,0,0-12.76,49c.57,15.92,5.21,32,13.79,47.85l-19.51,19.5a8,8,0,0,0,11.32,11.32l19.5-19.51C81,210.73,97.09,215.37,113,215.94q1.67.06,3.33.06A86.93,86.93,0,0,0,162,203.18C205,177.18,227.93,116.21,223.45,40.07ZM153.75,189.5c-22.75,13.78-49.68,14-76.71.77l88.63-88.62a8,8,0,0,0-11.32-11.32L65.73,179c-13.19-27-13-54,.77-76.71,22.09-36.47,74.6-56.44,141.31-54.06C210.2,114.89,190.22,167.41,153.75,189.5Z"
            ></path>
          </svg>
        </div>
        <div class="flex flex-col gap-1">
          <h2 class="text-[#201A09] text-base font-bold leading-tight">Vegetables</h2>
          <p class="text-[#A07D1C] text-sm font-normal leading-normal">
            We provide comprehensive export services for vegetables. Our services include the entire process of exporting, from the stage of planting until they reach the
            final destination.
          </p>
        </div>
      </div>
      <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
        <div class="text-[#201A09]" data-icon="Command" data-size="24px" data-weight="regular">
          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
            <path
              d="M180,144H160V112h20a36,36,0,1,0-36-36V96H112V76a36,36,0,1,0-36,36H96v32H76a36,36,0,1,0,36,36V160h32v20a36,36,0,1,0,36-36ZM160,76a20,20,0,1,1,20,20H160ZM56,76a20,20,0,0,1,40,0V96H76A20,20,0,0,1,56,76ZM96,180a20,20,0,1,1-20-20H96Zm16-68h32v32H112Zm68,88a20,20,0,0,1-20-20V160h20a20,20,0,0,1,0,40Z"
            ></path>
          </svg>
        </div>
        <div class="flex flex-col gap-1">
          <h2 class="text-[#201A09] text-base font-bold leading-tight">Fruits & Dry Fruits</h2>
          <p class="text-[#A07D1C] text-sm font-normal leading-normal">
            We provide comprehensive export services for fruits & dry fruits. Our services include the entire process of exporting, from the stage of planting until they reach the
            final destination.
          </p>
        </div>
      </div>
      <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
        <div class="text-[#201A09]" data-icon="Leaf" data-size="24px" data-weight="regular">
          <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
            <path
              d="M223.45,40.07a8,8,0,0,0-7.52-7.52C139.8,28.08,78.82,51,52.82,94a87.09,87.09,0,0,0-12.76,49c.57,15.92,5.21,32,13.79,47.85l-19.51,19.5a8,8,0,0,0,11.32,11.32l19.5-19.51C81,210.73,97.09,215.37,113,215.94q1.67.06,3.33.06A86.93,86.93,0,0,0,162,203.18C205,177.18,227.93,116.21,223.45,40.07ZM153.75,189.5c-22.75,13.78-49.68,14-76.71.77l88.63-88.62a8,8,0,0,0-11.32-11.32L65.73,179c-13.19-27-13-54,.77-76.71,22.09-36.47,74.6-56.44,141.31-54.06C210.2,114.89,190.22,167.41,153.75,189.5Z"
            ></path>
          </svg>
        </div>
        <div class="flex flex-col gap-1">
          <h2 class="text-[#201A09] text-base font-bold leading-tight">Grains</h2>
          <p class="text-[#A07D1C] text-sm font-normal leading-normal">
            We provide comprehensive export services for grains. Our services include the entire process of exporting, from the stage of planting until they reach the
            final destination.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
    <div class="flex flex-col gap-3">
      <div
        class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
        style='background-image: url("https://media.istockphoto.com/id/1148595302/photo/direct-from-the-farm-to-you.jpg?s=612x612&w=0&k=20&c=mgpPa73ss75rXISkff4Ca2G4MtFzi3V2Q2iM87NIBKo=");'
      ></div>
    </div>
    <div class="flex flex-col gap-3">
      <div
        class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
        style='background-image: url("https://media.istockphoto.com/id/1164767466/photo/unloading-the-cruise-ships-new-supplies.jpg?s=612x612&w=0&k=20&c=6S5E1FZ7ZoaUWl6cNELQzfLimwtAaWbQjTF_uTKYUFc=");'
      ></div>
    </div>
    <div class="flex flex-col gap-3">
      <div
        class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
        style='background-image: url("https://media.istockphoto.com/id/1409922801/photo/grocery-truck.jpg?s=612x612&w=0&k=20&c=sY-AVJPP0Orjcl9VS8HBYuObiqBk0QAJT9-J9dkLuMs=");'
      ></div>
    </div>
    <div class="flex flex-col gap-3">
      <div
        class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
        style='background-image: url("https://media.istockphoto.com/id/185273188/photo/three-white-trucks-in-front-of-a-warehouse.jpg?s=612x612&w=0&k=20&c=NBL8JT-tvuWgOtCBqAqqgsmflYzI3kqouJsImaUIpa4=");'
      ></div>
    </div>
  </div>
 

         <!----part why choose---->
         <div class="flex flex-col gap-10 px-4 py-10 @container">
            <div class="flex flex-col gap-4">
              <h1
                class="text-[#201A09] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
              >
                Why choose us?
              </h1>
              <p class="text-[#201A09] text-base font-normal leading-normal max-w-[720px]">
                We are committed to providing the highest quality export services for living things, grains, vegetables, and fruits. Our team of experts will work with you every step of
                the way to ensure that your products reach their final destination safely and on time.
              </p>
            </div>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
              <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
                <div class="text-[#201A09]" data-icon="Truck" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#201A09] text-base font-bold leading-tight">Fast delivery</h2>
                  <p class="text-[#A07D1C] text-sm font-normal leading-normal">
                    We provide fast and efficient delivery services, ensuring that your products reach their final destination in a timely manner.
                  </p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
                <div class="text-[#201A09]" data-icon="Calendar" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#201A09] text-base font-bold leading-tight">Timely service</h2>
                  <p class="text-[#A07D1C] text-sm font-normal leading-normal">
                    We provide timely and accurate services, ensuring that your products reach their final destination on time and in good condition.
                  </p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
                <div class="text-[#201A09]" data-icon="Clock" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M128,8A120,120,0,1,0,248,128,120.13,120.13,0,0,0,128,8ZM128,224a96,96,0,1,1,96-96A96.11,96.11,0,0,1,128,224ZM128,32a8,8,0,0,1,8,8v80h56a8,8,0,0,1,0,16H128a8,8,0,0,1-8-8V40A8,8,0,0,1,128,32Z"></path>
                    </svg>
                </div>
                <div class="flex flex-col gap-1">
                    <h2 class="text-[#201A09] text-base font-bold leading-tight">24/7 Availability</h2>
                    <p class="text-[#A07D1C] text-sm font-normal leading-normal">
                        Our support team is available around the clock to assist you with any inquiries or issues, ensuring you never feel alone on your journey.
                    </p>
                </div>
            </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
                <div class="text-[#201A09]" data-icon="Money" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M128,88a40,40,0,1,0,40,40A40,40,0,0,0,128,88Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,152ZM240,56H16a8,8,0,0,0-8,8V192a8,8,0,0,0,8,8H240a8,8,0,0,0,8-8V64A8,8,0,0,0,240,56ZM193.65,184H62.35A56.78,56.78,0,0,0,24,145.65v-35.3A56.78,56.78,0,0,0,62.35,72h131.3A56.78,56.78,0,0,0,232,110.35v35.3A56.78,56.78,0,0,0,193.65,184ZM232,93.37A40.81,40.81,0,0,1,210.63,72H232ZM45.37,72A40.81,40.81,0,0,1,24,93.37V72ZM24,162.63A40.81,40.81,0,0,1,45.37,184H24ZM210.63,184A40.81,40.81,0,0,1,232,162.63V184Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#201A09] text-base font-bold leading-tight">Competitive pricing</h2>
                  <p class="text-[#A07D1C] text-sm font-normal leading-normal">We offer competitive pricing, ensuring that you get the best value for your money.</p>
                </div>
              </div>
            </div>
          </div>


    <!-- Header Section -->
    <section style="width: 100%; max-width: 1200px; margin: auto;">
        <div style="position: relative;">
            <img src="https://media.istockphoto.com/id/1343133550/photo/a-truck-shaped-lake-in-the-midst-of-pristine-nature-illustrating-the-concept-of-clean.jpg?s=612x612&w=0&k=20&c=5rwGgX5Wg0a0rfCKnGKuL81tTO7OyPMfHjAOvBLar-4=" alt="Truck" style="width: 100%; border-radius: 10px;">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                <h1 style="font-size: 48px; color: white;">Transporting living things, vegetables, grains and fruits</h1>
                <p style="color: white; font-size: 18px; max-width: 800px; margin: auto;">
                    We are committed to providing customers with the best service, safe transportation, and high-quality products. We create a reliable, efficient, and environmentally friendly transportation system.
                </p>
            </div>
        </div>
    </section>

       <!--part3-->

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
      rel="stylesheet"
      as="style"
      onload="this.rel='stylesheet'"
      href="https://fonts.googleapis.com/css2?display=swap&amp;family=Manrope%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />
   

            </div>
            <div class="flex flex-col gap-10 px-4 py-10 @container">
                <div class="flex flex-col gap-4">
                <h1
                  class="text-[#201A09] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                >
                  Our advantages
                </h1>
                <p class="text-[#201A09] text-base font-normal leading-normal max-w-[720px]">
                  We have several unique selling points that make us the ideal choice for your shipping needs
                </p>
              </div>
              <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
                <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
                  <div class="text-[#201A09]" data-icon="Lightning" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M215.79,118.17a8,8,0,0,0-5-5.66L153.18,90.9l14.66-73.33a8,8,0,0,0-13.69-7l-112,120a8,8,0,0,0,3,13l57.63,21.61L88.16,238.43a8,8,0,0,0,13.69,7l112-120A8,8,0,0,0,215.79,118.17ZM109.37,214l10.47-52.38a8,8,0,0,0-5-9.06L62,132.71l84.62-90.66L136.16,94.43a8,8,0,0,0,5,9.06l52.8,19.8Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#201A09] text-base font-bold leading-tight">Fast delivery</h2>
                    <p class="text-[#A07D1C] text-sm font-normal leading-normal">We offer fast delivery times, so you can get your goods sooner</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
                  <div class="text-[#201A09]" data-icon="Money" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M128,88a40,40,0,1,0,40,40A40,40,0,0,0,128,88Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,152ZM240,56H16a8,8,0,0,0-8,8V192a8,8,0,0,0,8,8H240a8,8,0,0,0,8-8V64A8,8,0,0,0,240,56ZM193.65,184H62.35A56.78,56.78,0,0,0,24,145.65v-35.3A56.78,56.78,0,0,0,62.35,72h131.3A56.78,56.78,0,0,0,232,110.35v35.3A56.78,56.78,0,0,0,193.65,184ZM232,93.37A40.81,40.81,0,0,1,210.63,72H232ZM45.37,72A40.81,40.81,0,0,1,24,93.37V72ZM24,162.63A40.81,40.81,0,0,1,45.37,184H24ZM210.63,184A40.81,40.81,0,0,1,232,162.63V184Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#201A09] text-base font-bold leading-tight">Competitive pricing</h2>
                    <p class="text-[#A07D1C] text-sm font-normal leading-normal">Our prices are competitive, so you can save money on your shipping costs</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
                  <div class="text-[#201A09]" data-icon="ShieldCheck" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#201A09] text-base font-bold leading-tight">Secure shipping</h2>
                    <p class="text-[#A07D1C] text-sm font-normal leading-normal">We use secure shipping methods to ensure your goods arrive safely</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
                  <div class="text-[#201A09]" data-icon="Truck" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M247.42,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A7.94,7.94,0,0,0,247.42,117ZM184,88h34.58l9.6,24H184ZM24,72H168v64H24ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208Zm81-24H103a32,32,0,0,0-62,0H24V152H168v12.31A32.11,32.11,0,0,0,153,184Zm31,24a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm48-24H215a32.06,32.06,0,0,0-31-24V128h48Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#201A09] text-base font-bold leading-tight">Large capacity</h2>
                    <p class="text-[#A07D1C] text-sm font-normal leading-normal">We have large capacity for handling shipments of all sizes</p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#EFE3C3] bg-[#FBF8EF] p-4 flex-col">
                  <div class="text-[#201A09]" data-icon="Package" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#201A09] text-base font-bold leading-tight">Versatile shipping options</h2>
                    <p class="text-[#A07D1C] text-sm font-normal leading-normal">We offer versatile shipping options to meet your specific needs</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-wrap gap-4 p-4">
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#F5EFDB]">
                <p class="text-[#201A09] text-base font-medium leading-normal">100%</p>
                <p class="text-[#201A09] tracking-light text-2xl font-bold leading-tight">On-time delivery</p>
                <p class="text-[#528745] text-base font-medium leading-normal">+5%</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#F5EFDB]">
                <p class="text-[#201A09] text-base font-medium leading-normal">99.9%</p>
                <p class="text-[#201A09] tracking-light text-2xl font-bold leading-tight">Delivery success rate</p>
                <p class="text-[#AB2217] text-base font-medium leading-normal">-0.1%</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#F5EFDB]">
                <p class="text-[#201A09] text-base font-medium leading-normal">20m</p>
                <p class="text-[#201A09] tracking-light text-2xl font-bold leading-tight">Total deliveries</p>
                <p class="text-[#528745] text-base font-medium leading-normal">+2m</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#F5EFDB]">
                <p class="text-[#201A09] text-base font-medium leading-normal">96%</p>
                <p class="text-[#201A09] tracking-light text-2xl font-bold leading-tight">Customer satisfaction</p>
                <p class="text-[#528745] text-base font-medium leading-normal">+2%</p>
              </div>
            </div>
            


            <!-- Transportation Tools Section -->
    <section style="width: 100%; max-width: 1200px; margin: 50px auto;">
        <h2 style="font-size: 32px; margin-bottom: 10px; text-align: center;">Transportation Tools</h2>
        <p style="text-align: center; margin-bottom: 30px;">We provide a variety of transportation tools to meet your different transportation needs.</p>

        <!-- Cards for each transportation tool -->
        <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
            
            <!-- Card 1: Truck -->
            <div style="flex: 1; min-width: 150px; margin: 10px; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 5px 10px rgba(0,0,0,0.1); text-align: center;">
                <img src="https://as1.ftcdn.net/v2/jpg/01/21/14/08/1000_F_121140803_UIVLPQsTqXrpEedkEc3HYGWgzXlfH2Qb.jpg" alt="Truck" style="width: 100px; height: auto; margin-bottom: 10px;">
                <h3 style="font-size: 20px; margin-bottom: 10px;">Truck</h3>
                <p style="color: #555;">The truck is secure storage for efficient transport over long distances and can be delivered to the door.</p>
            </div>

            <!-- Card 2: Mini Van -->
            <div style="flex: 1; min-width: 150px; margin: 10px; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 5px 10px rgba(0,0,0,0.1); text-align: center;">
                <img src="https://as1.ftcdn.net/v2/jpg/02/56/36/42/1000_F_256364209_2JrD73TnMyjGC931G8Fe9qFxtqSQxqZp.jpg" alt="Airplane" style="width: 100px; height: auto; margin-bottom: 10px;">
                <h3 style="font-size: 20px; margin-bottom: 10px;">Mini Van</h3>
                <p style="color: #555;">Vans offer a versatile solution for transportation needs, ideal for local deliveries.</p>
            </div>

            <!-- Card 3: Mini Lorry -->
            <div style="flex: 1; min-width: 150px; margin: 10px; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 5px 10px rgba(0,0,0,0.1); text-align: center;">
                <img src="https://as1.ftcdn.net/v2/jpg/00/82/74/02/1000_F_82740287_OC0Y3Plw6NJfVLEDmjawBQWg6LZK5YlJ.jpg" alt="Train" style="width: 100px; height: auto; margin-bottom: 10px;">
                <h3 style="font-size: 20px; margin-bottom: 10px;">Mini Lorry</h3>
                <p style="color: #555;">Mini lorries are perfect for local deliveries, providing flexibility and efficiency for transporting goods in urban areas.</p>
            </div>

            <!-- Card 4: Pickup -->
            <div style="flex: 1; min-width: 150px; margin: 10px; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 5px 10px rgba(0,0,0,0.1); text-align: center;">
                <img src="https://as1.ftcdn.net/jpg/06/43/23/08/1024W_F_643230871_543grLhv0CMxTbO9sZw3Dl0c2x82tCIz_NW1.jpg" alt="Ship" style="width: 100px; height: auto; margin-bottom: 10px;">
                <h3 style="font-size: 20px; margin-bottom: 10px;">Pickup</h3>
                <p style="color: #555;">Our pickup service simplifies logistics, ensuring your goods are collected promptly and transported securely.</p>
            </div>

            <!-- Card 5: Cargo Autorickshaw -->
            <div style="flex: 1; min-width: 150px; margin: 10px; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 5px 10px rgba(0,0,0,0.1); text-align: center;">
                <img src="https://as1.ftcdn.net/v2/jpg/05/21/12/60/1000_F_521126052_Yofebt82TqldkhSkuCZC2zvs0Qt4Kqut.jpg" alt="Car" style="width: 100px; height: auto; margin-bottom: 10px;">
                <h3 style="font-size: 20px; margin-bottom: 10px;">Cargo Autorickshaw</h3>
                <p style="color: #555;">Perfect for navigating busy streets, cost-effective solution for last-mile delivery and quick transport.</p>
            </div>

        </div>
    </section>



        <!-- Tastimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-primary">Our Testimonial</h4>
                    <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">"The service provided by this transportation app has been outstanding. My goods were delivered on time and in perfect condition. I couldn't have asked for a better experience!"</p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="../Asset/Templates/Main/img/ppp.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Mariya John Doe</h4>
                                    <p class="m-0 pb-3">Logistics Manager</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">"Using this transportation service has transformed our delivery process. Their commitment to timely and safe transportation is commendable. Highly recommend!"</p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="../Asset/Templates/Main/img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Sarah Johnson</h4>
                                    <p class="m-0 pb-3">Operations Director</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary">
                                <p class="mb-0">"I have been using this transportation app for all my logistics needs, and it has never let me down. The user-friendly interface and reliable service make it a top choice!"</p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="../Asset/Templates/Main/img/pp.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Michael Smith</h4>
                                    <p class="m-0 pb-3">Supply Chain Specialist</p>
                                    <div class="d-flex pe-5">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->



       <!---part4-->
 <!-- Contact Us Section -->
    <section style="width: 100%; max-width: 1200px; margin: auto;">
        <div style="position: relative;">
            <img src="https://media.istockphoto.com/id/1445457317/photo/friendly-female-helpline-operator-in-call-center-young-woman-working-in-call-center-and.jpg?s=2048x2048&w=is&k=20&c=e4qVNQhJJO0pjUuuAadhWxlFOKOyq9jSuGQM6PHJxE0=" alt="Office" style="width: 100%; border-radius: 10px;">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
                <h1 style="font-size: 48px; font-weight: bold;">Contact Us</h1>
                <button style="background-color: #f7b500; color: white; border: none; padding: 10px 20px; font-size: 18px; border-radius: 5px; cursor: pointer;">
                    Get a quote
                </button>
            </div>
        </div>
    </section>

    <!-- Send a Message Section -->
    <section style="width: 100%; max-width: 800px; margin: 50px auto; padding: 20px;">
        <h2 style="font-size: 28px; text-align: left; margin-bottom: 20px;">Send a message</h2>

        <form style="display: flex; flex-wrap: wrap; gap: 20px;">
            <!-- First Name -->
            <div style="flex: 1 1 48%;">
                <label for="firstName" style="font-size: 14px; display: block; margin-bottom: 5px;">First Name</label>
                <input type="text" id="firstName" name="firstName" value="John" style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #eee; border-radius: 5px; background-color: #fffbe6;">
            </div>

            <!-- Last Name -->
            <div style="flex: 1 1 48%;">
                <label for="lastName" style="font-size: 14px; display: block; margin-bottom: 5px;">Last Name</label>
                <input type="text" id="lastName" name="lastName" value="Doe" style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #eee; border-radius: 5px; background-color: #fffbe6;">
            </div>

            <!-- Email -->
            <div style="flex: 1 1 100%;">
                <label for="email" style="font-size: 14px; display: block; margin-bottom: 5px;">Email</label>
                <input type="email" id="email" name="email" style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #eee; border-radius: 5px; background-color: #fffbe6;">
            </div>

            <!-- Phone -->
            <div style="flex: 1 1 100%;">
                <label for="phone" style="font-size: 14px; display: block; margin-bottom: 5px;">Phone</label>
                <input type="tel" id="phone" name="phone" style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #eee; border-radius: 5px; background-color: #fffbe6;">
            </div>

            <!-- Message -->
            <div style="flex: 1 1 100%;">
                <label for="message" style="font-size: 14px; display: block; margin-bottom: 5px;">Your message</label>
                <textarea id="message" name="message" rows="5" style="width: 100%; padding: 10px; font-size: 16px; border: 1px solid #eee; border-radius: 5px; background-color: #fffbe6;"></textarea>
            </div>

            <!-- Submit Button -->
            <div style="flex: 1 1 100%; text-align: right;">
                <button type="submit" style="background-color: #f7b500; color: white; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; cursor: pointer;">
                    Submit
                </button>
            </div>
        </form>
    </section>


<!--map-->

<section id="location">
    <div class="container">
        <h2>Where to Find Us</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.9332521465987!2d77.61987351482148!3d12.918463190888712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae159e1bd5fe0b%3A0x5c3b34fa016ce8b!2sAyurvedic%20Hospital!5e0!3m2!1sen!2sin!4v1615381326544!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>


    </main>

    <footer>
        <div class="container">
            
            <div class="footer-grid">
                <div>
                    <h3>Load Shift</h3>
                    <p>Your trusted partner for exports and transportation solutions.</p>
                </div>
                <div>
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#why-us">Why Choose Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Follow Us</h4>
                    <ul class="footer-links">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Load Shift. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Asset/Templates/Main/lib/easing/easing.min.js"></script>
    <script src="../Asset/Templates/Main/lib/waypoints/waypoints.min.js"></script>
    <script src="../Asset/Templates/Main/lib/lightbox/js/lightbox.min.js"></script>
    <script src="../Asset/Templates/Main/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../Asset/Templates/Main/js/main.js"></script>

    <script>
        // Add scroll-triggered animations
        function isInViewport(element) {
          const rect = element.getBoundingClientRect();
          return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
          );
        }
      
        function handleScrollAnimations() {
          const animatedElements = document.querySelectorAll('.animate-fadeIn, .animate-slideIn, .stagger-animation');
          animatedElements.forEach((el) => {
            if (isInViewport(el)) {
              el.style.visibility = 'visible';
              el.style.animationPlayState = 'running';
            }
          });
        }
      
        window.addEventListener('scroll', handleScrollAnimations);
        window.addEventListener('load', handleScrollAnimations);
      </script>
</body>
</html>