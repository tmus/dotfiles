#!/usr/bin/env sh

# Add node binaries to the path.
export PATH=$PATH:node_modules/.bin

# Uses Homebrew to install Node.js
function install_node() {
    echo 'Installing node and npm'
    brew install node
    echo 'node and npm installed'
}
