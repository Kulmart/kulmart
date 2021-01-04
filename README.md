# Kulmart Express 

[![Demo](https://img.shields.io/badge/demo-online-blue.svg)](https://kulmart.co.ke/)

## Introduction

Kulmart Express is a visionary online marketplace with millions of Shoppers, Thousands of Vendors and uncountable Agents.

## Getting Started

This system runs on the following:

- PHP > 7.0
- Laravel 6.X
- Mysql > 5.6 or MariaDB > 10

## System Setup

#### Database setup

- From your project root, import the database or run migrations use the commands: ```sh
php artisan migrate```
Then run DB Seeder
```sh 
php artisan db:seed
```


```sh
mysql -u'username' -p'pass' -h'127.0.0.1' -P'3306' \
db_name < shop.sql;

mysql -u'username' -p'pass' -h'127.0.0.1' -P'3306' \
db_name < sql/extra_tables.sql;
```

- Configure the database parameters located in: *Project_Root >
  .env*

#### Project Setup

- Install and update the project dependencies:

```sh
composer install && composer update
```

- To run the project, you can use PHP's in-built server:

```sh
# From the project root
php -S localhost:8000
```

You could always configure your server(e.g. Apache, Nginx, etc) to
serve the website from the project root.

# Deployment

Done manually for now.

# Project Workflow

Git is our version control system of choice and GitHub is our current
repository platform. Here is how we work with Git:

1. Generally we prefer branches over forks to ease internal collaboration.

2. When in doubt, use feature branches and gitflow as your branch
   naming scheme.

3. We have decided to adopt the Git Feature Branch Workflow.

4. Keep your repository clean; delete merged branches and avoid
   committing files specific to your dev environment (e.g. .DS_Store).

5. Follow this guidance about good commit messages.

6. Consider signing commits with a GPG key.

7. Feature branches have the following prefix: feature/.

8. Get your code approved by the project lead before pushing to master
   and deploying to production.

# Project Management Tool

Every project, no matter the size, should use a project management
tool to keep track of on-going tasks and to-do items. The project
management tool should be linked to somewhere in the project's GitHub
repository so that others can find it easily. In this project we use
GitHub issues. How these work are self explanatory.

# Documentation

Documentation is provided in the form of a README.md file which is
linked to relevant files. Alternatively, they can be found in the form
of wikis. As the project evolves further, we shall settle with one of
these. Documentation will always be ongoing as the project grows
further.

# Getting Help

In case of any assistance regarding the project, you can escalate the
issue on the project's issue board, or directly reach out to any
developer in our slack channel #devscrum(Ping any of the devs to get
an invite link).
