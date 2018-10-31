		
	</main> <!-- /container -->

	<hr>
	<footer class="container">
		<p>&copy; 2018 - Controle de Testes / Life Serviços de Comunicação e Multimídia</p>
	</footer>
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
   
    

	<!-- /links datatable -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo BASEURL; ?>js/main.js"></script>
	<script>
		$(document).ready(function(){
			$('#id_tabela').DataTable({
				"language": {
						"sEmptyTable": "Nenhum registro encontrado",
						"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
						"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
						"sInfoFiltered": "(Filtrados de _MAX_ registros)",
						"sInfoPostFix": "",
						"sInfoThousands": ".",
						"sLengthMenu": "_MENU_ resultados por página",
						"sLoadingRecords": "Carregando...",
						"sProcessing": "Processando...",
						"sZeroRecords": "Nenhum registro encontrado",
						"sSearch": "Pesquisar",
						"oPaginate": {
							"sNext": "Próximo",
							"sPrevious": "Anterior",
							"sFirst": "Primeiro",
							"sLast": "Último"
						},
						"oAria": {
							"sSortAscending": ": Ordenar colunas de forma ascendente",
							"sSortDescending": ": Ordenar colunas de forma descendente"
						}
					}
				});
		});
  </script>

    <script src="<?php echo BASEURL; ?>js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap-datepicker.pt-BR.min.js"></script>

	<script type="text/javascript">
		$('#exemplo').datepicker({
			format: "yyyy-mm-dd",
			language: "pt-BR",
			startDate: "+0d",
		});
	</script>
	<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Avaliação', 'Quantidade'],
          ['SIG',     <?php echo $cont_sig; ?>],
          ['CAN',     <?php echo $cont_can; ?>],

        ]);

        var options = {
          title: 'Estatistica de Avaliações'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Situação', 'Quantidade'],
          ['OK',     	<?php echo $cont_ok; ?>],
          ['DEFEITO',	<?php echo $cont_defeito; ?>],

        ]);

        var options = {
          title: 'Estatistica de Situação'
        };

        var chart = new google.visualization.PieChart(document.getElementById('situacao'));

        chart.draw(data, options);
      }
	</script> -->

</body>
</html>