<html lang="tr">
	<head>
		<title><?= isset($meta['title']) ?  $meta['title'] : 'test' ?></title>
		<?php if (isset($meta['description'])): ?>
		<meta name="description" content="<?= $meta['description'] ?>">
	    <?php endif; ?>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="<?=admin_public_url('assets/plugins/global/plugins.bundle.css')?>" rel="stylesheet" type="text/css" />
		<link href="<?=admin_public_url('assets/css/style.bundle.css')?>" rel="stylesheet" type="text/css" />
	</head>