<!DOCTYPE html>
<html>
<?php
?>
<head>
	<meta charset="utf-8" />
	<title>Index</title>
</head>
<body>
    <!--Wrapping all elements within a container-->
    <div id="container">
        <!--Header section-->
        <header>
            <!--Defining main header section with site logo and navigation-->
            <div id="mainHeader">
                <a href="#" class="sitelogo">
                    <img src="..\Content\PBTLogo.png" class="proplogo" />
                </a>
                <nav role="navigation" id="headerNav">
                    <ul class="centralNav" style="position:relative; top: 8em; left: 12em" ;>
                        <li><a class="active" href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menus</a></li>
                        <li><a href="#">Locations</a></li>
                        <li><a href="#">Bookings</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="icon">
                            <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
                        </li>
                    </ul>
                </nav>
                <!--Navigation menu for social media-->
                <div id="social-nav" class="socialicons">
                    <ul id="social-menu" class="menu">
                        <li>
                            <a href="#">
                                <img src="..\Content\1465361590_facebook_circle_black.png" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="..\Content\1465361610_twitter_circle_black.png" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="..\Content\1465361627_instagram_circle_black.png" />
                            </a>
                        </li>
                    </ul>
                </div> <!--End tag for social nav menu-->
            </div> <!--End tag for main header-->
        </header> <!--End of header section-->
        <!--Define site content area-->
        <div id="index-content-area" class="content">
            <div id="inner-content-area" class="wrap">
                <main id="main-content-area" role="main">
                    <h1 class="introtitle">Welcome to PBT,
                        <br>Propellor!</br></h1>
                    <p id="introtext">
                        <span><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                        <br />incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        <br />exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</i></span>
                    </p>
                </main> <!--End of main content area-->
            </div> <!--End of innter content area-->
        </div> <!--End of index content area-->
        <!--Hotspot navigation-->
        <div class="grid">
        </div>
        <div class="cta-panel grid-item1" style="background-image: url('Content/tile-eatery1.24281a2a.jpg'); " onmouseover="mouseOverPanel1()" onmouseout="mouseOutPanel1()">
            <div class="panel-desc1">
                <h3>Book a table</h3>
                <a href="#"><img src="Content\arrows-overlay.f5080ee8.png" /></a>
                <p>click here</p>
            </div>
        </div>
        <div class="cta-panel grid-item2" style="background-image: url('Content/tile-eatery2.ea9bfc86.jpg');" onmouseover="mouseOverPanel2()" onmouseout="mouseOutPanel2()">
            <div class="panel-desc2">
                <h3>Book a table</h3>
                <a href="#"><img src="Content\arrows-overlay.f5080ee8.png" /></a>
                <p>click here</p>
            </div>
        </div>
        <div class="cta-panel grid-item3" style="background-image: url('Content/tile-eatery3.446e81e3.jpg');" onmouseover="mouseOverPanel3()" onmouseout="mouseOutPanel3()">
            <div class="panel-desc3">
                <h3>Book a table</h3>
                <a href="#"><img src="Content\arrows-overlay.f5080ee8.png" /></a>
                <p>click here</p>
            </div>
        </div>
        <div class="cta-panel grid-item4" style="background-image: url('Content/tile-eatery4.62aa0b73.jpg');" onmouseover="mouseOverPanel4()" onmouseout="mouseOutPanel4()">
            <div class="panel-desc4">
                <h3>Book a table</h3>
                <a href="#"><img src="Content\arrows-overlay.f5080ee8.png" /></a>
                <p>click here</p>
            </div>
        </div>
        <!--Carousel content-->
        <div class="carousel">
            <ul class="panes">
                <li>
                    <img src="Content\slide-1.7ceb020c.jpg" alt="" />
                </li>
                <li>
                    <img src="Content\slide-1.7ceb020c.jpg" alt="" />
                </li>
                <li>
                    <img src="Content\slide-1.7ceb020c.jpg" alt="" />
                </li>
            </ul>
        </div>
        <!--Footer area-->
        <footer id="main-footer" class="footer" role="contentinfo">
            <div id="FooterPanel">
                <div class="footer-columns">
                    <div id="column1">
                        <div id="column-intro-row1" class="column-intro-row">
                            <h2 class="column-title">
                                Twitter
                            </h2>
                            <p class="column-intro1"><i>@PBT_propeller</p>
                            <div class="button">
                                <input type="button" value="Follow" class="flwbtn" onClick="window.location.href='#'"/>
                            </div>
                        </div>
                        <div id="column-content-row1">
                            <a class="twitter-timeline twitter-timeline-error" href="https://twitter.com/PropellerComms" data-tweet-limit="1" data-chrome="nofooter noheader noborders" data-widget-id="625586757774503936" data-twitter-extracted-i1465443902256282954="true">Tweets by @PropellerComms</a>
                        </div>
                    </div>
                    <div id="column2">
                        <div id="column-intro-row2" class="column-intro-row">
                            <h2 class="column-title2">
                                Instagram
                            </h2>
                            <p class="column-intro2"><i>PBT_propeller</i></p>
                            <div class="button">
                               <input type="button" value="Follow" class="flwbtninsta" onClick="window.location.href='#'"/>
                            </div>
                        </div>
                        <div id="column-content-row2">
                            <div id="instafeed-slide-1">
                                <img src="Content/insta-1.eae63054.jpg" />
                            </div>
                            <div id="instafeed-slide-2">
                                <img src="Content/insta-2.d3e29ba2.jpg" />
                            </div>
                        </div>
                    </div>
                    <div id="column3">
                            <h2 class="column-title3">
                                Sign-up
                            </h2>
                            <p class="column-intro3"><i>Subscribe to our newsletter and <br />never miss out on our exclusive offers!</i></p>
                        <div id="column-content-row3">
                            <form id="regform">
                                <div class="form-field1">
                                    <label class="lblnme" for="name">Name</label>
                                    <label class="lbldivnme">|</label>
                                    <input type="text" class="name" />
                                </div>
                                <div class="form-field2">
                                    <label class="lblmail"for="mail">Email</label>
                                    <label class="lbldivmail">|</label>
                                    <input type="email" class="email"/>
                                </div>
                                <div class="form-field3">
                                    <label class="lbldob" for="dob">DOB</label>
                                    <label class="lbldivdob">|</label>
                                    <select name="select" selected>
                                        <option selected disabled class="hiddenoption">DD</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <select name="select">
                                        <option selected disabled class="hiddenoption">MM</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <select name="select">
                                        <option selected disabled class="hiddenoption">YY</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="button">
                                    <input type="button"class="formsub" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="footer-menu">
                    <nav role="navigation" id="footermenu">
                        <ul class="fnavmenu">
                            <li>PBT Propeller</li>
                            <li>|</li>
                            <li>1-3 Windsor Court</li>
                            <li>|</li>
                            <li>Rugby</li>
                            <li>|</li>
                            <li>Warwickshire</li>
                            <li>|</li>
                            <li>CV21 3BH</li>
                            <li>|</li>
                            <li>pbt@propcom.co.uk</li>
                            <li>|</li>
                            <li>01788 566270</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
<link href="Content/Index.min.css" rel="stylesheet" />
<link href="Content/Prop-Carousel.min.css" rel="stylesheet" />
<script src="jquery-2.2.4.js"></script>
<script src="index.js"></script>