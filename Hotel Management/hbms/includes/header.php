    <div class="header-top">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                      </button>
                                    <div class="navbar-brand">
                                        <h1><a href="index.php">HOTEL</a></h1>
                                    </div>
                                </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rooms <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <?php
$ret="SELECT * from tblcategory";
$query1 = $dbh -> prepare($ret);
$query1->execute();
$resultss=$query1->fetchAll(PDO::FETCH_OBJ);
foreach($resultss as $rows)
{               ?>
                                   <li><a href="category-details.php?catid=<?php echo htmlentities($rows->ID)?>"><?php echo htmlentities($rows->CategoryName)?></a></li>
                                    <?php } ?> 
                                </ul>
                                    </li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                     <?php if (strlen($_SESSION['hbmsuid']==0)) {?>
                                    <li><a href="admin/login.php">Admin</a></li>

                                    <li><a href="signup.php">Sign Up</a></li>
                                    <li><a href="signin.php">Login</a></li><?php } ?>
                                    <?php if (strlen($_SESSION['hbmsuid']!=0)) {?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="my-booking.php">My Booking</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                    
                                </ul>
                                    </li><?php } ?>
                                </ul>
                              
                            </div>
  </div>
                        </nav>

                    </div>