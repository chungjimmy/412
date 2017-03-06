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
                width: 95%;
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
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div class="page-container">

            <!-- top navbar -->
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">Steven's CSC412 Spring 2015 Website</a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row row-offcanvas row-offcanvas-left">

                    <!-- sidebar -->
                    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                        <ul class="nav">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="current.html">Current</a></li>
                            <li><a href="visitorlog.html">Visitors</a></li>              
                        </ul>
                    </div>

                    <!-- main area -->
                    <div class="col-xs-12 col-sm-9">
                        <h1>Visitor Log</h1>
                        <div></div>
                        <?php
                        $fname = $_POST["fname"];
                        $lname = $_POST["lname"];
                        $email = $_POST["email"];
                        $quote = $_POST["quote"];
                        $author = $_POST["author"];

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

                        $sql = $conn->query("INSERT INTO `slum_table`(`First Name`, `Last Name`, `Email`, `Quote`, `Quote Author`) VALUES ('$fname', '$lname', '$email', '$quote', '$author')");
                        $sql = "SELECT * FROM `slum_table` WHERE 1";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            echo "Previous Visitors:";
                        } else {
                            echo "No previous visitors";
                        }
                        $conn->close();

                        /*
                          $visitors = fopen("visitors.txt", "a+");
                          fwrite($visitors, $name . "<br>");

                          echo "<br> <br> Thanks to all the other visitors:<br>";
                          echo fread($visitors, filesize("visitors.txt"));
                          fclose($visitors);
                         */
                        ?>
                        <table>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Quote</th>
                                <th>Quote Author</th>
                            </tr>
                            <?php
                            $i = 0;
                            while ($i < $result->num_rows) {
                                $result->data_seek($i);
                                $row = $result->fetch_row();
                                $fname = $row[0];
                                $lname = $row[1];
                                $email = $row[2];
                                $quote = $row[3];
                                $author = $row[4];
                                ?>
                                <tr>
                                    <td><?php echo $fname; ?></td>
                                    <td><?php echo $lname; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $quote; ?></td>
                                    <td><?php echo $author; ?></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </table>
                    </div><!-- /.col-xs-12 main -->

                    <!-- JavaScript -->
                    <script>
                        $(document).ready(function() {
                            $('[data-toggle=offcanvas]').click(function() {
                                $('.row-offcanvas').toggleClass('active');
                            });
                        });
                    </script>

                </div><!--/.row -->
            </div><!--/.container -->
        </div><!--/.page-container -->
    </body>
</html>

