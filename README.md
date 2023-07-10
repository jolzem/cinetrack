# CineTrack

Track your watched movies and series with this simple self-hosted php app.

## Installation

Install the dependencies `git curl mariadb-server php libapache2-mod-php php-mysql composer`
(Debian Package Names)

To become root enter:

`sudo su`

### As the **root** user run:

`rm -rf /var/www/html`

`git clone https://github.com/jolzem/cinetrack /var/www/html`

`cd /var/www/html`

`chmod +x deploy.sh`

`./deploy.sh`

This script will ask a few questions: Always choose whats recommended
(i. e. When it says "you can safely answer X" choose X, when it does not say anything hit enter to choose the default option.) and at the end, paste your TheMovieDB Access Token.

Finally enable and restart the `apache2` and `mariadb` Services.

For example on Debian or other SystemD based distros, run:

`systemctl enable apache2`

`systemctl enable mariadb`

`systemctl restart apache2`

`systemctl restart mariadb`

You should now be able to access your instance by entering the IP of your system into your browser.

## Contributing

Contributions are always welcome!

Feel free to open an issue or a pull request :)

## License

[GNU GPLv3](https://choosealicense.com/licenses/gpl-3.0/)

