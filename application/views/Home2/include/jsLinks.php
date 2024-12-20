<!-- <script>
   new WOW().init();
</script> -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js" integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?= base_url('assets/new_website/js/vendor/waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/new_website/js/metisMenu.min.js') ?>"></script>
<script src="<?= base_url('assets/new_website/js/slick.min.js') ?>"></script>
<script src="<?= base_url('assets/new_website/js/jquery.fancybox.min.js') ?>"></script>
<script src="<?= base_url('assets/new_website/js/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/new_website/js/jquery-ui-slider-range.js') ?>"></script>
<script src="<?= base_url('assets/new_website/js/ajax-form.') ?>"></script>
<script src="<?= base_url('assets/new_website/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/new_website/js/imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/new_website/js/main.js') ?>"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
<script>
    const scrollUpBtn = document.getElementById("scroll-up-btn");
    window.onscroll = function() {
        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
            scrollUpBtn.style.display = "block";
        } else {
            scrollUpBtn.style.display = "none";
        }
    };
    scrollUpBtn.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
<script>
    $(document).ready(function() {
        var feedbackBtn = $('#feedback-btn');
        var closeFeedbackBtn = $('#close-feedback-btn');
        closeFeedbackBtn.on('click', function() {
            console.log('Close button clicked');
            feedbackBtn.hide();
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<!-- algolia plugin -->
<script src="https://cdn.jsdelivr.net/npm/preact@10.5.14/dist/preact.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.14.0/dist/algoliasearch-lite.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js"></script>
<script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-plugin-query-suggestions"></script>
<script src="https://unpkg.com/@algolia/autocomplete-plugin-recent-searches"></script>
<script src="<?= base_url('assets/new_website/js/algolia-config.js') ?>"></script>
<script>
    function SliderURL(id, url) {

        $.ajax({
            url: "<?= base_url('Home2/updateSliderClick') ?>",
            type: "post",
            data: {
                id: id
            },
            success: function(res) {
                window.open(url, '_blank');
            },


        });
    }

    document.addEventListener("DOMContentLoaded", function() {
        const sliderImages = document.querySelectorAll('.slider-img');

        function updateImageSources() {
            const width = window.innerWidth;

            sliderImages.forEach(img => {
                if (width < 768) {
                    // Mobile
                    img.src = img.getAttribute('data-mobile');
                } else if (width < 1024) {
                    // Tablet
                    img.src = img.getAttribute('data-tablet');
                } else {
                    // Desktop
                    img.src = img.getAttribute('data-desktop');
                }
            });
        }

        window.addEventListener('resize', updateImageSources);
        updateImageSources(); // Initial call on page load
    });
</script>