# PHP & Volley Library App

- PHP Version ~~**7.4.16**~~
- Mysql Version ~~**5.3.8**~~
- Laragon (https://laragon.org/)

## database table

```mysql

CREATE TABLE `country_capital` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`country_name` TEXT NULL,
	`capital_name` TEXT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=9
;

```
> conn.php file

```php

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "countries";


// Create connection
$conn = new mysqli($servername, $username, $password , $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

```


