<link href='packages/core/main.css' rel='stylesheet' />
<link href='packages/daygrid/main.css' rel='stylesheet' />
<link href='packages/timegrid/main.css' rel='stylesheet' />
<link href='packages/list/main.css' rel='stylesheet' />
<script src='packages/core/main.js'></script>
<script src='packages/interaction/main.js'></script>
<script src='packages/daygrid/main.js'></script>
<script src='packages/timegrid/main.js'></script>
<script src='packages/list/main.js'></script>
<script src='packages/core/locales/pt-br.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
	  locale: 'pt-br',
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultView: 'dayGridMonth',
      //defaultDate: '2019-08-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        <?php 		
		
								$sqli = "SELECT id, nome, telefone, celular, email, servico, profissional, horario, dia, mes, ano, status FROM agenda";
								$exec = $sql->query($sqli);
								$cont = mysqli_num_rows($exec);


								while($exibir = mysqli_fetch_assoc($exec)){

									$d = $exibir["dia"];
									$m = $exibir["mes"];
									$a = $exibir["ano"];
										$dat = $d."/".$m."/".$a;
										$conv = DateTime::createFromFormat('d/m/Y', $dat);
										$rconv = $conv->format('Y-m-d');
									
									$id = $exibir["id"];
									$n = $exibir["nome"];
									$h = $exibir["horario"];									
									$dat = $rconv." ".$h;
									$tel = $exibir["telefone"];
									$cel = $exibir["celular"];
									$em = $exibir["email"];
									$ser = $exibir["servico"];
									$prof = $exibir["profissional"];
									$st = $exibir["status"];
									
									if($st == "Agendado"){
										$c = "#4169E1";
									}elseif($st == "Cancelado"){
										$c = "#FF0000";
									}else{
										$c = " #228B22";
									}

									echo "
										{
										  'id': '".$id."',
										  'title': '".$n."',
										  'start': '".$dat."',
										  'telefone': '".$tel."',
										  'celular': '".$cel."',
										  'email': '".$em."',
										  'servico': '".$ser."',
										  'profis': '".$prof."',
										  'status': '".$st."',
										  'color': '".$c."'
										},
									";

								}


						?>
					],
					eventClick: function(info) {
						info.jsEvent.preventDefault();
						$('#ver #title').text(info.event.title);
						$('#ver #id').text(info.event.id);
						$('#ver #hor').text(info.event.start.toLocaleString());
						$('#ver #telefone').text(info.event.extendedProps.telefone);
						$('#ver #celular').text(info.event.extendedProps.celular);
						$('#ver #email').text(info.event.extendedProps.email);
						$('#ver #servico').text(info.event.extendedProps.servico);
						$('#ver #profiss').text(info.event.extendedProps.profis);
						$('#ver #status').text(info.event.extendedProps.status);
						$('#ver').modal('show');
					  }
                    
                });

                calendar.render();
            });

</script>