php artisan config:cache

tạo file migration
php artisan make:migration create_tests_table
đồng bộ file migration
php artisan migrate
xóa file migration 
php artisan migrate:rollback

tạo dữ liệu mẫu 
php artisan db:seed
tạo dữ liệu mẫu và reset toàn bộ 
php artisan migrate:fresh --seed
tạo ra từng seed riêng ứng vs db
php artisan make:seeder UserSeeder

sử dụng factory để tạo dữ liệu mẫu 
php artisan make:factory StudentsFactory --model=Students


php artisan make:controller ProdctController

php artisan make:model Product

php artisan make:controller Api/ProductController --api

php artisan make:resource ProductResource
