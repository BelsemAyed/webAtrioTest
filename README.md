Overview
========

This web application is designed to manage information about employees and their employment history(Jobs). It provides basic functionality for demonstrating its operation.

Features
Manage Individuals: 
========
Allows users to create and store information about individuals, including their name, surname, and date of birth.

Manage Employment History:
========
Enables users to add employment history for individuals, including the name of the company and the position held, along with start and end dates.
API Endpoints:
========
Exposes RESTful API endpoints for interacting with the application's features. These endpoints can be accessed using tools like Postman.

Architecture: 
========
The application follows the API REST architecture pattern. It utilizes a framework with an ORM for database interaction.

Endpoints:
========

Save a New User:
========

Endpoint: POST /users/new
Description: Saves a new Use.
Request Body:
{
  "firstname": "John",
  "lastname": "Doe",
  "dateOfBirth": "1990-01-01"
}
![add new user](https://github.com/BelsemAyed/webAtrioTest/assets/66927021/91fc5c64-7878-4a49-956b-da7b0deda4d3)

Response: Returns the saved user's details if successful, or an error message if the age exceeds 150 years.
========

Add Job to an Individual:
========

Endpoint: POST /jobs/new
Description: Adds Job to an specific user.
Request Body:
json
{
  "companyName": "ABC Inc.",
  "jobPosition": "Software Engineer",
  "startDate": "2022-01-01",
  "endDate": "2023-01-01"
}
![post new job](https://github.com/BelsemAyed/webAtrioTest/assets/66927021/55df10e4-3ae7-406f-ab36-44e3a8b2c374)
![test age less then 150](https://github.com/BelsemAyed/webAtrioTest/assets/66927021/cefde3f2-5baa-4bd6-bbaa-fc187ca5715a)

Retrieve All users
========
Endpoint: GET /users
Description: Retrieves all users sorted alphabetically, including their age and current employment details.
![show all users](https://github.com/BelsemAyed/webAtrioTest/assets/66927021/548fc221-6727-41cb-9742-ce45d4d05b9e)

Retrieve Individuals by Company
========
Endpoint: GET /users/company/{companyName}
Description: Retrieves all users who have worked for a specific company.
![filter user by comapny name](https://github.com/BelsemAyed/webAtrioTest/assets/66927021/a7f5d935-6cfd-477d-a514-048f13f9b534)


Retrieve Employment History by Date Range
========
Endpoint: GET /jobs/users/{userId}?startDate={startDate}&endDate={endDate}
Description: Retrieves all employment history for an individual within a specified date range.
![filter jobs by user and date range](https://github.com/BelsemAyed/webAtrioTest/assets/66927021/3f5851d1-84ec-4d62-b716-a50ea7be00f0)

Application Structure
========
The application is structured to meet the requirements outlined above. It includes appropriate database tables, controllers, and services.


I used Twig for exposing API.
================
