 		<!--**********************************
			Footer start
		***********************************-->
 		<div class="footer">
 		    <div class="copyright">
 		        <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">DexignLab</a> 2021</p>
 		    </div>
 		</div>
 		<!--**********************************
			Footer end
		***********************************-->

 		<!--**********************************
		   Support ticket button start
		***********************************-->

 		<!--**********************************
		   Support ticket button end
		***********************************-->


 		</div>
 		<!--**********************************
		Main wrapper end
	***********************************-->

 		<!--**********************************
		Scripts
	***********************************-->
 		<!-- Required vendors -->
 		<script src="<?= PUBLIC_URL; ?>vendor/global/global.min.js"></script>

 		<script src="<?= PUBLIC_URL; ?>vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

 		<!-- Apex Chart -->

 		<script src="<?= PUBLIC_URL; ?>vendor/apexchart/apexchart.js"></script>

 		<!-- Datatable -->
 		<script src="<?= PUBLIC_URL; ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
 		<script src="<?= PUBLIC_URL; ?>js/plugins-init/datatables.init.js"></script>

 		<script src="<?= PUBLIC_URL; ?>vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

 		<script src="<?= PUBLIC_URL; ?>js/custom.min.js"></script>
 		<script src="<?= PUBLIC_URL; ?>js/dlabnav-init.js"></script>
 		<script src="<?= PUBLIC_URL; ?>js/demo.js"></script>
 		<script src="<?= PUBLIC_URL; ?>js/styleSwitcher.js"></script>


 		<!-- Chart piety plugin files -->


 		<!-- Dashboard 1 -->
 		<script src="<?= PUBLIC_URL; ?>js/dashboard/dashboard-1.js"></script>

 		<script src="<?= PUBLIC_URL; ?>vendor/owl-carousel/owl.carousel.js"></script>
 		<script src="<?= PUBLIC_URL; ?>vendor/bootstrap-datetimepicker/js/moment.js"></script>
 		<script src="<?= PUBLIC_URL; ?>vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

 		<script src="<?= PUBLIC_URL; ?>js/custom.min.js"></script>
 		<script src="<?= PUBLIC_URL; ?>js/dlabnav-init.js"></script>
 		<script src="<?= PUBLIC_URL; ?>js/demo.js"></script>
 		<script src="<?= PUBLIC_URL; ?>js/styleSwitcher.js"></script>
 		<script>
 		    function TravlCarousel() {

 		        /*  testimonial one function by = owl.carousel.js */
 		        jQuery('.front-view-slider').owlCarousel({
 		            loop: false,
 		            margin: 15,
 		            nav: true,
 		            autoplaySpeed: 3000,
 		            navSpeed: 3000,
 		            paginationSpeed: 3000,
 		            slideSpeed: 3000,
 		            smartSpeed: 3000,
 		            autoplay: false,
 		            animateOut: 'fadeOut',
 		            dots: true,
 		            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
 		            responsive: {
 		                0: {
 		                    items: 1
 		                },

 		                768: {
 		                    items: 2
 		                },

 		                1400: {
 		                    items: 2
 		                },
 		                1600: {
 		                    items: 3
 		                },
 		                1750: {
 		                    items: 3
 		                }
 		            }
 		        })
 		    }

 		    jQuery(window).on('load', function() {
 		        setTimeout(function() {
 		            TravlCarousel();
 		        }, 1000);
 		    });
 		</script>
 		<script>
 		    $(function() {
 		        $('#datetimepicker').datetimepicker({
 		            inline: true,
 		        });
 		    });

 		    $(document).ready(function() {
 		        $(".booking-calender .fa.fa-clock-o").removeClass(this);
 		        $(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
 		    });
 		</script>

 		</body>


 		</html>