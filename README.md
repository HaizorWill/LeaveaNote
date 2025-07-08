# We don't code, we fucking spaghetti it!
Small little project made for fun in 2 hours: basically a guest book or whatever you call it. Written in php, using composer and mongodb driver. All sources are available, use it as you wish, but not for production purposes as it is very insecure.

Little installation guide:
* Clone repo to your webserver's content directory, for example /var/www/LeaveaNote/
* Install php-fpm, preferrably 8.2+ and composer from https://getcomposer.org/, run composer install inside the project's directory
* Set up your web-server, don't forget fastCGI!
* Enjoy)

How to use in Docker:
* Clone repo to wherever it's more convinient and cd into this folder
* Run `docker build . -t leaveanote` and wait until build is complete
* Launch the container via docker run or docker compose however you like it. For example: `docker run -p 80:80 -e DB_URI=mongodb.example.com -d leaveanote:latest`


How it looks:
![image](https://github.com/user-attachments/assets/9e1cb420-0df7-4ea4-8764-22a909397c66)
