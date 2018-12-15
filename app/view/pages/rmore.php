<?php
/**
 * User: Zug
 * Date: 15.12.2018
 * Time: 19:57
 */
?>
<div class="container-fluid">
    <div class="row">
        <?php
//        print_r(json_encode($dataMovie));
        ?>
        <div class="col-6 mx-auto pt-5">
            <div class="row">
                <div class="col-md-4 col-xs-12 mb-4">
                    <img src="<?php echo APIIMGPATH.$dataMovie->poster_path; ?>" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-8 col-xs-12 mb-4">
                    <h4>
                        <?php echo $dataMovie->original_title;  ?>
                        <img src="<?php echo $lng_icon[$dataMovie->original_language]; ?>" alt="">
                    </h4>
                    <div class="row">
                        <div class="row">
                            <?php echo $dataMovie->overview; ?>
                        </div>
                        <div class="row pt-4">
                            <a href="<?php echo $dataMovie->homepage;?>" class="ml-4 btn btn-warning" target="_blank" >HomePage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
