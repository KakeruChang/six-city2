<?php

$getUrl = $_SERVER['REQUEST_URI'];
// print_r($getUrl);
$originalUrl = explode('?', $getUrl);
// print_r($originalUrl);
$removeQuestion = $originalUrl[0];
$dataAry = explode('/', $removeQuestion);
// print_r($dataAry);
// echo "<br>";
// print_r($dataAry[count($dataAry)-2]);
// echo "<br>";
// print_r($dataAry[count($dataAry)-1]);
// echo "<br>";
// $path = "https://udn.com/newmedia/2020/cities/Taipei/";
$path = "http://nmdap.udn.com.tw/test/cities/Taipei/";
// $path = "http://nmdap.udn.com.tw/test/meta2/";
?>

<?php
if (($dataAry[count($dataAry) - 1] == '' || $dataAry[count($dataAry) - 1] == 'Taipei')) {
    // echo "原始的的META";
?>
    <title>台北市：在新與舊的碰撞中前進 | 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="台北市：在新與舊的碰撞中前進 | 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="台北市：在新與舊的碰撞中前進 | 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="台北市不斷向前滾動，城市面貌也持續翻新，這座城市在這20年來有什麼改變？台北有什麼矛盾與衝突？《聯合報》團隊從各種角度看台北，希望帶領讀者更清楚看見這座城市的脈動。" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="台北市：在新與舊的碰撞中前進 | 專題 | 聯合報" />
    <meta name="twitter:description" content="台北市不斷向前滾動，城市面貌也持續翻新，這座城市在這20年來有什麼改變？台北有什麼矛盾與衝突？《聯合報》團隊從各種角度看台北，希望帶領讀者更清楚看見這座城市的脈動。" />
    <meta name="twitter:url" content="<?php echo $path; ?>" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="台北市：在新與舊的碰撞中前進 | 專題 | 聯合報" />
    <meta name="keywords" content="台北、凱道、同志、銅鑼灣" />
    <meta name="description" content="台北市不斷向前滾動，城市面貌也持續翻新，這座城市在這20年來有什麼改變？台北有什麼矛盾與衝突？《聯合報》團隊從各種角度看台北，希望帶領讀者更清楚看見這座城市的脈動。" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>" />
    <link rel="canonical" href="<?php echo $path; ?>" />

<?php
}
?>

<?php
if (($dataAry[count($dataAry) - 1] == 'eslite')) {
    // echo "原始的的META";
?>
    <title>走入歷史的誠品敦南店 | 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="走入歷史的誠品敦南店 | 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="走入歷史的誠品敦南店 | 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>eslite" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="誠品敦南店是全球首家24小時書店，也曾是台北的城市之光，而隨著誠品敦南店吹起熄燈號，一個世代的象徵也劃下句點。" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="走入歷史的誠品敦南店 | 專題 | 聯合報" />
    <meta name="twitter:description" content="誠品敦南店是全球首家24小時書店，也曾是台北的城市之光，而隨著誠品敦南店吹起熄燈號，一個世代的象徵也劃下句點。" />
    <meta name="twitter:url" content="<?php echo $path; ?>eslite" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="走入歷史的誠品敦南店 | 專題 | 聯合報" />
    <meta name="keywords" content="誠品敦南店、敦南誠品、24小時書店" />
    <meta name="description" content="誠品敦南店是全球首家24小時書店，也曾是台北的城市之光，而隨著誠品敦南店吹起熄燈號，一個世代的象徵也劃下句點。" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>eslite" />
    <link rel="canonical" href="<?php echo $path; ?>eslite" />

<?php
}
?>


