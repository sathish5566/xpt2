<?php include("header.php"); ?>

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
    <div class="row secBg">
        <div class="large-12 columns">
            <div class="row column head-text clearfix">
                <p class="pull-left">All Videos : <span>1,862 Videos posted</span></p>  
            </div>
            <div class="tabs-content" data-tabs-content="newVideos">
                <div class="tabs-panel is-active" id="new-all">
                    <div class="row list-group">
                        
                        <?php foreach($videoData as $vidData) { ?>
                        <div class="item large-3 medium-6 columns group-item-grid-default">
                            <div class="post thumb-border">
                                <div class="post-thumb">
                                    <img src="<?php echo $vidData['thumb']; ?>" alt="new video">
                                    <a href="<?php echo $vidData['slug']; ?>" class="hover-posts">
                                        <span><i class="fa fa-play"></i>Watch Video</span>
                                    </a>
                                    <div class="video-stats clearfix">
                                        <div class="thumb-stats pull-right">
                                            <span><?php echo $vidData['duration']; ?></span>
                                        </div>
                                    </div>

                                    <video class="thevideo" loop preload="none">
                                      <source src="https://giant.gfycat.com/VerifiableTerrificHind.mp4" type="video/mp4">
                                      <source src="https://giant.gfycat.com/VerifiableTerrificHind.webm" type="video/webm">
                                    Your browser does not support the video tag.
                                    </video>
                                    
                                </div>
                                <div class="post-des">
                                    <h6><a href="<?php echo $vidData['slug']; ?>"><?php echo $vidData['title']; ?></a></h6>
                                    <div class="post-button">
                                        <a href="<?php echo $vidData['slug']; ?>" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    </div>
                </div>
            </div>
            <div class="pagination">
                <a href="#" class="prev page-numbers">« Previous</a>
                <a href="#" class="page-numbers">1</a>
                <span class="page-numbers current">2</span>
                <a href="#" class="page-numbers">3</a>
                <a href="#" class="next page-numbers">Next »</a>
            </div>
            
        </div>
    </div>
</section>
<?php include("footer.php"); ?>