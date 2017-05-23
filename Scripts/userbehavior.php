
<div class="wrap userbar" id="user">
	<table>
		<tr>
        	<td valign="top" class="nusera">
        		<label class="nuserb"><?php print($_SESSION['user_name']);?></label><br>
        		<label class="nuserc">
        			<?php 
        			 include "../action/connect.php";
        			 $q = "select * from instituciones where id_inst = '".$_SESSION['id_inst']."'";
        			 $result = $conn->query($q);
        			 $row = $result->fetch_assoc();
        			 print($row['nom_inst']);
        			 $result->close();
        			 ?>
        		</label>
        	</td>
        	<td valign="top">
        		<nav>
					<ul class="primary">
						<li>
							<IMG SRC="../Estilos/paleta/user.jpg" class="iconuser"/>
							<ul class="sub">
								<li><a href="#userconf" class="fancybox">Configuración</a></li>
								<li><a href="#userexit" class="fancybox">Desconectar</a></li>
							</ul>
						</li>
					</ul>
				</nav>
        	</td>
      	</tr>
    </table>
</div>


<div id="userconf" style="display:none">
aqui van las opciones de usuario par asus configuraciones
</div>

<div id="userexit" style="display:none">
<form action="../action/logout.php" method="POST" id="logout"></form>
<input type="submit" name="si" value="Deseo desconectarme" form="logout">
</div>
