<?php
	echo 'what';
	$dir    = glob('/dir/');
	echo '<pre>';
	print_r($dir);
	
	
	/*
	$files1 = opendir($dir);
	$files2 = scandir($dir, 1);
	
	while (false !== ($filename = readdir($files1))) 
	{
		$files[] = $filename;
	}	

	sort($files);

	print_r($files);

	rsort($files);

	print_r($files);

	print_r($files1);
	print_r($files2);
	echo $files1[0];
	
/*if ($handle = opendir('/path/to/files')) {
    echo "Дескриптор каталога: $handle\n";
    echo "Файлы:\n";

    ///* Именно этот способ чтения элементов каталога является правильным. 
    while (false !== ($file = readdir($handle))) { 
        echo "$file\n";
    }

    //* Этот способ НЕВЕРЕН. 
    while ($file = readdir($handle)) { 
        echo "$file\n";
    }

    closedir($handle); 
}*/
?>
