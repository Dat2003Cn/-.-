php artisan config:cache


php artisan make:migration create_tests_table

php artisan migrate

php artisan migrate:rollback

tạo dữ liệu mẫu 
php artisan db:seed

php artisan make:seeder UserSeeder

sử dụng factory để tạo dữ liệu mẫu 
php artisan make:factory StudentsFactory --model=Students


php artisan make:controller ProdctController

php artisan make:model Product

php artisan make:controller Api/ProductController --api

php artisan make:resource ProductResource
GET POST GET PUT 