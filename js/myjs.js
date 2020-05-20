$(function(){
  $('#modalmenu').hide();
  $('#exampleModal').on('show.bs.modal', function (event) {
   
  });
  var opt = {
    hide_select: false,
  };
  
  $('select').imagepicker(opt);
})