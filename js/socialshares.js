// This is lifted from the FP Drupal JS stack as it's a dependency for the identity and livefyre scripts.

var socialshares = (function($){

  /**
   * Helpers
   *
   * `toString` does not implement a `call` method natively
   * in IE
   */

  var toString = ({}).toString;

  /**
   * Very simple templating function
   */

  var template = (function(){

    /**
     * Constants
     */

    var NO_MATCH = '';

    /**
     * Simple string replacement token (e.g., {{ url }})
     */

    var token = /\{\{ *(\w+) *\}\}/g;

    /**
     * Return a function that can obtain a template using jQ
     * selectors
     */

    return function(HTMLString){

      /**
       * First obtain the template and get its HTML
       *
       * Note: `$.trim` must be called to avoid a newline
       * error when creating a jQ object from an HTML
       * string
       */

      HTMLString = $.trim(HTMLString);

      /**
       * Simple helper function for string replacement
       */

      var interpolate = function(values) {

        /**
         * E.g., match = {{url}}, submatch = url
         */

        return HTMLString.replace(token, function(match, submatch){

          return (submatch in values ? values[submatch] : NO_MATCH);

        });

      };

      /**
       * Return a function that can perform simple string
       * replacement
       *
       * If an array is provided, it assumed it is an array
       * of objects using the same template
       */

      return function(values){

        var buffer, index, length;

        if ('[object Array]' !== toString.call(values)) {

          return interpolate(values);

        }

        buffer = '';

        index  = 0;

        length = values.length;

        while (index < length) {

          buffer += interpolate(values[index++]);

        }

        return buffer;

      }

    };

  })();


  /**
   * Simple sharing function
   *
   * Useful for directly embedding into the
   * `onclick` attribute
   */

  var share = (function(){

    /**
     * Just a shorthand alias
     */

    var esc = encodeURIComponent;

    /**
     * Predefined share URLs
     *
     * Uses the templating utility function
     * for string replacement
     */

    var redirectUri;
    if (window.fpUtilsLoc && window.fpUtilsLoc.redirectUri) {
      redirectUri = window.fpUtilsLoc.redirectUri;
    } else {
      redirectUri = 'https://foreignpolicy.com/share_redirect/';
    }

    var endpoints = {

      twitter      : template('https://twitter.com/intent/tweet?text={{text}}&url={{url}}'),
      facebook     : template('https://www.facebook.com/dialog/share?app_id=107151292643652&display=popup&href={{url}}&redirect_uri=' + esc(redirectUri)),
      google       : template('https://plus.google.com/share?url={{url}}'),
      'google-plus': template('https://plus.google.com/share?url={{url}}'),
      //~ NOTE: https://developer.linkedin.com/docs/share-on-linkedin
      linkedin     : template('https://www.linkedin.com/shareArticle?url={{url}}&mini=true&title={{title}}&summary={{text}}'),
      reddit       : template('http://www.reddit.com/submit?url={{url}}')

    };

    /**
     * Actual sharing function
     *
     * Opens a new window. Expects to be passed the
     * context of the sharing (i.e., `this`) so it
     * can obtain some `data-` values
     */

    return function(context){

      context = $(context);

      var endpoint = endpoints[context.data('endpoint')];

      if (!endpoint) return;

      var url = $.trim(context.data('url')) || 'http://europeslamsitsgates.foreignpolicy.com';

      //~ The updated Facebook share API seems to require https to match the
      //~ og:url, which is https
      //
      //~ Similar logic for testing LinkedIn shares...
      if ('facebook' === context.data('endpoint') || 'linkedin' === context.data('endpoint')) {
        url = url.replace('http://', 'https://');
        if (window.fpUtilsLoc && window.fpUtilsLoc.isDev) {
          url = url.replace(/\/\/(dev|sandbox|stg\d{2})\./, '//');
        }
      }

      var data = {

        title : esc(context.data('title') || 'Foreign Policy'),
        text  : esc(context.data('text')  || context.data('title') || 'Check this story out at ForeignPolicy.com!'),
        url   : esc(url)

      };

      window.open(endpoint(data), 'Share', 'toolbar=0, status=0, width=900, height=500');

    };

  })();

  return {

    template          : template,
    share             : share

  };

})(jQuery);
