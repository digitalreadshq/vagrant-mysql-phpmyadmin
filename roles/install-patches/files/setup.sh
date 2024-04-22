#!/bin/bash

echo "Please enter a current password:"
read current_pw

echo "Please enter a new password:"
read new_pw

echo "Current Password: $current_pw"
echo "New Password: $new_pw"

sudo mysql -uroot -p$current_pw --connect-expired-password -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '$new_pw';"
