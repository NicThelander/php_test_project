<div class="container">
	<ul class="nav nav-pills">
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Index") { ?>active<?php } ?>" href="index.php">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Database") { ?>active<?php } ?>" href="database_work.php">Database</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "XMLHttp_example") { ?>active<?php } ?>" href="XMLHttp_example.php">XMLHttp example</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "curl_req") { ?>active<?php } ?>" href="curl_req.php">Curl req</a>
		</li>
	</ul>
</div>