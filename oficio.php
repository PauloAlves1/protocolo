<div class="container">
      <?php
       session_start();
       $v_nome = $_SESSION['usuario'];
       ?>
              <img src="assets/img/logomarca.png" class="center"; />
              <form action="model/upload.php" method="post" enctype="multipart/form-data">
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
              	<h3>Oficio</h3>
              	<input id="assunto" type="text" class="form-control input-sm" style="width: 40%;" placeholder="Assunto" />
              	<br>
              	<input id="remetente" type="text" class="form-control input-sm" style="width: 40%;" placeholder="Remetente" />
              	<br>
                     <ul class="dropdown-menu dropdown-user">
                        <li><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                     </ul>
              	<br>
              	<div class="alert alert-success text-left" style="width: 31%;">
              	Anexar Arquivo:
              	<br>	
              	<input type="file" required name="arquivo" >
              	</div>
              	<input type="submit" class="btn btn-outline btn-primary btn-block" style="width: 12%;" value="Finalizar">
              	<br>
              	</form>
 </div>