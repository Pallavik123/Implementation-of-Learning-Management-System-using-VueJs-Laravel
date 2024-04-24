 ## Summary
A Learning Management System (LMS) developed using Laravel and Vue.js combines the backend power of Laravel with the dynamic frontend capabilities of Vue.js to create a dynamic platform for managing and delivering educational content .The system  provide communication between students and instructors through messaging systems, discussion forums, and announcements.



## Features
* Dashboard & Reports
* Course Learning Management Syatem
* Categories Management Syatem
* User Authentication and Management: 
* Enrollment and Registration
* Progress Tracking and Reporting 


## Future Scope
* Mobile Compatibility and Progressive Web App 
* Integration with Learning Tools Interoperability 


## Deployment Steps

1. Run cp .env.example .env file to copy example file to.env
Then edit .env file with DB credentials and other settings.
2. Run composer install command
3. Run php artisan migrate --seed command.

4. Run php artisan key:generate command.
5. Run npm install
6. Run npm run dev
7. If you have file/photo fields, run php artisan storage:link command.
   
## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
