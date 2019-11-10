#!/bin/bash

IP=$(/sbin/ip route | awk '/default/ { print $3 }')
echo $IP
