(function($, api){
    "use strict";

	api.controlConstructor['soledad-fw-radio-image'] = api.controlConstructor.default.extend({
		ready: function() {
			var control = this;

			// Change the value
			this.container.on( 'click', 'input', function() {
				control.setting.set( jQuery( this ).val() );
			});
		}
	});
})(jQuery, wp.customize);
