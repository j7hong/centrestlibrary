<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home - Centre Street Library &#45; Handen &#44; Ontario</title>
    <meta name="description" content="Homepage for Centre Street Library website, located in Handen, Ontario.">
    <link rel="stylesheet" href="css/styles-1-2-15.css" />
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
    <!--This is the main DIV containing everything else in the page.-->
    <div class="container">
       <!-- The 'invisible' class means that the label is used in the document outline, but will
        not be rendered.-->
        <h1 class="invisible">Centre Street Library</h1>

        <!--===================================== BANNER =====================================-->
        <!--This is the banner at the top of the page.-->
        <header class="banner" role="banner">

            <h2 class="invisible">Banner</h2>

            <!--This is the site's logo image, which is also a link to the home page.-->
            <a href="index1.2.13.html">
                <img class="logo" src="img/logo.png" alt="Cornerstone Books logo" />
            </a>

            <!--This is the title of the page. It should be rendered in the 'ebrima' font,
            have a large font size, and be aligned in the center.-->
            <span class="ebrima-regular-font heading-big centre-align">
                Centre Street Library
            </span>           

            <!--This DIV contains two buttons 'join' and 'login', which are links.-->
            <div class="buttons">
                <h3 class="invisible">Buttons</h3>
                <div class="join">
                    <a href="#">
                        <img src="img/join-button.png" alt="Join Cornerstone Books" />
                    </a>
                </div>
                <!--/join-->

                <div class="login">
                    <a href="#">
                        <img src="img/login-button.png" alt="Login to Cornerstone Books" />
                    </a>
                </div>
                <!--/login-->

            </div>
            <!--/buttons-->

            <div class="clear"></div>

            <!--This is a brownish design at the bottom of the page header.-->
            <div class="bar">
                <img src="img/bar.png" alt="A design at the top of the page" />
            </div>
            <!--/bar-->


        </header>
        <!--/banner-->

        <!--===================================== LEFT BODY =====================================-->
        <div class="left-body">
            <h2 class="invisible">Left Body</h2>

            <!--This is the page's main navigation.-->
            <nav class="main-menu" role="navigation">
                <h3 class="invisible">Main menu</h3>
                <ul class="main-menu-links">
                    <li>
                        <a href="index1.2.15.html">
                            <!--A link to the home page-->
                            <img src="img/home-button.png" alt="Link to library homepage" />
                        </a>
                    </li>
                    <li>
                        <a href="about1.2.8.html">
                            <!--A link to the about page-->
                            <img src="img/about-button.png" alt="Link to the library's 'about' page" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <!--A link to the activities and events page-->
                            <img src="img/activities-and-events-button.png" alt="Link to the library's 'activities and events' page" />
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <!--A link to the 'hours and directions' page-->
                            <img src="img/hours-and-directions-button.png" alt="Link to the library's 'hours and directions' page" />
                        </a>
                    </li>
                </ul>
                <!--/main-menu-links-->

            </nav>
            <!--/main-menu-->


            <article>
                <h3 class="bold heading3">Hours</h3>
                <div class="hours">                    
                        <div class="float1">
                            <span>Mon &#45; Fri</span>
                            <span>Sat</span>
                            <span>Sun</span>
                            <span class="uppercase">Holidays</span>
                        </div>                    

                    <div class="float1">
                        <span>9am &#45; 8pm</span>
                        <span>10am &#45; 5pm</span>
                        <span>1pm &#45; 5pm</span>
                        <span>closed</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <span>&#40;see Hours & Directions&#41;</span>
            </article>



            <section class="library-materials">
                <h3 class="invisible">Library Materials</h3>
                <ul class="library-materials-links">
                    <li>
                        <a href="#" class="font2">Books</a>
                    </li>
                    <li>
                        <a href="#" class="font2">Magazines</a>
                    </li>
                    <li>
                        <a href="#" class="font2">CDs</a>
                    </li>
                    <li>
                        <a href="#" class="font2">DVDs</a>
                    </li>
                    <li>
                        <a href="#" class="font2 small-button">Newspapers</a>
                    </li>
                    <li>
                        <a href="#" class="font2 small-button">Historical Resources</a>
                    </li>
                    <li>
                        <a href="#" class="font2 small-button">Maps</a>
                    </li>
                </ul>
                <!--/library-materials-links-->
            </section>


        </div>
        <!--/left-body-->

        <!--===================================== CENTRE BODY =====================================-->

        <div class="centre-body">
            <h2 class="invisible">Centre body</h2>
            <div class="search-field">
                <section>
                    <h3 class="invisible">Search Field</h3>

                    <input class="txt_search" type="text" value="Search books, magazines, DVDs..." />
                    <!-- <button name="btn_search" type="submit" value="Search"> -->
                    <!--<img src="img/search-button.png" alt="Search Cornerstone books" onclick="search()" />-->
                    <input type="image" class="search" src="img/centre-body/search-button.png" alt="A submit button to search library materials" />

                </section>
                <!--/search field-->

            </div>
            <!--/search-field-->


            <section role="main">
                <h3 class="invisible">Main Content</h3>
                <section>
                    <h4 class="heading1">About</h4>

                    <h5 class="invisible">About Centre Street Library</h5>

                    <div class="float1">
                         <p class="about-content heading2">
                        Centre Street Library is a small&#44; neighbourhood library 
		                    which also acts as a community centre for local residents&#46; 
		                    The library is located in the community of Cliffwood Falls&#44; 
		                    Handen&#44; Ontario&#46;
                         </p>
                    </div>
                   
                    <div class="float1">
                        <figure>
                            <img src="img/content/library.PNG" class="img-small float2" />
                            <figcaption>
                                <small>
                                    <a href="http://commons.wikimedia.org/wiki/File:Manchester_Library.jpg#file">"Manchester Library"</a> by 
                                    <a href="http://commons.wikimedia.org/wiki/User:DanCupid"> DanCupid </a>is licensed under <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.en">CC BY-SA 3.0</a>
                                </small>
                            </figcaption>
                        </figure>
                        
                    </div>                    

                    <div class="clear"></div>

                </section>
                <!--/About-->

                <section>
                    <h4 class="heading1">Activities &amp; Events</h4>

                    <h5 class="invisible">Activities &amp; Events at Centre Street Library</h5>

                    <p class="activities-and-events-content heading2">
                        At Centre Street Library&#44; we encourage community
                            involvement and strive to build a sense of 
                            belonging and togetherness&#46; Whether you
                            borrow materials&#44; study&#44; participate in 
                            our activities and&#47;or events&#44; or simply drop
                            by to talk with our staff&#44; we would like to 
                            welcome you to your community library&#46;
                    </p>

                </section>
                <!--/Activities & Events-->

                <section>
                    <h4 class="heading1">Hours &amp; Directions</h4>

                    <h5 class="invisible">Hours and Directions for Centre Street Library</h5>

                    <p class="hours-and-directions-content heading2">
                        The library hours are located on the left side of this 
			                page&#44; as well as the Hours &amp; Directions page&#46; 

			                More information about holidays and directions to 
			                the library are available&#46;
                    </p>

                </section>
                <!--/Hours & Directions-->

                <section>
                    <h4 class="invisible">Bottom Message</h4>

                    <article class="font1 heading1 centre-align">

                        <h5 class="invisible">A Message from Centre Street Library</h5>

                        <p class="bottom-message-content centre-align">
                            We hope you come visit your community
                            library&#46; We&#39;ll be here at&#58;
                        </p>

                        <figure>
                            <img class="title-small" src="img/header/title.png" alt="Centre Street Library title" />
                        </figure>
                        <!--/title-small-->

                    </article>
                    <!--/bottom-message-content-->

                </section>
                <!--/Bottom Message-->

            </section>
            <!--/main-->

        </div>
        <!--/centre-body-->

        <!--===================================== RIGHT BODY =====================================-->

        <div class="right-body">
            <h2 class="invisible">Right body</h2>
            <aside role="complementary">
                <h3 class="heading2 underline indent1">Activities &amp; Events</h3>

                <article class="activity-or-event">
                    <h4 class="invisible">Remembrance Day event</h4>
                    <p class="bold heading3">
                        Mon&#46;&#44; Nov&#46; 11&#44; 2013    11&#58;00 am
                        <br />
                    </p>

                    <span class="activity-or-event-heading">Remembrance Day Ceremony
                    </span>

                    <p>
                        Watch a short documentary
                        on Remembrance Day together&#44;
                        participate in a moment of silence,
                        and make your own poppy&#46;
                    </p>

                    <p>
                        Cost&#58; Free
                        <br />
                        Ages&#58; all ages
                    </p>
                </article>
                <!--/Remembrance Day event-->

                <article class="activity-or-event">
                    <h4 class="invisible">Book Reading event</h4>
                    <p class="bold heading3">
                        Wed&#46;&#44; Nov&#46; 13&#44; 2013    12&#58;00 pm
                        <br />
                    </p>

                    <span class="activity-or-event-heading">Book Reading
                    </span>

                    <p>
                        Enjoy a book reading
                        by award winning 
                        children&#39;s book
                        author Joan McKilken&#46; 
                        Enjoy a short reading 
                        with the author while 
                        you dive into another 
                        adventure&#33;
                    </p>

                    <p>
                        Cost&#58; Free
                        <br />
                        Ages&#58; 8 &#45; 12
                    </p>
                </article>
                <!--/Book Reading event-->

                <article class="activity-or-event">
                    <h4 class="invisible">Fall Diorama Craft Activity</h4>
                    <p class="bold heading3">
                        Sat&#46;&#44; Nov&#46; 16&#44; 2013    1&#58;30 pm
                        <br />
                    </p>

                    <span class="activity-or-event-heading">Arts and crafts activity
                    </span>

                    <p>
                        Make a fall diorama 
                        using leaves and other
                        fall materials&#44; Some
                        materials included&#46;
                        Please bring some 
                        of your own unique
                        materials&#33;
                    </p>

                    <p>
                        Cost&#58; Free
                        <br />
                        Ages&#58; 5 &#45; 12
                    </p>
                </article>
                <!--/Fall Diorama Craft Activity-->

            </aside>
            <!--/Activities & Events-->

        </div>
        <!--/right-body-->

        <div class="clear"></div>

        <!--===================================== FOOTER =====================================-->

        <footer class="page-footer">
            <h2 class="invisible">Bottom of Page</h2>

            <div class="bar-bottom">
                <img src="img/bar.png" alt="A design at the bottom of the page" />
            </div>
            <!--/bar-bottom-->


            <h3 class="invisible">Other information about Centre Street Library</h3>

            <ul>
                <li>Centre Street Library &copy; 2013</li>
                <li>Contact&#58; info&#64;csl&#46;on&#46;ca</li>
                <li>&#40;705&#41;406&#45;2041</li>
                <li><span>10 Centre Street</span>
                    <span class="new-line">Cliffwood Falls&#44;</span>
                    <span class="new-line">Handen&#44; ON</span>
                    <span class="new-line">T3R 8L5&#44; CANADA</span>
                </li>
            </ul>

            <div class="clear"></div>

            <!--<div class="copyright"></div>
                 <div class="email"></div>
                 <div class="phone-number"></div>
                 <div class="address">
                    
                 </div>-->

        </footer>
        <!--/Bottom of Page-->
    </div>
    <!--/container-->
    
</body>
</html>
