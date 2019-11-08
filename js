#!/usr/bin/env sh

# Add node binaries to the path.
export PATH=$PATH:node_modules/.bin

# Add changed npm global dir to path
# https://github.com/sindresorhus/guides/blob/master/npm-global-without-sudo.md
export PATH=$PATH:~/.npm-pkg/bin

# Uses Homebrew to install Node.js
function install_node() {
    echo 'Installing node and npm'
    brew install node
    echo 'node and npm installed'
}
