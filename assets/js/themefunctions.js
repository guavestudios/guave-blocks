var themeFunctions;

function themeFunctions() {
  var self = this;

  this.init = function () {
    self.guaveBlocks();
  };


  /*
   *
   * Initialize ipsumCollection
   *
   * */
  this.guaveBlocks = function() {
    jQuery('.shownavigation').click( function() {
      jQuery('.fixedheader').slideToggle();
    });

    jQuery('.hidenavigation').click( function() {
      jQuery('.fixedheader').slideUp();
    })
  };
}

jQuery(document).ready(function () {
  themeFunctions = new themeFunctions();
  themeFunctions.init();
});
