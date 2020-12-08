<?php   
    $path="/home/pi/Resources12/database";
    $file="database";

    //read file contents
    $content="
        <h2>$file</h2>
            <code>
                <pre>".htmlspecialchars(file_get_contents("$path/$file"))."</pre>
            </code>";

    //display
    echo $content;
?>
