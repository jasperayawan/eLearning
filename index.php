<?php
    require('./server/db_config.php');

    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));

    }
    // else{
    //     header("Location: login.php");
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eLearning Technology</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="sticky-top w-100 header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light flex-wrap py-3 px-lg-5 ">
            <div class="container-fluid w-100">
                    <div class="logo"><a href="index.php" class="fw-bold fs-4 text-decoration-none text-dark"><span class="span__logo">E</span>-LTech</a></div>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-text-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                        <div class="input-group ms-auto search-top">
                            <div class="form-outline d-flex input-group">
                                <input type="search" class="form-control" id="navbar-search-autocomplete" placeholder="search">
                                <div class="search-focus d-flex justify-content-center align-items-center px-2 btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="about.php" aria-current="page" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="courses.php" class="nav-link">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a href="cart.php" class="nav-link cart_counter position-relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
                                      </svg>
                                      
                                      <div class="position-absolute hover-cart">
                                         <div class="list-cart p-2">
                                          <div class="row">
                                                <div class="col-6">
                                                    <img src="assets/1.png" alt="" class="w-100 h-75">
                                                </div>
                                                <div class="col-6 info">
                                                    <p>Javascript full course</p>
                                                    <span>₱699</span>
                                                </div>
                                          </div>
                                          <hr>
                                          <div class="row">
                                            <div class="col-6">
                                                <img src="assets/2.jpg" alt="" class="w-100 h-75">
                                            </div>
                                            <div class="col-6 info">
                                                <p>HTML Semantic structure</p>
                                                <span>₱699</span>
                                            </div>
                                        </div>
                                        <hr>
                                          <div class="row">
                                            <div class="col-6">
                                                <img src="assets/3.jpg" alt="" class="w-100 h-100">
                                            </div>
                                            <div class="col-6 info">
                                                <p>React.js full course</p>
                                                <span>₱699</span>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <p class="fw-bold">Total: ₱1,298</p>
                                            <div class="col">
                                                <button class="btn w-100">Go to cart</button>
                                            </div>
                                        </div>
                                        </div>
                                      </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="learning.php" class="nav-link">Learning</a>
                            </li>
                        </ul>
                        <?php
                            if (!isset($_SESSION["id"])) {
                                // User is not logged in
                                echo '
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <a href="./login.php">
                                    <button class="btn">Login</button>
                                    </a>
                                    <a href="./signup.php">
                                        <button class="btn">Sign up</button>
                                    </a>
                                </div>';
                            } else {
                                // User is logged in
                                echo '
                                <div class="d-flex justify-content-center align-items-center gap-2">
                                    <a href="">' . $user["name"] . '</a>
                                    </a>
                                    <a href="./logout.php">
                                        <button class="btn">Logout</button>
                                    </a>
                                </div>
                                ';
                            }
                        ?>
                    
                </div>
            </div>
        </nav>
    </header>  

 

    <div class="select">
        
    </div>

    <!-------------------------Main area--------------->

    <main>
        <section>
            <div class="px-lg-5 home d-flex justify-content-center align-items-center" id="home">
                <div class="container d-flex flex-column-reverse mb-4 flex-lg-row row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="col righ-h">
                            <h1 class="text-center text-md-start"><span class="learn">Learn</span> and be effecient.📚</h1>
                            <p class="text-center text-md-start">Anywhere, Anytime, Start Learning today!</p>
                            <p class="text-center text-md-start">-Sign up now to fulfill your desired course</p>
                            <div class="d-flex justify-content-center align-items-center justify-content-md-start sign-up-now">
                                <button class="btn sign-up btn-outline-none btn-info text-white"><a href="signup.html" class="text-decoration-none text-white">Sign up now!</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col position-relative">
                        <div class="row">
                            <div class="col position-relative">
                                <div class="image d-flex justify-content-center align-content-center 
                                            d-md-flex justify-content-md-start align-items-md-start">
                                    <img src="assets/mini project.png" class="prof-left" alt="study profile">
                                </div>
                                <div class="circle"></div>
                                <div class="circle2"></div>
                                <div class="wording1">
                                    <h3 class="d-flex m-0">Expert Instructor</h3>
                                </div>
                                <div class="wordings rounded">
                                    <h3>eLearning Tech</h3>
                                    <p>Explore now!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-container">
                <!-- chat box-->
                <div class="chat-box">
                    <!--client-->
                    <div class="client-user">
                        <h5>Chat</h5>
                        <div class="client-info">
                            <h6>chat bot</h6>
                            <span>online</span>
                        </div>
                    </div>
                    <div class="btn-close btn-xx" id="close-chat"></div>
                    <!--main chat section-->
                    <div class="chats">
                        <div class="my-chat">Hi!</div>
                        <div class="client-chat">Hello, how can i help you?</div>
                        <div class="my-chat">Can i ask some questions?</div>
                        <div class="client-chat">yes, sure!</div>
                        <div class="my-chat">typing...</div>
                    </div>

                    <!-- input field section -->

                    <div class="chat-input input-group">
                        <input type="text" class="form-control" placeholder="Enter message">
                        <button class="send-btn btn ">
                            send
                        </button>
                    </div>
                </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="svg-chat bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                        <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z"/>
                    </svg>

                
            </div>
            
            <!-------------------------About area--------------->

            <div class="container px-lg-5 about my-5" id="about">
                <div class="about-title">
                    <h1 class="text-center">About us</h1>
                </div>
                <div class="about-content m-5 d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col d-flex justify-content-center align-items-center left-image">
                            <img src="assets/OIP.jpg" alt="study">
                        </div>
                        <div class="col d-flex justify-content-center align-content-center flex-column">
                            <h2 class="text-center text-md-start">Highly Recommended</h2>
                            <p>E-Learning Tech has a variety of courses and it's highly recommended to those who want to learn new 
                                technologies that they can use in the future then you will get a certificate after you 
                                finish the course don't hesitate and purchase now on what course are you interested.
                                This is your chance for you to learn your desired skills, grab it now!  
                            </p>
                        </div>
                    </div>
                </div>

                <div class="about-content px-3 pt-sm-5 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column-reverse flex-md-row gap-4">
                        <div class="d-flex py-3 py-md-0 justify-content-center align-content-center flex-column px-3">
                            <h2 class="text-center text-md-start">What kind of Courses Offers Learning Platform</h2>
                            <p class="text">High-definition video of higher resolution and quality than standard-definition. Generally 
                                any video image with considerally more than 480 vertical scan lines or 57% vertical list-unstyledis 
                                considered high denition.  
                            </p>

                            <div class="explore py-4">
                                <div class="d-flex gap-4 ps-4">
                                    <p class="position-relative me-4"><span>-</span> 1500+ course</p>
                                    <p class="position-relative"><span>-</span> 150+ free Videos</p>
                                </div>
                                <div class="d-flex gap-4 ps-4">
                                    <p class="position-relative me-4"><span>-</span> 30k+ Lessons</p>
                                    <p class="position-relative"><span>-</span> Qualited Teaches</p>
                                </div>

                                <button class="btn btn-explore text-light bg-dark mt-2"><a href="courses.html" class="text-decoration-none text-light">Explore courses</a></button>
                            </div>
                        </div>
                        <div class=" d-flex justify-content-center align-items-center left-image-platform left-image">
                            <img src="assets/pple-removebg-preview.png" alt="study">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-------------------------------feedback from clients-------------------->

            <div class="container py-5 px-lg-5">
                <div class="client_say_container">
                    <h2 class="text-center py-3">Our Clients Say About us</h2>
                    <div class="row px-4 flex-column d-flex flex-md-row client-card-say gap-4">
                        <div class="col client">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                              </svg>
                            <p class="text-dark">I recently took UI & UX design course and it exceeded all of my expectations.
                                The intructor was knowledgeable and engaging, and the material was presented in a clear a concise manner.
                            </p>
                            <div class="client-profile">
                                <img src="assets/jas (2).jpg" alt="profile">
                                <span class="fw-medium">@ChrisjohnAndoyo</span>
                            </div>
                        </div>

                        <div class="col client">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                              </svg>
                            <p class="text-dark">The course was well-structured and provided practical examples and exercises the helped
                                me to apply the concepts I learned. I appreciated the flexibility of the course, which allowed me to learn
                                at my own pace and on my own schedule.
                            </p>
                            <div class="client-profile">
                                <img src="assets/jasper.jpg" alt="profile">
                                <span class="fw-medium">@MarkAbano</span>
                            </div>
                        </div>

                        <div class="col client">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z"/>
                              </svg>
                            <p class="text-dark">I highly recommended E-Learning TECH to anyone looking to improve their skills
                                in coding. 
                            </p>
                            <div class="client-profile">
                                <img src="assets/jasp (2).jpg" alt="profile">
                                <span class="fw-medium">@EjPinoliad</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="instructor-container">
                <div class="container">
                    <div class="row d-flex flex-column flex-md-row content-instructor">
                        <div class="col d-flex justify-content-center align-items-center">
                            <img src="assets/ff-removebg-preview.png" alt="study" width="250">
                        </div>

                        <div class="col txt-instructor pt-4 pt-md-0 d-flex justify-content-center align-items-center d-md-flex justify-content-md-start align-items-md-center">
                            <div class="intructr">
                                <h2>Do you want to be an <br>
                                intructor?</h2>
                                <div class="ins-button">
                                    <button class="btn button-join-now py-2" data-bs-toggle="modal" data-bs-target="#joinNow">Join now!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-------------------------course area--------------->

            <div class="container px-lg-5 course pb-lg-5">
                <div class="row">
                    <div class="col-md-8">
                            <div class="course-title">
                                <h1 class="mb-4">Most Popular Courses</h1>
                                <!-- <h2 class="fs-1">Find the right course for you</h2> -->
                                <h3 class="pb-2">Recommended for you</h3>
                            </div>  
                    </div>
                </div>
                <div class="row">
                    <!-- courses -->
                    <div class="col-md-6 col-lg-3 rounded-2" data-bs-toggle="modal" data-bs-target="#myFirstModal">
                        <div class="position-relative mb-3 caard">
                            <div class="text-dark">
                                <div class="courses-item-innner">
                                    <div class="img-boxs">
                                        <img src="assets/5.png" alt="Node js" class="w-100 courses-item rounded-top-2">
                                    </div>
                                    <div class="product-details">
                                        <h3 class="title">Rest API node.js</h3>
                                        <div class="rating">
                                            <span class="enroll__students">450 students</span>
                                            <span class="average-rating">⭐</span>
                                            <span class="average-stars">4.8</span>
                                        </div>
                                            <span class="price">₱499</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-2 btnseller">
                                <p class="best-seller text-white py-0">Bestseller</p>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 col-lg-3 rounded-2" data-bs-toggle="modal" data-bs-target="#mySecondModal">
                        <div class=" position-relative mb-3 caard">
                            <div class="text-dark">
                                <div class="courses-item-innner">
                                    <div class="img-boxs">
                                        <img src="assets/8.jpg" alt="Unreal" class="w-100 courses-item rounded-top-2">
                                    </div>
                                    <div class="product-details">
                                        <h3 class="title">UI & UX Design</h3>
                                        <div class="rating">
                                            <span class="enroll__students">450 students</span>
                                            <span class="average-rating">⭐</span>
                                            <span class="average-stars">4.8</span>
                                        </div>
                                            <span class="price">₱599</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-2 btnseller">
                                <p class="best-seller text-white py-0">Bestseller</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 rounded-2" data-bs-toggle="modal" data-bs-target="#myThirdModal">
                        <div class=" position-relative mb-3 caard">
                            <div class="text-dark">
                                <div class="courses-item-innner">
                                    <div class="img-boxs">
                                        <img src="assets/9.jpg" alt="Machine learning" class="w-100 courses-item rounded-top-2">
                                    </div>
                                    <div class="product-details">
                                        <h3 class="title">Machine Learning</h3>
                                        <div class="rating">
                                            <span class="enroll__students">450 students</span>
                                            <span class="average-rating">⭐</span>
                                            <span class="average-stars">4.8</span>
                                        </div>
                                            <span class="price">₱499</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-2 btnseller">
                                <p class="best-seller text-white py-0">Bestseller</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3 rounded-2" data-bs-toggle="modal" data-bs-target="#myFourthModal">
                        <div class=" position-relative mb-3 caard">
                            <div class="text-dark">
                                <div class="courses-item-innner">
                                    <div class="img-boxs">
                                        <img src="assets/10.jpg" alt="Unreal" class="w-100 courses-item rounded-top-2">
                                    </div>
                                    <div class="product-details">
                                        <h3 class="title">Data science</h3>
                                        <div class="rating">
                                            <span class="enroll__students">450 students</span>
                                            <span class="average-rating">⭐</span>
                                            <span class="average-stars">4.8</span>
                                        </div>
                                            <span class="price">₱699</span>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="p-2 btnseller">
                                <p class="best-seller text-white py-0">Bestseller</p>
                            </div>
                        </div>
                    </div>

                    <!------------------------modal area----------->

                    <div class="modal fade" id="myFirstModal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content position-relative">
                                <img src="assets/5.png" alt="Python" class="w-100">
                                <div class="text-white close-btn">&times;</div>
                                <div class="modal-title fw-bold p-lg-2">Rest API node.js</div>
                                <div class="modal-body">
                                    <h5>Description</h5>
                                    <p>REST APIs are an essential component of modern web development, allowing different applications to communicate with
                                         each other over the internet.
                                         This REST API Node.js course provides a comprehensive introduction to building REST APIs using Node.js... 
                                        <span class="text-primary smore">see more</span>
                                        </p>
                                        <button class="btn">Enroll now</button>
                                        <button class="btn addToCart">Add to Cart</button>
                                </div>
                                    <button class="btn-close position-absolute modal-x" data-bs-dismiss="modal"></button>
                            </div>
                        </div>
                    </div>
                    <div id="mySecondModal" class="modal fade">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <img src="assets/8.jpg" alt="javascript" class="w-100">
                                <div class="text-white close-btn">&times;</div>
                                <div class="modal-title fw-bold p-lg-2">UX & UI Design</div>
                                <div class="modal-body">
                                    <h5>Description</h5>
                                    <p>In today's digital age, having a great user interface (UI) and user experience (UX) design is essential for creating 
                                        successful websites, mobile apps, and other digital products. This UI & UX design course 
                                        provides a comprehensive introduction to the principles and practices of designing effective digital interfaces... 
                                        <span class="text-primary smore">see more</span>
                                       </p>
                                        <button class="btn">Enroll now</button>
                                        <button class="btn addToCart">Add to Cart</button>
                                </div>
                                    <button class="btn-primary btn-close position-absolute modal-x" data-bs-dismiss="modal"></button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="myThirdModal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <img src="assets/9.jpg" alt="mern stack" class="w-100">
                                <div class="text-white close-btn">&times;</div>
                                <div class="modal-title fw-bold p-lg-2">Machine Learning</div>
                                <div class="modal-body">
                                    <h5>Description</h5>
                                    <p>Machine learning is a rapidly growing field that involves training algorithms to make predictions or decisions 
                                        based on data. It has applications in a wide range of industries, from healthcare and finance to transportation and retail. If you're interested in learning
                                         more about machine learning, there are many courses available that can help you get started. 
                                        <span class="text-primary smore">see more</span>
                                       </p>
                                    <button class="btn">Enroll now</button>
                                    <button class="btn addToCart">Add to Cart</button>

                                </div>
                                    <button class="btn-close btn-close-white position-absolute modal-x" data-bs-dismiss="modal"></button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="myFourthModal">
                        <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <img src="assets/10.jpg" alt="Unreal" class="w-100">
                                    <div class="text-white close-btn">&times;</div>
                                    <div class="modal-title fw-bold p-lg-2">Data Science</div>
                                <div class="modal-body">
                                    <h5>Description</h5>
                                    <p>We will explain how to perform the standard processing and normalization steps, starting with raw data, to get to the
                                         point where one can investigate relevant biological questions. Throughout the case studies, we will make use of exploratory 
                                        plots to get a general overview of the shape of the data and the result of the experiment... 
                                        <span class="text-primary smore">see more</span>
                                       </p>
                                        <button class="btn">Enroll now</button>
                                        <button class="btn addToCart">Add to Cart</button>
                                </div>
                                    <button class="btn-primary btn-close-white btn-close position-absolute modal-x" data-bs-dismiss="modal"></button>               
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="joinNow">
                        <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content join-modal-content">
                                    
                                <div class="modal-body flex-column">
                                    <h2 class="text-center">Join now!</h2>
                                    <div class="input-group">
                                        <input type="email" id="email" class="form-control" name="email" placeholder="enter your email" required>
                                        <button class="btn btnSubsribe" onclick="alert('we update you soon!')">Join</button>
                                    </div>
                                </div>
                                    <button class="btn-primary btn-close position-absolute modal-x" data-bs-dismiss="modal"></button>               
                            </div>
                        </div>
                    </div>

                    <!------------------------end of the modal----------->

                </div>
                <div class="row">
                    <div class="col-12 text-center mt-3">
                        <a href="courses.html" class="btn view-all bg-light px-2 py-0">view all</a>
                    </div>
                </div>
            </div>

            <!------------------------Footer area----------->

            
        </section>
        
        <div class="footer pt-lg-5 pt-3 mt-4">
            <footer class="w-100 container">
                <div class="row d-flex flex-column flex-lg-row">
                <section class="col-lg-4">
                    <div class="col-lg-6 flex-column">
                        <div class="logo">
                            <h3 class="text-center text-lg-start">E-LTech</h3>
                        </div>
                        <p class="text-center text-sm-start text-secondary">One Step Closer to Your Dreams</p>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="text-center text-sm-start">Follow us on</h3>
                        <div class="row text-center d-flex justify-content-center align-items-center d-md-flex justify-content-md-start align-items-md-start">
                            <div class="col-3 svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook text-secondary" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                            </div>
                            <div class="col-3 svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram text-secondary" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                            </div>
                            <div class="col-3 svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter text-secondary" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                    </svg>
                            </div>
                            <div class="col-3 svg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin text-secondary" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                        </svg>
                            </div>
                        </div>
                    </div>
                </section>
                    <section class="col-lg-4">
                        <div>
                            <h3 class="text-center text-sm-start">Company Address</h3>
                            <p class="text-center text-sm-start text-secondary">#7033 Pitogo, Pagadian City</p>
                            <p class="text-center text-sm-start"><i class=" text-secondary">help@eLearningTech.com</i></p>
                            <!-- <div class="button my-2 my-lg-4 text-center text-sm-start">
                                <button class="btn reachOutBtn">Reach out</button>
                            </div> -->
                        </div>
                    </section>
                    <section class="subscribe col ">
                        <div>
                            <div>
                                <h3 class="text-center text-md-start">News letter</h3>
                            </div>
                            <div class="input-group">   
                                <input type="email" class="form-control" id="email" placeholder="jasper@gmail.com">
                                <button class="btn btnSubsribe">Subscribe</button>
                            </div>
                        </div>
                    </section>
                    </div>
                    <section class="mt-5 footr row">
                        <div class="col-6">
                            <span class="text-secondary">@2023 eLearningTech.net | Allrights reserved.</span>
                        </div>
                        <div class="col-6 terms">
                            <span><a href="#" class="text-decoration-none text-secondary">Terms of Service</a></span>
                            <span><a href="#" class="text-decoration-none text-secondary"> | Privacy Policy</a></span>
                        </div>
                    </section>
            </footer>
        </div>
    </main>

<script src="main.js"></script>

</body>
</html>