#!/bin/bash
ssh-keygen -t rsa -b 2048 -N "" -f ~/.ssh/id_rsa -q
cat ~/.ssh/id_rsa.pub >> ~/.ssh/authorized_keys
