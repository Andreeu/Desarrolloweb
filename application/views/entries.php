
<html>
<body>
Lista de entradas:
<ul>
<?php foreach($entries as $entry){ ?>
<li>
<a href="index.php/Welcome/byid/<?php $entry->id  ?>"><?php echo $entry->title ?></a></li>
<?php  ?>
</ul>
</body>
</html>
