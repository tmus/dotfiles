#!/usr/bin/env sh

PS1="\[$(tput setaf 3)\]\$(git_info)\[$(tput sgr0)\]\[$(tput setaf 2)\]\$(dirs)\[$(tput sgr0)\]\n\[$(tput bold)\]$\[$(tput sgr0)\] "
