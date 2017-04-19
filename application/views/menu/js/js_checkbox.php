<!-- Datatables -->
<script src="<?php echo (js.'datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo (js.'datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>

<script type="text/javascript">
   
$(document).ready(function (){
   // Array holding selected row IDs
   var cc = $("#class_code").val();
   var sc = $("#supplier_code").val();
   var df = $("#datefrom").val();
   var dt = $("#dateto").val();
   var fpd = $("#fpd").val();
   var obt = $("input[name=objek]").val();

   console.log(cc);
   console.log(sc);
   console.log(df);
   console.log(dt);
   console.log(fpd);
   console.log(obt);

   /*var url = "http://garnet:8084/MINIPROJECT2/prepayment.json/"+c_code+"/"+date1+"/"+date2+"/"+deal_code+"/"+fpd+"/"+objt_type;
    console.log(deal_code);
    console.log(objt_type);
    console.log(url);*/


   var rows_selected = [];
   var table = $('#example').DataTable({
      ajax:{
         url: 'http://garnet:8084/MINIPROJECT2/prepayment.json/'+cc+"/"+df+"/"+dt+"/"+sc+"/"+fpd+"/"+obt,
         dataSrc: '',
      },
      columns:[
         {data: null},
         {data: null},
         {data: 'contract_NO'},
         {data: 'cust_NAME'},
         {data: 'address'},
         {data: 'principal_AMOUNT'}
      ],
      'columnDefs': [{
         'targets': 0,
         'searchable':false,
         'orderable':false,
         'width':'1%',
         'className': 'dt-body-center',
         'render': function (data, type, full, meta){
             return '<input type="checkbox">';
         }
      }],
      'order': [1, 'asc']/*,
      'rowCallback': function(row, data, dataIndex){
         // Get row ID
         var rowId = data[4];

         // If row ID is in the list of selected row IDs
         if($.inArray(rowId, rows_selected) !== -1){
            $(row).find('input[type="checkbox"]').prop('checked', true);
            $(row).addClass('selected');
         }
      }*/
   });
   table.on( 'order.dt search.dt', function () {
        table.column(1, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
   var tot = 0;
   // Handle click on checkbox
   $('#example tbody').on('click', 'input[type="checkbox"]', function(e){
      var $row = $(this).closest('tr');

      // Get row data
      var data = table.row($row).data();

      //console.log(data.age);

      if(this.checked){
         $row.addClass('selected');
         tot += parseInt(data.principal_AMOUNT);
         //console.log(data[4]);
      } else {
         $row.removeClass('selected');
         tot -= parseInt(data.principal_AMOUNT);
      }
         $('#total').val(tot);

      // Prevent click event from propagating to parent
      e.stopPropagation();
   });

   // Handle click on table cells with checkboxes
   $('#example').on('click', 'tbody td, thead th:first-child', function(e){
      $(this).parent().find('input[type="checkbox"]').trigger('click');
   });

   // Handle click on "Select all" control
   $('thead input[name="select_all"]', table.table().container()).on('click', function(e){
      if(this.checked){
         $('#example tbody input[type="checkbox"]:not(:checked)').trigger('click');
      } else {
         $('#example tbody input[type="checkbox"]:checked').trigger('click');
      }

      // Prevent click event from propagating to parent
      e.stopPropagation();
   });
});
</script>
</body>
<!-- END BODY -->
</html>