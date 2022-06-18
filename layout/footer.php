<footer>
    <div id="footer">
        <div class="container">
            <!-- <div class="row row-bottom-padded-md">
                <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                    <h3>About Travel</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts.</p>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                    <h3>Top Flights Routes</h3>
                    <ul>
                        <li><a href="#">Manila flights</a></li>
                        <li><a href="#">Dubai flights</a></li>
                        <li><a href="#">Bangkok flights</a></li>
                        <li><a href="#">Tokyo Flight</a></li>
                        <li><a href="#">New York Flights</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                    <h3>Top Hotels</h3>
                    <ul>
                        <li><a href="#">Boracay Hotel</a></li>
                        <li><a href="#">Dubai Hotel</a></li>
                        <li><a href="#">Singapore Hotel</a></li>
                        <li><a href="#">Manila Hotel</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                    <h3>Interest</h3>
                    <ul>
                        <li><a href="#">Beaches</a></li>
                        <li><a href="#">Family Travel</a></li>
                        <li><a href="#">Budget Travel</a></li>
                        <li><a href="#">Food &amp; Drink</a></li>
                        <li><a href="#">Honeymoon and Romance</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                    <h3>Best Places</h3>
                    <ul>
                        <li><a href="#">Boracay Beach</a></li>
                        <li><a href="#">Dubai</a></li>
                        <li><a href="#">Singapore</a></li>
                        <li><a href="#">Hongkong</a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
                    <h3>Affordable</h3>
                    <ul>
                        <li><a href="#">Food &amp; Drink</a></li>
                        <li><a href="#">Fare Flights</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="fh5co-social-icons">
                        <a href="#"><i class="icon-twitter2"></i></a>
                        <a href="#"><i class="icon-facebook2"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-dribbble2"></i></a>
                        <a href="#"><i class="icon-youtube"></i></a>
                    </p>
                    <p>Copyright Univalle 2022. Todos los derechos reservados.
                        <br>Realizado por:
                        <br>
                        <i class="icon-user2"></i><a href="https://github.com/paomel249" target="_blank"> Chacolla Espinoza Kael</a>
                        <br>
                        <i class="icon-user2"></i><a href="https://github.com/CJYudY" target="_blank"> Choque Chasqui Cinthia</a>
                        <br>
                        <i class="icon-user2"></i><a href="https://github.com/paomel249" target="_blank"> Quispe Mamani Paola</a>
                        <br>
                        <i class="icon-user2"></i><a href="https://github.com/QiangRO" target="_blank"> Reyes Ortiz Chacon Alejandro</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- END fh5co-page -->
</div>
<!-- END fh5co-wrapper -->
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/sticky.js"></script>

<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="js/classie.js"></script>
<script src="js/selectFx.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>
<script type="text/javascript">
    function mostrarContenido() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }

    function limpiar() {
        document.getElementById("date-start").value = "";
        document.getElementById("date-end").value = "";
    }
    function mostrarContenidoCheck() {
        element = document.getElementById("contentCheck");
        check = document.getElementById("checkC");
        if (check.checked) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }
    function limpiarCheck() {
        document.getElementById("date-endCheck").value = "CHECK IN";
    }

    function mostrarContenidoPet() {
        element = document.getElementById("contentPet");
        check = document.getElementById("checkP");
        if (check.checked) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }
    function limpiarPet() {
        document.getElementById("date-endPet").value = "PET CHECK";
    }
</script>
</body>

</html>