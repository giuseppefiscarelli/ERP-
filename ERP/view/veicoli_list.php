<?php
$orderDirClass = $orderDir;
$orderDir = $orderDir === 'ASC' ? 'DESC' : 'ASC';
$idVeicolo = getVeicolo();
//var_dump($idVeicolo);
?>

<div class="row">
<?php
   
        
        foreach ($idVeicolo as $val){
         

         
?>
	   <div class="col-12 col-lg-4">
	    <div class="card">
		  <img src="images/gallery/<?=$val['id_veicolo']?>.png" class="card-img-top" alt="Card image cap"style="max-height: 300px;max-width: 500px;">
			<div class="card-body">
				<h4 class="card-title"><?=$val['modello']?> <?=$val['id_veicolo']?></h4>
				<ul class="list-group">
														<li class="list-group-item">
															<div class="media align-items-center">
															<div class="media-body ml-3">
															<h6 class="mb-0">Targa</h6>
															</div>
															<div class="date" style="text-align: right;">
															<b><?=$val['targa']?></b>
															</div>
															</div>
														</li>
														<li class="list-group-item">
															<div class="media align-items-center">
															<div class="media-body ml-3">
															<h6 class="mb-0">KM</h6>
															</div>
															<div class="date">
															<b><?=$val['km']?></b>
															</div>
															</div>
														</li>
														<li class="list-group-item">
															<div class="media align-items-center">
															<div class="media-body ml-3">
															<h6 class="mb-0">Disponibilità</h6>
															</div>
															<div class="date">
															<b><?=$val['stato']?></b>
															</div>
															</div>
														</li>
														<li class="list-group-item">
															<div class="media align-items-center">
															<div class="media-body ml-3">
															<h6 class="mb-0">Service</h6>
															</div>
															<div class="date">
															<b>Ultimo<br>Data</b>
															</div>
															</div>
														</li>
                                                        <li class="list-group-item">
															<div class="media align-items-center">
															<div class="media-body ml-3">
															<h6 class="mb-0">Multicard</h6>
															</div>
															<div class="date">
															<b>Numero <?=$val['multicard']?><br>Pin <?=$val['pin']?></b>
															</div>
															</div>
														</li>
														
														</ul>
			</div>
		</div>
	   </div>
	   
	 



<?php }
    

    ?>

</div>    