<?php
if ($dataAry[count($dataAry) - 1] == 'taipei-main-station') {
    // echo "文章一的META";
?>
    <title>在北車停下腳步的理由 | 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="在北車停下腳步的理由 | 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="在北車停下腳步的理由 | 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>taipei-main-station" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="每次經過台北車站，腳步都得加快好幾倍，才能跟上台北人的步伐。但在北車，仍有幾間老字號書店，努力撐起幾個讓人停下腳步的空間，同時延續著台北書店街的書香味。" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="在北車停下腳步的理由 | 專題 | 聯合報" />
    <meta name="twitter:description" content="每次經過台北車站，腳步都得加快好幾倍，才能跟上台北人的步伐。但在北車，仍有幾間老字號書店，努力撐起幾個讓人停下腳步的空間，同時延續著台北書店街的書香味。" />
    <meta name="twitter:url" content="<?php echo $path; ?>taipei-main-station" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="在北車停下腳步的理由 | 專題 | 聯合報" />
    <meta name="keywords" content="北車、書店、天龍書店、重慶南路" />
    <meta name="description" content="每次經過台北車站，腳步都得加快好幾倍，才能跟上台北人的步伐。但在北車，仍有幾間老字號書店，努力撐起幾個讓人停下腳步的空間，同時延續著台北書店街的書香味。" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>taipei-main-station" />
    <link rel="canonical" href="<?php echo $path; ?>taipei-main-station" />

<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'sense-of-calling') {
    // echo "文章二的META";
?>
    <title>台北人的使命感 | 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="台北人的使命感 | 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="台北人的使命感 | 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>sense-of-calling" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="台北人常被冠上許多負面詞彙：驕傲、自以為是、天龍人…身處台灣首都，台北人到底有什麼特別？" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="台北人的使命感 | 專題 | 聯合報" />
    <meta name="twitter:description" content="台北人常被冠上許多負面詞彙：驕傲、自以為是、天龍人…身處台灣首都，台北人到底有什麼特別？" />
    <meta name="twitter:url" content="<?php echo $path; ?>sense-of-calling" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="台北人的使命感 | 專題 | 聯合報" />
    <meta name="keywords" content="秘密酒吧、特色酒吧、劇場酒吧、城市散步" />
    <meta name="description" content="台北人常被冠上許多負面詞彙：驕傲、自以為是、天龍人…身處台灣首都，台北人到底有什麼特別？" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>sense-of-calling" />
    <link rel="canonical" href="<?php echo $path; ?>sense-of-calling" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'democracy') {
    // echo "文章二的META";
?>
    <title>上凱道的一百種方式 | 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="上凱道的一百種方式 | 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="上凱道的一百種方式 | 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>democracy" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="總統府前的凱道有一百種使用方式，不同團體都可以走上凱道，讓自己的聲音被政府和社會聽見，但凱道成為人民的凱道，也不過是近20多年的事而已‧‧‧" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="上凱道的一百種方式 | 專題 | 聯合報" />
    <meta name="twitter:description" content="總統府前的凱道有一百種使用方式，不同團體都可以走上凱道，讓自己的聲音被政府和社會聽見，但凱道成為人民的凱道，也不過是近20多年的事而已‧‧‧" />
    <meta name="twitter:url" content="<?php echo $path; ?>democracy" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="上凱道的一百種方式 | 專題 | 聯合報" />
    <meta name="keywords" content="凱道、社運、民主、抗議" />
    <meta name="description" content="總統府前的凱道有一百種使用方式，不同團體都可以走上凱道，讓自己的聲音被政府和社會聽見，但凱道成為人民的凱道，也不過是近20多年的事而已‧‧‧" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>democracy" />
    <link rel="canonical" href="<?php echo $path; ?>democracy" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'ximen') {
    // echo "文章二的META";
?>
    <title>迎向陽光的同志文化 | 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="迎向陽光的同志文化 | 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="迎向陽光的同志文化 | 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>ximen" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="對台北的同志族群來說，西門町紅樓後方的露天廣場是讓他們「從地下室走到陽光下」的小天地，為什麼這個廣場對同志來說這麼重要？" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="迎向陽光的同志文化 | 專題 | 聯合報" />
    <meta name="twitter:description" content="對台北的同志族群來說，西門町紅樓後方的露天廣場是讓他們「從地下室走到陽光下」的小天地，為什麼這個廣場對同志來說這麼重要？" />
    <meta name="twitter:url" content="<?php echo $path; ?>ximen" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="迎向陽光的同志文化 | 專題 | 聯合報" />
    <meta name="keywords" content="西門、紅樓、同志、gay" />
    <meta name="description" content="對台北的同志族群來說，西門町紅樓後方的露天廣場是讓他們「從地下室走到陽光下」的小天地，為什麼這個廣場對同志來說這麼重要？" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>ximen" />
    <link rel="canonical" href="<?php echo $path; ?>ximen" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'stand-up-comedy') {
    // echo "文章二的META";
?>
    <title>用喜劇收服難搞的台北人| 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="用喜劇收服難搞的台北人| 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="用喜劇收服難搞的台北人| 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>stand-up-comedy" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="什麼樣的笑話才會讓台北人買單？台北人觀賞喜劇的心態，有什麼不同？卡米地喜劇俱樂部不斷用喜劇挑戰台北人的笑點，與台北人交手13年來，也學會從台北人的笑聲中，聽出不少端倪。" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="用喜劇收服難搞的台北人| 專題 | 聯合報" />
    <meta name="twitter:description" content="什麼樣的笑話才會讓台北人買單？台北人觀賞喜劇的心態，有什麼不同？卡米地喜劇俱樂部不斷用喜劇挑戰台北人的笑點，與台北人交手13年來，也學會從台北人的笑聲中，聽出不少端倪。" />
    <meta name="twitter:url" content="<?php echo $path; ?>stand-up-comedy" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="用喜劇收服難搞的台北人| 專題 | 聯合報" />
    <meta name="keywords" content="卡米地、站立式喜劇、喜劇演員" />
    <meta name="description" content="什麼樣的笑話才會讓台北人買單？台北人觀賞喜劇的心態，有什麼不同？卡米地喜劇俱樂部不斷用喜劇挑戰台北人的笑點，與台北人交手13年來，也學會從台北人的笑聲中，聽出不少端倪。" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>stand-up-comedy" />
    <link rel="canonical" href="<?php echo $path; ?>stand-up-comedy" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'food') {
    // echo "文章二的META";
?>
    <title>用喜劇收服難搞的台北人| 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="台北人的味蕾| 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="台北人的味蕾| 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>food" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="台北餐廳的汰換率就跟台北人的步調一樣快，未來，台北人的餐桌上將呈現什麼風景？" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="台北人的味蕾| 專題 | 聯合報" />
    <meta name="twitter:description" content="台北餐廳的汰換率就跟台北人的步調一樣快，未來，台北人的餐桌上將呈現什麼風景？" />
    <meta name="twitter:url" content="<?php echo $path; ?>food" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="台北人的味蕾| 專題 | 聯合報" />
    <meta name="keywords" content="台菜、餐飲業、私房菜、美食、異國料理" />
    <meta name="description" content="台北餐廳的汰換率就跟台北人的步調一樣快，未來，台北人的餐桌上將呈現什麼風景？" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>food" />
    <link rel="canonical" href="<?php echo $path; ?>food" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'causeway-bay-books') {
    // echo "文章二的META";
?>
    <title>為什麼台北需要銅鑼灣書店？| 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="為什麼台北需要銅鑼灣書店？| 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="為什麼台北需要銅鑼灣書店？| 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>causeway-bay-books" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="香港的銅鑼灣書店來台灣重啟，是店長林榮基觀察到，儘管有再多獨立書店，台北仍需要一間「銅鑼灣書店」。" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="為什麼台北需要銅鑼灣書店？| 專題 | 聯合報" />
    <meta name="twitter:description" content="香港的銅鑼灣書店來台灣重啟，是店長林榮基觀察到，儘管有再多獨立書店，台北仍需要一間「銅鑼灣書店」。" />
    <meta name="twitter:url" content="<?php echo $path; ?>causeway-bay-books" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="為什麼台北需要銅鑼灣書店？| 專題 | 聯合報" />
    <meta name="keywords" content="銅鑼灣書店、獨立書店、林榮基、香港" />
    <meta name="description" content="香港的銅鑼灣書店來台灣重啟，是店長林榮基觀察到，儘管有再多獨立書店，台北仍需要一間「銅鑼灣書店」。" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>causeway-bay-books" />
    <link rel="canonical" href="<?php echo $path; ?>causeway-bay-books" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'paradox') {
    // echo "文章二的META";
?>
    <title>台北正處於矛盾、拉扯的狀態| 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="台北正處於矛盾、拉扯的狀態| 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="台北正處於矛盾、拉扯的狀態| 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>paradox" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="「矛盾、衝突」是台北的現況，而經過不斷的對立、碰撞，台北將往什麼方向前進？" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="台北正處於矛盾、拉扯的狀態| 專題 | 聯合報" />
    <meta name="twitter:description" content="「矛盾、衝突」是台北的現況，而經過不斷的對立、碰撞，台北將往什麼方向前進？" />
    <meta name="twitter:url" content="<?php echo $path; ?>paradox" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="台北正處於矛盾、拉扯的狀態| 專題 | 聯合報" />
    <meta name="keywords" content="左轉有書、社會議題、獨立書店、非營利組織" />
    <meta name="description" content="「矛盾、衝突」是台北的現況，而經過不斷的對立、碰撞，台北將往什麼方向前進？" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>paradox" />
    <link rel="canonical" href="<?php echo $path; ?>paradox" />
<?php
}
?>


