# Aspire_Laravel_Loan_Api
Laravel Aspire Api includes Passport auth Register api, Login Api, Loan create and payment api

Step:1
cd laravel-passport-aspire-loan-api

Step2:
Configure your database from .env file
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Step:3
composer install

Step:4
php artisan migrate

step:5
php artisan serve

**Laravel Aspire Api List:**
**1. Register Api**

 Url: http://localhost:8000/api/register
 
 method: POST

 Parameter:
 form-data: 
 name:Anas
 email:anas@gmail.com
 password:12345678!


**Response:**
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiYTdkMjZkYTk2MGFmMzAwZTJmOWFjNGU2MjAxZTU0ZjM4MTBlMmNjMmY3ZTBhOWE5ZjgyMDQ3NTNhNWJkZmI5OTBkYzE5OGY3ZWNhZmQ3MjUiLCJpYXQiOjE2NjQyNTI3OTYsIm5iZiI6MTY2NDI1Mjc5NiwiZXhwIjoxNjk1Nzg4Nzk2LCJzdWIiOiIxMiIsInNjb3BlcyI6W119.QdnS1wwAd35VY81ADx3djlstG9PONffKvJAcUUZ8x2G2Up_C3nphqB0KMjBPlWnG02F8j3slaM_j-g-c-f5mr5mtksJ9Y6CDq99wdF9zBEoqJVIERJA_idD1SdA1g4-foskoH6c4zQmWOexKN3P-F0l9CsQoSEQaha0cOxV83lfQBNTOv0FNkvHiG3dmct7pTUVLVnKsKQkacvO2zLvSAdZX2EcYaLfjfMPdSKaZGYB9hLzKeA5YXuxBn77TXmpvXs1QU2kaB0UTwLMLZchh9QKMduIWh9sB4zvzpLKrI7rqWnxyfw2dciuMukGH0pyYceLodTVXtLxADOWHqFEJcbyJqVvX9f25xkG8XhV0GMaJ4HGQXWfLT3GfULfyxnh2GMgZ0AoXH70D0rBhoNd-vrrsHcoquG2LzXqYJLz9ntuGHDOvcC4r0I6HDObJRF48_7ABtHrBL1Tg3yQdAi9_Chvz9DUBSZ0n9fimapvnTZulNVovM_PJnvnRE68SVgOhRzd7PW-90scCgLGXwKXJEilT7SZJlZ8CKUoYvmYRC_cmaGiZHOsQqPgRvvM7qBDs9FYYqH4KOA_mhgl28zMblopHl9IQ8QohavZINkS0Y6wu8N2f2nbs92h5ZZ0wzvN4iiGsj24kuecxHfuTUATRc4kQXiJUizeVVUHX-fEzZb0"
}
![Passport_auth_register_postman](https://user-images.githubusercontent.com/7964507/192444379-d0ade28b-676f-4c99-8b3d-040a4daad17b.png)

**2. Login Api:**

Url: http://localhost:8000/api/login

method: POST

parameter:
form-data: 
email:anas@gmail.com
password:12345678

**Response:**
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiNDI1Y2YxY2ZmYzc4NTY5Y2VmOTNjODk1NjIxMTU1NDI4ODU0YTE5MTQxNzY5ZDM5YmUxN2VhZDNkYWFhNzg0N2RjM2QzMTZmYmU2NDhlZWUiLCJpYXQiOjE2NjQyNTI4MDYsIm5iZiI6MTY2NDI1MjgwNiwiZXhwIjoxNjk1Nzg4ODA2LCJzdWIiOiIxMiIsInNjb3BlcyI6W119.Zoa9JfhX9rtgqdL-7QIimHpW428znsIVD8hV4xeiVwCD0ckcKZPM5RUi54hY3YzagYYfQfclNYjRDsqveF1zyuHYs1n1wZWu11-gycA2tg2BHpNsG63h43-gowFEq4U6PDjaD5QHN1Mshpj9GI35TRd397DN9yvHyFFn3hIM4HNFLeLh8frmRYS8a_uxoVN1ztGgKdLfwZ0VrYIw0iDdO65sw8M2cOxzbmVrcBgCiecWUyUYXNAHMMqbLRRDeTRGjdFCs4ghyo5s2bkE3lqzqasAaZ98g2KFD2MxLcQ_qO4x3U3dOrRdYDfzWUIW-6CtV_fj8ohLgSQHeBnulkjiVp7dCsTgYMRkNypgSxAVoyLbflqW40QX2di9r9nlhy12NemWyzAr8B6YHs3VyMo47CMomJG_4WVc_Es-FWj8xxcvHDQfPYxUDIm-1hIMEwb9bcFEK1S1CCHNALjtVHbTsHC0677LZZNGmmsKvLmRmOVlkAN1NFRkNgzwrU089O94e4sZqVfZgXTg6tdRslkfUFJpT2eoSi4YrQ002s14tIBBpqxAgbT2ULTcqw4ByxFC0ZSzbbtBtQt6-2n3BnBl2V57Q0HqtEYR99YxyKqYDCV2f-tO0EEH3fwcQPMR6raB75d-PMg_o7rxSlezEAEoKfOk-G3ojDGoODMvJuGGuXM"
}
![Passport_auth_login_postman](https://user-images.githubusercontent.com/7964507/192444461-57ac9214-ac28-45bf-aad1-56cfc6904d93.png)


**3. Create Loan Api:**

Url: http://localhost:8000/api/loans
method: POST

Parameter:
form-data:
amount:25000
duration:8
repayment_freq:Monthly
interest_rate:5
arr_fee:1.5

Auth:
Bearer Token = eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiNDI1Y2YxY2ZmYzc4NTY5Y2VmOTNjODk1NjIxMTU1NDI4ODU0YTE5MTQxNzY5ZDM5YmUxN2VhZDNkYWFhNzg0N2RjM2QzMTZmYmU2NDhlZWUiLCJpYXQiOjE2NjQyNTI4MDYsIm5iZiI6MTY2NDI1MjgwNiwiZXhwIjoxNjk1Nzg4ODA2LCJzdWIiOiIxMiIsInNjb3BlcyI6W119.Zoa9JfhX9rtgqdL-7QIimHpW428znsIVD8hV4xeiVwCD0ckcKZPM5RUi54hY3YzagYYfQfclNYjRDsqveF1zyuHYs1n1wZWu11-gycA2tg2BHpNsG63h43-gowFEq4U6PDjaD5QHN1Mshpj9GI35TRd397DN9yvHyFFn3hIM4HNFLeLh8frmRYS8a_uxoVN1ztGgKdLfwZ0VrYIw0iDdO65sw8M2cOxzbmVrcBgCiecWUyUYXNAHMMqbLRRDeTRGjdFCs4ghyo5s2bkE3lqzqasAaZ98g2KFD2MxLcQ_qO4x3U3dOrRdYDfzWUIW-6CtV_fj8ohLgSQHeBnulkjiVp7dCsTgYMRkNypgSxAVoyLbflqW40QX2di9r9nlhy12NemWyzAr8B6YHs3VyMo47CMomJG_4WVc_Es-FWj8xxcvHDQfPYxUDIm-1hIMEwb9bcFEK1S1CCHNALjtVHbTsHC0677LZZNGmmsKvLmRmOVlkAN1NFRkNgzwrU089O94e4sZqVfZgXTg6tdRslkfUFJpT2eoSi4YrQ002s14tIBBpqxAgbT2ULTcqw4ByxFC0ZSzbbtBtQt6-2n3BnBl2V57Q0HqtEYR99YxyKqYDCV2f-tO0EEH3fwcQPMR6raB75d-PMg_o7rxSlezEAEoKfOk-G3ojDGoODMvJuGGuXM

**Response:**
{
    "success": true,
    "data": {
        "amount": "25000",
        "duration": "8",
        "repayment_freq": "Monthly",
        "interest_rate": "5",
        "arr_fee": "1.5",
        "user_id": 12,

        "updated_at": "2022-09-27T04:35:02.000000Z",
        "created_at": "2022-09-27T04:35:02.000000Z",
        "id": 5
    }

}
![Passport_auth_create_loan_withreponse_postman](https://user-images.githubusercontent.com/7964507/192444541-d0adc26c-d63f-46fd-a9a2-9ce997205f35.png)
![Passport_auth_create_loan_set_bearer_token_postman](https://user-images.githubusercontent.com/7964507/192444612-9969a576-6b8e-46b9-a4b3-2072f8619e85.png)

**4. Repayment Api:**
Url: http://localhost:8000/api/repayment/4
method: POST
Parameter:
form-data:
amount:25000
Auth:
Bearer Token = eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiNDI1Y2YxY2ZmYzc4NTY5Y2VmOTNjODk1NjIxMTU1NDI4ODU0YTE5MTQxNzY5ZDM5YmUxN2VhZDNkYWFhNzg0N2RjM2QzMTZmYmU2NDhlZWUiLCJpYXQiOjE2NjQyNTI4MDYsIm5iZiI6MTY2NDI1MjgwNiwiZXhwIjoxNjk1Nzg4ODA2LCJzdWIiOiIxMiIsInNjb3BlcyI6W119.Zoa9JfhX9rtgqdL-7QIimHpW428znsIVD8hV4xeiVwCD0ckcKZPM5RUi54hY3YzagYYfQfclNYjRDsqveF1zyuHYs1n1wZWu11-gycA2tg2BHpNsG63h43-gowFEq4U6PDjaD5QHN1Mshpj9GI35TRd397DN9yvHyFFn3hIM4HNFLeLh8frmRYS8a_uxoVN1ztGgKdLfwZ0VrYIw0iDdO65sw8M2cOxzbmVrcBgCiecWUyUYXNAHMMqbLRRDeTRGjdFCs4ghyo5s2bkE3lqzqasAaZ98g2KFD2MxLcQ_qO4x3U3dOrRdYDfzWUIW-6CtV_fj8ohLgSQHeBnulkjiVp7dCsTgYMRkNypgSxAVoyLbflqW40QX2di9r9nlhy12NemWyzAr8B6YHs3VyMo47CMomJG_4WVc_Es-FWj8xxcvHDQfPYxUDIm-1hIMEwb9bcFEK1S1CCHNALjtVHbTsHC0677LZZNGmmsKvLmRmOVlkAN1NFRkNgzwrU089O94e4sZqVfZgXTg6tdRslkfUFJpT2eoSi4YrQ002s14tIBBpqxAgbT2ULTcqw4ByxFC0ZSzbbtBtQt6-2n3BnBl2V57Q0HqtEYR99YxyKqYDCV2f-tO0EEH3fwcQPMR6raB75d-PMg_o7rxSlezEAEoKfOk-G3ojDGoODMvJuGGuXM

**Response:**
{
    "success": true,
    "data": {
        "loan_id": 4,
        "amount": "1000",
        "user_id": 12,
        "updated_at": "2022-09-27T05:00:17.000000Z",
        "created_at": "2022-09-27T05:00:17.000000Z",
        "id": 11
    }
}

**5. Loan list by user:**

Url: http://localhost:8000/api/loans
method: GET
Auth:
Bearer Token = eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiNDI1Y2YxY2ZmYzc4NTY5Y2VmOTNjODk1NjIxMTU1NDI4ODU0YTE5MTQxNzY5ZDM5YmUxN2VhZDNkYWFhNzg0N2RjM2QzMTZmYmU2NDhlZWUiLCJpYXQiOjE2NjQyNTI4MDYsIm5iZiI6MTY2NDI1MjgwNiwiZXhwIjoxNjk1Nzg4ODA2LCJzdWIiOiIxMiIsInNjb3BlcyI6W119.Zoa9JfhX9rtgqdL-7QIimHpW428znsIVD8hV4xeiVwCD0ckcKZPM5RUi54hY3YzagYYfQfclNYjRDsqveF1zyuHYs1n1wZWu11-gycA2tg2BHpNsG63h43-gowFEq4U6PDjaD5QHN1Mshpj9GI35TRd397DN9yvHyFFn3hIM4HNFLeLh8frmRYS8a_uxoVN1ztGgKdLfwZ0VrYIw0iDdO65sw8M2cOxzbmVrcBgCiecWUyUYXNAHMMqbLRRDeTRGjdFCs4ghyo5s2bkE3lqzqasAaZ98g2KFD2MxLcQ_qO4x3U3dOrRdYDfzWUIW-6CtV_fj8ohLgSQHeBnulkjiVp7dCsTgYMRkNypgSxAVoyLbflqW40QX2di9r9nlhy12NemWyzAr8B6YHs3VyMo47CMomJG_4WVc_Es-FWj8xxcvHDQfPYxUDIm-1hIMEwb9bcFEK1S1CCHNALjtVHbTsHC0677LZZNGmmsKvLmRmOVlkAN1NFRkNgzwrU089O94e4sZqVfZgXTg6tdRslkfUFJpT2eoSi4YrQ002s14tIBBpqxAgbT2ULTcqw4ByxFC0ZSzbbtBtQt6-2n3BnBl2V57Q0HqtEYR99YxyKqYDCV2f-tO0EEH3fwcQPMR6raB75d-PMg_o7rxSlezEAEoKfOk-G3ojDGoODMvJuGGuXM

**Response:**
{
    "success": true,
    "data": [
        {
            "id": 4,
            "user_id": 12,
            "amount": 20000,
            "duration": 8,
            "repayment_freq": "Monthly",
            "interest_rate": 5,
            "arr_fee": 1.5,
            "status": "Pending",
            "created_at": "2022-09-27T04:27:25.000000Z",
            "updated_at": "2022-09-27T04:27:25.000000Z"
        }
    ]
}
