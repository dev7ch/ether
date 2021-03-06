
# ETHER LUYA CMS Kickstarter

<img src="etherium_screenshot.png" />

## Features

* [LUYA CMS](https://luya.io) integration and easy extendability
* Full control from admin interface for all contents, images, sizes, color and layout behaviours
* Flexible sizable image gallery
* Multi language support
* Contact form integration with validation 
* SCSS and gulp worklfow included
* Horizontally scrolling for desktop 
* Vertical scrolling for mobile view
* more ...


## Installation

#### 1.) Fork Repo or clone from Git:

Clone the git repository into your web root folder.

```sh
git clone git@github.com:dev7ch/ether.git ether

```


#### 2.) Get all dependencies ready for setup via composer

Navigate to the new created project root.


```sh

composer install

```

> Find more detailed informations and help at [ LUYA CMS Install Guide](https://luya.io/guide/install).


#### 3.) Rename distributed config files and create database

Navigate from your project root into the <code> configs/ </code> folder.


```sh

cd configs 

cp env.php.dist env.php 
cp env-local-db.php.dist env-local-db.php 

```

Create a new, empty database and make sure that in <code><b> configs/env-local-db.php </b></code> the <b>user</b> and <b>password</b> for the database connection is properly set.

Rename example database in configs folder (optionally):

```sh

cp luya_ether_demo.sql.dist luya_ether_demo.sql

```

Import <code> luya_ether_demo.sql </code> into your previously created database.

> Of course you can start without a demo DB but it helps to see and understand the features of this theme.


#### 4.) Run LUYA CMS setup

As all went fine navigate back to your project root and run the LUYA CMS setup commands.

```sh

./vendor/bin/luya migrate
./vendor/bin/luya import

```

You could check the health of the cms system  like this:

```sh
./vendor/bin/luya health

```

Finally adding a new admin user to your cms is required to log in to the admin interface.


If you imported <code> luya_ether_demo.sql </code> use:

```sh 
./vendor/bin/luya admin/setup/user

```

If you started with an empty database simply run:


```sh 
./vendor/bin/luya admin/setup

```

Please have a look at the [Luya Guide](https://luya.io/guide) if you have any problems.


#### 5.) Done! Login to your new Website

If all went fine and no error's shown in Terminal head over to your 
new website.


- <code> http://localhost/ether/public_html </code>

- <code> http://localhost/ether/public_html/admin </code>


## Front-End

<b>Ether</b> is a modern, fully responsive theme designed by <a href="https://html5up.net">HTML5 UP</a>.  


### Libraries

These frontend libraries are included and available.

[» jQuery (yii\web\JqueryAsset)](http://www.yiiframework.com/doc-2.0/yii-web-jqueryasset.html)  
[» Fontawesome Icons](http://fontawesome.io/)  
[» Skell Responsive Framework](https://github.com/ajlkn/skel)  


### Compiling

We have created our own NPM Package that includes our gulp workflow.  
Inside the `resources/` folder, everything is prepared.

```sh
cd resources

npm install 
npm install gulp

```

See [zephir/zephir-gulp-workflow](https://github.com/zephir/zephir-gulp-workflow) for a full documentation of the workflow.

## Backend

### Assets

To speed up your local development you can uncomment the following lines in `configs/env-local.php` in order to use symlinking your assets instead of copy them every run.

```php
'assetManager' => [
    'class' => 'luya\web\AssetManager',
    'linkAssets' => true,
],
```

Now all assets will be symlinked and not copied.

> This will also enable CSS instant reload provided by `browserSync` (gulp).
