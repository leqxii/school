<?php
    $host = 'localhost';
    $port = '3306';
    $dbname = 'test';
    $username = 'root';
    $password = '';

    $connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

    $query1 = $connection->prepare("SELECT naam, roepnaam FROM cursist WHERE plaats = 'Oosterhout'");
    $query1->execute();
    $result1 = $query1->fetchAll(PDO::FETCH_ASSOC);

    $query2 = $connection->prepare("SELECT cursistnr, roepnaam FROM cursist WHERE plaats != 'Oosterhout'");
    $query2->execute();
    $result2 = $query2->fetchAll(PDO::FETCH_ASSOC);

    $query3 = $connection->prepare("SELECT * FROM cursist WHERE geslacht = 'V'");
    $query3->execute();
    $result3 = $query3->fetchAll(PDO::FETCH_ASSOC);

    $query4 = $connection->prepare("SELECT * FROM cursist WHERE NOT geslacht = 'M'");
    $query4->execute();
    $result4 = $query4->fetchAll(PDO::FETCH_ASSOC);

    $query5 = $connection->prepare("SELECT * FROM cursist WHERE plaats = 'Breda' AND geslacht = 'V'");
    $query5->execute();
    $result5 = $query5->fetchAll(PDO::FETCH_ASSOC);

    $query6 = $connection->prepare("SELECT * FROM cursist WHERE plaats IN ('Oosterhout', 'Made')");
    $query6->execute();
    $result6 = $query6->fetchAll(PDO::FETCH_ASSOC);

    $query7 = $connection->prepare("SELECT DISTINCT curs_plts FROM cursus");
    $query7->execute();
    $result7 = $query7->fetchAll(PDO::FETCH_ASSOC);

    echo "Query 1 Result: ";
    print_r($result1);

    echo "Query 2 Result: ";
    print_r($result2);

    echo "Query 3 Result: ";
    print_r($result3);

    echo "Query 4 Result: ";
    print_r($result4);

    echo "Query 5 Result: ";
    print_r($result5);

    echo "Query 6 Result: ";
    print_r($result6);

    echo "Query 7 Result: ";
    print_r($result7);
?>
