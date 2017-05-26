#!/bin/bash

/sbin/ifconfig $(netstat -nr | tail -1 | awk '{print $NF}') | awk -F: '/inet /{print $2}' | cut -f1 -d ' '
