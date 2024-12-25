<?php
/*
Template Name: تماس با ما
*/
get_header();
$ContactUsSetting = NEWAMINContactUsSetting();
?>
<section id="page-title">
    <div class="container">
        <div class="page-title">
            <h1>تماس با ما</h1>
            <span>شادترین زمان روز!.</span>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-uppercase">در تماس باشید</h3>
                <p>شادترین زمان روز!. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با
                    تولید سادگی نامفهوم، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم.</p>
                <div class="m-t-30">
                    <form class="widget-contact-form" novalidate action="include/contact-form.php" role="form"
                        method="post">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">نام</label>
                                <input type="text" aria-required="true" name="widget-contact-form-name" required
                                    class="form-control required name" placeholder="نام خود را وارد کنید">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">ایمیل</label>
                                <input type="email" aria-required="true" name="widget-contact-form-email"
                                    required class="form-control required email"
                                    placeholder="ایمیل خود را وارد کنید">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">موضوع شما</label>
                                <input type="text" name="widget-contact-form-subject" required
                                    class="form-control required" placeholder="موضوع ...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">پیام</label>
                            <textarea type="text" name="widget-contact-form-message" required rows="5"
                                class="form-control required" placeholder="پیام خود را بنویسید"></textarea>
                        </div>

                        <button class="btn" type="submit" id="form-submit"><i
                                class="fa fa-paper-plane"></i>&nbsp;ارسال پیام</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="text-uppercase">آدرس و نقشه</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-icon">
                            <?php if (!empty($ContactUsSetting->Address)): ?>
                                <li><i class="icon-map-pin"></i>
                                    <?php echo $ContactUsSetting->Address ?>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty($ContactUsSetting->Phone)): ?>
                                <li><i class="icon-phone"></i><?php echo $ContactUsSetting->Phone ?> </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-icon">
                            <?php if (!empty($ContactUsSetting->Email)): ?>
                                <li><i class="icon-mail"></i>
                                    <?php echo $ContactUsSetting->Email ?>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty($ContactUsSetting->WorkingTime)): ?>
                                <li><i class="icon-clock"></i><?php echo $ContactUsSetting->WorkingTime ?> </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php if (!empty($ContactUsSetting->LatLon)):
                    $LatLon = trim($ContactUsSetting->LatLon);
                    $LatLon = explode(',', $LatLon);
                    if (count($LatLon) == 2):
                ?>
                        <div class="map" data-latitude="<?php echo $LatLon[0] ?>" data-longitude="<?php echo $LatLon[1] ?>" data-style="light"></div>
                <?php
                    endif;
                endif; ?>

            </div>
        </div>
    </div>
</section>

<?php
get_footer();
