<div class="box-menu">
    <div class="main-menu">
        <ul>
            <?php for ($i = 1; $i <= 4; $i++) {  ?>
                <li>
                    <a href="" title="">Menu <?php echo $i; ?></a>
                    <div class="menu-child">
                        <ul>
                            <?php for ($h = 1; $h <= 6; $h++) {  ?>
                                <li>
                                    <a href="" title="">Menu <?php echo $i; ?> . <?php echo $h; ?></a>
                                    <ul>
                                        <?php for ($j = 1; $j <= 6; $j++) {  ?>
                                            <li>
                                                <a href="" title="">Menu <?php echo $i; ?> . <?php echo $h; ?> .<?php echo $j; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                        <ul>
                            <li>
                                <a href="" class="" title="">
                                    <img src="theme/frontend/images/category1.png" alt="">
                                </a>
                                <a href="" title="" class="">
                                    Xem thêm <i class="fa fa-"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>
        </ul>
        <ul>
            <li>
                <a href="" class="" title="">
                    <img src="" alt="">
                </a>
            </li>
        </ul>
        <ul>
            <?php for ($i = 1; $i <= 4; $i++) {  ?>
                <li>
                    <a href="" title="">Menu <?php echo $i; ?></a>
                    <div class="menu-child">
                        <ul>
                            <?php for ($h = 1; $h <= 6; $h++) {  ?>
                                <li>
                                    <a href="" title="">Menu <?php echo $i; ?> . <?php echo $h; ?></a>
                                    <ul>
                                        <?php for ($j = 1; $j <= 6; $j++) {  ?>
                                            <li>
                                                <a href="" title="">Menu <?php echo $i; ?> . <?php echo $h; ?> .<?php echo $j; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                        <ul>
                            <li>
                                <a href="" class="" title="">
                                    <img src="" alt="">
                                </a>
                                <a href="" title="" class="">
                                    Xem thêm <i class="fa fa-"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>