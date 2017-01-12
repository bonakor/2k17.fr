/* jshint ignore:start */
/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        /*SDK FB*/
        window.fbAsyncInit = function() {
    FB.init({
      appId      : '431371877251584',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/fr_FR/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
        /* TYPEKIT */
        (function(d) {
        var config = {
          kitId: 'qwl5oio',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
/* SLIDEOUT MENU*/
var slideout = new Slideout({
     'panel': document.getElementById('panel'),
     'menu': document.getElementById('menu'),
     'padding': 256,
     'tolerance': 70
   });
   var fixed = document.querySelector('.fixed-header');

slideout.on('translate', function(translated) {
fixed.style.transform = 'translateX(' + translated + 'px)';
});

slideout.on('beforeopen', function () {
fixed.style.transition = 'transform 300ms ease-in';
fixed.style.transform = 'translateX(256px)';
});

slideout.on('beforeclose', function () {
fixed.style.transition = 'transform 300ms ease-in';
fixed.style.transform = 'translateX(0px)';
});

slideout.on('open', function () {
fixed.style.transition = '';
});

slideout.on('close', function () {
fixed.style.transition = '';
});


   // Toggle button
   document.querySelector('.toggle-button').addEventListener('click', function() {
     slideout.toggle();
   });
   function close(eve) {
eve.preventDefault();
slideout.close();
}

slideout
.on('beforeopen', function() {
this.panel.classList.add('panel-open');
})
.on('open', function() {
this.panel.addEventListener('click', close);
})
.on('beforeclose', function() {
this.panel.classList.remove('panel-open');
this.panel.removeEventListener('click', close);
});
/*copy to clipboard*/
new Clipboard('.copylink');
/*COOKIE CONSENT*/
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#7647f9",
      "text": "#ffffff"
    },
    "button": {
      "background": "#3bffbe",
      "text": "#140a23"
    }
  },
  "theme": "edgeless",
  "position": "top",
  "static": true,
  "content": {
    "message": "2K17 utilise des cookies pour personnaliser ton expérience.",
    "dismiss": "OK !",
    "link": "En savoir plus",
    "href": "/mentions-legales/"
  }
});
/*cookie consent with navbar*/
function pushDown(height) {
  var navbar = document.getElementsByClassName(".banner .container")[0];
  navbar.style.transition = 'all 1s';
  navbar.style.marginTop = height+'px';
}
/*END*/
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
/*SDK Twitter */

      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
        $(".carousel").swipe({

          swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

            if (direction === 'left') $(this).carousel('next');
            if (direction === 'right') $(this).carousel('prev');

          },
          allowPageScroll: "vertical"

        });
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
