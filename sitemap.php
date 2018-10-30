<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>
                            </a></li>

                        <li class="active"><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>
                            </a></li>
                        <!--<li><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>
                            </a>
                        </li>-->
                        <li class="nav-header">About US</li>
                        <li><a  href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;VTU Vision & Mission
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>
                            </a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;VTU E-Learning Vision & Mission
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>
                            </a></li>
                        <!--<li><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>
                            </a></li>-->

                    </ul>
                </div>

            </div>

            <div class="span9">

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Head Up!</strong>&nbsp;Welcome to VTU College E-Learning Site.
                </div>


                <p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8902738260226!2d77.47925351482138!3d12.914773290893258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3f28736685b5%3A0x1a5d61ecd211c8eb!2sSurana+College!5e0!3m2!1sen!2sin!4v1481908636781" width="860" height="390" frameborder="10" marginheight="0" marginwidth="auto"></iframe></p>



            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


