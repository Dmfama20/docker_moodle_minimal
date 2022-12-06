# Create your self-built Docker Moodle tesing environment  

This repository provides a minimal Moodle testing environment based on docker compose.

## Disclaimer

This deployment is **NOT** intended for a production environment. 
It is an reference implementation aimed at Moodle testers.

## How to start
1.) Clone this repository inside a folder

``git clone https://github.com/Dmfama20/docker_moodle_minimal.git minimal_moodle``

2.) Place your favourite moodle version inside the *moodle* folder. You can get it from [moodle.org](https://download.moodle.org/releases/latest/).

3.) Install moodle via browser 

OR

via CLI:

``docker exec -it hdocker_moodle-app  php admin/cli/install.php --lang=de --wwwroot=localhost --dataroot=/var/www/moodledata --dbtype=mariadb --dbhost=docker_moodle-db  --dbname=moodle --dbuser=moodledude --dbpass=mysecretpassword --prefix=mdl_ --fullname=moodle_minimal --shortname=moodle_minimal --adminpass=test --adminemail=admin@moodle.invalid --agree-license --non-interactive``

4.) Visit your moodle at http://localhost

