<!DOCTYPE HTML>
<html>

<head>
    <title>Roï Eielts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="content/javascript/functie.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="start()">
    <?php
    include("content/php/menu.php");
    ?>
    <div class="sidebar">
        <a href="https://mail.google.com/mail/u/0/?pli=1#inbox?compose=GTvVlcSGLdkGRHdCjwVBbNvvKgPWcSwWgfwLslCNWjgVtMhsHxRpMBdgqnDSlJGsgvbPDSdlmPjnL" class="fa fa-google" target="_blank"></a><br>
        <a href="https://www.linkedin.com/in/roi-eielts" class="fa fa-linkedin" target="_blank"></a><br>
        <a href="https://github.com/Roi-Eielts" class="fa fa-github" target="_blank"></a><br>
    </div>
    <?php
    if (isset($_GET["pagina"])) {
        $paginanaam = $_GET["pagina"];
    } else {
        $paginanaam = "home";
    }
    if ($paginanaam == "home") {
        include("content/pagina/home.html");
    }
    if ($paginanaam == "overMij") {
        include("content/php/overMij.php");
    }
    if ($paginanaam == "ww") {
        include("content/pagina/ww.html");
    }
    if ($paginanaam == "contact") {
        include("content/php/contact.php");
    }
    ?>
</body>

</html>