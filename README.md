# Student_Connect
A web app designed to help College Freshman connect with fellow students to either find Study Mates or just someone to hang out with.
After you clone this project, do the following:
 
# to run
composer update

# install npm dependencies
npm install

# generate a key for your application
php artisan key:generate

# add the database connection config to your .env file
DB_CONNECTION=mysql
DB_DATABASE=chat_db
DB_USERNAME=root
DB_PASSWORD=

# run the migration files to generate the schema
php artisan migrate

# create an account on https://pusher.com and create a free app. then copy the keys into your .env file these can not be left blank or the application will not run 

PUSHER_APP_ID=your_pusher_app_id
PUSHER_APP_KEY=your_pusher_app_key
PUSHER_APP_SECRET=your_pusher_app_secret
PUSHER_APP_CLUSTER=your_pusher_cluster

# change the BROADCAST_DRIVER in your .env to pusher
BROADCAST_DRIVER=pusher


