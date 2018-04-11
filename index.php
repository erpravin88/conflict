<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Landing Page</title>

        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">



        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="src/Bootstrap/dist/css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="src/Bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="src/Bootstrap/dist/css/bootstrap-grid.css">

        <!-- Main Styles CSS -->
        <link rel="stylesheet" type="text/css" href="src/css/main.min.css">
        <link rel="stylesheet" type="text/css" href="src/css/fonts.min.css">
        <!-- Main Font -->
        <script src="src/js/webfontloader.min.js"></script>

        <script>
            WebFont.load({
                google: {
                    families: ['Roboto:300,400,500,700:latin']
                }
            });
        </script>
        <script src="src/js/jquery-3.2.1.js"></script>
        <script src="scripts/angular.min.js"></script>
        <script src="scripts/angular-ui-router.min.js"></script>
        <script src="https://cdn.jsdelivr.net/satellizer/0.15.5/satellizer.min.js"></script>
        <script src="scripts/app.js"></script>
        <script src="scripts/app.router.js"></script>

        <script src="scripts/app.main.js"></script>
        <script src="scripts/app.config.js"></script>
        <script src="scripts/controllers/login.js"</script>
        <script src="libs/angular/angular-resource/angular-resource.js"></script>
        <script src="libs/angular/ngstorage/ngStorage.js"></script>
        <script src="scripts/fetchUrl.js"></script>

        <script src="scripts/services/ngstore.js"></script>
        <script src="scripts/services/ui-load.js"></script>

        <script src="src/js/jquery.appear.js"></script>
        <script src="src/js/jquery.mousewheel.js"></script>
        <script src="src/js/perfect-scrollbar.js"></script>
        <script src="src/js/jquery.matchHeight.js"></script>
        <script src="src/js/svgxuse.js"></script>
        <script src="src/js/imagesloaded.pkgd.js"></script>
        <script src="src/js/Headroom.js"></script>
        <script src="src/js/velocity.js"></script>
        <script src="src/js/ScrollMagic.js"></script>
        <script src="src/js/jquery.waypoints.js"></script>
        <script src="src/js/jquery.countTo.js"></script>
        <script src="src/js/popper.min.js"></script>
        <script src="src/js/material.min.js"></script>
        <script src="src/js/bootstrap-select.js"></script>
        <script src="src/js/smooth-scroll.js"></script>
        <script src="src/js/selectize.js"></script>
        <script src="src/js/swiper.jquery.js"></script>
        <script src="src/js/moment.js"></script>
        <script src="src/js/daterangepicker.js"></script>
        <script src="src/js/simplecalendar.js"></script>
        <script src="src/js/fullcalendar.js"></script>
        <script src="src/js/isotope.pkgd.js"></script>
        <script src="src/js/ajax-pagination.js"></script>
        <script src="src/js/Chart.js"></script>
        <script src="src/js/chartjs-plugin-deferred.js"></script>
        <script src="src/js/circle-progress.js"></script>
        <script src="src/js/loader.js"></script>
        <script src="src/js/run-chart.js"></script>
        <script src="src/js/jquery.magnific-popup.js"></script>
        <script src="src/js/jquery.gifplayer.js"></script>
        <script src="src/js/mediaelement-and-player.js"></script>
        <script src="src/js/mediaelement-playlist-plugin.min.js"></script>

        <script src="src/js/base-init.js"></script>
        <script defer src="src/fonts/fontawesome-all.js"></script>

        <script src="src/Bootstrap/dist/src/js/bootstrap.bundle.js"></script>


        <!--<script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>-->
        <script>
            // Initialize Firebase
