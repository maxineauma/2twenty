<?php 

    $db_ho = $_POST['sql_hostname'];
    $db_us = $_POST['sql_username'];
    $db_pw = $_POST['sql_password'];

    $us = $_POST['username'];
    $pw = $_POST['password'];

    if(empty($db_ho)) die("Error. Please enter a valid hostname.<br/>");
    if(empty($db_us) || empty($db_pw)) die("Error. Please enter a SQL username and/or password.<br/>");
    if(empty($us) || empty($pw)) die("Error. Please enter a username and/or password.<br/>");

    $conn = new mysqli($db_ho, $db_us, $db_pw);
    if($conn -> connect_error) die("<br/>Failed to connect to SQL server.");
    else {

        /* ************************************************************** */
        /*                      INSTALLATION PROCESS                      */
        /* ************************************************************** */

        // Database: store
        $sql = "CREATE DATABASE IF NOT EXISTS store;";

        $db_query = $conn->prepare($sql);
        $db_query->execute() or die("<br/>Failed to create database <i>store</i>.");

        echo("<b>Created database <i>store</i>...</b><br/>");

        /* ************************************************************** */

        // Table: featured
        $sql = "CREATE TABLE IF NOT EXISTS store.featured";
        $sql .= "(id INT(255) NOT NULL);";

        $tbl_query = $conn->prepare($sql);
        $tbl_query->execute() or die("<br/>Failed to create table <i>featured</i>."); 

        echo("<b>Created table <i>featured</i>...</b><br/>");

        /* ************************************************************** */

        // Table: user
        $sql = "CREATE TABLE IF NOT EXISTS store.user";
        $sql .= "    (id INT(255) NOT NULL AUTO_INCREMENT,";
        $sql .= "    user TEXT NOT NULL,";
        $sql .= "    pass VARCHAR(255) NOT NULL,";
        $sql .= "    mod_priv TINYINT(1) NOT NULL,";
        $sql .= "    admin_priv TINYINT(1) NOT NULL,";
        $sql .= "    PRIMARY KEY(id) );";

        $tbl_query = $conn->prepare($sql);
        $tbl_query->execute() or die("<br/>Failed to create table <i>user</i>."); 

        echo("<b>Created table <i>user</i>...</b><br/>");

        /* ************************************************************** */

        // Table: items_for_sale:
        $sql = "CREATE TABLE IF NOT EXISTS store.items_for_sale";
        $sql .= "   (id INT(255) NOT NULL AUTO_INCREMENT,";
        $sql .= "    title TEXT NULL, image_url TEXT NULL,";
        $sql .= "    tags TEXT NULL, description TEXT NULL,";
        $sql .= "    seller TEXT NULL, price DOUBLE NULL,";
        $sql .= "    PRIMARY KEY (id) );";

        $tbl_query = $conn->prepare($sql);
        $tbl_query->execute() or die("<br/>Failed to create table <i>items_for_sale</i>.");

        echo("<b>Created table <i>items_for_sale</i>...</b><br/>");

        /* ************************************************************** */

        // Record: admin account
        $sql = "REPLACE INTO store.user(user, pass, mod_priv, admin_priv)";
        $sql .= " VALUES(?, md5(?), 1, 1);";

        $rec_query = $conn->prepare($sql);
        $rec_query->bind_param('ss', $u, $p); 
        $u = $us; $p = $pw;
        $rec_query->execute() or die("<br/>Failed to create record in <i>user</i>.");

        echo("<b>Created administrator <i>".$us."</i>...</b><br/>");

        /* ************************************************************** */

        // Record: dummy item
        $sql = "REPLACE INTO store.items_for_sale(title, image_url, tags, description, seller, price)";
        $sql .= " VALUES('Sample Shoes', 'https://cdn.shopify.com/s/files/1/0533/2089/files/placeholder-images-product-2_large.png?format=jpg&quality=90&v=1530129318',";
        $sql .= "        'clothing, shoes', 'Sample shoes.', 'sampleShop', 59.99);";

        $rec_query = $conn->prepare($sql);
        $rec_query->execute() or die("<br/>Failed to create record in <i>items_for_sale</i>.");

        /* ************************************************************** */

        // Record: dummy item featured
        $sql = "REPLACE INTO store.featured VALUES(1);";

        $rec_query  = $conn->prepare($sql);
        $rec_query->execute() or die("<br/>Failed to create record.");

        echo("<b>Created sample item...</b><br/>");

        /* ************************************************************** */

        // Configuration setup:
        $fh = fopen("../../src/db_connect.php", 'w') or die("<br/>Unable to create configuration file.");

        $config = '<?php ' . PHP_EOL; 
        $config .= '    $server = "'.$db_ho.'";' . PHP_EOL;
        $config .= '    $user = "'.$db_us.'";' . PHP_EOL;
        $config .= '    $password = "'.$db_pw.'";' . PHP_EOL;
        $config .= '    $db = "store";' . PHP_EOL;
        $config .= '    $conn = new mysqli($server, $user, $password, $db);' . PHP_EOL;
        $config .= '    if($conn -> connect_error) die("Failed to connect.");  '. PHP_EOL .'?>';

        fwrite($fh, $config);
        fclose($fh);

        echo("<b>Created configuration...</b><br/>");

        /* ************************************************************** */

        echo("Installation over. Please delete the <code>/install</code> directory.");

        /* ************************************************************** */
        /*                      END OF INSTALLATION                       */
        /* ************************************************************** */

    }

?>