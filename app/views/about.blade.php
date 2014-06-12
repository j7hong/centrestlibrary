@extends('layouts.master')

@section('head')
	<title>About page</title>
	<meta name="description" content="About page for Centre Street Library website, located in Handen, Ontario.">    
    <link rel="stylesheet" href="css/about.css" />
@stop


@section('main-content')

	<section role="main">
                <h3 class="invisible">Main Content</h3>
                <section>
                    <h4 class="heading1">About</h4>
                    <ul class="page-links">
                        <li class="indent1"><a href="#about-library">What is Centre Street Libary about&#63;</a></li>
                        <li class="indent1"><a href="#history">What is the history of the library&#63;</a></li>
                        <li class="indent1"><a href="#staff">Who works at the library&#63;</a></li>
                    </ul>
                </section>

                <section>
                    <h4 class="invisible">About Centre Street Libary</h4>

                    <h5 id="about-library" class="heading2 bold">What is Centre Street Libary about&#63;</h5>

                    <p id="about-csl-content" class="heading2">
                        At Centre Street Library&#44; we encourage community
                            involvement and strive to build a sense of 
                            belonging and togetherness&#46; Whether you
                            borrow materials&#44; study&#44; participate in 
                            our activities and&#47;or events&#44; or simply drop
                            by to talk with our staff&#44; we would like to 
                            welcome you to your community library&#46;
                    </p>


                </section>
                <!--/About-->

                <section>
                    <h4 class="invisible">Centre Street Library History</h4>

                    <h5 id="history" class="heading2 bold">What is the history of the library&#63;</h5>

                    <p id="csl-history-content" class="heading2">
                        Located on Centre Street&#44; the library is in a central location&#46; 
                            Therefore the history of this library actually goes far back&#33; Since 
                            opening to the community of Cliffwood Falls in 1914&#44; this library 
                            began as a small schoolhouse for young 
                            children&#46; As the number of  students grew&#44;
                            the building was eventually turned into 
                            a small library&#44; through a generous 
                            donation from the Walter Family&#46;
                           
                        <br />
                        Today&#44; Centre Street Library has undergone
                            two major renovations&#44; and retains its old
                            stone columns to symbolize its past&#46; 
                    </p>

                </section>
                <!--/Centre Street Library History-->

                <section>
                    <h4 class="invisible">Centre Street Library Staff</h4>

                    <h5 id="staff" class="heading2 bold">Who works at the library&#63;</h5>

                    <p id="csl-staff-content" class="heading2">
                        Librarians&#44; community volunteers&#44; and students&#44; who are all part of 
                        the local community serve your local library&#46; You probably know
                        most of the people who work at Centre Street Library&#44; or have seen
                        them in the neighbourhood&#46; They would love if you stopped by
                        to stay hello&#46; 

                    </p>

                </section>
                <!--/Centre Street Library Staff-->

            </section>
            <!--/main-->


        </div>
        <!--/centre-body-->
@stop

