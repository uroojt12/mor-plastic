<header class="ease">
    <div class="contain">
        <div class="logo">
            <a href="index.php">
                <img src="<?= $baseurl ?>assets/images/logo.png" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease" nav id="nav" >
            <ul>
                <li class="<?php if ($page == "index") {
                                echo 'active';
                            } ?>"><a href="index.php">Home</a></li>
                <li class="<?php if ($page == "about") {
                                echo 'active';
                            } ?>"><a href="about.php">About</a></li>

                <li class="<?php if ($page == "capabilities") {
                                echo 'active';
                            } ?>"><a href="capabilities.php">Capabilities</a></li>
                <li class="<?php if ($page == "product") {
                    echo 'active';
                } ?>"><a href="product.php">Products</a></li>
                
                
                <li class="btn_blk"><a href="contact.php" class="site_btn">Contact Us</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
<!-- header -->

<div class="pBar hidden"><span id="myBar" style="width:0%"></span></div>