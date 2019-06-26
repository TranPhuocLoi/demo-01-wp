<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'demo_wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XU4aIxQssS{%qI&n[$xHBl5Ur2Q#nj|mp}iIj5iAB0tEJ=B-Qs~7$C1xn0=.44t(' );
define( 'SECURE_AUTH_KEY',  'R uY/Rb~rQj8h0`%yCtcqwhI_*_ N`AD-Zt9V@Q6Zu!o9><n$C7_{f!6{^6zvy]x' );
define( 'LOGGED_IN_KEY',    'b:>P=}Vtza%&V[|o2eozZ$?q/x)S*Dp(?1 klpR_KJ-Qci;! fFc$Gker[)Q4SX}' );
define( 'NONCE_KEY',        '=^cdDzJxdaAx-k$e=^}j6+p8PHq3HOk7zzzA,IW_qB}-(CuhIH/b<q^ArvP9_hgP' );
define( 'AUTH_SALT',        'I~fJGmUY8!r_Mx<fu4G/B2.y|4]tQ9b aOeg57fHOV(m H&+-{7$CUE ~SNc`T?h' );
define( 'SECURE_AUTH_SALT', 'yb8VA<tIe1,nPQd}[k=Aq_+w$rFJP@NzK8,XS8P=KD&%JNnriN|d]L]?M+/pK992' );
define( 'LOGGED_IN_SALT',   'eu|{c3?g<m^x;IE!2U5tZ{|K2R8Wq>#R67ohjg-[n)740zMEU.bNbkX8Skh$~oeK' );
define( 'NONCE_SALT',       '2}L%Pg6+Ak%HHM]T=Qj9}svQn}s>a%iwhDxMGHls??_(nOp4n$3gpO+GAx9D:<C ' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_ALLOW_REPAIR',true);
