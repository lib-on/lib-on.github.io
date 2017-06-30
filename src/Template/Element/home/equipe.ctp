<?php
  $id = md5($name);
?>
<div class="col-md-4">
	<div class="row">
		<div class="col-lg-12 col-md-offset-1">			
			<div class="thumbnail attraction">
				<img src="img/equipe/<?= $photo ?>" class="img-rounded img-responsive">
				<div class="caption text-center">
					<h3><?= $name?><br>
					<small><?= $company ?></small>
					</h3>

					<h4 class="text-center more">
						<a href="#" data-toggle="modal" data-target="#modal_<?= $id ?>"><span class="fa fa-plus"> Leia mais</span></a>
					</h4>
					<div class="modal fade" id="modal_<?= $id ?>">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-Label="Close"><span aria-hidden ="true">&times;</span></button>
									<h3 class="modal-title" ><?= $name ?></h3>
								</div>
								<div class="modal-body">
									<?php foreach ($about as $title => $text): ?>
										<p>Sobre: <STRONG><?= $title?></STRONG></p>
										<p> <?= $text?></p>
									<?php endforeach ?>
									<?php if (isset($email)): ?>
					                    <p><i class="fa fa-envelope"></i> <?= $email ?></p>
					                <?php endif ?>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>