# Laravel_Blog

## How to use this project

1. Download this project: `git clone https://github.com/richardtin/Laravel_Blog`
2. Change to project folder & download related 3-party packages:

  ```shell
  $ cd Laravel_Blog
  $ composer install
  ```

3. Run scripts:

  ```shell
  $ composer run-script post-root-package-install
  $ composer run-script post-create-project-cmd
  $ composer run-script post-install-cmd
  $ composer run-script post-update-cmd
  ```

4. Edit database setting of `.env` file

  ```shell
  DB_DATABASE=blog_local
  DB_USERNAME=<your database username>
  DB_PASSWORD=<your database password>
  ```

5. Create a new database `blog_local`
6. Execute database migrations

  ```shell
  $ php artisan migrate
  ```

7. Create test data

  ```shell
  $ php artisan db:seed
  ```

8. Setup your web server's root to `Laravel_Blog/public`
9. Browse `http://localhost:8000` 
