<?php get_header() ?>
<?php
$DisplaySetting = NEWAMINDisplaySetting();
?>
<section id="page-content">

    <div class="container">
        <div class="row">
            <?php
            if ($DisplaySetting->PostsSidebarPositionAllow('right')):
            ?>
                <div class="sidebar sticky-sidebar col-lg-3">

                    <div class="widget ">
                        <h4 class="widget-title">پست های اخیر</h4>
                        <div class="post-thumbnail-list">
                            <div class="post-thumbnail-entry">
                                <img alt="" src="images/blog/thumbnail/5.jpg">
                                <div class="post-thumbnail-content">
                                    <a href="#">یک داستان واقعی که هرگز گفته نشد!</a>
                                    <span class="post-date"><i class="icon-clock"></i> 6 دقیقه قبل</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> تکنولوژی</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="images/blog/thumbnail/6.jpg">
                                <div class="post-thumbnail-content">
                                    <a href="#">طبیعت زیبا و پرهای کمیاب!</a>
                                    <span class="post-date"><i class="icon-clock"></i> 24 ساعت قبل</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> سبک زندگی</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="images/blog/thumbnail/7.jpg">
                                <div class="post-thumbnail-content">
                                    <a href="#">لورم ایپسوم متن ساختگی</a>
                                    <span class="post-date"><i class="icon-clock"></i> 11 ساعت قبل</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> سبک زندگی</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="widget widget-tweeter">
                        <h4 class="widget-title">توییت های اخیر</h4>
                        <div id="twitter-cnt">
                            <ul>
                                <li>آب شفاف است - دریا برای خودتان! دستکاری جالب <a
                                        href="https://twitter.com/photoshop" target="_blank"
                                        title="photoshop on Twitter">فتوشاپ</a> توسط <a
                                        href="https://twitter.com/jose_Francese" target="_blank"
                                        title="jose_Francese on Twitter">خوزه فرانسیس</a> و ساخته شده با <a
                                        href="https://twitter.com/envato" target="_blank"
                                        title="envato on Twitter">انواتو</a> … <a href="https://t.co/Df8ud39Mln"
                                        target="_blank" title="Visit this link">https://t.co/Df8ud39Mln</a><small>12
                                        بهمن 2022</small>
                                </li>
                                <li>آماده اید تا خلاقیت خود را به حرکت درآورید؟ از یکپارچه سازی با سیستم عامل گرفته
                                    تا اشکال، در اینجا برترین گرایش‌های گرافیکی متحرکی که پیش از این داریم آمده است…
                                    <a href="https://t.co/XaoMQ2zMUQ" target="_blank"
                                        title="Visit this link">https://t.co/XaoMQ2zMUQ</a><small>09 بهمن
                                        2022</small>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="widget  widget-tags">
                        <h4 class="widget-title">برچسب ها</h4>
                        <div class="tags">
                            <a href="#">طراحی</a>
                            <a href="#">نمونه کار</a>
                            <a href="#">دیجیتال</a>
                            <a href="#">برندینگ</a>
                            <a href="#">اچ تی ام ال</a>
                            <a href="#">کلین</a>
                            <a href="#">صلح</a>
                            <a href="#">عشق</a>
                            <a href="#">سی اس اس 3</a>
                            <a href="#">جی کوئری</a>
                        </div>
                    </div>

                </div>
            <?php endif; ?>
            <div class="content col-lg">
                <?php echo get_template_part('template-parts/archive') ?>
            </div>
            <?php
            if ($DisplaySetting->PostsSidebarPositionAllow('left')):
            ?>
                <div class="sidebar sticky-sidebar col-lg-3">

                    <div class="widget ">
                        <h4 class="widget-title">پست های اخیر</h4>
                        <div class="post-thumbnail-list">
                            <div class="post-thumbnail-entry">
                                <img alt="" src="images/blog/thumbnail/5.jpg">
                                <div class="post-thumbnail-content">
                                    <a href="#">یک داستان واقعی که هرگز گفته نشد!</a>
                                    <span class="post-date"><i class="icon-clock"></i> 6 دقیقه قبل</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> تکنولوژی</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="images/blog/thumbnail/6.jpg">
                                <div class="post-thumbnail-content">
                                    <a href="#">طبیعت زیبا و پرهای کمیاب!</a>
                                    <span class="post-date"><i class="icon-clock"></i> 24 ساعت قبل</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> سبک زندگی</span>
                                </div>
                            </div>
                            <div class="post-thumbnail-entry">
                                <img alt="" src="images/blog/thumbnail/7.jpg">
                                <div class="post-thumbnail-content">
                                    <a href="#">لورم ایپسوم متن ساختگی</a>
                                    <span class="post-date"><i class="icon-clock"></i> 11 ساعت قبل</span>
                                    <span class="post-category"><i class="fa fa-tag"></i> سبک زندگی</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="widget widget-tweeter">
                        <h4 class="widget-title">توییت های اخیر</h4>
                        <div id="twitter-cnt">
                            <ul>
                                <li>آب شفاف است - دریا برای خودتان! دستکاری جالب <a
                                        href="https://twitter.com/photoshop" target="_blank"
                                        title="photoshop on Twitter">فتوشاپ</a> توسط <a
                                        href="https://twitter.com/jose_Francese" target="_blank"
                                        title="jose_Francese on Twitter">خوزه فرانسیس</a> و ساخته شده با <a
                                        href="https://twitter.com/envato" target="_blank"
                                        title="envato on Twitter">انواتو</a> … <a href="https://t.co/Df8ud39Mln"
                                        target="_blank" title="Visit this link">https://t.co/Df8ud39Mln</a><small>12
                                        بهمن 2022</small>
                                </li>
                                <li>آماده اید تا خلاقیت خود را به حرکت درآورید؟ از یکپارچه سازی با سیستم عامل گرفته
                                    تا اشکال، در اینجا برترین گرایش‌های گرافیکی متحرکی که پیش از این داریم آمده است…
                                    <a href="https://t.co/XaoMQ2zMUQ" target="_blank"
                                        title="Visit this link">https://t.co/XaoMQ2zMUQ</a><small>09 بهمن
                                        2022</small>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="widget  widget-tags">
                        <h4 class="widget-title">برچسب ها</h4>
                        <div class="tags">
                            <a href="#">طراحی</a>
                            <a href="#">نمونه کار</a>
                            <a href="#">دیجیتال</a>
                            <a href="#">برندینگ</a>
                            <a href="#">اچ تی ام ال</a>
                            <a href="#">کلین</a>
                            <a href="#">صلح</a>
                            <a href="#">عشق</a>
                            <a href="#">سی اس اس 3</a>
                            <a href="#">جی کوئری</a>
                        </div>
                    </div>

                </div>
            <?php endif; ?>
        </div>
    </div>

</section>
<?php
get_footer();
