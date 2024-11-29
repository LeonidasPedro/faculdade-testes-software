#### roda o server
php -S localhost:8000 -t public/  

#### roda os testes
./vendor/bin/phpunit tests/

#### requisições 
curl -X POST http://localhost:8000/ \
-H "Content-Type: application/json" \
-d '{
  "name": "Fulano José Doe",
  "date": "2000-01-01"
}'


curl -X POST http://localhost:8000/ \
-H "Content-Type: application/json" \
-d '{
  "name": "Zé",
  "date": "2000-01-01"
}'
