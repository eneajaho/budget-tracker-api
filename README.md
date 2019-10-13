# Budget Tracker Api
A budget tracker API built with Laravel 6
 
# [How To Use: Taskman Documentation](https://documenter.getpostman.com/view/6526771/SVtWvmj6?version=latest)

# Routes

### Authentication
- POST http://127.0.0.1:8000/api/register
- POST http://127.0.0.1:8000/api/login
- GET http://127.0.0.1:8000/api/details

### Categories
- GET http://127.0.0.1:8000/api/categories
- GET http://127.0.0.1:8000/api/categories/1

### Accounts
- GET http://127.0.0.1:8000/api/accounts
- POST http://127.0.0.1:8000/api/accounts
- PATCH http://127.0.0.1:8000/api/accounts/1

### Transactions
- GET http://127.0.0.1:8000/api/transactions
- GET http://127.0.0.1:8000/api/transactions/1
- POST http://127.0.0.1:8000/api/transactions
- PATCH http://127.0.0.1:8000/api/transactions/1
- DEL http://127.0.0.1:8000/api/transactions/1


# Database Schema
![DB Schema](https://i.imgur.com/oPlM7rv.png)

# Clone it in your machine
- Clone the repo
- Edit .env
- Generate key
```code
php artisan key:generate
```
- Migrate to database
```code
php artisan migrate --seed
```
- Install passport
```code
php artisan passport:install
php artisan passport:keys
```
