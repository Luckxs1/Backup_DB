# 📚 Backup_DB

**Backup_DB** is a PHP-based script that automates the backup of all databases managed by phpMyAdmin, excluding the default system databases. This tool ensures data safety, making it easier to restore and manage backups efficiently.

---

## 🚀 Table of Contents

- [About the Project](#about-the-project)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [🔧 Usage](#usage)
- [🤝 Contributing](#contributing)
- [📜 License](#license)
- [📧 Contact](#contact)

---

## 📖 About the Project

**Backup_DB** provides a convenient way to export all databases hosted in phpMyAdmin, while excluding system-related databases such as:
- `mysql`
- `information_schema`
- `performance_schema`
- `sys`

With this solution, you can automate database backups regularly and store them safely for future restoration.

---

## 🛠️ Getting Started

To set up a local copy of this project, follow the steps below.

### ✅ Prerequisites

Ensure you have the following installed:

- PHP 7.4 or higher
- phpMyAdmin
- XAMPP/LAMPP (or any similar local server environment)

---

## 📥 Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Luckxs1/Backup_DB.git

2. **Navigate to the Project Directory**
   ```bash
   cd Backup_DB

2. **Configure Database Credentials Open `backupDB.php` and edit the following credentials:**
   ```php
	$host = "localhost";  // Database host
	$user = "root";       // MySQL username
	$pass = "root";       // MySQL password
	$backupDir = "backups"; // Directory where backups will be saved

2. **Set mysqldump Path**
Depending on your operating system, update the `mysqldump` path:
- For **Linux**
   ```php
   $mysqldumppath = "/opt/lampp/bin/mysqldump";

- For **Windows**
   ```php
   $mysqldumppath = "C:/xampp/mysql/bin/mysqldump.exe";


---

## 🔧 Usage


1. **Place the Project in htdocs** Ensure the project is placed inside the `htdocs` directory.

2. **Run the Backup Script** Open your web browser and navigate to:
   ```bash
   http://localhost/Backup_DB/backupDB.php

3. **Backups Saved Successfully!** Backups will be automatically stored in the specified `backupDir`.

---

## 🤝 Contributing

Contributions make the open-source community an amazing place to learn, inspire, and create. Any contributions to improve **Backup_DB** are greatly appreciated.

1. **Fork the Project**

2. **Create a New Branch**
   ```bash
   git checkout -b feature/AmazingFeature

3. **Commit Your Changes**
   ```bash
   git commit -m "Add some AmazingFeature"

4. **Push to the Branch**
   ```bash
   git push origin feature/AmazingFeature

5. **Open a Pull Request**

---

## 📜 License

Distributed under the **MIT License**. See `LICENSE` for more information.

---

## 📧 Contact

**LoXor** - yunquelucky@gmail.com

- **Project Repository:** Backup_DB on GitHub
- **Support Me:**
<a href="https://paypal.me/LYunque" target="_blank">
    <img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee">
</a>

---


## ☕ Support the Project

If you find this project helpful, consider supporting me on PayPal:

👉 paypal.me/LYunque

---

✅ Ready to automate your backups? Clone and get started today!

---
