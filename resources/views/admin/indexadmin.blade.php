<!doctype html>
<html lang="pt-pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link href="{{asset('images/admin/logo.png')}}" rel="icon">

    <title>Administração</title>
  </head>
  <body>

      @include('admin.incs.menu')
        <br>
        @yield('conteudo') 
    
    <script src="https://kit.fontawesome.com/397dd051b1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
          var activeSystemClass = $('.list-group-item.active');
      
          $('#system-search').keyup( function() {
             var that = this;
              var tableBody = $('.table-list-search tbody');
              var tableRowsClass = $('.table-list-search tbody tr');
              $('.search-sf').remove();
              tableRowsClass.each( function(i, val) {
              
                  var rowText = $(val).text().toLowerCase();
                  var inputText = $(that).val().toLowerCase();
                  if(inputText != '')
                  {
                      $('.search-query-sf').remove();
                      tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>A procurar por:"'
                          + $(that).val()
                          + '"</strong></td></tr>');
                  }
                  else
                  {
                      $('.search-query-sf').remove();
                  }
      
                  if( rowText.indexOf( inputText ) == -1 )
                  {
                      tableRowsClass.eq(i).hide();
                  }
                  else
                  {
                  
                  if(rowText == "Eliminar"){
                          tableRowsClass.eq(i).hide();
                      }else{
                      $('.search-sf').remove();
                      tableRowsClass.eq(i).show();}
                  }
              });
              if(tableRowsClass.children(':visible').length == 0)
              {
                  tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">Nada foi encontrado, caso queira criar <a href="/marcas/criar" class="btn">Criar Marca</a></tr>');
              }
          });
      });
      </script>
  </body>
</html>