<style>
    body{
        background-color: #888da8 !important;
    }
    .card-container {
        cursor: pointer;
        min-height: 400px;
        perspective: 600;
        position: relative;
        width: 100%;
    }
    .card {
        height: 100%;
        position: absolute;
        transform-style: preserve-3d;
        transition: all 1s ease-in-out;
        width: 100%;
    }
    .card:hover {
        /*transform: rotateY(180deg);*/
    }
    .flipped {
        transform: rotateY(180deg);
    }
    .card .side {
        backface-visibility: hidden;
        border-radius: 6px;
        height: 100%;
        position: absolute;
        overflow: hidden;
        width: 100%;
    }
    .card .back {
        background: #eaeaed;
        color: #0087cc;
        line-height: 150px;
        text-align: center;
        transform: rotateY(180deg);
    }
</style>
<!-- Fixed Sidebar Right -->
<div ng-controller="loginCtrl">
    <div class="container">
        <div class="row">
            <!--{{allposts}}-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="clients-grid">
                    <ul class="cat-list-bg-style align-center sorting-menu">
                        <li class="cat-list__item active" data-filter="*"><a href="#" class="">All Projects</a></li>
                        <li class="cat-list__item" data-filter=".politics"><a href="#" class="">Politics</a></li>
                        <li class="cat-list__item" data-filter=".natural"><a href="#" class="">Natural</a></li>
                        <li class="cat-list__item" data-filter=".worlds"><a href="#" class="">Worlds</a></li>
                        <li class="cat-list__item" data-filter=".animals"><a href="#" class="">Animals</a></li>
                        <li class="cat-list__item" data-filter=".family"><a href="#" class="">Family</a></li>
                    </ul>

                    <div class="row sorting-container" id="clients-grid-1" data-layout="masonry">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 sorting-item ecommerce natural">
                            <div class="ui-block">
                                <!--{{allposts}}-->
                                <!-- News Feed Form  -->

                                <div class="news-feed-form">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true">

                                                <svg class="olymp-status-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="svg-icons/sprites/icons.svg#olymp-status-icon"></use></svg>

                                                <span>Status</span>
                                                <div class="ripple-container"></div></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab" aria-expanded="false">

                                                <svg class="olymp-multimedia-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="svg-icons/sprites/icons.svg#olymp-multimedia-icon"></use></svg>

                                                <span>Multimedia</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
                                            <form>
                                                <div class="author-thumb">
                                                    <img src="img/author-page.jpg" alt="author">
                                                </div>
                                                <div class="form-group with-icon label-floating is-empty">
                                                    <label class="control-label">Share what you are thinking here...</label>
                                                    <textarea class="form-control" placeholder="" id="postspace" ng-keyup="checkForUrl()"></textarea>
                                                    <span class="material-input"></span>
                                                </div>
                                                <article class="hentry post video" ng-if="linkContent.isvedio == '0' && linkContent.isvedio != '1'">
                                                    <div class="post-video">
                                                        <div class="video-thumb"  style="padding: 25px;">
                                                            <img src="{{linkContent.image_url}}" alt="photo" style="width:100px;text-align: center">
                                                        </div>

                                                        <div class="video-content">
                                                            <a href="{{linkContent.url}}" class="h4 title">{{linkContent.title}}</a>
                                                            <p>{{linkContent.description}}</p>
                                                            <a href="{{linkContent.url}}" class="link-site">{{linkContent.domain}}</a>
                                                        </div>
                                                    </div>
                                                </article>
                                                <div class="ui-block" ng-if="linkContent.isvedio == '1'">
                                                    <div class="hentry post video">
                                                        <div id="urlcontainer" class="post-video">
                                                            <div class="video-thumb" ng-if="linkContent.isvedio == '1'">
                                                                <img src="{{linkContent.image_url}}" alt="photo">
                                                                <a href="{{linkContent.url}}" class="play-video">
                                                                    <svg class="olymp-play-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="src/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
                                                                </a>
                                                            </div>

                                                            <div class="video-content">
                                                                <a href="{{linkContent.url}}" class="h4 title">{{linkContent.title}}</a>
                                                                <p>{{linkContent.description}}
                                                                </p>
                                                                <a href="{{linkContent.domain}}" class="link-site">{{linkContent.domain}}</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- <div class="" -->
                                                <div class="add-options-message">
                                                    <a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="ADD PHOTOS">
                                                        <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
                                                    </a>
                                                    <a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                                        <svg class="olymp-computer-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
                                                    </a>

                                                    <a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="ADD LOCATION">
                                                        <svg class="olymp-small-pin-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>
                                                    </a>

                                                    <button class="btn btn-primary btn-md-2" ng-click="savepost()">Post Status</button>
                                                    <!-- <button class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button> -->

                                                </div>

                                            </form>
                                        </div>

                                        <div class="tab-pane" id="profile-1" role="tabpanel" aria-expanded="true">
                                            <form>
                                                <div class="author-thumb">
                                                    <img src="src/img/author-page.jpg" alt="author">
                                                </div>
                                                <div class="form-group with-icon label-floating is-empty">
                                                    <label class="control-label">Share what you are thinking here...</label>
                                                    <textarea class="form-control" placeholder=""  id="postspace"></textarea>
                                                    <span class="material-input"></span>

                                                </div>
                                                <div class="add-options-message">
                                                    <a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="ADD PHOTOS">
                                                        <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
                                                    </a>
                                                    <a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="TAG YOUR FRIENDS">
                                                        <svg class="olymp-computer-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
                                                    </a>

                                                    <a href="#" class="options-message" data-toggle="tooltip" data-placement="top" data-original-title="ADD LOCATION">
                                                        <svg class="olymp-small-pin-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>
                                                    </a>

                                                    <button class="btn btn-primary btn-md-2" ng-click="checkForUrl()">Post Status</button>
                                                    <!-- <button class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button> -->

                                                </div>

                                            </form>
                                        </div>


                                    </div>
                                </div>

                                <!-- ... end News Feed Form  -->            </div>
                        </div>



                        <div ng-repeat="post in allposts" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 sorting-item ecommerce natural">
                            <div class="ui-block">
                                <article class="hentry post video">
                                    <div class="post__author author vcard inline-items">
                                        <img src="src/img/avatar7-sm.jpg" alt="author">

                                        <div class="author-date">
                                            <a class="h6 post__author-name fn" href="#">{{post.username}}</a>
                                            <div class="post__date">
                                                <time class="published" datetime="2004-07-24T18:18">
                                                    {{post.time_ago}}
                                                </time>
                                            </div>
                                        </div>


                                        <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                            <ul class="more-dropdown">
                                                <li>
                                                    <a href="#">Edit Post</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete Post</a>
                                                </li>
                                                <li>
                                                    <a href="#">Turn Off Notifications</a>
                                                </li>
                                                <li>
                                                    <a href="#">Select as Featured</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="card-container">
                                        <div class="card {{post.class}}">
                                            <div class="side">
                                                <p>{{post.body}}</p>
                                                <div class="post-video">
                                                    <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/f1qz8vn3XbY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
                                                    <!--<iframe width="100%" height="315" src="https://video.twimg.com/amplify_video/978248261034110976/vid/1280x720/A2FDS04O-Q6-ymv3.mp4" frameborder="0" allow="autoplay;" allowfullscreen></iframe>-->
<!--                                                    <div class="video-thumb">
                                                        <img src="src/img/video-youtube1.jpg" alt="photo">
                                                        <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
                                                            <svg class="olymp-play-icon"><use xlink:href="src/svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>
                                                        </a>
                                                    </div>-->

                                                    <div class="video-content">
                                                        <a href="#" class="h4 title">Iron Maid - ChillGroves</a>
                                                        <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt
                                                            ut labore et dolore magna aliqua...
                                                        </p>
                                                        <a href="#" class="link-site">YOUTUBE.COM</a>
                                                    </div>
<!--<img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="photo" style="width:100px;text-align: center">-->
                                                </div>

                                                <div class="post-additional-info inline-items">
                                                    <button class="btn btn-primary btn-md-2 btn-success pull-left" type="button" id="{{post.id}}" data-ng-click="voteforpost($event,'1')">With</button>
                                                    <button class="btn btn-primary btn-md-2 btn-danger pull-right" style="float:right" type="button" id="{{post.id}}"  data-ng-click="voteforpost($event,'2')">Against</button>
                                                </div>
                                            </div>
                                            <div class="side back">
                                                Back
                                            </div>
                                        </div>
                                    </div>
                                            </article>
                            </div>
                        </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
