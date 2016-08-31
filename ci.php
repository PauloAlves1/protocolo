<div class="container">
       <img src="assets/img/logomarca.png" class="center"; />
     <!--  Formulario de envio de arquivo atraves do metodo post com multipart/form-data -->
       <form action="model/upload.php" method="POST" enctype="multipart/form-data">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3>Comunicação Interna</h3>
          <input name="assunto" type="text" class="form-control input-sm" style="width: 40%;" placeholder="Assunto" />
        <br>
          <input name="remetente" type="text" class="form-control input-sm" style="width: 40%;" value="Protocolista" disabled />
          <input name="tipo_arquivo" type="hidden" value="1">
        <br>
          <p>
            <select  name="destinatario">
              <option value="">Escolha o Setor Destino</option>
              <option value="1">Setor de TI</option>
            </select>
          </p>
        <br>
       	<div class="alert alert-success text-left" style="width: 31%;">
       	Anexar Arquivo:
              <br>  
              <!-- função para selecionar um arquivo local -->
              <input type="file" required name="arquivo" />
       	</div>
       	  <input type="submit" class="btn btn-outline btn-primary btn-block" style="width: 12%;" value="Finalizar"/>
       	<br>
       </form>
</div> 
