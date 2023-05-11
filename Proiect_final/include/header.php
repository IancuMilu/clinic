<?php
require_once 'config.inc.php';
?>

<body>
<header>
    <nav class="navbar navbar-default navbar-head">
        <div class="container-fluid header-bar">
            <div class="navbar-header">
                <a id="website-name" class="navbar-brand" href="<?php echo ROOT_PATH . 'index.php'; ?>">CLINICA ANALIZE</a>
            </div>
            <ul class="nav navbar-nav header-menu">
                <li><a onmouseover="colorchangeheader(this)" onmouseout="normalcolorheader(this)" href="<?php echo ROOT_PATH . 'pages/analize.php'; ?>">ANALIZE</a></li>
                <li><a onmouseover="colorchangeheader(this)" onmouseout="normalcolorheader(this)" href="<?php echo ROOT_PATH . 'pages/programare.php'; ?>">PROGRAMARE</a></li>
                <li><a onmouseover="colorchangeheader(this)" onmouseout="normalcolorheader(this)" href="<?php echo ROOT_PATH . 'pages/desprenoi.php'; ?>">DESPRE NOI</a></li>
                <li><a onmouseover="colorchangeheader(this)" onmouseout="normalcolorheader(this)" href="<?php echo ROOT_PATH . 'pages/contact.php' ?>">CONTACT</a></li>
            </ul>
        </div>
    </nav>
</header>

<script>
    function colorchangeheader(x) {
        x.style.color = '#E58100';
    }

    function normalcolorheader(x) {
        x.style.color = '#8181C1';
    }
</script>

