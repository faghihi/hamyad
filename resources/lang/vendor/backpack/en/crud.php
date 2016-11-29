<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Dick Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Create form
    'add'                 => 'افزودن',
    'back_to_all'         => 'بازگشت به همه',
    'cancel'              => 'بیخیال',
    'add_a_new'           => 'افزودن مورد جدید',

        // Create form - advanced options
        'after_saving'            => 'پس از ذخیره سازی',
        'go_to_the_table_view'    => 'بازگشت به صفحه نمایش جدول اطلاعات',
        'let_me_add_another_item' => 'اضافه کردن مورد دیگر',
        'edit_the_new_item'       => 'ویرایش مورد تازه اضافه شده',

    // Edit form
    'edit'                 => 'ویرایش',
    'save'                 => 'ذخیره',

    // Revisions
    'revisions'            => 'تجدید نظر',
    'no_revisions'         => 'تجدید نظری یافت نشد.',
    'created_this'          => 'ساخته است',
    'changed_the'          => 'تغییر داده است',
    'restore_this_value'   => 'بازیابی این مقدار',
    'from'                 => 'از',
    'to'                   => 'به',
    'undo'                 => 'برگشت به فعالیت قبل',
    'revision_restored'    => 'تجدید نظر با موفقیت ذخیره شد.',

    // CRUD table view
    'all'                       => 'همه ',
    'in_the_database'           => 'در پایگاه داده ها',
    'list'                      => 'لیست',
    'actions'                   => 'فعالیت ها',
    'preview'                   => 'پیش نمایش',
    'delete'                    => 'حذف کردن',
    'admin'                     => 'مدیر',
    'details_row'               => 'ردیف اطلاعات',
    'details_row_loading_error' => 'خطا در فراخوانی اطلاعات ، لطفا دوباره سعی کنید.',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'آیا می خواهید این مورد را برای همیشه حذف کنید؟',
        'delete_confirmation_title'                   => 'حذف گردید',
        'delete_confirmation_message'                 => 'با موفقیت حذف گردید.',
        'delete_confirmation_not_title'               => 'خطا در حذف!',
        'delete_confirmation_not_message'             => "خطا در حذف",
        'delete_confirmation_not_deleted_title'       => 'حذف نشد!',
        'delete_confirmation_not_deleted_message'     => 'شما از حذف کردن منصرف شدید.',

        // DataTables translation
        'emptyTable'     => 'اطلاعاتی در این جدول ذخیره نشده است.',
        'info'           => 'نمایش از ابتدا تا انتها',
        'infoEmpty'      => 'نمایش از ۰ تا ۰ تمامی ۰ آیتم',
        'infoFiltered'   => 'خطای محدودیت در میزان بارگذازی',
        'infoPostFix'    => '',
        'thousands'      => '،',
        'lengthMenu'     => 'رکورد های منو در هر صفحه',
        'loadingRecords' => 'در حال بازگذاری ...',
        'processing'     => 'در حال پردازش ...',
        'search'         => 'جستجو:',
        'zeroRecords'    => 'هیچ نتیجه ای یافت نشد.',
        'paginate'       => [
            'first'    => 'ابتدا',
            'last'     => 'انتها',
            'next'     => 'بعدی',
            'previous' => 'قبلی',
        ],
        'aria' => [
            'sortAscending'  => ': مرتب سازی برحسب افزایش مقدار',
            'sortDescending' => ': مرتب سازی برحسب کاهش مقدار',
        ],

    // global crud - errors
    'unauthorized_access' => 'خطای دسترسی - شما دسترسی لازم برای مشاهده ی این صفحه را ندارید',
    'please_fix' => 'خطاهای زیر را برطرف کنید:',

    // global crud - success / error notification bubbles
    'insert_success' => 'با موفقیت اضافه شد.',
    'update_success' => 'با موفقیت تغییر یافت.',

    // CRUD reorder view
    'reorder'                      => 'بازچینی',
    'reorder_text'                 => 'drag&drop',
    'reorder_success_title'        => 'انجام شد.',
    'reorder_success_message'      => 'ثبت شد.',
    'reorder_error_title'          => 'خطا',
    'reorder_error_message'        => 'ذخیره شد.',

    // CRUD yes/no
    'yes' => 'بلی',
    'no' => 'خیر',

    // Fields
    'browse_uploads' => 'جستجو در بازگذاری ها',
    'clear' => 'پاک کردن',
    'page_link' => 'لینک صفحه',
    'page_link_placeholder' => 'http://example.com/your-desired-page',
    'internal_link' => 'لینک داخلی',
    'internal_link_placeholder' => '\'admin/page\' (no quotes) for \':url\'',
    'external_link' => 'لینک خارجی',
    'choose_file' => 'انتخاب',

    //Table field
    'table_cant_add' => 'خطا در افزودن',
    'table_max_reached' => 'خطا در ماکزیمم مقدار بارگذاری',

];