<!-- 下方六塊分享 -->
<?php
if ($dataAry[count($dataAry) - 1] == 'independent-bookstore') {
    // echo "文章二的META";
?>
    <title>我愛台北的獨立書店| 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="我愛台北的獨立書店| 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="我愛台北的獨立書店| 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>sharing/independent-bookstore" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_independent_bookstore.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="一間間獨立書店在台北落腳，為台北注入不同的思想與文化。這20年來，台北還有什麼變化？" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="我愛台北的獨立書店| 專題 | 聯合報" />
    <meta name="twitter:description" content="一間間獨立書店在台北落腳，為台北注入不同的思想與文化。這20年來，台北還有什麼變化？" />
    <meta name="twitter:url" content="<?php echo $path; ?>sharing/independent-bookstore" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_independent_bookstore.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="我愛台北的獨立書店| 專題 | 聯合報" />
    <meta name="description" content="一間間獨立書店在台北落腳，為台北注入不同的思想與文化。這20年來，台北還有什麼變化？" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>sharing/independent-bookstore" />
    <link rel="canonical" href="<?php echo $path; ?>sharing/independent-bookstore" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'LGBT-culture') {
    // echo "文章二的META";
?>
    <title>我愛台北的獨立書店| 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="我愛台北的同志文化| 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="我愛台北的同志文化| 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>sharing/LGBT-culture" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_LGBT_culture.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="蓬勃發展的同志文化，讓台北成為亞洲同志圈的模範。這20年來，台北還有什麼變化？" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="我愛台北的同志文化| 專題 | 聯合報" />
    <meta name="twitter:description" content="蓬勃發展的同志文化，讓台北成為亞洲同志圈的模範。這20年來，台北還有什麼變化？" />
    <meta name="twitter:url" content="<?php echo $path; ?>sharing/LGBT-culture" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_LGBT_culture.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="我愛台北的同志文化| 專題 | 聯合報" />
    <meta name="description" content="蓬勃發展的同志文化，讓台北成為亞洲同志圈的模範。這20年來，台北還有什麼變化？" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>sharing/LGBT-culture" />
    <link rel="canonical" href="<?php echo $path; ?>sharing/LGBT-culture" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'globalization') {
    // echo "文章二的META";
?>
    <title>我愛台北的獨立書店| 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="我愛台北的國際化| 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="我愛台北的國際化| 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>sharing/globalization" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_globalization.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="除了力求與國際接軌，台北也正以最在地的方式，讓台灣被世界看見。這20年來，台北還有什麼變化？" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="我愛台北的國際化| 專題 | 聯合報" />
    <meta name="twitter:description" content="除了力求與國際接軌，台北也正以最在地的方式，讓台灣被世界看見。這20年來，台北還有什麼變化？" />
    <meta name="twitter:url" content="<?php echo $path; ?>sharing/globalization" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_globalization.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="我愛台北的國際化| 專題 | 聯合報" />
    <meta name="description" content="除了力求與國際接軌，台北也正以最在地的方式，讓台灣被世界看見。這20年來，台北還有什麼變化？" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>sharing/globalization" />
    <link rel="canonical" href="<?php echo $path; ?>sharing/globalization" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'bars') {
    // echo "文章二的META";
?>
    <title>我愛台北的獨立書店| 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="我愛台北的特色酒吧| 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="我愛台北的特色酒吧| 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>sharing/bars" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_bars.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="台北的酒吧正從「喝到飽、喝到醉」的無限暢飲酒吧升級至提供更精緻品飲體驗的特色酒吧。這20年來，台北還有什麼變化？" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="我愛台北的特色酒吧| 專題 | 聯合報" />
    <meta name="twitter:description" content="台北的酒吧正從「喝到飽、喝到醉」的無限暢飲酒吧升級至提供更精緻品飲體驗的特色酒吧。這20年來，台北還有什麼變化？" />
    <meta name="twitter:url" content="<?php echo $path; ?>sharing/bars" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_bars.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="我愛台北的特色酒吧| 專題 | 聯合報" />
    <meta name="description" content="台北的酒吧正從「喝到飽、喝到醉」的無限暢飲酒吧升級至提供更精緻品飲體驗的特色酒吧。這20年來，台北還有什麼變化？" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>sharing/bars" />
    <link rel="canonical" href="<?php echo $path; ?>sharing/bars" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'art-and-cuture') {
    // echo "文章二的META";
?>
    <title>我愛台北的藝文風氣| 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="我愛台北的藝文風氣| 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="我愛台北的藝文風氣| 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>sharing/art-and-cuture" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_art_and_cuture.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="蓬勃發展的藝文活動，充實了台北人的心靈，也讓台北人對各式藝文活動變得更加挑剔。這20年來，台北還有什麼變化？" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="我愛台北的藝文風氣| 專題 | 聯合報" />
    <meta name="twitter:description" content="蓬勃發展的藝文活動，充實了台北人的心靈，也讓台北人對各式藝文活動變得更加挑剔。這20年來，台北還有什麼變化？" />
    <meta name="twitter:url" content="<?php echo $path; ?>sharing/art-and-cuture" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_art_and_cuture.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="我愛台北的藝文風氣| 專題 | 聯合報" />
    <meta name="description" content="蓬勃發展的藝文活動，充實了台北人的心靈，也讓台北人對各式藝文活動變得更加挑剔。這20年來，台北還有什麼變化？" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>sharing/art-and-cuture" />
    <link rel="canonical" href="<?php echo $path; ?>sharing/art-and-cuture" />
<?php
}
?>

