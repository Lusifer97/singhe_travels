<!DOCTYPE html>
<html xmlns="" lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= (isset($this->title) ? $this->title : 'Singhe Travels | Best Travaling Partner') ?></title>

    <link rel="shortcut icon" type="<?php echo PUBLIC_URL; ?>image/x-icon" href="images/favicon.png">

    <link href="<?php echo PUBLIC_URL; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo PUBLIC_URL; ?>css/style.css" rel="stylesheet" type="text/css">

    <link href="<?php echo PUBLIC_URL; ?>css/plugin.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo PUBLIC_URL; ?>css/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_URL; ?>css/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo PUBLIC_URL; ?>fonts/line-icons.css" type="text/css">
    <script>
        var url = '<?= URL; ?>';
        var PUBLIC_URL = '<?= PUBLIC_URL; ?>';
        // var user = '<?= Session::get("user"); ?>';
    </script>
</head>

<body>

    <div id="preloader">
        <div id="status"></div>
    </div>