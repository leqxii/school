<?php
for (;;)
{
    $currentDateTime = new DateTime();
    $formattedDate = $currentDateTime->format('d-m-Y H:i:s');
    echo "\rHuidige datum en tijd: $formattedDate";
    sleep(1);
}
?>