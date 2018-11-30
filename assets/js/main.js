$('#vehicle-brand option[data-type!="car"]').not().toggle();
$('#vehicle-brand').val('');
$('#vehicle-type').change(function()
{
  $('#vehicle-brand').val('');

  $('option#choose:visible').toggle();
  $('option[data-type]:visible').toggle();

  let type = $(this).val();
    
  $('option[data-type='+type+']').toggle();
});