<?php
if ($dataAry[count($dataAry) - 1] == 'ketagalan-blvd') {
    // echo "文章二的META";
?>
    <title>我愛台北的凱達格蘭大道| 專題 | 聯合報</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="content-language" content="zh-Hant-TW" />
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable = yes" />
    <meta name="google-site-verification" content="SU5NCjt08O2L_dHMrPUSyLbRSG8_gK5cVC9Fa4hjVgE" />
    <meta name="msvalidate.01" content="5C0FB62CF1A6A5C9149F8C52E6979B61" />
    <meta property="main-page" content="我愛台北的凱達格蘭大道| 專題 | 聯合報" />

    <!-- for Facebook -->
    <meta property="og:title" content="我愛台北的凱達格蘭大道| 專題 | 聯合報" />
    <meta property="og:url" content="<?php echo $path; ?>sharing/ketagalan-blvd" />
    <meta property="og:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_ketagalan_blvd.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:description" content="隨著自由民主風氣興起，凱道也變成人民的凱道，驅動台灣的民主進程向前邁進。這20年來，台北還有什麼變化？" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@udnNewMedia" />
    <meta name="twitter:title" content="我愛台北的凱達格蘭大道| 專題 | 聯合報" />
    <meta name="twitter:description" content="隨著自由民主風氣興起，凱道也變成人民的凱道，驅動台灣的民主進程向前邁進。這20年來，台北還有什麼變化？" />
    <meta name="twitter:url" content="<?php echo $path; ?>sharing/art-and-cuture" />
    <meta name="twitter:image" content="https://udn.com/newmedia/2020/cities/meta_img/Taipei_sharing_ketagalan_blvd.jpg" />

    <!-- for Google -->
    <meta name="application-name" content="聯合報-新媒體中心" />
    <meta name="copyright" content="聯合報" />
    <meta name="title" content="我愛台北的凱達格蘭大道| 專題 | 聯合報" />
    <meta name="description" content="隨著自由民主風氣興起，凱道也變成人民的凱道，驅動台灣的民主進程向前邁進。這20年來，台北還有什麼變化？" />

    <meta property="fb:admins" content="671188086" />
    <meta property="fb:app_id" content="1010324812347164" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="聯合報" />
    <meta property="article:author" content="https://www.facebook.com/udnplus" />
    <meta property="article:publisher" content="https://www.facebook.com/udnplus" />

    <!-- browser color -->
    <meta name="theme-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />

    <link rel="icon" type="image/ico" href="https://udn.com/upf/newmedia/image/udn-icon.ico" />

    <link rel="alternate" media="only screen and (max-width: 640px)" href="<?php echo $path; ?>sharing/ketagalan-blvd" />
    <link rel="canonical" href="<?php echo $path; ?>sharing/ketagalan-blvd" />
<?php
}
?>