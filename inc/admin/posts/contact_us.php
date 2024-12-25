<?php
function amin_contact_us_meta_box_callback( $post ) {
    // دریافت مقدار ذخیره شده، اگر وجود دارد
    $value = AMINContactUsHelper::Get($post->ID);

    // فیلد ورودی HTML
   echo '<p>'.__('Name')." : ".$value['name'].'</p>';
   echo '<p>'.__('Email')." : ".$value['email'].'</p>';

}
function amin_contact_us_meta_box() {
    add_meta_box(
        'amin_contact_us_id',       // شناسه متا باکس
        'اطلاعات ارسال کننده',      // عنوان متا باکس
        'amin_contact_us_meta_box_callback', // تابع کال بک برای محتوای متا باکس
        'Contact',                 // نوع پستی که متا باکس به آن افزوده می‌شود
        'normal',               // زمینه (normal, advanced, side)
        'high'                  // اولویت (high, core, default, low)
    );
}
add_action( 'add_meta_boxes', 'amin_contact_us_meta_box' );
?>
