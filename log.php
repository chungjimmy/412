
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!--<script>
            $(document).ready(function () {
                $("#b1").click(function () {
                    $("#pic").slideToggle(2000);
                });
                $("#b2").click(function () {
                    $("#circle").fadeOut(5000);
                    $("#pic").fadeOut(5000);
                    $("#b1").fadeOut(5000);
                    $("#b2").fadeOut(5000);
                    $("#navigation").fadeOut(5000);
                    $("#circle").fadeOut(5000);
                    $("#cc").fadeOut(5000);
                });
            });
        </script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


        <style>body {
                padding-top: 51px;  
            }
            .text-center {
                padding-top: 20px;
            }
            .col-xs-12 {
                background-color: #fff;
            }
            #sidebar {
                height: 100%;
                padding-right: 0;
                padding-top: 20px;
            }
            #sidebar .nav {
                width: 90%;
            }
            #sidebar li {
                border:0 #f2f2f2 solid;
                border-bottom-width:1px;
            }

            @media screen and (max-width: 767px) {
                .row-offcanvas {
                    position: relative;
                    -webkit-transition: all 0.25s ease-out;
                    -moz-transition: all 0.25s ease-out;
                    transition: all 0.25s ease-out;
                }
                .row-offcanvas-right
                .sidebar-offcanvas {
                    right: -41.6%;
                }

                .row-offcanvas-left
                .sidebar-offcanvas {
                    left: -41.6%;
                }
                .row-offcanvas-right.active {
                    right: 41.6%;
                }
                .row-offcanvas-left.active {
                    left: 41.6%;
                }
                .sidebar-offcanvas {
                    position: absolute;
                    top: 0;
                    width: 41.6%;
                }
                #sidebar {
                    padding-top:0;
                }
            }

        </style>
    </head>
    <body style = "background-color: black">

        <div class="page-container">
            <!-- top navbar -->
            <div style= "background-color: black"class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav"
                                <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a style = "color: white" class="navbar-brand" href="index.html">Jimmy Chung</a>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row row-offcanvas row-offcanvas-left">

                    <!-- sidebar -->
                    <div class="col-xs-6 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
                        <ul class="nav">
                            <li class="active"><a style = "color: white" href="index.html">Home</a></li>
                            <li><a style = "color: white" href="about.html">About</a></li>
                            <li><a style = "color: white" href="class.html">Classes</a></li>
                            <li><a style = "color: white" href="current.html">Current</a></li><li>
                            <li><a style = "color: white" href="log.php">Contact Me</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-9"style = "background-color: black">
                        <body>
                            <br>
                            <p style="color:white">Email Me for longer Messages or Comments</p>
                            <form style = "color: black" action ="welcome.php" method ="post">
                                <p></p>
                                <a style="color:white">First: </a><input type ="text"name ="fname"><br><br>
                                <a style="color:white">Last: </a><input type ="text" name ="lname"><br><br>
                                <a style="color:white">Email: </a><input type ="text" name ="email"><br><br>
                                <a style="color:white">Subject: </a><input type ="text" name ="author"><br><br>
                                <a style="color:white"> Comment:  </a> <p><textarea rows="4" cols="50" type ="text" name="quote"></textarea><br></p>
                                <input style = "color: darkblue" type ="submit">
                                
                                <div><p><br></p></div>
                                <!--<center><img src="https://dorneawhale.files.wordpress.com/2015/02/thank-you2.gif"></center>-->
                                

                            </form>
                    </div>





                    </body>
                    </html>