<?php
$command = "mysql -u root -p mamba_data < db/database.sql";
system($command);
echo "Database setup complete!";
