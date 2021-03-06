// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ExampleSite = {
  // All pages
  common: {
    init: function() {
      $( ".species-collection li a" ).click(function(event) {
        event.preventDefault();
        $( this ).siblings("article").slideToggle('fast');
        $( this ).find(".glyphicon").toggleClass("glyphicon-chevron-down");
        $( this ).find(".glyphicon").toggleClass("glyphicon-chevron-right");

        return false;
      });

      $( ".species-collection article h2" ).click(function(event) {
        event.preventDefault();
        $( this ).parents("article").slideToggle('fast');
        $( this ).parents("li").find("a .glyphicon").toggleClass("glyphicon-chevron-down");
        $( this ).parents("li").find("a .glyphicon").toggleClass("glyphicon-chevron-right");

        return false;
      });
    },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {

    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ExampleSite;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);
