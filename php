#!/usr/bin/env sh

# Include repo-specific vendor binary files.
export PATH=$PATH:vendor/bin

# Include composer global scripts, such as laravel-installer.
export PATH=$PATH:$HOME/.composer/vendor/bin

# Add an alias for composer.
alias c=composer

# Download Composer to the current directory.
function download_composer() {
    echo 'Downloading Composer'
    EXPECTED_SIGNATURE="$(curl -s https://composer.github.io/installer.sig)"
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    ACTUAL_SIGNATURE="$(php -r "echo hash_file('sha384', 'composer-setup.php');")"

    if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ]
    then
        >&2 echo 'ERROR: Invalid installer signature'
        rm composer-setup.php
        return 1
    fi

    php composer-setup.php --quiet
    RESULT=$?
    rm composer-setup.php
    echo 'Composer downloaded successfully'
    return $RESULT
}

function move_composer() {
    echo 'Moving Composer to /usr/local/bin'
    mv composer.phar /usr/local/bin/composer
    echo 'Composer moved to /usr/local/bin/composer'
}