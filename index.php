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

<!-- SLIDER - PRINCIPAL -->
<?php include 'components/slider-principal.php'; ?>

<!-- CHAMADA - CATEGORIAS -->
<?php include 'components/chamada-categorias.php'; ?>

<!-- CAROUSEL -  NOVIDADES -->
<?php include 'components/carousel-novidades.php'; ?>

<!-- GRID - NOVIDADES -->
<?php include 'components/grid-novidades.php'; ?>

<!-- CHAMADA - LINHAS -->
<?php include 'components/chamada-linhas.php'; ?>

<!-- CAROUSEL -  MAIS VENDIDOS -->
<?php include 'components/carousel-mais-vendidos.php'; ?>

<!-- GRID - MAIS VENDIDOS -->
<?php include 'components/grid-mais-vendidos.php'; ?>

<!-- GRID - VIDEOS -->
<?php include 'components/grid-videos.php'; ?>

<!-- CAROUSEL -  DEPOIMENTOS -->
<?php include 'components/carousel-depoimentos.php'; ?>

<!-- COUNTER -->
<?php include 'components/counter.php'; ?>

<!-- PARALLAX - -->
<?php include 'components/parallax.php'; ?>

<!-- GRID - BLOG -->
<?php include 'components/grid-blog.php'; ?>

<!-- GRID - INSTAGRAM -->
<?php include 'components/grid-instagram.php'; ?>

<!-- REDES -->
<?php include 'components/grid-socials.php'; ?>



<?php include 'footer.php'; ?>

<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/js/jquery.onView.js"></script>
<script>
    (function($) {
        $('.counter').onView(function() {
            CounterUp()
        });

        function CounterUp() {
            $('.count').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
    })(jQuery);
</script>

<!-- <script src="assets/devlop/live.js"></script> -->


</body>

</html>