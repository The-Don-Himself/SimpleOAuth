# Simple OAuth

This repository contains sample code to implement a simplified OAuth system in PHP using MongoDB and MySQL. You can read more about it in the article [Simple OAuth With MongoDB & MySQL](https://campus-discounts.com/articles/13) which I suggest you read first.

The code here is based on the  nifty [Embersy](https://github.com/campus-discounts/embersy) kickstart package for building ambitious web app. You can download that package and replace the backend with this one.

## Intro

This repo contains the backend code for a sample blog app. The app has a user base and allows third party apps to hook into system and perform actions on users behalf. 


## Databases

The app uses MySQL and MongoDB only but can be easily extended to add support for Redis to cache MySQL and Elasticsearch for, well you know, search.

## Frameworks & Libraries

The backend is powered by Symfony and uses Doctrine ORM and Doctrine ODM to persist and query data. A listener is also bounded to some Doctrine ODM query events to automatically populate query results with data via Doctrine ORM. 

## Prerequisites

You'll need the following:
* [Git](https://git-scm.com/downloads)
* [PHP](http://php.net/downloads.php)
* [Composer](https://getcomposer.org/download/)
* [MongoDB](https://www.mongodb.com/download-center)
* [MySQL](https://dev.mysql.com/downloads)

## 1. Clone the sample app

Now you're ready to start working with the app. Clone the repo and change the directory to where the sample app is located.
  ```
git clone https://github.com/campus-discounts/SimpleOAuth
cd SimpleOAuth
  ```

## 2. Run the app locally

Install dependencies
```
php composer.phar install
```

Create MySQL Database, Tables & Indices 
```
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
```

Create MongoDB Database, Collections & Indices 
```
php bin/console doctrine:mongodb:schema:create 
php bin/console doctrine:mongodb:schema:update 
```

Run the app
  ```
php bin/console server:run
  ```

Backend is available at: http://localhost:8000

Dev environment is by default protected using basic auth with credentials

username: backendadmin
password: backendpassword
  
## 3. Getting started

* Please take a look at the source code, it is heavily commented alternatively visit http://localhost:8000/api/doc to get an overview of some of the api endpoints

Create a sample user by posting data to endpoint http://localhost:8000/api/accounts

Create an app developer profile by posting data to endpoint http://localhost:8000/api/developers

Use developer profile to create an app by posting data to endpoint http://localhost:8000/api/developers/{developer_id}/apps

Create a sample blog article by posting data to endpoint http://localhost:8000/api/articles

Add to article by posting data to endpoint http://localhost:8000/api/articles/{article_id}/comments

Install an app by posting data to endpoint http://localhost:8000/api/apps/{app_id}/install

Try use app to post a new comment by posting a mutation to endpoint http://localhost:8000/graphql

Notice that permissions were denied.

Add permissions to app as described in the article.

Try posting the comment again and notice success this time.
