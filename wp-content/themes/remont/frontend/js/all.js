var Sc;

Sc = {
  resize: function() {},
  scroll: function() {
    if (Sc.Win.scrollTop() > 30) {
      jQuery('#head').addClass('bgc-color');
    } else {
      jQuery('#head').removeClass('bgc-color');
    }
    if (Sc.Win.scrollTop() > Sc.Win__h) {
      return jQuery('._back-to-top').addClass('show');
    } else {
      return jQuery('._back-to-top').removeClass('show');
    }
  },
  initPerfectScrollBar: function() {
    var r;
    r = jQuery('._roller');
    return jQuery.each(r, function() {
      var t;
      t = jQuery(this);
      if (Sc.Win.width() < 760) {
        return t.stopPropagation();
      } else {
        return t.perfectScrollbar();
      }
    });
  },
  init: function() {
    var cCheckbox, chParent, chSubmit, sliceTxt;
    Sc.Win = jQuery(window);
    Sc.Body = jQuery('html, body');
    Sc.Win__h = Sc.Win.outerHeight();
    Sc.initPerfectScrollBar();
    //open popoup
    jQuery('._open-popup').click(function() {
      var lp, p, t;
      t = jQuery(this);
      lp = t.attr('data-link-to-popup');
      jQuery('._popup-box').addClass('show');
      p = jQuery('._popup-box').find('._popup-item[data-popup=' + lp + ']');
      p.addClass('show');
      return jQuery('html, body').addClass('ov-hidden');
    });
    jQuery('._popup-cls').click(function() {
      jQuery('._popup-box, ._popup-item').removeClass('show');
      return jQuery('html, body').removeClass('ov-hidden');
    });
    //open submenu
    jQuery('._nav-angel-open-submenu').click(function() {
      var p, sub, t;
      t = $(this);
      p = t.closest('._nav-menu-parent');
      sub = p.find('._sub-nav-menu');
      if (p.hasClass('open')) {
        sub.slideUp(300);
        return p.removeClass('open');
      } else {
        sub.slideDown(300);
        return p.addClass('open');
      }
    });
    //select
    jQuery('._select:not(.inited)').addClass('inited').click(function() {
      var a;
      a = jQuery(this);
      a.toggleClass('open');
      jQuery('*').click(function(e) {
        var div;
        div = a;
        if (!div.is(e.target) && div.has(e.target).length === 0) {
          return div.removeClass('open');
        }
      });
      return a.find('._option').click(function() {
        var f, t;
        t = jQuery(this).text();
        f = jQuery(this).closest('._select').find('._i');
        if (f.is('div')) {
          return f.text(t);
        } else if (f.is('input')) {
          return f.val(t);
        }
      });
    });
    //owl reviews
    jQuery('._owl-reviews').owlCarousel({
      loop: true,
      nav: true,
      margin: 20,
      dots: false,
      slideBy: 1,
      autoplay: false,
      smartSpeed: 1000,
      autoplayTimeout: 5000,
      autoHeight: false,
      navText: ['<svg width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M17 3.5C17.2761 3.5 17.5 3.72386 17.5 4C17.5 4.27614 17.2761 4.5 17 4.5L17 3.5ZM0.646446 4.35355C0.451183 4.15829 0.451183 3.84171 0.646446 3.64645L3.82843 0.464467C4.02369 0.269205 4.34027 0.269205 4.53553 0.464467C4.7308 0.659729 4.7308 0.976312 4.53553 1.17157L1.70711 4L4.53553 6.82843C4.7308 7.02369 4.7308 7.34027 4.53553 7.53553C4.34027 7.7308 4.02369 7.7308 3.82843 7.53554L0.646446 4.35355ZM17 4.5L1 4.5L1 3.5L17 3.5L17 4.5Z" fill="white"/> </svg>', '<svg width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5L1 3.5ZM17.3536 4.35355C17.5488 4.15829 17.5488 3.84171 17.3536 3.64645L14.1716 0.464467C13.9763 0.269205 13.6597 0.269205 13.4645 0.464467C13.2692 0.659729 13.2692 0.976312 13.4645 1.17157L16.2929 4L13.4645 6.82843C13.2692 7.02369 13.2692 7.34027 13.4645 7.53553C13.6597 7.7308 13.9763 7.7308 14.1716 7.53554L17.3536 4.35355ZM1 4.5L17 4.5L17 3.5L1 3.5L1 4.5Z" fill="white"/> </svg>'],
      responsive: {
        0: {
          autoWidth: false,
          items: 1
        },
        768: {
          autoWidth: true,
          items: 1
        },
        961: {
          autoWidth: false,
          items: 2
        }
      }
    });
    //owl gallery
    jQuery('._owl-gallery').owlCarousel({
      loop: true,
      nav: true,
      margin: 20,
      dots: false,
      slideBy: 1,
      autoplay: false,
      smartSpeed: 1000,
      autoplayTimeout: 5000,
      autoHeight: false,
      navText: ['<svg width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M17 3.5C17.2761 3.5 17.5 3.72386 17.5 4C17.5 4.27614 17.2761 4.5 17 4.5L17 3.5ZM0.646446 4.35355C0.451183 4.15829 0.451183 3.84171 0.646446 3.64645L3.82843 0.464467C4.02369 0.269205 4.34027 0.269205 4.53553 0.464467C4.7308 0.659729 4.7308 0.976312 4.53553 1.17157L1.70711 4L4.53553 6.82843C4.7308 7.02369 4.7308 7.34027 4.53553 7.53553C4.34027 7.7308 4.02369 7.7308 3.82843 7.53554L0.646446 4.35355ZM17 4.5L1 4.5L1 3.5L17 3.5L17 4.5Z" fill="white"/> </svg>', '<svg width="18" height="8" viewBox="0 0 18 8" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1 3.5C0.723858 3.5 0.5 3.72386 0.5 4C0.5 4.27614 0.723858 4.5 1 4.5L1 3.5ZM17.3536 4.35355C17.5488 4.15829 17.5488 3.84171 17.3536 3.64645L14.1716 0.464467C13.9763 0.269205 13.6597 0.269205 13.4645 0.464467C13.2692 0.659729 13.2692 0.976312 13.4645 1.17157L16.2929 4L13.4645 6.82843C13.2692 7.02369 13.2692 7.34027 13.4645 7.53553C13.6597 7.7308 13.9763 7.7308 14.1716 7.53554L17.3536 4.35355ZM1 4.5L17 4.5L17 3.5L1 3.5L1 4.5Z" fill="white"/> </svg>'],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        961: {
          items: 3
        }
      }
    });
    
    //slice text
    sliceTxt = jQuery('._slice-txt');
    jQuery.each(sliceTxt, function() {
      var Width, n, p, t, tLength, tRes, txt;
      t = jQuery(this);
      p = t.closest('._slice-txt--parent');
      n = p.find('._slice-txt--nav');
      txt = t.text().length;
      Width = jQuery('body, html').width();
      tLength = t.attr('data-slice-txt');
      if (Width < 1153) {
        tLength = tLength - 60;
      }
      if (txt > tLength) {
        tRes = t.text().slice(0, tLength);
        return t.text(tRes + '...');
      } else {
        if (t.hasClass('_slice-txt--mode')) {
          return n.hide();
        }
      }
    });
    //faq
    jQuery('._faq-head:not(.inited)').addClass('inited').click(function() {
      var b, h, i, l;
      h = jQuery(this);
      i = h.closest('._faq-item');
      b = i.find('._faq-body');
      l = h.closest('._faq-list');
      if (i.hasClass('selected')) {
        i.removeClass('selected');
        b.slideUp('300');
      } else {
        i.addClass('selected');
        b.slideDown('300');
      }
      l.find('._faq-item').not(i).removeClass('selected');
      l.find('._faq-body').not(b).slideUp('300');
      return setTimeout((function() {
        var dest, elC, hh;
        elC = h.attr('data-href');
        hh = jQuery('.header').outerHeight();
        dest = jQuery(elC).offset().top - hh - 10;
        jQuery('body,html').animate({
          scrollTop: dest
        }, 300);
      }), 500);
    });
    //animate scroll    
    jQuery('._scroll-animate').click(function() {
      var destination, elementClick, h;
      elementClick = jQuery(this).attr('href');
      h = jQuery('.header').outerHeight();
      if (jQuery(this).hasClass('_scroll-type-2')) {
        destination = jQuery(elementClick).offset().top - h;
      } else {
        destination = jQuery(elementClick).offset().top;
      }
      return jQuery('body,html').animate({
        scrollTop: destination
      }, 300);
    });
    //scroll to top
    jQuery('._back-to-top').click(function() {
      return jQuery('body,html').animate({
        scrollTop: 0
      }, 300);
    });
    //check form
    cCheckbox = jQuery('._check-checkbox');
    chParent = cCheckbox.closest('._check-parent');
    chSubmit = chParent.find('._check-submit');
    if (cCheckbox.is(":checked")) {
      chSubmit.removeClass('disabled');
    } else {
      chSubmit.addClass('disabled');
    }
    cCheckbox.click(function() {
      if (cCheckbox.is(":checked")) {
        return chSubmit.removeClass('disabled');
      } else {
        return chSubmit.addClass('disabled');
      }
    });
    //main menu open/close
    jQuery('._main-menu--btn').click(function() {
      var btn, menu, obj, parent;
      btn = jQuery(this);
      parent = btn.closest('._main-menu--parent');
      obj = parent.find('._main-menu--obj');
      menu = parent.find('._main-menu--menu');
      if (btn.hasClass('active')) {
        btn.removeClass('active');
        obj.removeClass('active');
        Sc.Body.removeClass('ov-hidden');
      } else {
        btn.addClass('active');
        obj.addClass('active');
        Sc.Body.addClass('ov-hidden');
      }
      return menu.find('a').click(function() {
        btn.removeClass('active');
        obj.removeClass('active');
        return Sc.Body.removeClass('ov-hidden');
      });
    });
    Sc.scroll();
    Sc.Win.scroll(function() {
      return Sc.scroll();
    });
    Sc.scroll();
    jQuery("._i__mask").mask("+7 (999) 999-99-99");
    Sc.Win.resize(function() {
      return Sc.resize();
    });
    return Sc.resize();
  }
};

jQuery(window).ready(function() {
  return Sc.init();
});

jQuery(window).scroll(function() {
  return Sc.scroll();
});
