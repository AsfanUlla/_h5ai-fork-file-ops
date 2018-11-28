<?php header('Content-type: text/html;charset=utf-8'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cloud Website | Dev</title>
        <meta name="description" content="DOWNLOADS FREE TORRENTS">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $public_href; ?>images/favicon/favicon-16-32.ico">
        <link rel="apple-touch-icon-precomposed" type="image/png" href="<?= $public_href; ?>images/favicon/favicon-152.png">
        <link rel="stylesheet" href="<?= $public_href; ?>css/styles.css">
        <link rel="stylesheet" href="<?= $public_href; ?>css/test.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
       <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <?php if (!$fallback_mode) { ?><script src="<?= $public_href; ?>js/scripts.js" data-module="index"></script><?php } ?>
<?= $x_head_tags; ?>
</head>
<body class="index" id="root">
    <div id="fallback-hints"><?php if (!$fallback_mode) { ?>
    <span class="noJsMsg">Works best with JavaScript enabled!</span>
    <span class="noBrowserMsg">Works best in <a href="http://browsehappy.com">modern browsers</a>!</span><?php } ?>
    </div><div id="fallback"><?= $fallback_html; ?>
    </div>
<center>
    <h1>///  Processing Please wait...  ///</h1><br/>
<img src="<?= $public_href; ?>images/Rolling.svg">
</center>
</body>
</html>