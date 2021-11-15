
<?php
	require('layout/header.php');

	if (isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	} else {
		$controller = '';
	}

	switch ($controller) {
		case 'test':
			echo "trang test";
			break;
		
		default:
			require('layout/menu.php');
			break;
	}

	require('layout/footer.php');
  ?>
  
