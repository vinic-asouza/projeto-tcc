		
	</main> <!-- /container -->

	<hr>
	<footer class="container">
		<p>&copy; 2018 - Controle de Testes / Life Serviços de Comunicação e Multimídia</p>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo BASEURL; ?>js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php echo BASEURL; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/main.js"></script>

	<!-- /links datatable -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#id_tabela').DataTable({
				"language": {
						"lengthMenu": "Mostrando _MENU_ registros por página",
						"zeroRecords": "Nada encontrado",
						"info": "Mostrando página _PAGE_ de _PAGES_",
						"infoEmpty": "Nenhum registro disponível",
						"infoFiltered": "(filtrado de _MAX_ registros no total)"
					}
				});
		});
  </script>
</body>
</html>