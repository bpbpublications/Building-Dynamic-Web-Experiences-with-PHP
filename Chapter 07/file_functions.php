<?php
$file_source = 'source.txt';
$file_destination = 'destination.txt';//File copy Function

if (copy($file_source, $file_destination)) 
{
    echo "File copied successfully.";
} 
else 
{
    echo "Error copying file.";
}

$current_name = 'oldname.txt';
$new_name = 'newname.txt';

if (rename($current_name, $new_name)) {
    echo "File renamed successfully.";
} else {
    echo "Error renaming file.";
}


//File Permission

$file_path = 'file.txt';
$permissions = 0644; // Example permission

if (chmod($file_path, $permissions)) {
    echo "File permissions changed successfully.";
} else {
    echo "Error changing file permissions.";
}



//File Information

$file_path = '/path/to/file.txt';
$path_info = pathinfo($file_path);

echo "Filename: " . $path_info['basename'];
echo "Directory: " . $path_info['dirname'];
echo "Extension: " . $path_info['extension'];

$file_path = 'file.txt';
$file_stats = stat($file_path);

echo "File size: " . $file_stats['size'] . " bytes";
echo "Last modified: " . date('Y-m-d H:i:s', $file_stats['mtime']);


$file_path = './file.txt';
$real_path = realpath($file_path);

echo "Real path: " . $real_path;


// Temporary Files

$temp_file = tempnam(sys_get_temp_dir(), 'prefix_');
echo "Temporary file created: $temp_file";


$temp_handle = tmpfile();
fwrite($temp_handle, "Hello, this is a temporary file.");
fclose($temp_handle);
echo "Temporary file created.";


$file_path = 'example.txt';
$file_contents = file_get_contents($file_path);
echo $file_contents;



$file_path = 'example.txt';
$file_handle = fopen($file_path, 'r');
fpassthru($file_handle);
fclose($file_handle);

$file_path = 'data.csv';
$file_handle = fopen($file_path, 'r');

while (($data = fgetcsv($file_handle)) !== false) {
    print_r($data);
}
fclose($file_handle);


// File Compression

$gz_file = 'example.gz';
$gz_handle = gzopen($gz_file, 'r');

while (!gzeof($gz_handle)) {
    echo gzread($gz_handle, 1024);
}

gzclose($gz_handle);
$zip_file = 'example.zip';
$zip_handle = zip_open($zip_file);

while ($zip_entry = zip_read($zip_handle)) {
    echo "Name: " . zip_entry_name($zip_entry) . "\n";
    // Additional processing if needed
}

zip_close($zip_handle);
$filename = 'example.txt';
$file = fopen($filename, 'r+');

// Acquire an exclusive lock
if (flock($file, LOCK_EX)) {
    // Perform operations on the file
    fwrite($file, "This is some data.");
    
    // Release the lock
    flock($file, LOCK_UN);
} else {
    echo "Couldn't get the lock!";
}
?>
