<?php
/**
 * User: Zug
 * Date: 15.12.2018
 * Time: 19:57
 */
?>
    <div class="col-6 mx-auto">
        <?php
        if (count($movies) == 0) {
            echo "<div class=\"row mt-5 shadow p-3\">
                <h4>We can't found anything bro :((</h4></div>";
        } else {
            foreach ($movies as $moviesRow) {
                ?>
                <div class="row mt-5 shadow p-3">
                    <div class="col-md-4 col-xs-12 mb-4">
                        <img src="<?php echo isset($moviesRow->backdrop_path)? APIIMGPATH . $moviesRow->backdrop_path:IMGDIR.'/default-image.png'; ?>" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <h5><?php echo $moviesRow->original_title; ?></h5>
                            <img src="<?php echo $lng_icon[$moviesRow->original_language]; ?>" alt=""
                                 class="pl-5 img_thumbnail float-lg-right">
                        </div>
                        <div class="row pt-3 pl-lg-5">
                            <?php
                            echo trim(substr($moviesRow->overview, 0, 200)) . '...';
                            ?>
                        </div>
                        <div class="row pt-3">
                            <div class="col-3"><img src="<?php echo IMGDIR . '/icon/star.png'; ?>" alt="">
                                <?php
                                echo $moviesRow->vote_average;
                                ?></div>
                            <div class="col-4"></div>
                            <div class="col-4"><a href="<?php echo $link . '/' . $moviesRow->id; ?>"
                                                  class="btn btn-warning text-white">Read more</a></div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?></div>
<?php
?>