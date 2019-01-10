<?php include("header.php"); ?>

<link href="https://vjs.zencdn.net/7.1.0/video-js.css" rel="stylesheet">
<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>

<!-- main content -->
<section class="content">
    <!-- newest video -->
    <div class="main-heading">
        <div class="row secBg padding-14">
            <div class="medium-8 small-8 columns">
                <div class="head-title">
                    <i class="fa fa-film"></i>
                    <h4>Newest Videos</h4>
                </div>
            </div>
            <div class="medium-4 small-4 columns">
                
            </div>
        </div>
    </div>
    
    <div class="row">
    <!-- left side content area -->
    <div class="large-8 columns">
        <!--single inner video-->
        <section class="inner-video">
            <div class="row secBg">
                <div class="large-12 columns inner-flex-video">
                    <div class="flex-video widescreen">
                        
                        <video id="my-video" class="video-js" controls preload="auto" poster="<?php echo $videoData['thumb']; ?>" data-setup="{}">
                        <source src="<?php echo $videoData['videoUrl']; ?>" type='video/mp4'>
                        <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                        </video>
                        <script src="https://vjs.zencdn.net/7.1.0/video.js"></script>
                        <script src="<?php echo ASSETSURL; ?>node_modules/videojs-brand/dist/videojs-brand.min.js"></script>
                        <script src="<?php echo ASSETSURL; ?>node_modules/videojs-chromecast/dist/videojs-chromecast.js"></script>


                    </div>
                </div>
            </div>
        </section>
        

        <!-- single post description -->
        <section class="singlePostDescription">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="heading">
                        <h5>Description</h5>
                    </div>
                    <div class="description showmore_one" style="padding-bottom: 10px;">
                        <p></p>

                        <div class="categories">
                            <button><i class="fa fa-folder"></i>Categories</button>
                            <a href="#" class="inner-btn">entertainment</a>
                            <a href="#" class="inner-btn">comedy</a>
                        </div>
                        <div class="tags">
                            <button><i class="fa fa-tags"></i>Tags</button>
                            <a href="#" class="inner-btn">3D Videos</a>
                            <a href="#" class="inner-btn">Videos</a>
                            <a href="#" class="inner-btn">HD</a>
                            <a href="#" class="inner-btn">Movies</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End single post description -->

        <!-- related Posts -->
        <section class="content content-with-sidebar related">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="main-heading borderBottom">
                        <div class="row padding-14">
                            <div class="medium-12 small-12 columns">
                                <div class="head-title">
                                    <i class="fa fa-film"></i>
                                    <h4>Related Videos</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row list-group">
                        <div class="item large-4 columns end group-item-grid-default">
                            <div class="post thumb-border">
                                <div class="post-thumb">
                                    <img src="http://placehold.it/370x220" alt="landing">
                                    <a href="#" class="hover-posts">
                                        <span><i class="fa fa-play"></i>Watch Video</span>
                                    </a>
                                    <div class="video-stats clearfix">
                                        <div class="thumb-stats pull-right">
                                            <span>05:56</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--end related posts-->
        
    </div><!-- end left side content area -->
    <?php include("sidebar.php"); ?>
</div>

</section>

<?php include("footer.php"); ?>