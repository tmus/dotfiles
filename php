#!/usr/bin/env sh

# Include repo-specific vendor binary files.
export PATH=$PATH:vendor/bin

# Include composer global scripts, such as laravel-installer.
export PATH=$PATH:$HOME/.composer/vendor/bin

# Add an alias for composer.
alias c=composer