<header class="contain">
	<nav class="main">
		<ol>
			<li>
				<ul>
					<li><a href="<?= $site->url() ?>" class="button ghost"><img src="/assets/logo.jpg" alt="Beachball.tech logo, pencil sketch" class="icon lt triple-height">Beachball.tech</a></li>
				</ul>
			</li>
			<li>
				<ul>
					<?php foreach($site->children()->listed() as $item): ?>
					<li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
					<?php endforeach ?>
				</ul>
			</li>
		</ol>
	</nav>
</header>