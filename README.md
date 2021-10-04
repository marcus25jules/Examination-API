# Examination-API

**Requirements**

- MySQL
- PHP 5+
- APACHE SERVER

**NOTE**
- This is Open API without Basic Authentication or OAuth2  

**DATABASE NAME**
 - db_examination


 
 **Run the following scripts to create table**
 
- CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(150) NOT NULL,
  `cust_code` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

- ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

- ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;






**BASIC FUNCTIONS**
- ADDING OF CUSTOMERS
- LISTING OF CUSTOMERS

**ADDING OF CUSTOMERS**
- **URL**: http://samplehost/api/customer
- **METHOD**: POST
- **PARAMS**:
	  - first_name
	  - last_name
	  - date_of_birth
	  - email
	  - phone_number
	  - address
- **RETURN**
- 	{
    "status": 1,
    "data": {
        "first_name": "FirstName",
        "last_name": "LastName",
        "date_of_birth": "1991-05-05",
        "email": "myeamil@email.com",
        "phone_number": "1234567890",
        "address": "505 San Pedro",
        "cust_code": "lastnamefirstname1991-05-05"
    }
}
     
**LISTING OF CUSTOMERS**
- **URL**: http://samplehost/api/customer
- **METHOD**: GET
- **PARAMS**: N/A
- **RETURN**
- 	[
    {
        "id": "1",
        "user_id": "1",
        "first_name": "Mark",
        "last_name": "Bayona",
        "date_of_birth": "2015-07-15",
        "email": "markanthony@email.com",
        "cust_code": "markbayona2015-07-15",
        "phone_number": "",
        "address": "dasdasdsd",
        "date_created": "2021-10-04 11:12:51"
    },
    {
        "id": "2",
        "user_id": "0",
        "first_name": "Joy",
        "last_name": "Dimapilis",
        "date_of_birth": "1991-05-05",
        "email": "joy@yahoo.com",
        "cust_code": "joydimapilis1991-05-05",
        "phone_number": "1234567890",
        "address": "San Matheo Rizal",
        "date_created": "2021-10-04 06:37:00"
    },
}  
  

