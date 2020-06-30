#!/bin/bash
#push, ssh, pull down from mtco github
# *** NOTE: BEFORE EXECUTING **** 
# Download .pem file from Google drive: Client Solutions > Website > themtco-key-pair.pem 
# Save to your computer. Substitute path below with path to the location of .pem file on your computer.

#push
# cd /Users/kathleenmartin/Desktop/mtco
git add .
git commit -m "new commit"
git push

#ssh into instance.
#change /Users/kathleenmartin/Downloads/themtco-key-pair.pem to the location of your pem file download.

sleep 5s

chmod  400 themtco-key-pair.pem

ssh -i themtco-key-pair.pem ec2-user@ec2-54-196-64-65.compute-1.amazonaws.com echo "ssh entered" ; cd var/www/html/mtco; git pull; ls

# ATTENTION: when you are in the instance, run ./pull.sh 

