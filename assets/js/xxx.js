var TableUser = function () {

    var initTable1 = function ()
  {
      var table = $('#supplier');

      table.dataTable({

          // Internationalisation. For more info refer to http://datatables.net/manual/i18n
          "language": {
              "aria": {
                  "sortAscending": ": activate to sort column ascending",
                  "sortDescending": ": activate to sort column descending"
              },
              "emptyTable": "Maaf, tidak ada data pada tabel",
              "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
              "infoEmpty": "Tidak ada data ditemukan",
              "infoFiltered": "(disaring dari _MAX_ data)",
              "lengthMenu": "Tampilkan _MENU_ entri",
              "paging": {
                  "previous": "Prev",
                  "next": "Next"
              },
              "search": "Cari:",
              "zeroRecords": "Tidak ada data ditemukan"
          },

          // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
          // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
          // So when dropdowns used the scrollable div should be removed.
          //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

          //"bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

          "lengthMenu": [
              [5, 15, 20, -1],
              [5, 15, 20, "All"] // change per page values here
          ],
          // set the initial value
          "pageLength": 5,
          "aaSorting": [[ 0, "asc" ]] // set first column as a default sort by asc
      });
    }

      var initTable2 = function ()
      {
          var table = $('#distributor');

          table.dataTable({

              // Internationalisation. For more info refer to http://datatables.net/manual/i18n
              "language": {
                  "aria": {
                      "sortAscending": ": activate to sort column ascending",
                      "sortDescending": ": activate to sort column descending"
                  },
                  "emptyTable": "Maaf, tidak ada data pada tabel",
                  "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                  "infoEmpty": "Tidak ada data ditemukan",
                  "infoFiltered": "(disaring dari _MAX_ data)",
                  "lengthMenu": "Tampilkan _MENU_ entri",
                  "paging": {
                      "previous": "Prev",
                      "next": "Next"
                  },
                  "search": "Cari:",
                  "zeroRecords": "Tidak ada data ditemukan"
              },

              // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
              // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
              // So when dropdowns used the scrollable div should be removed.
              //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

              //"bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

              "lengthMenu": [
              [5, 15, 20, -1],
              [5, 15, 20, "All"] // change per page values here
          ],
          // set the initial value
          "pageLength": 5,
          "aaSorting": [[ 0, "asc" ]] // set first column as a default sort by asc
          });

          var tableWrapper = jQuery('#distributor_wrapper');

          table.find('.group-checkable').change(function () {
              var set = jQuery(this).attr("data-set");
              var checked = jQuery(this).is(":checked");
              jQuery(set).each(function () {
                  if (checked) {
                      $(this).attr("checked", true);
                  } else {
                      $(this).attr("checked", false);
                  }
              });
              jQuery.uniform.update(set);
          });

          tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown*/
        }

        var initTable3 = function ()
        {
            var table = $('#customer');

            table.dataTable({

                // Internationalisation. For more info refer to http://datatables.net/manual/i18n
                "language": {
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    },
                    "emptyTable": "Maaf, tidak ada data pada tabel",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "infoEmpty": "Tidak ada data ditemukan",
                    "infoFiltered": "(disaring dari _MAX_ data)",
                    "lengthMenu": "Tampilkan _MENU_ entri",
                    "paging": {
                        "previous": "Prev",
                        "next": "Next"
                    },
                    "search": "Cari:",
                    "zeroRecords": "Tidak ada data ditemukan"
                },

                // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
                // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js).
                // So when dropdowns used the scrollable div should be removed.
                //"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",

                //"bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.

                "lengthMenu": [
              [5, 15, 20, -1],
              [5, 15, 20, "All"] // change per page values here
          ],
          // set the initial value
          "pageLength": 5,
          "aaSorting": [[ 0, "asc" ]] // set first column as a default sort by asc
                //"bStateSave": true // save datatable state(pagination, sort, etc) in cookie.
                        //"bDestroy": true
            });

            var tableWrapper = jQuery('#customer_wrapper');

            table.find('.group-checkable').change(function () {
                var set = jQuery(this).attr("data-set");
                var checked = jQuery(this).is(":checked");
                jQuery(set).each(function () {
                    if (checked) {
                        $(this).attr("checked", true);
                    } else {
                        $(this).attr("checked", false);
                    }
                });
                jQuery.uniform.update(set);
            });

            tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown*/
          }

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            console.log('me 1');
            initTable1();
            initTable2();
            initTable3();

            console.log('me 2');
        }

    };

}();
