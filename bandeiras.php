<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>

<!-- MENU - PRINCIPAL -->
<?php include 'menu.php'; ?>

<!-- BANNER - BANDEIRAS -->
<?php include 'components/banner-bandeiras.php'; ?>

<section class="bandeiras sectionStart">
    <div class="containerEighteen">
        <div class="row row-bandeiras colorDarkBlue">
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Rainbow
                </div>
                <div>
                    <img src="assets/img/band1.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Pansexual Pride
                </div>
                <div>
                    <img src="assets/img/band2.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Trangender Pride
                </div>
                <div>
                    <img src="assets/img/band3.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Genderqueer Pride
                </div>
                <div>
                    <img src="assets/img/band4.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Bisexual Pride
                </div>
                <div>
                    <img src="assets/img/band5.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Agender
                </div>
                <div>
                    <img src="assets/img/band6.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Lesbian Pride
                </div>
                <div>
                    <img src="assets/img/band7.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Genderfluid Pride
                </div>
                <div>
                    <img src="assets/img/band8.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Gray Pride flag of South Africa
                </div>
                <div>
                    <img src="assets/img/band9.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Polisexual Pride
                </div>
                <div>
                    <img src="assets/img/band10.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Bigender Pride
                </div>
                <div>
                    <img src="assets/img/band11.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Intersex Pride
                </div>
                <div>
                    <img src="assets/img/band12.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Asexual Pride
                </div>
                <div>
                    <img src="assets/img/band13.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Bear Brotherhood
                </div>
                <div>
                    <img src="assets/img/band14.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Alternativa <BR> Transgender Pride
                </div>
                <div>
                    <img src="assets/img/band15.png" class="widthfull">
                </div>
            </div>
            </a>
            <a href="#0">
            <div class="col s12 m3 l3">
                <div>
                    Israeli transgender and genderqueer
                </div>
                <div>
                    <img src="assets/img/band16.png" class="widthfull">
                </div>
            </div>
            </a>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>

<?php include 'assets/js/JS_includes.php'; ?>

<script src="assets/devlop/live.js"></script>


</body>

</html>