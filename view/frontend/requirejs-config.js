var config = {
	map: {
		'*': {
			'dckap/contactform': 'DCKAP_Contactform/js/dc_form',
		},
	},
	paths: {
		'dckap/contactform': 'DCKAP_Contactform/js/dc_form',
	},
	shim: {
		'dckap/contactform': {
			deps: ['jquery']
		},
	}
};
require(['dckap/contactform'],function($){
	

});
