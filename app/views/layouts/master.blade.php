<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">  
        <!-- <link rel="stylesheet" href="css/main.css" />       -->
        {{ HTML::style('css/main.css'); }}

        @yield('head')
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
                <a href="index">
                    <img class="logo" src="{{ asset('img/logo.png') }}" alt="Cornerstone Books logo" />
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
                            <img src="{{asset('img/join-button.png')}}" alt="Join Cornerstone Books" />
                        </a>
                    </div>
                    <!--/join-->

                    <div class="login">
                        <a href="#">
                            <img src="{{asset('img/login-button.png')}}" alt="Login to Cornerstone Books" />
                        </a>
                    </div>
                    <!--/login-->

                </div>
                <!--/buttons-->

                <div class="clear"></div>

                <!--This is a brownish design at the bottom of the page header.-->
                <div class="bar">
                    <img src="{{asset('img/bar.png')}}" alt="A design at the top of the page" />
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
                            {{ HTML::link('/index', 'Home', array('alt' => "Link to the library's homepage")) }}
                        </li>
                        <li>
                            {{ HTML::link('/about', 'About', array('alt' => "Link to the library's 'about page")) }}
                                <!--A link to the about page-->
                                <!-- <img src="{{asset('img/about-button.png')}}" alt="Link to the library's 'about' page" /> -->
                            
                        </li>

                        <!-- <li>
                            {{ HTML::link('/all-users', 'Library members', array('alt' => "Link to the library's members page")) }}
                        </li> -->
                        
                        <!-- <li> 
                            <a href="#">
                                <!--A link to the activities and events page- ->
                                <img src="{{asset('img/activities-and-events-button.png')}}" alt="Link to the library's 'activities and events' page" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <!--A link to the 'hours and directions' page- ->
                                <img src="{{asset('img/hours-and-directions-button.png')}}" alt="Link to the library's 'hours and directions' page" />
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
                    <span>&#40;see Hours &amp; Directions&#41;</span>
                </article>



                <section class="library-materials">
                    <h3 class="invisible">Library Materials</h3>
                    <ul class="library-materials-links">
                        <li>
                            <!-- <a href="#" class="font2">Books</a> -->
                             {{ HTML::link('/books', 'Books', array('alt' => "Link to the library's books", 'class' => 'font2')) }}
                        </li>
                        <li>
                            <!-- <a href="#" class="font2">Magazines</a> -->
                            {{ HTML::link('/magazines', 'Magazines', array('alt' => "Link to the library's magazines", 'class' => 'font2')) }}
                        </li>
                        <li>
                            <!-- <a href="#" class="font2">CDs</a> -->
                            {{ HTML::link('/cds', 'CDs', array('alt' => "Link to the library's CDs", 'class' => 'font2')) }}
                        </li>
                        <li>
                            <!-- <a href="#" class="font2">DVDs</a> -->
                            {{ HTML::link('/dvds', 'DVDs', array('alt' => "Link to the library's DVDs", 'class' => 'font2')) }}
                        </li>
                        <li>
                            <!-- <a href="#" class="font2 small-button">Newspapers</a> -->
                            {{ HTML::link('/newspapers', 'Newspapers', array('alt' => "Link to the library's newspapers", 'class' => 'font2')) }}
                        </li>
                        <li>
                            <!-- <a href="#" class="font2 small-button">Historical Resources</a> -->
                            {{ HTML::link('/historical', 'Historical Resources', array('alt' => "Link to the historical resources", 'class' => 'font2')) }}
                        </li>
                        <li>
                            <!-- <a href="#" class="font2 small-button">Maps</a> -->
                            {{ HTML::link('/maps', 'Maps', array('alt' => "Link to the library's maps", 'class' => 'font2')) }}
                        </li>
                    </ul>
                    <!--/library-materials-links-->
                </section>


            </div>
            <!--/left-body-->

            <!--================ CENTRE BODY ================-->

            <div class="centre-body">

            <div class="search-field">
                    <section>
                        <h3 class="invisible">Search Field</h3>

                        <input class="txt_search" type="text" value="Search books, magazines, DVDs..." />
                        <!-- <button name="btn_search" type="submit" value="Search"> -->
                        <!--<img src="{{asset('img/search-button.png')}}" alt="Search Cornerstone books" onclick="search()" />-->
                        <input type="image" class="search" src="{{ asset('img/centre-body/search-button.png') }}" alt="A submit button to search library materials" />

                    </section>
                    <!--/search field-->

                </div>
                <!--/search-field-->

                @yield('main-content')
    		
    		</div>		                            

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

                    <!--=========== FOOTER ==========-->

            <footer class="page-footer">
                <h2 class="invisible">Bottom of Page</h2>

                <div class="bar-bottom">
                    <img src="{{asset('img/bar.png')}}" alt="A design at the bottom of the page" />
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

            </div> <!-- /container -->
    </body>
</html>
