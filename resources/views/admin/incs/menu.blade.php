
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-xlarge"><i class="fas fa-arrow-left"></i></button>
    <div class="w3-dropdown-hover">
      <button class="w3-bar-item w3-button"> <i class="fas fa-plus"></i> Adicionar</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="/marcas" class="w3-bar-item w3-button"> <i class="fas fa-building"></i> Marcas</a>
        <a href="/imagens" class="w3-bar-item w3-button"> <i class="fas fa-image"></i> Imagens</a>
      </div>
    </div>
    <div class="w3-dropdown-hover">
      <button class="w3-bar-item w3-button"> <i class="fas fa-eye"></i> Visualizar</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="/mensagens" class="w3-bar-item w3-button"> <i class="fas fa-comment-alt"></i> Mensagens</a>
        <a href="/pedidos" class="w3-bar-item w3-button"> <i class="fas fa-file-alt"></i> Pedidos de Orçamentos</a>
        <a href="/enviados" class="w3-bar-item w3-button"> <i class="fas fa-file-export"></i> Orçamentos Enviados</a>
      </div>
    </div>
    <a href="/" class="w3-bar-item w3-button"> <i class="fas fa-home"></i> Voltar</a>
  </div>
  <div class="w3-teal">
    <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()"><i class="fas fa-arrow-right"></i></button>
  </div>
  
  <script>
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }
  </script>