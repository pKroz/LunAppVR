## LunApp

<p align="center">
<img src="https://img.shields.io/badge/license-Apache-green" alt="License"></a>
<img src="https://img.shields.io/badge/version-1.0-blue" alt="Version"></a>
</p>

Welcome to the documentation of LunApp, software focused on virtual reality for tourism promotion.

## Table of Contents

- [Introduction](#introduction)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Configuration](#configuration)
- [Usage](#usage)
- [Features](#features)
- [License](#license)

## Introduction

Welcome to the documentation of LunApp, software focused on virtual reality for tourism promotion.

## Getting Started

### Prerequisites

Before you begin, ensure you have the following software installed:

- PHP
- Apache server
- MySQL
- Bootstrap
- JQuery

### Installation

To get started, follow these steps:

1. Clone the LunaApp repository:

```bash
git clone https://github.com/pKroz/LunAppVR.git
```

2. Import the file lunappvr.sql into the current DBMS.

3. Place the "LunAppVR" folder where your server can recognize it

## Configuration
Locate in the folder ```config.php``` and edit based on your server data:

```bash
<?php
$user  = "root";
$password = "";
$server = "localhost";
$bd = "lunappvr";
$con = mysqli_connect($servidor, $user, $password) or die("Unable connect to server");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $bd) or die("Upps! Error connecting to the database");
?>
```

Update the ```config.php``` file.

## Usage
Start the Apache and MySQL server and enjoy :D
This will compile and serve the frontend and backend application. You can access the application in your browser at http://localhost:80.

## Features
- User-friendly interface for managing inventory items
- Intuitive order management system
- Responsive design for seamless usage on different devices

## License

This software is licensed under the Apache License 2.0.

For more information about LunApp or to report any issues, please contact our support team at
1971975680@undc.edu.pe