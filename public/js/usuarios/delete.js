$(document).ready(function(){
  $('.btn-delete').click(function(e){
    e.preventDefault();
    var fila = $(this).parents('tr');
    var id = fila.attr('id');
    var form = $('#form-delete');
    var url = form.attr('action').replace('ID_USER',id);
    //alert(url);
    var data = form.serialize();
    bootbox.confirm('¿Estas seguro?', function(res){
      if (res == true) {
        $('#delete-progress').removeClass('hidden');
        $.post(url, data, function(result){
          $('#delete-progress').addClass('hidden');
          fila.fadeOut();
          $('#message').removeClass('hidden');
          $('#user-message').text(result.message);
        }).fail(function(){
          alert('ERROR');
          fila.show();
        });
      }
    });
  });
});
