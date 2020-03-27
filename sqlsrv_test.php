<?php

    try {
        $cnx = new PDO("sqlsrv:Server=DESKTOP-8ABCGU5;Database=estudiantes", "briandb", "briandb");
    }
    catch(PDOException $e) {
        die("Error connecting to SQL Server: " . $e->getMessage());
    }

    echo "<p>Connected to SQL Server</p>\n";

    $query = 'SELECT TOP 2 * FROM dbo.alumnos';  

    // simple query  
    $stmt = $cnx->query( $query );  
    while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){  
        print($row['usuario']);
       
    } 

