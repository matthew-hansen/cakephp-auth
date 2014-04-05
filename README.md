CakePHP Auth
============

### Getting Started

To get started, you'll need to
- Change security strings in core.php > Security.salt & Security.cipherSeed
- Add a user database
- Add database config > database.php
- Add first user, allow access to add user

#### 1. Change security strings
```
Configure::write('Security.salt', 'abc123');
Configure::write('Security.cipherSeed', '123');
```

#### 2. Create user table
```
CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
    role VARCHAR(20),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);
```

#### 3. Add database config
```
class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => '[mysql_username]',
        'password' => '[mysql_password]',
        'database' => '[database_name]',
        'prefix' => '',
        'encoding' => 'utf8',
    );
```

#### 4. Add first user, allow access to add user

app/Controller/AppController.php > beforeFilter > $this->Auth->allow('login', 'add');