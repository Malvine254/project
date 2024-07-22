$(document).ready(function(){
  var siteSticky = function() {
    console.log("Initializing sticky header");
    if ($.fn.sticky) {
      $(".js-sticky-header").sticky({ topSpacing: 0 });
    } else {
      console.error("Sticky plugin not found");
    }
  };
  siteSticky();

  var siteMenuClone = function() {
    console.log("Cloning menu");
    $('.js-clone-nav').each(function() {
      var $this = $(this);
      $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
    });

    var counter = 0;
    $('.site-mobile-menu .has-children').each(function() {
      var $this = $(this);
      $this.prepend('<span class="arrow-collapse collapsed">');

      $this.find('.arrow-collapse').attr({
        'data-toggle': 'collapse',
        'data-target': '#collapseItem' + counter,
      });

      $this.find('> ul').attr({
        'class': 'collapse',
        'id': 'collapseItem' + counter,
      });

      counter++;
    });

    $('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      console.log("Arrow collapse clicked");
      if ($this.closest('li').find('.collapse').hasClass('show')) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();
    });

    $(window).resize(function() {
      var $this = $(this),
        w = $this.width();

      if (w > 768) {
        if ($('body').hasClass('offcanvas-menu')) {
          $('body').removeClass('offcanvas-menu');
        }
      }
    });

    $('body').on('click', '.js-menu-toggle', function(e) {
      var $this = $(this);
      e.preventDefault();

      if ($('body').hasClass('offcanvas-menu')) {
        $('body').removeClass('offcanvas-menu');
        $this.removeClass('active');
      } else {
        $('body').addClass('offcanvas-menu');
        $this.addClass('active');
      }
    });

    $(document).mouseup(function(e) {
      var container = $(".site-mobile-menu");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('offcanvas-menu')) {
          $('body').removeClass('offcanvas-menu');
        }
      }
    });
  };
  siteMenuClone();
});

$(document).ready(function() {
var $customSearchModal = $('#customSearchModal');

$('#openSearchModal').on('click', function(e) {
  e.preventDefault();
  $customSearchModal.show();
});

$('#closeSearchModal, #closeSearchModalFooter').on('click', function() {
  $customSearchModal.hide();
});

$(window).on('click', function(event) {
  if ($(event.target).is($customSearchModal)) {
    $customSearchModal.hide();
  }
});
});
