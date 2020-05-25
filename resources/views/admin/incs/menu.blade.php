
<div class="w3-sidebar w3-bar-block menu" style="display:none" id="mySidebar">
    <div class="topMenu">
  <button onclick="w3_close()" class="ButtonMenu w3-xlarge topMenu"><i class="fas fa-arrow-left"></i></button>
    </div>
    <br>
    <img src="{{asset('images/admin/logobranco.png')}}" class="center" alt="logo" style="heigh:80%;width:80%;display:block;margin-left:auto;margin-right:auto;margin-bottom:15%">
    <br>
    <a class="ButtonCollapse" data-toggle="collapse" href="#collapseAdicionar" role="button" aria-expanded="false" aria-controls="collapseExample">
      <i class="fas fa-comment-alt"></i>  Adicionar
    </a>

    <div class="collapse " id="collapseAdicionar">
      <a href="/marcas" id="IndiButtons"><i class="fas fa-building" style="margin-left: 15%"></i> Marcas</a>
      <a href="/imagens" class="SubMenuButton" id="IndiButtons"><i class="fas fa-image" style="margin-left: 15%"></i> Imagens</a>
   </div>

    <a class="ButtonCollapse" data-toggle="collapse" href="#collapseVisualizar" role="button" aria-expanded="false" aria-controls="collapseExample">
      <i class="fas fa-eye"></i>  Visualizar
    </a>

    <div class="collapse" id="collapseVisualizar">
      <a href="/mensagens" id="IndiButtons"><i class="fas fa-comment-alt" style="margin-left: 15%"></i> Mensagens</a>
      <a href="/pedidos" id="IndiButtons" ><i class="fas fa-file-alt" style="margin-left: 15%"></i> Pedidos de <div style="text-align:center;">Orçamentos</div></a>
      <a href="/enviados" id="IndiButtons"><i class="fas fa-file-export" style="margin-left: 15%"></i> Orçamentos <div style="text-align:center;">Enviados</div></a>
   </div>

    <a href="/" id="IndiButtons" class="ButtonMenu center" style="bottom:0;position:absolute;"> <i class="fas fa-home"></i> Voltar</a>

  </div>

  <div  class="topMenu">
    <button class="ButtonMenu topMenu w3-xlarge" onclick="w3_open()"><i class="fas fa-arrow-right"></i></button>
  </div>
  
  <script>
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
  </script>