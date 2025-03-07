<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Backup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding: 20px; }
        .backup-log { max-height: 300px; overflow-y: auto; background: #f8f9fa; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>

<div class="container">
    <h2 class="mb-4">Database Backup</h2>

    <form method="post">
        <button type="submit" name="backup" class="btn btn-primary">Start Backup</button>
    </form>

    <div class="mt-4">
        <h4>Backup Status:</h4>
        <div class="backup-log">
            <?php
            if (isset($_POST['backup'])) {
                backupDatabases();
            }

            function backupDatabases() {
                $host = "localhost"; 
                $user = "root"; 
                $pass = "root"; 
                $backupDir = "backups"; 
            
                try {
                    if (!is_dir($backupDir)) {
                        if (!mkdir($backupDir, 0777, true)) {
                            throw new Exception("Failed to create backup directory: $backupDir");
                        }
                        chmod($backupDir, 0777);
                    }
            
                    $conn = new mysqli($host, $user, $pass);
                    if ($conn->connect_error) {
                        throw new Exception("Database connection failed: " . $conn->connect_error);
                    }
            
                    $result = $conn->query("SHOW DATABASES");
                    if (!$result) {
                        throw new Exception("Failed to retrieve databases: " . $conn->error);
                    }
            
                    $excludedDBs = ['mysql', 'information_schema', 'performance_schema', 'sys', 'phpmyadmin'];
                    $databases = [];
            
                    while ($row = $result->fetch_assoc()) {
                        if (!in_array($row['Database'], $excludedDBs)) {
                            $databases[] = $row['Database'];
                        }
                    }
            
                    foreach ($databases as $dbName) {
                        $mysqldumppath = "/opt/lampp/bin/mysqldump";
                        $backupFile = "$backupDir/{$dbName}_" . date("Y-m-d_H-i-s") . ".sql";
                        $command = "$mysqldumppath --user=$user --password=$pass --host=$host $dbName > $backupFile 2>&1";
                        
                        exec($command, $output, $result);
                        
                        if ($result === 0) {
                            echo "<p class='text-success'>✅ Backup successful for database: <strong>$dbName</strong></p>";
                        } else {
                            $errorMessage = implode("\n", $output);
                            throw new Exception("Error backing up database '$dbName': $errorMessage");
                        }
                    }
            
                    $conn->close();
                } catch (Exception $e) {
                    echo "<p class='text-danger'>❌ " . $e->getMessage() . "</p>";
                }
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>