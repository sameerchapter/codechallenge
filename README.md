
## Setup

#### Clone the git repository to your machine
<br>

#### Install dependencies
Install dependencies with composer.

```bash
$ composer install
```

#### Database
For the second task, you will need a (small) database to log in. This repository comes with a file-based sqlite database in the database folder.

Copy the content of .env.example to a new .env file and set the absolute path to the database.sqlite file in the database directory.

```bash
DB_CONNECTION=sqlite
DB_DATABASE=/Users/USENAME/teamchallenge/database/database.sqlite
```

Feel free to use any database of your choice. 

Migrate
```bash
$ php artisan migrate
```

#### Compile resources

Run the following commands to install and scaffold the resources and listen to changes

```bash
$ npm install
$ npm run dev
```

Don't forget to keep this terminal open in order to listen to changes.

#### Start development server

In a new terminal, start the internal php server with

```bash
$ php artisan serve
```

Navigate to the URL (should be http://127.0.0.1:8000)
