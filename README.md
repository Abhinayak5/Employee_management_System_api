# Employee_management_System_api
1)create DB -->employee_management
2)php artisan migrate
3) php artisan db:seed --class=RolesTableSeeder (to get the roles)

4)Register -> for employer
http://127.0.0.1:8000/api/register

Role_id will be 1
 form -data 
name:abhi
email:abhi3@gmail.com
password:abhi3@gmail.com
phone:7777777777777
address:abc
role_id:1


Register -> for employee
http://127.0.0.1:8000/api/register

Role_id will be 2
form -data 
name:abhi
email:abhi4@gmail.com
password:abhi4@gmail.com
phone:7777777777777
address:abc
role_id:2
LOGIN
For employee and employer
http://127.0.0.1:8000/api/login
 
 
FOR Employee details
http://127.0.0.1:8000/api/employee_details/ 

All the employee details will be shown

Copy the token and add in bearer token in authorization

Also add accept as application/json in headers

 
 
