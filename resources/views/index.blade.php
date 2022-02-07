<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Simple Calculator</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/426912640f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/index.css">
    <!-- Plugins -->
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a href="https://laravel.com" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/36/Logo.min.svg" height="30" alt="image">
            </a>
        </div>
    </nav>


    <section class="jumbotron py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <h1 class="jumbotron-heading">Laravel Calculator</h1>
                    <p class="lead text-muted">This is a simple Laravel calculator capable of using arithmetic operations.</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Try Now!</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light text-dark pt-5 pb-5">
        <!-- LEFT COLUMN -->
        <div class="container pb-5 ">
            <div class="row text-center justify-content-sm-center no-gutters">
                <div class="col-12 col-md-4">
                    <div class="card shadow-sm h-100">
                        <div class=" card-body   p-md-5 ">
                            <i class="bi bi-question-circle fa-8x"></i>
                            <i class="bi bi-calculator fa-8x"></i>
                            <h2>How to Use?</h2>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Enter two numbers</li>
                                <li class="list-group-item">Select the preferred application</li>
                                <li class="list-group-item">Submit and see the results!</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4    ">
                    <div class="card shadow-sm h-100">
                        <div class=" card-body   p-md-5 ">
                            <!-- CALCULATOR MAIN -->
                            <h2 id="scrollspyHeading1">Calculator</h2>

                            <br>
                            <!-- main form -->


                            <form class="row g-3 needs-validation">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="uname" placeholder="Enter First Number" id="num1" name="num1" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                    <br>
                                    <input type="text" class="form-control" id="uname" placeholder="Enter Second Number" id="num2" name="num2" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <select class="form-select form-control lg" aria-label=".form-select-sm example" id="selectOperator" name="selectOperator" value>
                                    <option selected>Choose an Operation</option>
                                    <option value="Addition">Addition</option>
                                    <option value="Subtraction">Subtraction</option>
                                    <option value="Multiplication">Multiplication</option>
                                    <option value="Division">Division</option>
                                </select>
                                <!-- end of main form -->
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-danger" type="reset" name="reset" value="reset">Reset</button>
                                </div>
                                <?php
                                // CHECK IF SUBMIT BUTTON IS PRESSED AND PERFORMS THE COMPUTATION
                                if (isset($_GET['submit'])) {
                                    $operator = $_REQUEST['selectOperator'];
                                    $num1 = $_GET['num1'];
                                    $num2 = $_GET['num2'];
                                    // SWITCH STATEMENT TO CHECK THE OPERATION TO BE USED AND COMPUTE THE 2 NUMBERS
                                    switch ($operator) {
                                        case "Addition":
                                            $value = $num1 + $num2;
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo "Answer: ";
                                            echo $value;
                                            echo '</div>';
                                            break;
                                        case "Subtraction":
                                            $value = $num1 - $num2;
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo "Answer: ";
                                            echo $value;
                                            echo '</div>';
                                            break;
                                        case "Multiplication":
                                            $value = $num1 * $num2;
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo "Answer: ";
                                            echo $value;
                                            echo '</div>';
                                            break;
                                        case "Division":
                                            $value = $num1 / $num2;
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo "Answer: ";
                                            echo $value;
                                            echo '</div>';
                                            break;
                                        case "Choose an Operation":
                                            $value = "Choose an Operation";
                                            echo '<div class="alert alert-warning" role="alert">';
                                            echo $value;
                                            echo '</div>';
                                    }
                                } 
                                // RESETS THE SUBMITTED VALUES
                                if (isset($_GET['reset'])) {
                                    $value = "N/A";
                                    echo '<div class="alert alert-secondary" role="alert">';
                                    echo $value;
                                    echo '</div>';
                                }
                                ?>


                            </form>

                            <!-- END OF CALCULATOR -->
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN -->
                <div class="col-12 col-md-4    ">
                    <div class="card shadow-sm h-100">
                        <div class=" card-body   p-md-5 ">
                            <i class="bi bi-person-circle fa-8x"></i>
                            <h2>About Me</h2>
                            <p>Hi! I am Jeo Carlo Lubao. <br><br> A 3rd Year Bachelor of Science in Information Technology Student! <br> <br> I like to learn programming!</p>
                            <div class="col-12">
                                <a href="https://github.com/jeocarlolubao" target="_blank">
                                    <button class="btn btn-primary">
                                        <i class="fab fa-github fa-lg text-white"></i>
                                        Github
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 pb-5 bg-dark text-white">
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <p>Powered By Laravel, PHP and BootStrap (icons from FontAwesome!)</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end mb-4">
                        <a href="https://www.facebook.com/jeocarlolubao" class="m-2" target="_blank">
                            <i class="fab fa-facebook fa-lg text-white"></i>
                        </a>
                        <a href="https://discord.com/" class="m-2" target="_blank">
                            <i class="fab fa-discord fa-lg text-white"></i>
                        </a>
                        <a href="https://github.com/jeocarlolubao" class="m-2" target="_blank">
                            <i class="fab fa-github fa-lg text-white"></i>
                        </a>

                    </div>
                </div>
            </div>
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>


</body>

</html>