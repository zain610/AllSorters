# AllSorters
#### Built by Team Elite Solutions (Team 106) as part of Monash's Industry Experience Project. 


[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A CakePHP application built for a well established organisation in the Old Aged care industry providing services to senior citizens. Some of the services include but not limited to:
1. Home Organisation
2. Cleaning
3. Item Sorting
4. Moving

## Features
1. Client Side Web Interface
    1. List Services offered, Blogs, About Us and other pages...
    2. Custom gallery displaying images of her work
    3. Built forms for contact pages and providing testimonials from clients. 
2. Admin Dashboard
    1. Portal to manage all content displayed on the Client Side.
    2. Manage subscriptions to her blog and also be able to publish blogs directly to Facebook using custom built plugin. 
    3. Built a simple CRM enabling our client (AllSorters) to communicate with their customers.
    
    
## Tech Stack
#### Front End 
- HTML
- CSS
- JavaScript
- Bootstrap V4
#### Back End
- Server Side: CakePHP
- Database: MySQL
#### Project Management
- Version Control: Gitlab
- Task Management: Trello
- Document Storage: Google Drive
- UML and UI designs: Lucid charts

## Preview
[Link](https://www.google.com)



## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
