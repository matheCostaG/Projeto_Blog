<?php
  require_once "classes/config.php";
?>

  <div class="container">        
          <div class=" margem widget widget-table action-table">
            <div class="widget-header"> <i class="material-icons">list</i>
              
            </div>
 
            	<div class="widget-content">
              		<table class="table table-striped table-bordered">
                		<thead>
                  			<tr>
                    			<th> Título da Postagem </th>
                    			<th> Data </th>
                   				<th> Resumo</th>                    
                    			<th> Imagem</th>
                    			<th> Editar</th>
                    			<th> Excluir</th>
                  			</tr>
                		</thead>

                			<tbody>
                  				<tr>
                    				<td> mi mix </td>
                    				<td> data </td>
			                    	<td> celular sem bordas </td>
			                    	<td> imagem</td>
			                    	<td><a href="#" class="btn btn-small btn-success"><i class="material-icons">edit</i></a></td>
			                    	<td><a href="#" class="btn btn-danger btn-small"><i class="material-icons">delete</i></a></td>
			                  	</tr>               
                			</tbody>
              		</table>
            	</div>
           </div>

<?php
  require_once "includes/footer.php";
 ?>
