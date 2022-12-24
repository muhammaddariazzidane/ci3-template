<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>404 Page Not Found</title>
	<link rel="stylesheet" href="./assets/css/tailwind.output.css">
</head>

<body>

	<div class="relative h-screen overflow-hidden bg-indigo-900">
		<img src="https://source.unsplash.com/1200x2300?shoes" class="absolute object-cover w-full h-full" />
		<div class="absolute inset-0 bg-black opacity-25">
		</div>
		<div class="container relative z-10 flex items-center px-6 py-32 mx-auto md:px-12 xl:py-40">
			<div class="relative z-10 flex flex-col items-center w-full font-mono">
				<h1 class="mt-4 text-5xl font-extrabold leading-tight text-center text-white">
					<?php echo $message; ?>
					<!-- You&#x27;re alone here -->
				</h1>
				<p class="font-extrabold text-white text-3xl my-44 animate-bounce">
					<?php echo $heading; ?>
					<!-- 404 -->
				</p>
			</div>
		</div>
	</div>

</body>

</html>