//            var config = {
//                apiKey: "AIzaSyC-7JSwTuLeeXJ4kFaBmDw1n4JoNgh1vM8",
//                authDomain: "conflictask.firebaseapp.com",
//                databaseURL: "https://conflictask.firebaseio.com",
//                projectId: "conflictask",
//                storageBucket: "",
//                messagingSenderId: "488647977105"
//            };
//            firebase.initializeApp(config);
//            var provider = new firebase.auth.TwitterAuthProvider();
//            
////            var credential = firebase.auth.TwitterAuthProvider.credential('IlCl0k8VddokhsdHgeLiNPvlV', 'CABP9GissXwCelhTzH5l4WJGPyu6Kna8l4m4RLH6LcUui9APxg');
////            firebase.auth().signInWithCredential(credential).catch(function (error) {
////                // Handle Errors here.
////                var errorCode = error.code;
////                var errorMessage = error.message;
////                // The email of the user's account used.
////                var email = error.email;
////                // The firebase.auth.AuthCredential type that was used.
////                var credential = error.credential;
////                // ...
////            });
//            firebase.auth().signInWithPopup(provider).then(function (result) {
//                // This gives you a the Twitter OAuth 1.0 Access Token and Secret.
//                // You can use these server side with your app's credentials to access the Twitter API.
//                var token = result.credential.accessToken;
//                var secret = result.credential.secret;
//                // The signed-in user info.
//                var user = result.user;
//                console.log(result);
//                // ...
//            }).catch(function (error) {
//                console.log(error);
//                // Handle Errors here.
//                var errorCode = error.code;
//                var errorMessage = error.message;
//                // The email of the user's account used.
//                var email = error.email;
//                // The firebase.auth.AuthCredential type that was used.
//                var credential = error.credential;
//                // ...
//            });
        </script>


    </head>
    <body class="body-bg-white" ng-app="app" ng-controller="AppCtrl">
        <div ng-if="!notLogged">

            <div class="fixed-sidebar {{openClass}}">
                <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

                    <a href="02-ProfilePage.html" class="logo">
                        <div class="img-wrap">
                            <img src="src/img/logo.png" alt="Olympus">
                        </div>
                    </a>

                    <div class="mCustomScrollbar" data-mcs-theme="dark">
                        <ul class="left-menu">
                            <li>
                                <a ng-click='openmenu()' class="js-sidebar-open" style="cursor: pointer;">
                                    <svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
                                </a>
                            </li>
                            <li>
                                <a href="03-Newsfeed.html">
                                    <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
                                </a>
                            </li>
                            <li>
                                <a href="27-ManageWidgets.html">
                                    <svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
                                </a>
                            </li>
                            <li>
                                <a href="26-Statistics.html">
                                    <svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
                    <a href="02-ProfilePage.html" class="logo">
                        <div class="img-wrap">
                            <img src="src/img/logo.png" alt="Olympus">
                        </div>
                        <div class="title-block">
                            <h6 class="logo-title">olympus</h6>
                        </div>
                    </a>

                    <div class="mCustomScrollbar" data-mcs-theme="dark">
                        <ul class="left-menu">
                            <li>
                                <a ng-click='openmenu()' class="js-sidebar-open" style="cursor: pointer;">
                                    <svg class="olymp-close-icon left-menu-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                                    <span class="left-menu-title">Collapse Menu</span>
                                </a>
                            </li>
                            <li>
                                <a href="27-ManageWidgets.html">
                                    <svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
                                    <span class="left-menu-title">Explore</span>
                                </a>
                            </li>
                            <li>
                                <a href="03-Newsfeed.html">
                                    <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
                                    <span class="left-menu-title">Newsfeed</span>
                                </a>
                            </li>
                            <li>
                                <a href="26-Statistics.html">
                                    <svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>
                                    <span class="left-menu-title">Account Stats</span>
                                </a>
                            </li>

                        </ul>

                        <div class="profile-completion">

                            <div class="skills-item">
                                <div class="skills-item-info">
                                    <span class="skills-item-title">Profile Completion</span>
                                    <span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="76" data-from="0"></span><span class="units">76%</span></span>
                                </div>
                                <div class="skills-item-meter">
                                    <span class="skills-item-meter-active bg-primary" style="width: 76%"></span>
                                </div>
                            </div>

                            <span>Complete <a href="#">your profile</a> so people can know more about you!</span>

                        </div>
                    </div>
                </div>
            </div>

            <!-- ... end Fixed Sidebar Left -->


            <!-- Fixed Sidebar Left -->

            <div class="fixed-sidebar fixed-sidebar-responsive">

                <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
                    <a href="#" class="logo js-sidebar-open">
                        <img src="src/img/logo.png" alt="Olympus">
                    </a>

                </div>

                <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
                    <a href="#" class="logo">
                        <div class="img-wrap">
                            <img src="src/img/logo.png" alt="Olympus">
                        </div>
                        <div class="title-block">
                            <h6 class="logo-title">olympus</h6>
                        </div>
                    </a>

                    <div class="mCustomScrollbar" data-mcs-theme="dark">

                        <div class="control-block">
                            <div class="author-page author vcard inline-items">
                                <div class="author-thumb">
                                    <img alt="author" src="src/img/author-page.jpg" class="avatar">
                                    <span class="icon-status online"></span>
                                </div>
                                <a href="02-ProfilePage.html" class="author-name fn">
                                    <div class="author-title">
                                        {{UserDetails.first_name}} {{UserDetails.last_name}} <svg class="olymp-dropdown-arrow-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">MAIN SECTIONS</h6>
                        </div>

                        <ul class="left-menu">
                            <li>
                                <a href="#" class="js-sidebar-open">
                                    <svg class="olymp-close-icon left-menu-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                                    <span class="left-menu-title">Collapse Menu</span>
                                </a>
                            </li>
                            <li>
                                <a href="mobile-index.html">
                                    <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
                                    <span class="left-menu-title">Newsfeed</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
                                    <span class="left-menu-title">Manage Widgets</span>
                                </a>
                            </li>
                            <li>
                                <a href="Mobile-35-YourAccount-FriendsRequests.html">
                                    <svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>
                                    <span class="left-menu-title">Account Stats</span>
                                </a>
                            </li>

                        </ul>

                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">YOUR ACCOUNT</h6>
                        </div>

                        <ul class="account-settings">
                            <li>
                                <a href="#">

                                    <svg class="olymp-menu-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

                                    <span>Profile Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="olymp-logout-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

                                    <span>Log Out</span>
                                </a>
                            </li>
                        </ul>

                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">About Olympus</h6>
                        </div>

                        <ul class="about-olympus">
                            <li>
                                <a href="#">
                                    <span>Terms and Conditions</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>FAQs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Careers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

            




            <!-- Header-BP -->

            <header class="header" id="site-header">

                <div class="page-title">
                    <h6>Newsfeed</h6>
                </div>

                <div class="header-content-wrapper">
                    <form class="search-bar w-search notification-list friend-requests">
                        <div class="form-group with-button">
                            <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                            <button>
                                <svg class="olymp-magnifying-glass-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                            </button>
                        </div>
                    </form>

                    <a href="#" class="link-find-friend">Find Friends</a>

                    <div class="control-block">

                        <div class="control-icon more has-items">
                            <svg class="olymp-thunder-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>

                            <div class="label-avatar bg-primary">8</div>

                            <div class="more-dropdown more-with-triangle triangle-top-center">
                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">Notifications</h6>
                                    <a href="#">Mark all as read</a>
                                    <a href="#">Settings</a>
                                </div>

                                <div class="mCustomScrollbar" data-mcs-theme="dark">
                                    <ul class="notification-list">
                                        <li>
                                            <div class="author-thumb">
                                                <img src="src/img/avatar62-sm.jpg" alt="author">
                                            </div>
                                            <div class="notification-event">
                                                <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                            </div>
                                            <span class="notification-icon">
                                                <svg class="olymp-comments-post-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                                            </span>

                                            <div class="more">
                                                <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                                <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                            </div>
                                        </li>

                                        <li class="un-read">
                                            <div class="author-thumb">
                                                <img src="src/img/avatar63-sm.jpg" alt="author">
                                            </div>
                                            <div class="notification-event">
                                                <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
                                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                                            </div>
                                            <span class="notification-icon">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </span>

                                            <div class="more">
                                                <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                                <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                            </div>
                                        </li>

                                        <li class="with-comment-photo">
                                            <div class="author-thumb">
                                                <img src="src/img/avatar64-sm.jpg" alt="author">
                                            </div>
                                            <div class="notification-event">
                                                <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                                            </div>
                                            <span class="notification-icon">
                                                <svg class="olymp-comments-post-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                                            </span>

                                            <div class="comment-photo">
                                                <img src="src/img/comment-photo1.jpg" alt="photo">
                                                <span>“She looks incredible in that outfit! We should see each...”</span>
                                            </div>

                                            <div class="more">
                                                <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                                <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="author-thumb">
                                                <img src="src/img/avatar65-sm.jpg" alt="author">
                                            </div>
                                            <div class="notification-event">
                                                <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
                                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                                            </div>
                                            <span class="notification-icon">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </span>

                                            <div class="more">
                                                <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                                <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="author-thumb">
                                                <img src="src/img/avatar66-sm.jpg" alt="author">
                                            </div>
                                            <div class="notification-event">
                                                <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                                            </div>
                                            <span class="notification-icon">
                                                <svg class="olymp-heart-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
                                            </span>

                                            <div class="more">
                                                <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                                <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <a href="#" class="view-all bg-primary">View All Notifications</a>
                            </div>
                        </div>

                        <div class="author-page author vcard inline-items more">
                            <div class="author-thumb">
                                <img alt="author" src="src/img/author-page.jpg" class="avatar">
                                <span class="icon-status online"></span>
                                <div class="more-dropdown more-with-triangle">
                                    <div class="mCustomScrollbar" data-mcs-theme="dark">
                                        <div class="ui-block-title ui-block-title-small">
                                            <h6 class="title">Your Account</h6>
                                        </div>

                                        <ul class="account-settings">
                                            <li>
                                                <a href="29-YourAccount-AccountSettings.html">

                                                    <svg class="olymp-menu-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

                                                    <span>Profile Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg class="olymp-logout-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

                                                    <span>Log Out</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="ui-block-title ui-block-title-small">
                                            <h6 class="title">About Olympus</h6>
                                        </div>

                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <span>Terms and Conditions</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>FAQs</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Careers</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Contact</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <a href="02-ProfilePage.html" class="author-name fn">
                                <div class="author-title">
                                    {{UserDetails.first_name}} {{UserDetails.last_name}} <svg class="olymp-dropdown-arrow-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                                </div>
                                <span class="author-subtitle">{{UserDetails.user_name}}</span>
                            </a>
                        </div>

                    </div>
                </div>

            </header>

            <!-- ... end Header-BP -->


            <!-- Responsive Header-BP -->

            <header class="header header-responsive" id="site-header-responsive">

                <div class="header-content-wrapper">
                    <ul class="nav nav-tabs mobile-app-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#request" role="tab">
                                <div class="control-icon has-items">
                                    <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                    <div class="label-avatar bg-blue">6</div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#chat" role="tab">
                                <div class="control-icon has-items">
                                    <svg class="olymp-chat---messages-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    <div class="label-avatar bg-purple">2</div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#notification" role="tab">
                                <div class="control-icon has-items">
                                    <svg class="olymp-thunder-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
                                    <div class="label-avatar bg-primary">8</div>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#search" role="tab">
                                <svg class="olymp-magnifying-glass-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                                <svg class="olymp-close-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Tab panes -->
                <div class="tab-content tab-content-responsive">

                    <div class="tab-pane " id="request" role="tabpanel">

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">FRIEND REQUESTS</h6>
                                <a href="#">Find Friends</a>
                                <a href="#">Settings</a>
                            </div>
                            <ul class="notification-list friend-requests">
                                <li>
                                    <div class="author-thumb">
                                        <img src="src/img/avatar55-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Tamara Romanoff</a>
                                        <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
                                    </div>
                                    <span class="notification-icon">
                                        <a href="#" class="accept-request">
                                            <span class="icon-add without-text">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </span>
                                        </a>

                                        <a href="#" class="accept-request request-del">
                                            <span class="icon-minus">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </span>
                                        </a>

                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-thumb">
                                        <img src="src/img/avatar56-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Tony Stevens</a>
                                        <span class="chat-message-item">4 Friends in Common</span>
                                    </div>
                                    <span class="notification-icon">
                                        <a href="#" class="accept-request">
                                            <span class="icon-add without-text">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </span>
                                        </a>

                                        <a href="#" class="accept-request request-del">
                                            <span class="icon-minus">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </span>
                                        </a>

                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                                <li class="accepted">
                                    <div class="author-thumb">
                                        <img src="src/img/avatar57-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-thumb">
                                        <img src="src/img/avatar58-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Stagg Clothing</a>
                                        <span class="chat-message-item">9 Friends in Common</span>
                                    </div>
                                    <span class="notification-icon">
                                        <a href="#" class="accept-request">
                                            <span class="icon-add without-text">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </span>
                                        </a>

                                        <a href="#" class="accept-request request-del">
                                            <span class="icon-minus">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </span>
                                        </a>

                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="view-all bg-blue">Check all your Events</a>
                        </div>

                    </div>

                    <div class="tab-pane " id="chat" role="tabpanel">

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">Chat / Messages</h6>
                                <a href="#">Mark all as read</a>
                                <a href="#">Settings</a>
                            </div>

                            <ul class="notification-list chat-message">
                                <li class="message-unread">
                                    <div class="author-thumb">
                                        <img src="src/img/avatar59-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Diana Jameson</a>
                                        <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    </span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="src/img/avatar60-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Jake Parker</a>
                                        <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-thumb">
                                        <img src="src/img/avatar61-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                                        <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    </span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>

                                <li class="chat-group">
                                    <div class="author-thumb">
                                        <img src="src/img/avatar11-sm.jpg" alt="author">
                                        <img src="src/img/avatar12-sm.jpg" alt="author">
                                        <img src="src/img/avatar13-sm.jpg" alt="author">
                                        <img src="src/img/avatar10-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
                                        <span class="last-message-author">Ed:</span>
                                        <span class="chat-message-item">Yeah! Seems fine by me!</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                    </span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                            </ul>

                            <a href="#" class="view-all bg-purple">View All Messages</a>
                        </div>

                    </div>

                    <div class="tab-pane " id="notification" role="tabpanel">

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">Notifications</h6>
                                <a href="#">Mark all as read</a>
                                <a href="#">Settings</a>
                            </div>

                            <ul class="notification-list">
                                <li>
                                    <div class="author-thumb">
                                        <img src="src/img/avatar62-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-comments-post-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li class="un-read">
                                    <div class="author-thumb">
                                        <img src="src/img/avatar63-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li class="with-comment-photo">
                                    <div class="author-thumb">
                                        <img src="src/img/avatar64-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-comments-post-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
                                    </span>

                                    <div class="comment-photo">
                                        <img src="src/img/comment-photo1.jpg" alt="photo">
                                        <span>“She looks incredible in that outfit! We should see each...”</span>
                                    </div>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="src/img/avatar65-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="src/img/avatar66-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                                    </div>
                                    <span class="notification-icon">
                                        <svg class="olymp-heart-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
                                    </span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>
                            </ul>

                            <a href="#" class="view-all bg-primary">View All Notifications</a>
                        </div>

                    </div>

                    <div class="tab-pane " id="search" role="tabpanel">


                        <form class="search-bar w-search notification-list friend-requests">
                            <div class="form-group with-button">
                                <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                            </div>
                        </form>


                    </div>

                </div>
                <!-- ... end  Tab panes -->

            </header>

            <!-- ... end Responsive Header-BP -->
            <div class="header-spacer"></div>
        </div>
        <div ui-view id="routerview" ng-if="!notLogged">

        </div>

        <div ng-if="notLogged">
       

            <!-- Window-popup Update Header Photo -->

            <div class="modal fade" id="update-header-photo">
                <div class="modal-dialog ui-block window-popup update-header-photo">
                    <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                        <svg class="olymp-close-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                    </a>

                    <div class="ui-block-title">
                        <h6 class="title">Update Header Photo</h6>
                    </div>

                    <a href="#" class="upload-photo-item">
                        <svg class="olymp-computer-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

                        <h6>Upload Photo</h6>
                        <span>Browse your computer.</span>
                    </a>

                    <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

                        <svg class="olymp-photos-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

                        <h6>Choose from My Photos</h6>
                        <span>Choose from your uploaded photos</span>
                    </a>
                </div>
            </div>


            <!-- ... end Window-popup Update Header Photo -->

            <!-- Window-popup Choose from my Photo -->

            <div class="modal fade" id="choose-from-my-photo">
                <div class="modal-dialog ui-block window-popup choose-from-my-photo">
                    <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                        <svg class="olymp-close-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                    </a>

                    <div class="ui-block-title">
                        <h6 class="title">Choose from My Photos</h6>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
                                    <svg class="olymp-photos-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                                    <svg class="olymp-albums-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="ui-block-content">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="src/img/choose-photo1.jpg" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="src/img/choose-photo2.jpg" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="src/img/choose-photo3.jpg" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>

                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="src/img/choose-photo4.jpg" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="src/img/choose-photo5.jpg" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="src/img/choose-photo6.jpg" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>

                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="src/img/choose-photo7.jpg" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="src/img/choose-photo8.jpg" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <div class="radio">
                                        <label class="custom-radio">
                                            <img src="src/img/choose-photo9.jpg" alt="photo">
                                            <input type="radio" name="optionsRadios">
                                        </label>
                                    </div>
                                </div>


                                <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                                <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                            </div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="src/img/choose-photo10.jpg" alt="photo">
                                        <figcaption>
                                            <a href="#">South America Vacations</a>
                                            <span>Last Added: 2 hours ago</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="src/img/choose-photo11.jpg" alt="photo">
                                        <figcaption>
                                            <a href="#">Photoshoot Summer 2016</a>
                                            <span>Last Added: 5 weeks ago</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="src/img/choose-photo12.jpg" alt="photo">
                                        <figcaption>
                                            <a href="#">Amazing Street Food</a>
                                            <span>Last Added: 6 mins ago</span>
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="src/img/choose-photo13.jpg" alt="photo">
                                        <figcaption>
                                            <a href="#">Graffity & Street Art</a>
                                            <span>Last Added: 16 hours ago</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="src/img/choose-photo14.jpg" alt="photo">
                                        <figcaption>
                                            <a href="#">Amazing Landscapes</a>
                                            <span>Last Added: 13 mins ago</span>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="choose-photo-item" data-mh="choose-item">
                                    <figure>
                                        <img src="src/img/choose-photo15.jpg" alt="photo">
                                        <figcaption>
                                            <a href="#">The Majestic Canyon</a>
                                            <span>Last Added: 57 mins ago</span>
                                        </figcaption>
                                    </figure>
                                </div>


                                <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                                <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ... end Window-popup Choose from my Photo -->


            <a class="back-to-top" href="#">
                <img src="src/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
            </a>




            <!-- Window-popup-CHAT for responsive min-width: 768px -->

            <div class="ui-block popup-chat popup-chat-responsive">
                <div class="ui-block-title">
                    <span class="icon-status online"></span>
                    <h6 class="title" >Chat</h6>
                    <div class="more">
                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                        <svg class="olymp-little-delete js-chat-open"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                    </div>
                </div>
                <div class="mCustomScrollbar">
                    <ul class="notification-list chat-message chat-message-field">
                        <li>
                            <div class="author-thumb">
                                <img src="src/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="src/img/author-page.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Don’t worry Mathilda!</span>
                                <span class="chat-message-item">I already bought everything</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="src/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <form class="need-validation">

                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Press enter to post...</label>
                        <textarea class="form-control" placeholder=""></textarea>
                        <div class="add-options-message">
                            <a href="#" class="options-message">
                                <svg class="olymp-computer-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
                            </a>
                            <div class="options-message smile-block">

                                <svg class="olymp-happy-sticker-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon"></use></svg>

                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat1.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat2.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat3.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat4.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat5.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat6.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat7.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat8.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat9.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat10.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat11.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat12.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat13.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat14.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat15.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat16.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat17.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat18.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat19.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat20.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat21.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat22.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat23.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat24.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat25.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat26.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat27.png" alt="icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>


            </div>
        </div>
        <div class="login_page" ng-if="notLogged">

            <div class="main-header main-header-fullwidth main-header-has-header-standard" >


                <!-- Header Standard Landing  -->

                <div class="header--standard header--standard-landing" id="header--standard">
                    <div class="container">
                        <div class="header--standard-wrap">

                            <a href="#" class="logo">
                                <div class="img-wrap">
                                    <img src="src/img/logo.png" alt="Olympus">
                                    <img src="src/img/logo-colored-small.png" alt="Olympus" class="logo-colored">
                                </div>
                                <div class="title-block">
                                    <h6 class="logo-title">olympus</h6>
                                    <div class="sub-title">SOCIAL NETWORK</div>
                                </div>
                            </a>

                            <a href="#" class="open-responsive-menu js-open-responsive-menu">
                                <svg class="olymp-menu-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
                            </a>

                            <div class="nav nav-pills nav1 header-menu">
                                <div class="mCustomScrollbar">
                                    <ul>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Profile Page</a>
                                                <a class="dropdown-item" href="#">Newsfeed</a>
                                                <a class="dropdown-item" href="#">Post Versions</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown dropdown-has-megamenu">
                                            <a href="#" class="nav-link dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
                                            <div class="dropdown-menu megamenu">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="column-tittle">Main Links</h6>
                                                        <a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-blue-light">new</span></a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h6 class="column-tittle">BuddyPress</h6>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-primary">HOT!</span></a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h6 class="column-tittle">Corporate</h6>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h6 class="column-tittle">Forums</h6>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                        <a class="dropdown-item" href="#">Profile Page</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Terms & Conditions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="close-responsive-menu js-close-responsive-menu">
                                            <svg class="olymp-close-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                                        </li>
                                        <li class="nav-item js-expanded-menu">
                                            <a href="#" class="nav-link">
                                                <svg class="olymp-menu-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
                                                <svg class="olymp-close-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                                            </a>
                                        </li>
                                        <li class="shoping-cart more">
                                            <a href="#" class="nav-link">
                                                <svg class="olymp-shopping-bag-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-shopping-bag-icon"></use></svg>
                                                <span class="count-product">2</span>
                                            </a>
                                            <div class="more-dropdown shop-popup-cart">
                                                <ul>
                                                    <li class="cart-product-item">
                                                        <div class="product-thumb">
                                                            <img src="src/img/product1.png" alt="product">
                                                        </div>
                                                        <div class="product-content">
                                                            <h6 class="title">White Enamel Mug</h6>
                                                            <ul class="rait-stars">
                                                                <li>
                                                                    <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                                </li>

                                                                <li>
                                                                    <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-star star-icon" aria-hidden="true"></i>
                                                                </li>
                                                            </ul>
                                                            <div class="counter">x2</div>
                                                        </div>
                                                        <div class="product-price">$20</div>
                                                        <div class="more">
                                                            <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                                        </div>
                                                    </li>
                                                    <li class="cart-product-item">
                                                        <div class="product-thumb">
                                                            <img src="src/img/product2.png" alt="product">
                                                        </div>
                                                        <div class="product-content">
                                                            <h6 class="title">Olympus Orange Shirt</h6>
                                                            <ul class="rait-stars">
                                                                <li>
                                                                    <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                                </li>

                                                                <li>
                                                                    <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="far fa-star star-icon" aria-hidden="true"></i>
                                                                </li>
                                                            </ul>
                                                            <div class="counter">x1</div>
                                                        </div>
                                                        <div class="product-price">$40</div>
                                                        <div class="more">
                                                            <svg class="olymp-little-delete"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <div class="cart-subtotal">Cart Subtotal:<span>$80</span></div>

                                                <div class="cart-btn-wrap">
                                                    <a href="#" class="btn btn-primary btn-sm">Go to Your Cart</a>
                                                    <a href="#" class="btn btn-purple btn-sm">Go to Checkout</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ... end Header Standard Landing  -->
                <div class="header-spacer--standard"></div>

                <div class="content-bg-wrap">
                    <div class="content-bg bg-landing"></div>
                </div>

                <div class="container">
                    <div class="row display-flex">
                        <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                            <div class="landing-content">
                                <h1>The Most Complete Social Network is Here!</h1>
                                <p>We are the best and biggest social network with 5 billion active users all around the world. Share you
                                    thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                                </p>
                                <a href="#" class="btn btn-md btn-border c-white">Register Now!</a>
                            </div>
                        </div>

                        <div class="col-xl-5 ml-auto col-lg-6 col-md-12 col-sm-12 col-xs-12">


                            <!-- Login-Registration Form  -->

                            <div class="registration-login-form">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" ng-click="changepop('login')">
                                        <!--                                        Login-->
                                        <a class="nav-link " data-toggle="tab"role="tab">
                                            <!--<i style="font-size:24px" class="fa">&#xf090;</i>-->
                                            <!--<i class="fa fa-sign-in" aria-hidden="true"></i>-->

                                            <svg class="olymp-login-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
                                        </a>
                                    </li>
                                    <li class="nav-item" ng-click="changepop('register')">
                                        <a class="nav-link active" data-toggle="tab" role="tab">
                                            <svg class="olymp-register-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
                                            <!--<i class="fa fa-user-plus" aria-hidden="true"></i>-->
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="register" role="tabpanel" data-mh="log-tab">
                                        <div class="title h6">Register to Olympus</div>
                                        <form class="content">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">First Name</label>
                                                        <input class="form-control" ng-model="register.first_name" placeholder="" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Last Name</label>
                                                        <input class="form-control" ng-model="register.last_name"  placeholder="" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Your Email</label>
                                                        <input class="form-control" placeholder="" ng-model="register.email"  type="email">
                                                    </div>
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Your Password</label>
                                                        <input class="form-control" placeholder="" ng-model="register.password"  type="password">
                                                    </div>

                                                    <div class="form-group date-time-picker label-floating">
                                                        <label class="control-label">Your Birthday</label>
                                                        <input name="datetimepicker" value="10/24/1984"  ng-model="register.birthday" />
                                                        <span class="input-group-addon">
                                                            <svg class="olymp-calendar-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
                                                        </span>
                                                    </div>

                                                    <div class="form-group label-floating is-select">
                                                        <label class="control-label">Your Gender</label>
                                                        <select class="selectpicker form-control"  ng-model="register.gender" >
                                                            <option value="MA">Male</option>
                                                            <option value="FE">Female</option>
                                                        </select>
                                                    </div>

                                                    <div class="remember">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="optionsCheckboxes" type="checkbox"  ng-model="register.terms" >
                                                                I accept the <a href="#">Terms and Conditions</a> of the website
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <button class="btn btn-purple btn-lg full-width" ng-click="registerUser()">Complete Registration!</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="login" role="tabpanel" data-mh="log-tab">
                                        <div class="title h6">Login to your Account</div>
                                        <form class="content">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Your Email</label>
                                                        <input class="form-control" placeholder="" ng-model="login.email" type="email">
                                                    </div>
                                                    <div class="form-group label-floating is-empty">
                                                        <label class="control-label">Your Password</label>
                                                        <input class="form-control" placeholder="" ng-model="login.password" type="password">
                                                    </div>

                                                    <div class="remember">

                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="optionsCheckboxes" type="checkbox" ng-model="login.remember_me">
                                                                Remember Me
                                                            </label>
                                                        </div>
                                                        <a href="#" class="forgot">Forgot my Password</a>
                                                    </div>
                                                    <button class="btn btn-lg btn-primary full-width" ng-click="loginUser()">Login</button>

                                                    <div class="or"></div>

                                                    <a href="#" ng-click="authenticate('facebook')" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

                                                    <a href="#" ng-click="authenticate('twitter')" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


                                                    <p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- ... end Login-Registration Form  -->
                        </div>
                    </div>
                </div>

                <img class="img-bottom" src="src/img/group-bottom.png" alt="friends">
                <img class="img-rocket" src="src/img/rocket.png" alt="rocket">
            </div>



            <!-- Clients Block -->

            <section class="crumina-module crumina-clients">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 m-auto col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <a class="clients-item" href="#">
                                <img src="src/img/client1.png" class="" alt="logo">
                            </a>
                        </div>
                        <div class="col-xl-2 m-auto col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <a class="clients-item" href="#">
                                <img src="src/img/client2.png" class="" alt="logo">
                            </a>
                        </div>
                        <div class="col-xl-2 m-auto col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <a class="clients-item" href="#">
                                <img src="src/img/client3.png" class="" alt="logo">
                            </a>
                        </div>
                        <div class="col-xl-2 m-auto col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <a class="clients-item" href="#">
                                <img src="src/img/client4.png" class="" alt="logo">
                            </a>
                        </div>
                        <div class="col-xl-2 m-auto col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <a class="clients-item" href="#">
                                <img src="src/img/client5.png" class="" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ... end Clients Block -->


            <!-- Section Img Scale Animation -->

            <section class="align-center pt80 section-move-bg-top img-scale-animation scrollme">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-xs-12">
                            <img class="main-img" src="src/img/scale1.png" alt="screen">
                        </div>
                    </div>

                    <img class="first-img1" alt="img" src="src/img/scale2.png">
                    <img class="second-img1" alt="img" src="src/img/scale3.png">
                    <img class="third-img1" alt="img" src="src/img/scale4.png">
                </div>
                <div class="content-bg-wrap">
                    <div class="content-bg bg-section2"></div>
                </div>
            </section>

            <!-- ... end Section Img Scale Animation -->

            <section class="medium-padding120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <img src="src/img/icon-fly.png" alt="screen">
                        </div>

                        <div class="col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading">
                                <h2 class="heading-title">Why Join <span class="c-primary">Olympus Social Network</span>?</h2>
                                <p class="heading-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="medium-padding120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading">
                                <h2 class="heading-title">Meet New People <span class="c-primary">all over the World</span></h2>
                                <p class="heading-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa.
                                </p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <img src="src/img/image1.png" alt="screen">
                        </div>
                    </div>
                </div>
            </section>


            <section class="medium-padding120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <img src="src/img/image2.png" alt="screen">
                        </div>

                        <div class="col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading">
                                <h2 class="heading-title">The Best UI/UX and <span class="c-primary">Awesome Features</span></h2>
                                <p class="heading-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="medium-padding120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading">
                                <h2 class="heading-title">Find People with <span class="c-primary">Your Same Interests</span></h2>
                                <p class="heading-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa.
                                </p>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <img src="src/img/image3.png" alt="screen">
                        </div>
                    </div>
                </div>
            </section>



            <!-- Planer Animation -->

            <section class="medium-padding120 bg-section3 background-cover planer-animation">
                <div class="container">
                    <div class="row mb60">
                        <div class="col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading align-center">
                                <div class="heading-sup-title">SOCIAL NETWORK</div>
                                <h2 class="h1 heading-title">Community Reviews</h2>
                                <p class="heading-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="swiper-container pagination-bottom" data-show-items="3">
                            <div class="swiper-wrapper">
                                <div class="ui-block swiper-slide">


                                    <!-- Testimonial Item -->

                                    <div class="crumina-module crumina-testimonial-item">
                                        <div class="testimonial-header-thumb"></div>

                                        <div class="testimonial-item-content">

                                            <div class="author-thumb">
                                                <img src="src/img/avatar3.jpg" alt="author">
                                            </div>

                                            <h3 class="testimonial-title">Amazing Community</h3>

                                            <ul class="rait-stars">
                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>

                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>
                                                <li>
                                                    <i class="far fa-star star-icon"></i>
                                                </li>
                                            </ul>

                                            <p class="testimonial-message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco.
                                            </p>

                                            <div class="author-content">
                                                <a href="#" class="h6 author-name">Mathilda Brinker</a>
                                                <div class="country">Los Angeles, CA</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ... end Testimonial Item -->
                                </div>

                                <div class="ui-block swiper-slide">


                                    <!-- Testimonial Item -->

                                    <div class="crumina-module crumina-testimonial-item">
                                        <div class="testimonial-header-thumb"></div>

                                        <div class="testimonial-item-content">

                                            <div class="author-thumb">
                                                <img src="src/img/avatar17.jpg" alt="author">
                                            </div>

                                            <h3 class="testimonial-title">This is the Best Social Network ever!</h3>

                                            <ul class="rait-stars">
                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>

                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>
                                            </ul>

                                            <p class="testimonial-message">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                                nulla pariatur laborum.
                                            </p>

                                            <div class="author-content">
                                                <a href="#" class="h6 author-name">Marina Valentine</a>
                                                <div class="country">Long Island, NY</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ... end Testimonial Item -->

                                </div>

                                <div class="ui-block swiper-slide">


                                    <!-- Testimonial Item -->

                                    <div class="crumina-module crumina-testimonial-item">
                                        <div class="testimonial-header-thumb"></div>

                                        <div class="testimonial-item-content">

                                            <div class="author-thumb">
                                                <img src="src/img/avatar1.jpg" alt="author">
                                            </div>

                                            <h3 class="testimonial-title">Incredible Design!</h3>

                                            <ul class="rait-stars">
                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>

                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>
                                                <li>
                                                    <i class="fa fa-star star-icon"></i>
                                                </li>
                                                <li>
                                                    <i class="far fa-star star-icon"></i>
                                                </li>
                                            </ul>

                                            <p class="testimonial-message">Sed ut perspiciatis unde omnis iste natus error sit
                                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                            </p>

                                            <div class="author-content">
                                                <a href="#" class="h6 author-name">Nicholas Grissom</a>
                                                <div class="country">San Francisco, CA</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ... end Testimonial Item -->
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <img src="src/img/planer.png" alt="planer" class="planer">
            </section>

            <!-- ... end Section Planer Animation -->

            <section class="medium-padding120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <img src="src/img/image4.png" alt="screen">
                        </div>

                        <div class="col-xl-5 col-lg-5 m-auto col-md-12 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading">
                                <h2 class="h1 heading-title">Release all the Power with the <span class="c-primary">Olympus App!</span></h2>
                                <p class="heading-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>


                            <ul class="list--styled">
                                <li>
                                    <i class="far fa-check-circle" aria-hidden="true"></i>
                                    Build your profile in just minutes, it’s that simple!
                                </li>
                                <li>
                                    <i class="far fa-check-circle" aria-hidden="true"></i>
                                    Unlimited messaging with the best interface.
                                </li>
                            </ul>

                            <a href="#" class="btn btn-market">
                                <img class="icon" src="src/svg-icons/apple-logotype.svg" alt="app store">
                                <div class="text">
                                    <span class="sup-title">AVAILABLE ON THE</span>
                                    <span class="title">App Store</span>
                                </div>
                            </a>

                            <a href="#" class="btn btn-market">
                                <img class="icon" src="src/svg-icons/google-play.svg" alt="google">
                                <div class="text">
                                    <span class="sup-title">ANDROID APP ON</span>
                                    <span class="title">Google Play</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Section Subscribe Animation -->

            <section class="medium-padding100 subscribe-animation scrollme bg-users">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading c-white custom-color">
                                <h2 class="h1 heading-title">Olympus Newsletter</h2>
                                <p class="heading-text">Subscribe to be the first one to know about updates, new features and much more!
                                </p>
                            </div>


                            <!-- Subscribe Form  -->

                            <form class="form-inline subscribe-form" method="post">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Enter your email</label>
                                    <input class="form-control bg-white" placeholder="" type="email">
                                </div>

                                <button class="btn btn-blue btn-lg">Send</button>
                            </form>

                            <!-- ... end Subscribe Form  -->

                        </div>
                    </div>

                    <img src="src/img/paper-plane.png" alt="plane" class="plane">
                </div>
            </section>

            <!-- ... end Section Subscribe Animation -->
            <section class="medium-padding120">
                <div class="container">
                    <div class="row mb60">
                        <div class="col-xl-4 col-lg-4 m-auto col-md-12 col-sm-12 col-xs-12">
                            <div class="crumina-module crumina-heading align-center">
                                <div class="heading-sup-title">OLYMPUS BLOG</div>
                                <h2 class="h1 heading-title">Latest News</h2>
                                <p class="heading-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">


                            <!-- Post -->

                            <article class="hentry blog-post">

                                <div class="post-thumb">
                                    <img src="src/img/post1.jpg" alt="photo">
                                </div>

                                <div class="post-content">
                                    <a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
                                    <a href="#" class="h4 post-title">Here’s the Featured Urban photo of August! </a>
                                    <p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

                                    <div class="author-date">
                                        by
                                        <a class="h6 post__author-name fn" href="#">Maddy Simmons</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                - 7 hours ago
                                            </time>
                                        </div>
                                    </div>

                                    <div class="post-additional-info inline-items">

                                        <ul class="friends-harmonic">
                                            <li>
                                                <a href="#">
                                                    <img src="src/img/icon-chat27.png" alt="icon">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="src/img/icon-chat2.png" alt="icon">
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="names-people-likes">
                                            26
                                        </div>

                                        <div class="comments-shared">
                                            <a href="#" class="post-add-icon inline-items">
                                                <svg class="olymp-speech-balloon-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                                <span>0</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </article>

                            <!-- ... end Post -->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">


                            <!-- Post -->

                            <article class="hentry blog-post">

                                <div class="post-thumb">
                                    <img src="src/img/post2.jpg" alt="photo">
                                </div>

                                <div class="post-content">
                                    <a href="#" class="post-category bg-primary">OLYMPUS NEWS</a>
                                    <a href="#" class="h4 post-title">Olympus Network added new photo filters!</a>
                                    <p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

                                    <div class="author-date">
                                        by
                                        <a class="h6 post__author-name fn" href="#">JACK SCORPIO</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                - 12 hours ago
                                            </time>
                                        </div>
                                    </div>

                                    <div class="post-additional-info inline-items">

                                        <ul class="friends-harmonic">
                                            <li>
                                                <a href="#">
                                                    <img src="src/img/icon-chat4.png" alt="icon">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="src/img/icon-chat26.png" alt="icon">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="src/img/icon-chat16.png" alt="icon">
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="names-people-likes">
                                            82
                                        </div>

                                        <div class="comments-shared">
                                            <a href="#" class="post-add-icon inline-items">
                                                <svg class="olymp-speech-balloon-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                                <span>14</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </article>

                            <!-- ... end Post -->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">


                            <!-- Post -->

                            <article class="hentry blog-post">

                                <div class="post-thumb">
                                    <img src="src/img/post3.jpg" alt="photo">
                                </div>

                                <div class="post-content">
                                    <a href="#" class="post-category bg-purple">INSPIRATION</a>
                                    <a href="#" class="h4 post-title">Take a look at these truly awesome worspaces</a>
                                    <p>Here’s a photo from last month’s photoshoot. We got really awesome shots for the new catalog.</p>

                                    <div class="author-date">
                                        by
                                        <a class="h6 post__author-name fn" href="#">Maddy Simmons</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                - 2 days ago
                                            </time>
                                        </div>
                                    </div>

                                    <div class="post-additional-info inline-items">

                                        <ul class="friends-harmonic">
                                            <li>
                                                <a href="#">
                                                    <img src="src/img/icon-chat28.png" alt="icon">
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="names-people-likes">
                                            0
                                        </div>

                                        <div class="comments-shared">
                                            <a href="#" class="post-add-icon inline-items">
                                                <svg class="olymp-speech-balloon-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
                                                <span>22</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                            </article>

                            <!-- ... end Post -->
                        </div>
                    </div>
                </div>
            </section>


            <!-- Section Call To Action Animation -->

            <section class="align-right pt160 pb80 section-move-bg call-to-action-animation scrollme">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registration-login-form-popup">Start Making Friends Now!</a>
                        </div>
                    </div>
                </div>
                <img class="first-img" alt="guy" src="src/img/guy.png">
                <img class="second-img" alt="rocket" src="src/img/rocket1.png">
                <div class="content-bg-wrap">
                    <div class="content-bg bg-section1"></div>
                </div>
            </section>

            <!-- ... end Section Call To Action Animation -->


            <div class="modal fade" id="registration-login-form-popup">
                <div class="modal-dialog ui-block window-popup registration-login-form-popup">
                    <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                        <svg class="olymp-close-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                    </a>
                    <div class="registration-login-form">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
                                    <svg class="olymp-login-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
                                    <svg class="olymp-register-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="home1" role="tabpanel" data-mh="log-tab">
                                <div class="title h6">Register to Olympus</div>
                                <form class="content">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">First Name</label>
                                                <input class="form-control" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Last Name</label>
                                                <input class="form-control" placeholder="" type="text">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Your Email</label>
                                                <input class="form-control" placeholder="" type="email">
                                            </div>
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Your Password</label>
                                                <input class="form-control" placeholder="" type="password">
                                            </div>

                                            <div class="form-group date-time-picker label-floating">
                                                <label class="control-label">Your Birthday</label>
                                                <input name="datetimepicker" value="10/24/1984" />
                                                <span class="input-group-addon">
                                                    <svg class="olymp-calendar-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
                                                </span>
                                            </div>

                                            <div class="form-group label-floating is-select">
                                                <label class="control-label">Your Gender</label>
                                                <select class="selectpicker form-control">
                                                    <option value="MA">Male</option>
                                                    <option value="FE">Female</option>
                                                </select>
                                            </div>

                                            <div class="remember">
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="optionsCheckboxes" type="checkbox">
                                                        I accept the <a href="#">Terms and Conditions</a> of the website
                                                    </label>
                                                </div>
                                            </div>

                                            <a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane" id="profile1" role="tabpanel" data-mh="log-tab">
                                <div class="title h6">Login to your Account</div>
                                <form class="content">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Your Email</label>
                                                <input class="form-control" placeholder="" type="email">
                                            </div>
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Your Password</label>
                                                <input class="form-control" placeholder="" type="password">
                                            </div>

                                            <div class="remember">

                                                <div class="checkbox">
                                                    <label>
                                                        <input name="optionsCheckboxes" type="checkbox">
                                                        Remember Me
                                                    </label>
                                                </div>
                                                <a href="#" class="forgot">Forgot my Password</a>
                                            </div>

                                            <a href="#" class="btn btn-lg btn-primary full-width">Login</a>

                                            <div class="or"></div>

                                            <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

                                            <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


                                            <p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Footer Full Width -->

            <div class="footer footer-full-width" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">


                            <!-- Widget About -->

                            <div class="widget w-about">

                                <a href="02-ProfilePage.html" class="logo">
                                    <div class="img-wrap">
                                        <img src="src/img/logo-colored.png" alt="Olympus">
                                    </div>
                                    <div class="title-block">
                                        <h6 class="logo-title">olympus</h6>
                                        <div class="sub-title">SOCIAL NETWORK</div>
                                    </div>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>
                                <ul class="socials">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-square" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- ... end Widget About -->

                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">


                            <!-- Widget List -->

                            <div class="widget w-list">
                                <h6 class="title">Main Links</h6>
                                <ul>
                                    <li>
                                        <a href="#">Landing</a>
                                    </li>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Events</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- ... end Widget List -->

                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">


                            <div class="widget w-list">
                                <h6 class="title">Your Profile</h6>
                                <ul>
                                    <li>
                                        <a href="#">Main Page</a>
                                    </li>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Friends</a>
                                    </li>
                                    <li>
                                        <a href="#">Photos</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">


                            <div class="widget w-list">
                                <h6 class="title">Features</h6>
                                <ul>
                                    <li>
                                        <a href="#">Newsfeed</a>
                                    </li>
                                    <li>
                                        <a href="#">Post Versions</a>
                                    </li>
                                    <li>
                                        <a href="#">Messages</a>
                                    </li>
                                    <li>
                                        <a href="#">Friend Groups</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">


                            <div class="widget w-list">
                                <h6 class="title">Olympus</h6>
                                <ul>
                                    <li>
                                        <a href="#">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#">Forums</a>
                                    </li>
                                    <li>
                                        <a href="#">Statistics</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                            <!-- SUB Footer -->

                            <div class="sub-footer-copyright">
                                <span>
                                    Copyright <a href="index.html">Olympus Buddypress + WP</a> All Rights Reserved 2017
                                </span>
                            </div>

                            <!-- ... end SUB Footer -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- ... end Footer Full Width -->




            <!-- Window-popup-CHAT for responsive min-width: 768px -->

            <div class="ui-block popup-chat popup-chat-responsive">
                <div class="ui-block-title">
                    <span class="icon-status online"></span>
                    <h6 class="title" >Chat</h6>
                    <div class="more">
                        <svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                        <svg class="olymp-little-delete js-chat-open"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                    </div>
                </div>
                <div class="mCustomScrollbar">
                    <ul class="notification-list chat-message chat-message-field">
                        <li>
                            <div class="author-thumb">
                                <img src="src/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="src/img/author-page.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Don’t worry Mathilda!</span>
                                <span class="chat-message-item">I already bought everything</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="src/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <form class="need-validation">

                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Press enter to post...</label>
                        <textarea class="form-control" placeholder=""></textarea>
                        <div class="add-options-message">
                            <a href="#" class="options-message">
                                <svg class="olymp-computer-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
                            </a>
                            <div class="options-message smile-block">

                                <svg class="olymp-happy-sticker-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon"></use></svg>

                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat1.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat2.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat3.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat4.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat5.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat6.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat7.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat8.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat9.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat10.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat11.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat12.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat13.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat14.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat15.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat16.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat17.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat18.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat19.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat20.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat21.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat22.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat23.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat24.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat25.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat26.png" alt="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="src/img/icon-chat27.png" alt="icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>


            </div>

            <!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



            <a class="back-to-top" href="#">
                <img src="src/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
            </a>

        </div>



    </body>

</html>