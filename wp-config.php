<?php // Modified for Arabic by Rasheed Bydousi

/** إعدادات برنامج ووردبريس المعرب **/

// ** إعدادات قاعدة البيانات - ينمكنك الحصول على هذه المعلومات من مستضيفك ** //
/** اسم قاعدة بيانات ووردبريس */
define('DB_NAME', 'devnia_tvlive');

/** اسم المستخدم لقاعدة البيانات */
define('DB_USER', 'root');

/** كلمة المرور لقاعدة البيانات */
define('DB_PASSWORD', '');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8');

/** مقارنات قاعدة الببيانات (Collation). 
* إذا كنت غير متأكّد أتركها فارغة */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 * استخدم الرابط التالي لتوليد المفتايح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * @منذ 2.6.0
 */
define('AUTH_KEY',         'zU~bfulJz$&D$^?.>|AE)PY?$4p`U:W9`757!iD2*x|q&|*h7Be`IP)bCi7zCxIy');
define('SECURE_AUTH_KEY',  '866K.W<@M{}GZqP[{-l<YK= @ |<fVJa&^^IcY?BX_yH4o,^+eCu0g#M$u]P(vj[');
define('LOGGED_IN_KEY',    'v`Ru jo9>N T9^dtkg#Ltc?CfFwsU0RMM.vCZXndM>6DtyO30^&WE%{f49xb-B`(');
define('NONCE_KEY',        'p<FvhLG9lri&-v?CU)gyX&&8ngVwoYd,>xUQ9Bg]bt/X*nLP<gpJ)Rt%jHTWfH8q');
define('AUTH_SALT',        'CfyL ;67NwKLv&$?DtbzFLNx*+EbZr`c<BDb}%wsV::(3ftsdC;+>(U@{)?2>YXF');
define('SECURE_AUTH_SALT', 'D|u6I3rY17k)qRB`#GrC1>[e}g!/%{g QRa/Y?jzbD82~dKDAH<QRw>=L$(KN00+');
define('LOGGED_IN_SALT',   'P}Ix*I:OJ3W!7P7dW<Yo,lif+V51v1-`5}H{wE}xV6_f].E)M2?G7um@]G!rH4QA');
define('NONCE_SALT',       '$Pk=@V_u[f}SD;<LCn$4%@rjEMkh0?c@0@)D]+J,>(ihi]R%upnf2fJuoP1n}ZiA');


/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 * تستطيع تركيب أكثر من مدونة على نفس قاعدة البيانات إذا أعطيت لكل قاعدة بادئة جداول مختلفة
 * استخدم فقط حروف, أرقام وخطوط سفلية!
 */
$table_prefix  = 'devnia_tvlive_';

/**
 * اللغة الافتراضية المستخدمة في هذه النسخة هي العربية
 * إذا أردت أن تكون لوحة التحكم في مدونتك بالانجليزية قم بحذف الحرفين أدناه وهي الحروف ar
 */
define('WPLANG', 'ar');

/**
 * للمطورين: نظام تشخيص الأخطاء
 * قم بتغيير flase إلى true لتمكين عرض الملاحظات أثناء التطوير
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب! توقف عن التعديل. نتمنى لك التوفيق في موقعك! */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
