<?php
require_once 'config.inc.php';
?>

<footer>
    <div class="container">
        <div class="row footer-links">
            <div class="col-lg-4 col-12 footer-website">
                <a onmouseover="colorchangefooter(this)" onmouseout="normalcolorfooter(this)" href="<?php echo ROOT_PATH; ?>">CLINICA ANALIZE</a>
            </div>
            <div class="col-lg-2 col-12 footer-website">
                <a onmouseover="colorchangefooter(this)" onmouseout="normalcolorfooter(this)" href="<?php echo ROOT_PATH . 'pages/analize.php'; ?>">ANALIZE</a>
            </div>
            <div class="col-lg-2 col-12 footer-website">
                <a onmouseover="colorchangefooter(this)" onmouseout="normalcolorfooter(this)" href="<?php echo ROOT_PATH . 'pages/programare.php'; ?>">PROGRAMARE</a>
            </div>
            <div class="col-lg-2 col-12 footer-website">
                <a onmouseover="colorchangefooter(this)" onmouseout="normalcolorfooter(this)" href="<?php echo ROOT_PATH . 'pages/desprenoi.php'; ?>">DESPRE NOI</a>
            </div>
            <div class="col-lg-2 col-12 footer-website">
                <a onmouseover="colorchangefooter(this)" onmouseout="normalcolorfooter(this)" href="<?php echo ROOT_PATH . 'pages/contact.php'; ?>">CONTACT</a>
            </div>
        </div>

        <div class="col footer-icons" >
            <a href="https://www.facebook.com" target="_blank"><img src="<?php echo ROOT_PATH . 'assets/images/facebook.svg'; ?>" alt="fb"></a>
            <a href="https://www.instagram.com" target="_blank"><img src="<?php echo ROOT_PATH . 'assets/images/instagram.svg'; ?>" alt="insta"></a>
            <a href="https://www.twitter.com" target="_blank"><img src="<?php echo ROOT_PATH . 'assets/images/twitter.svg'; ?>" alt="twitt"></a>
        </div>
    </div>
</footer>

<script>
    function colorchangefooter(x) {
        x.style.color = '#E58100';
    }

    function normalcolorfooter(x) {
        x.style.color = 'white';
    }
</script>

<button onclick="topFunction()" id="myBtn" title="Go to top"><img style="width: 30px" src="<?php echo ROOT_PATH . 'assets/images/arr.svg'; ?>"></button>
<script src="<?php echo ROOT_PATH . 'include/topFunction.js'; ?>"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
