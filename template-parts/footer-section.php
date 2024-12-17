<?php
$DisplaySetting = NEWAMINDisplaySetting();
?>
<footer id="footer" class="<?php if ($DisplaySetting->StyleFooter() == 'dark_mod') echo 'inverted'; ?>">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="widget">
                        <div class="widget-title">قالب چندمنظوره پولو</div>
                        <p class="mb-5">قالب HTML چند منظوره پولو<br> یک قالب برای تمام سلیقه ها با کدنویسی تمیز
                            و رفع تمام نیازها</p>
                        <a href="javascript:;" class="btn btn-inverted">قالب پولو</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">کشف کردن</div>
                                <ul class="list">
                                    <li><a href="#">ویژگی ها</a></li>
                                    <li><a href="#">لایه ها</a></li>
                                    <li><a href="#">شرکت های بزرگ</a></li>
                                    <li><a href="#">به روز رسانی</a></li>
                                    <li><a href="#">پلن فروش</a></li>
                                    <li><a href="#">مشتریان</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">ویژگی ها</div>
                                <ul class="list">
                                    <li><a href="#">لایه ها</a></li>
                                    <li><a href="#">هدر ها</a></li>
                                    <li><a href="#">ویجت ها</a></li>
                                    <li><a href="#">فوتر ها</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">صفحات</div>
                                <ul class="list">
                                    <li><a href="#">نمونه کار</a></li>
                                    <li><a href="#">اخبار</a></li>
                                    <li><a href="#">فروشگاه</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">پشتیبانی</div>
                                <ul class="list">
                                    <li><a href="#">راهنمایی</a></li>
                                    <li><a href="#">مستندات</a></li>
                                    <li><a href="#">تماس با ما</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-content">
        <div class="container">
            <div class="row">
                <?php if ($DisplaySetting->DisplaySocialFooter()): ?>
                    <div class="col-lg">
                        <div class="social-icons social-icons-colored float-left">
                            <ul>
                                <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-lg">
                    <?php get_template_part('template-parts/footer/item/copyright'); ?>
                </div>
            </div>
        </div>
    </div>
</footer>