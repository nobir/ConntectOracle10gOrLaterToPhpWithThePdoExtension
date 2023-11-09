# Requirements

- XAMPP
- Oracle 10g XE or later
- Oracle Instance Client for 10g or later

# Installation

- Install all the software mentioned in the **#Requirements** section.
- Copy and paste the `oracle` folder to the `C:\` drive.
- Set the environment variable `C:\oracle\instantclient_10_2\`
- Now go to `C:\xampp\php\php.ini` and enable `extension=pdo_oci` by removing `;`.

  **Example:**
  `;extension=pdo_oci` to `extension=pdo_oci`

- Start the XAMPP software and run the Apache server.
- I have also provided a `test.php` file. Please copy it into this `C:\xampp\htdocs\` folder.
- Open it in your text editor and change your `$db_password`, which were provided by you during the Oracle database installation.
- For testing, in your browser, go to this URL: `https://localhost/test.php`. this will show you all the users on the oracle database.

### Note: If you want to download other Oracle instance clients depending on which version of Oracle database you have used, you can find them at the below link.

- [Oracle Instance Client](https://www.oracle.com/database/technologies/instant-client/winx64-64-downloads.html)
