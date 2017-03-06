<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <style>
            body {
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

            /* collapsed sidebar styles */
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
            table, th, td {
                border: 1px solid white;
                padding: 5px;
            }
            
        </style>
    </head>
    <body style = "background-color: black">
        <div class="page-container">

            <!-- top navbar -->
            <div style= "background-color: black" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
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

                    <!-- main area -->
                    <div class="col-xs-12 col-sm-9"style = "background-color: black">
                        <h1 style = "color: white" >MISSION ACCOMPLISHED</h1>
                        <div style = "color: white">
                        <?php
                        $fname = $_POST["fname"];
                        $lname = $_POST["lname"];
                        $email = $_POST["email"];
                        $author = $_POST["author"];
                        $quote = $_POST["quote"];
                        
                        echo "Thank you " . $fname . " " . $lname . " for visiting!<br><br>";

                        $servername = "setapproject.org";
                        $username = "csc412";
                        $password = "csc412";
                        $dbname = "student_csc412";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                        //    die("Connection failed: " . $conn->connect_error);
                        } else {
                        //    echo "Connected successfully! <br><br>";
                        }
                        $sql = "INSERT INTO `quotest`(FirstName, LastName, Email, Author, Quote) VALUES ('$fname', '$lname', '$email', '$author', '$quote')";
                       // echo $sql;
                        $sql = $conn->query($sql);
                        $sql = "SELECT * FROM `quotest` WHERE 1";
                        $result = $conn->query($sql);
                        echo "Your Message Has Been Sent";
                       /* if ($result->num_rows > 0) {
                            echo "Previous Visitors:";
                        } else {
                            echo "No previous visitors";
                        }*/
                        $conn->close();

                        
                        ?>
                            </div>
                       <!-- <table style = "color: white">
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Comment</th>
                            </tr>-->
                            <?php
                            /*$i = 0;
                            while ($i < $result->num_rows) {
                                $result->data_seek($i);
                                $row = $result->fetch_row();
                                $fname = $row[0];
                                $lname = $row[1];
                                $email = $row[2];
                                $author = $row[3];
                                $quote = $row[4];
                                ?>
                                <tr>                                  
                                    <td><?php if($fname != NULL){echo $fname; }else{
                                        echo "empty";
                                    }
                                        ?></td>                                    
                                    <td><?php if($fname != NULL){echo $lname; }else{echo "empty";}?></td> 
                                    <td><?php if($email != NULL){echo $email; }else{echo "empty";}?></td> 
                                    <td><?php if($author != NULL){echo $author; }else{echo "empty";}?></td> 
                                    <td><?php if($quote != NULL){echo $quote; }else{echo "empty";}?></td>     
                                </tr>
                                <?php
                                $i++;
                            }*/
                            ?>
                       <!-- </table>

                    <script>
                        $(document).ready(function() {
                            $('[data-toggle=offcanvas]').click(function() {
                                $('.row-offcanvas').toggleClass('active');
                            });
                        });
                    </script>-->
                       <img src="http://justsomething.co/wp-content/uploads/2014/02/hilarious-pinterest-fails-20.jpg" class="img-responsive" alt="Responsive image" height="600" width="300">
                </div><!--/.row -->
            </div><!--/.container -->
        </div><!--/.page-container -->
    </body>
</html>

