<?php

define('DB_NAME', '1');
define('DB_USER', '1');
define('DB_PASSWORD', '1');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix  = 'wp_';

define('AUTH_KEY',         '-1;LJ48xRYq0Z!!vJNm*|@2vIV9Ew)3-Ixd ofJl][I78y&dM!et9ud-L-@t)a]j');
define('SECURE_AUTH_KEY',  'Ayd$V)1^HIH.6@HPx-;%rTv%Kka_+dOiw*d)E_|b&JcFSE4*}7=1~&x@??JQ)0!9');
define('LOGGED_IN_KEY',    '79+7byuN^T[bi<a+Wb^-PE=/ewHt!C#aOr>*.78].I|~U$Vhw=-2W:C&]U$@2<U;');
define('NONCE_KEY',        'n+T`!c*.`~3@{0aWRQcX,ERQIuBcHx/*x@?el_9_C+7S=ATf)?&a#|{1$sHn%z<?');
define('AUTH_SALT',        'zMGL(L*O+R$;N!DK3te/cQiQ(y/q]>.lT?&L+{,!T^ti7uz3f=mjftVDrEc3M4fe');
define('SECURE_AUTH_SALT', '2jOXdG`4-:SDX,d7$&tCG9~_/#~4I/A!cg.</BZ;[e)/,Dkl9v?B|i~0eyLAD)MC');
define('LOGGED_IN_SALT',   '.+Qw%2piHZTftF[.zPdD8ktoqQ!qMPA0H@A8S|EOaJV>9Ioh=37Mp b[ZJ+l+#6u');
define('NONCE_SALT',       '_du`@nNQsh*`i?IloqqpOd*rJd]I`xq9[BH30@UjbtvU]xzqp|#-s,,[a;9;iV$J');


define('WPLANG', '');
define('WP_DEBUG', false);
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');