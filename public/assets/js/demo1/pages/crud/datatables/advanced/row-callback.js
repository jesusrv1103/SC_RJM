"use strict";
var KTDatatablesAdvancedColumnVisibility = function() {

	var initTable1 = function() {
		var table = $('#kt_table_1');

		var table2 = $('#kt-listado-general');

		// begin first table
		table.DataTable({
			responsive: true,
			createdRow: function(row, data, index) {
				var cell = $('td', row).eq(6);
				
			},
		});

		table2.DataTable({
			responsive: true,
			createdRow: function(row, data, index) {
				var cell = $('td', row).eq(7);
				
			},
		});
	};

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesAdvancedColumnVisibility.init();
});