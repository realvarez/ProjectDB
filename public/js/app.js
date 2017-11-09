// function mostrarComunas($idRegion){
// 	return Comuna::where('region_id', $idRegion)->orderBy('nombre')->lists('nombre', 'id');
// }
// $("#regionDropdown").change(function () {
// 	$.ajax({
//     url: '/register',
//     type: 'GET',
//     dataType: 'json',
//     data: {id : $(#regionDropdown).find(':selected').val()},

//     success: function (rta) {
//       var val = mostrarComunas(id);

//       $('#comunaDropdown').empty();
//       $('#comunaDropdown').append("<option value='' disabled selected style='display:none;'>Seleccione una comuna</option>");
//       $.each(val, function (index, value) {
//           $('#comunaDropdown').append("<option value='" + index + "'>" + value + "</option>");
//       });
//     };
// 	 });
// });

<script type="text/javascript">
  $("select[name='region']").change(function(){
      var id_country = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo route('/register') ?>",
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='comuna'").html('');
            $("select[name='comuna'").html(data.options);
          }
      });
  });
</script>