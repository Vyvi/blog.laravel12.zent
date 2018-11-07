<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Thuế xuất mặc định
    |--------------------------------------------------------------------------
    |
    | Đây là mức thuế xuất mặt định được áp dụng.
    |
    */

    'tax' => 21, // tính theo %

    /*
    |--------------------------------------------------------------------------
    | Thông số cài đặt cơ sở dữ liệu giỏ hàng
    |--------------------------------------------------------------------------
    |
    | Ở đây bạn có thể thiết lập kết nối khi muốn lưu trữ giỏ hàng
    |
    */

    'database' => [

        'connection' => null,

        'table' => 'shoppingcart',

    ],

    /*
    |--------------------------------------------------------------------------
    | Huỷ giỏ hàng khi đăng xuất
    |--------------------------------------------------------------------------
    |
    | Nếu thiết lập này được đặt "true" thì giỏ hàng sẽ tự động bị xoá khi người dùng
    | đăng xuất khỏi hệ thống.
    |
    */

    'destroy_on_logout' => false,

    /*
    |--------------------------------------------------------------------------
    | Định dạng số mặc định
    |--------------------------------------------------------------------------
    |
    | Định dạng mặc định này sẽ được áp dụng nếu bạn không thiết lập chúng trong phương
    | thức gọi.
    |
    */

    'format' => [

        'decimals' => 2, // số chữ số thập phân

        'decimal_point' => '.', //kí tự ngăn cách phần nguyên và phần thập phân

        'thousand_seperator' => ',' //ký tự phân cách các hàng nghìn.

    ],

];