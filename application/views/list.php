<?php
echo "Lista:";
foreach($data as $d){ ?>
    <li><a href="http://docencia.eit.udp.cl/~18023436/index.php/Welcome/byid/<?php echo $d->id ?>"><?php   echo $d->title ?></a> <a href="http://docencia.eit.udp.cl/~18023436/index.php/Welcome/loadupdate/<?php echo $d->id ?>"><?php   echo "Cambiar titulo" ?></a></li>

<?php
} ?>
<a href="http://docencia.eit.udp.cl/~18023436/index.php/Welcome/insert"><?php   echo "Insertar nuevo" ?></a>
