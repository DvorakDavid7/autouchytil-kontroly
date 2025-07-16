#!/bin/bash

domain="gregstrends.com"
project_name="autouchytil-kontroly"
user="u308982183"
host="195.35.49.26"
port="65002"
private_key="~/.ssh/hostinger_deploy_key"

rsync -avz --delete \
    --exclude='node_modules' \
    --exclude=".git" \
    -e "ssh -i $private_key -p $port" \
    . "$user@$host:/home/$user/domains/$domain/$project_name"
