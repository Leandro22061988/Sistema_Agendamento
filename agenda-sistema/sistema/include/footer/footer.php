
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
 <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 

<footer>       
	<div class="copy">&copy;  - <script>document.write(new Date().getFullYear());</script> <mark> Criado por: </mark> <a href="https://jc.inf.br/" target="_blank" title="J. C. Sistema de gestão empresarial">Expansão Digital</a> </div>
</footer>

</body>
</html>