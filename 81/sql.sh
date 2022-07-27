#!/bin/bash
mysql <<EOF 2>/dev/null
    create database 2web;
    use 2web;
    source /root/2web.sql;
EOF