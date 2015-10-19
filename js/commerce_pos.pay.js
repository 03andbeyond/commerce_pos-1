(function ($) {
  Drupal.behaviors.commercePosSalePay = {
    attach: function (context, settings) {
      $('.commerce-pos-keypad-key', context).each(function () {
        // Bind click events to the keypad keys so that pressing them populates
        // the amount field with the respective value.
        var self = $(this);
        self.once('commerce-pos-key', function () {
          self.data('commerce-pos-keybind-amount', $('.commerce-pos-keypad-amount input', context));
          self.click(function () {
            var self = $(this);
            var inputs = self.data('commerce-pos-keybind-amount');
            var key = self.attr('data-keybind');

            inputs.each(function () {
              var self = $(this);
              var currentValue = self.val();

              if (key != "") {
                self.val(currentValue + key);
              }
              else {
                var valLength = currentValue.length;

                if (valLength > 0) {
                  // An empty key represents a backspace press instead.
                  self.val(currentValue.substr(0, valLength - 1));
                }
              }
            });
          });
        });
      });
    }
  };
} (jQuery));
