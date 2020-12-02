<script type="text/javascript">
  
$(document).ready(function(){

  var table = $('#table').dataTable( {
    // "responsive": true,
    // "scrollX": true,
    "ordering":true,
    "order": [[ 1, "asc" ]],
    "oLanguage": {
      "sLengthMenu": "Mostrar _MENU_ registros",
      "sInfo": "Exibindo: _START_ ao _END_ de _TOTAL_ registros.",
      "sSearch": "Pesquisar",
      "oPaginate": {
        "sFirst": "Início", // This is the link to the first page
        "sPrevious": "Anterior", // This is the link to the previous page
        "sNext": "Próxima", // This is the link to the next page
        "sLast": "Última" // This is the link to the last page
      }
    }
  });

});
</script>