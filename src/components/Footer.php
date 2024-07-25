    </div>
  </main>

  <!-- <script type="module" src="./src/main.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper_thumbs = new Swiper(".nav-for-slider", {
      loop: true,
      spaceBetween: 30,
      slidesPerView: 5,
    });
    var swiper = new Swiper(".main-slide-carousel", {
      slidesPerView: 1,
      thumbs: {
        swiper: swiper_thumbs,
      },
    });
  </script>
</body>
</html>