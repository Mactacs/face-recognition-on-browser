<?php
	$path = $_POST['path'];
	$img = $_POST['image'];

	mkdir('data/' . $path, 0777, true);

	define('orig_dir', 'data/' . $path . '/');
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	// Save image to data/original directory
	$fi = new FilesystemIterator(orig_dir, FilesystemIterator::SKIP_DOTS);
	$file = orig_dir . 'image' . iterator_count($fi). '.png';
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file in image directory.';
?>