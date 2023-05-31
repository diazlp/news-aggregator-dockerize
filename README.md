

# News Aggregator Laravel & ReactJS

## - Installation Guide (Docker)

to run this project, please kindly _clone/download_ the `repository`.

**Note**: Please ensure you have `docker` installed on your system.

1. Setup `.env` file inside the `news-aggregator-laravel-api` folder, you can get all the value from `env.example` for your convenience.

2. Execute the following command in your terminal:
```bash
docker-compose up --build
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wait for all the programs and dependencies to start.

3.  Open another terminal, execute
```bash
docker-compose exec laravel sh
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;followed by
```bash
php artisan migrate
```
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to migrate all the migration scripts to your _mysql database on the container_

4. Open `http://localhost:3000` to browse through the *news-aggregator application*!

**PS**: <br/>
If you are encountering `[SQL] Connection Refused` error when hitting an endpoint, make sure to follow the `.env.example` file or other settings on your machine.

If the issue persist, execute `docker-compose ps` and copy the mysql *container name* to and execute the followings
```bash
docker inspect <container_name>
```
 copy the value from **"IpAddress"** and replace the value inside `.env` *DB_HOST*
