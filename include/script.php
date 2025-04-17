<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


<script>
    // Button Hover Effect
    $('.btnHover').on('mouseenter', function (e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('.btnHover_effect').css({
            top: relY,
            left: relX
        })
    })
        .on('mouseout', function (e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('.btnHover_effect').css({
                top: relY,
                left: relX
            })
        });

    $(window).scroll(function (e) {
        if ($(window).scrollTop() > 20) {
            $('.header').addClass('header-light')
        } else {
            $('.header').removeClass('header-light')
        }
    })

    $('.navbar-toggler').click(function () {
        $('.header').addClass('header-light')
    })

    $('.header .dropdown .dropdown-menu').click(function (e) {
        e.stopPropagation()
    })

    document.addEventListener('DOMContentLoaded', function () {
        const flagDropdown = document.querySelector('.flagDropdown');
        const selectedFlag = document.getElementById('selected-flag');

        if (flagDropdown && selectedFlag) {
            flagDropdown.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const flagCode = this.getAttribute('data-flag');
                    const flagImg = this.querySelector('img').src;
                    selectedFlag.querySelector('img').src = flagImg;

                    // Here you can add additional logic for language switching
                    // For example, setting a cookie or calling an API
                });
            });
        }
    });

    // Data Connectors Sliders
    const dataConnectorsSwiper = new Swiper(".dataConnectorsSwiper", {
        slidesPerView: 6,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        speed: 3000,
        allowTouchMove: false,
        breakpoints: {
            320: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 5,
            },
            1200: {
                slidesPerView: 6,
            }
        }
    });

    const dataConnectorsSwiper2 = new Swiper(".dataConnectorsSwiper2", {
        slidesPerView: 6,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            reverseDirection: true // This makes it go in opposite direction
        },
        speed: 3000,
        allowTouchMove: false,
        breakpoints: {
            320: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 5,
            },
            1200: {
                slidesPerView: 6,
            }
        }
    });

    // Pause on hover for both sliders
    $('.dataConnectorsSwiper, .dataConnectorsSwiper2').hover(
        function () {
            const swiper = this.classList.contains('dataConnectorsSwiper') ?
                dataConnectorsSwiper : dataConnectorsSwiper2;
            swiper.autoplay.stop();
        },
        function () {
            const swiper = this.classList.contains('dataConnectorsSwiper') ?
                dataConnectorsSwiper : dataConnectorsSwiper2;
            swiper.autoplay.start();
        }
    );

    document.addEventListener("DOMContentLoaded", function () {
        const scrollBtn = document.getElementById("scrollBtn");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 100) {
                scrollBtn.style.display = "flex";
            } else {
                scrollBtn.style.display = "none";
            }
        });
    });

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }
</script>