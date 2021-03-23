<?php
    $myfile = fopen("hello_there.php", "w") or die("Unable to open file!");
    $txt = "<?php\n";
    fwrite($myfile, $txt);
    $txt = "//This is a comment\n";
    fwrite($myfile, $txt);
    $txt = "echo 'This is a test page!';";
    fwrite($myfile, $txt);
    $txt = "echo '<br>';";
    fwrite($myfile, $txt);
    $txt = "echo 'Exam number two!';\n";
    fwrite($myfile, $txt);
    $txt = "//This is the end of a comment";
    fwrite($myfile, $txt);
    fclose($myfile);

?>