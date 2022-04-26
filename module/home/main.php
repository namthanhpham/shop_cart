<?php
get_header();
?>

<?php
$info_macbook=get_info_cat(2);
$info_mobile=get_info_cat(1);

$list_product_macbook=get_list_item_by_cat_id(2);
$list_product_mobile=get_list_item_by_cat_id(1);
?>

<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $info_macbook['cat_title'] ?></h3>
                </div>
                <div class="section-detail">
                    <?php
                        if(!empty($list_product_macbook)){
                    ?>      
                    <ul class="list-item clearfix">
                        <?php foreach($list_product_macbook as $item){ ?>
                        <li>
                            <a href="<?php echo $item['url'] ?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb'] ?>" alt="">
                            </a>
                            <a href="<?php echo $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                            <p class="price"><?php echo currency_format($item['price']) ?></p>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title"><?php echo $info_mobile['cat_title'] ?></h3>
                </div>
                <div class="section-detail">
                <?php
                        if(!empty($list_product_mobile)){
                    ?>      
                    <ul class="list-item clearfix">
                        <?php foreach($list_product_mobile as $item){ ?>
                        <li>
                            <a href="<?php $item['url'] ?>" title="" class="thumb">
                                <img src="<?php echo $item['product_thumb'] ?>" alt="">
                            </a>
                            <a href="<?php $item['url'] ?>" title="" class="title"><?php echo $item['product_title'] ?></a>
                            <p class="price"><?php echo currency_format($item['price']) ?></p>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>