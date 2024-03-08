function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  $(document).ready(function () {
    $(window).on("scroll", function () {
      $(".counter").each(function () {
        if (isElementInViewport(this)) {
          $(this).prop("Counter", 0).animate(
            {
              Counter: $(this).attr("data-target")
            },
            {
              duration: 2000,
              easing: "linear",
              step: function (now) {
                $(this).text(Math.ceil(now));
              }
            }
          );
        }
      });
    });

    // Initial check for counters on page load
    $(window).trigger("scroll");
  });