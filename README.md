# NGO Website
A full-stack website created using HTML, CSS & Bootstrap, JS for front-end and MySQL, PHP for backend. Implemented using XAMPP.
 
  
## Steps to run the website on your PC:

1) Make sure your XAMPP is upto date (version 3.2.4 and above).
2) After downloading this project, move this folder to C:\xampp\htdocs
3) Start your Apache and MySQL server. (MySQL PORT: 3307)
4) Import the ngo.sql in your PHPMyAdmin. 
5) Then run this folder in your browser via your http://localhost/<FOLDER_NAME>/index.php

PS: To run admin side, go to the LOGIN Page, and click on "Click here for admin login".




Problem Statement: The main aim of this project is to give back to society by volunteering or by donating.

CLIENT SIDE:
1) The website has a fully funcitoning signup and login page where a user can register, either to donate or to volunteer. 
2) The user can volunteer at numerous events conducted by the various chapters of this NGO, by registering as a volunteer on our portal. 
3) Every user will also have their own dashboard displaying all their information, the chapters they are part of, and the events they volunteered in. 
4) It informs the user when and where the event is conducted, i.e the date, time and location of the event is stored. 
5) We are also providing the user with a comprehensive description of each event that is being conducted by that respective chapter. 

ADMIN SIDE:
1) The admin can login only by a pre-registered login credentials for security purposes.
2) The admin can schedule a new event or delete a pre-existing event conducted by an NGO, where the events show up dynamically on the events page.
3) Once an event is conducted, the event automatically moves to the past event.
4) The admin has an access of the list of users who volunteered and donated to the NGO.
