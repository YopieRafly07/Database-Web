<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>

<div class="col-md-10">
	<h3>Selamat Datang Di</h3>	
    <h3>MARKET MAKMUR</h3>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>