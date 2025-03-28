# Backup_DB

phpmyadmin backup all db except default

## Table of Contents

- [About the Project](#about-the-project)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## About the Project

Backup_DB is a PHP-based script designed to backup all databases managed by phpMyAdmin, except for the default databases. This tool helps in automating the process of backing up databases, ensuring data safety and ease of restoration.

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

- PHP 7.4 or higher
- phpMyAdmin
- XAMPP/LAMPP

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/Luckxs1/Backup_DB.git
    ```
2. Navigate ti the project directory
   ```sh
   cd Backup_DB
   ```
3. Edit the credentials inside Backupdb.php
  ```sh
   $host = "localhost"; 
   $user = "root"; 
   $pass = "root"; 
   $backupDir = "backups";
  ```

4. location of your my mysqldump.exe/mysqldump.sh depends on your OS linux or windows

   For Linux
  ```sh
  $mysqldumppath = "/opt/lampp/bin/mysqldump";
  ```
  For Linux
  ```sh
  $mysqldumppath = "C:/xampp/bin/mysqldump.exe";
  ```

### Usage

1. make sure your clone it inside htdocs
2. open web browser type the following
```sh
  localhost/Backup_DB/backupDB.php
```

### Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.
   1. Fork the Project
   2. Create your Feature Branch (git checkout -b feature/AmazingFeature)
   3. Commit your Changes (git commit -m 'Add some AmazingFeature')
   4. Push to the Branch (git push origin feature/AmazingFeature)
   5. Open a Pull Request

### License

  Distributed under the MIT License. See LICENSE for more information.  


###  Contact

LoXor - yunquelucky@Gmail.com

Project Link: https://github.com/Luckxs1/Backup_DB

<a href="https://paypal.me/LYunque" target="_blank">
    <img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee">
</a>

Paypal: paypal.me/LYunque 
