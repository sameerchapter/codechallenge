# Hello Pine Challenge for new coders 😎

</p>Hi there! This project contains some challenges for testing the skills of shortlisted developers and is part of our recruiting process. It should take 30-60 minutes to complete.</p

<p>You will be working with a <a href="https://laravel.com">Laravel 9</a> project. The frontend is made of vue.js (through Inertia.js) with tailwindcss.</p>

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

Feel free to use your preferred local PHP environment (Homestead, Docker etc). 

## Tasks

### Task 1: FizzBuzz
FizzBuzz is a game at which people one after another count up a number,
but each time a number is dividable
- by 3 you say "Fizz"
- by 7 you say "Buzz"
- by both 3 and 7, you say "FizzBuzz"

#### TO DOs
(1) The class `App\FizzBuzz\FizzBuzz` needs to extend the interface `app\FizzBuzz\FizzBuzzInterface`. <br>
(2) Please implement the required methods in the `App\FizzBuzz\FizzBuzz` class

You can validate your implementation with the help of `tests\Unit\FizzBuzzTest`.

### Task 2: Product Browser
Here you will build a `/products` page that displays products from the Shopify Shop `pine-roots.myshopify.com` and lets users search for products by their title.

It should look something like this: <br>
<img src="https://i.ibb.co/tbM4prt/Bildschirmfoto-2022-07-26-um-1.png">

The products can be queried using the Shopify Admin API (REST API).

You can access products like this:
```bash
use App\Shops\Shopify;
$shopify = new Shopify();
$shopifySDK = $shopify->getSDK();

$filterParameters = [
    'active'=>true,
    'limit' => 250,
    #More filter parameters
];
$products = $shopifySDK->Product()->get($filterParameters)
```

The filter parameters are described here
https://shopify.dev/api/admin-rest/2021-10/resources/product#get-products

Please note that you need to be authenticated to access the `/products` page. You can register an account at `/register`.

#### To DOs

(1) Insert the proper config variables from `config\shopify.php` in the *initSDK()* method of `App\Shops\Shopify` <br><br>
(2) Build the `resources\Pages\Products.vue` page. <br>The page needs to contain a search bar for searching for a prouct title and a results area, displaying a grid of products. Each product needs to show at least the following: <br>
    <ul>
        <li> Image (the first image, if none is available show a placeholder image of your choice)</li>
        <li> Title </li>
        <li>Product Type</li>
        <li> Creation Date (please format to DD.MM.YYYY)</li>
    </ul>
    <p>
        https://shopify.dev/api/admin-rest/2021-10/resources/product#resource-object displays the available properties.
    </p>

(3) In `routes\api.php`, create an epdoint that resolves to `/api/products` which calls the index() method of `App\Http\ProductController`. Name the route `api.products.index`. *Tip: Don't forget that all routes in this file already have the route prefix 'api/'.*<br><br>
(4) Get the products from the Shopify API. <br>
The requests to the ShopifyAPI should happen serverside. Therefore, the view needs to make a call to the route that we just created in (3). The index method of `App\Http\ProductController.php` should process the request and fetch the products. 
<br><br>
(5) Make sure that the products are loading as soon as the page is loaded and whenever the user enters a searchterm

The `resources\Pages\Products.vue` already shows a basic "blueprint" that you CAN use to save some time. 

## Tips
<ul>
    <li>We are not asking you to adhere to a specific coding principle, but please avoide duplicate logic in your methods and views and write your code as efficient as possible.</li>
    <li>Consider outsourcing frontend components (such as result areas and searchbars) to dedicated components and pass values and events.</li>
    <li>When calling any API, catch and log exceptions.</li>
</ul>
<br>

## How To Submit
Compile the assets
```bash
npm run build
```

<p>Please clone this repository and re-upload it to a github repository of your choice. Submit the link to this repository to us and invite this account (janhellopine) as collaborateur. </p>

Do not submit a pull request to this repository.

## Sidenotes
<ul>
    <li>
    The challenge is not a UX challenge. To save some time, we recommend that you use a snippets from the TailwindUI library to build the results area: https://tailwindui.com/components/ecommerce/components/product-lists (First two are accessible, just click on *Code*)
    </li>
    <li>
    If you are interested, checkout this awesome library from PHPClassic that we are using for interacting with Shopify. https://github.com/phpclassic/php-shopify
    </li>
</ul>

## Any Questions?
<p>
These instructions provide you with the level of granularity that you can expect from the tickets that you will receive in the future. If you still have any questions, feel free to reach out to jan@hello-pine.com at any time :)
</p>

<br><br>
# We can't wait to have you onboard 🚀
