#!/bin/bash
interval=60
jobname="simplejob"
cmd="/usr/bin/php job.php"
if [[ $2 =~ ^[1-9][0-9]*$ ]]; then
    interval="$2"        
fi
if [ "$1" = "start" ]; then	
	python scheduler.py -i$interval -j$jobname start $cmd > $jobname.log 2>&1 &
elif [ "$1" = "stop" ]; then
	python scheduler.py -j$jobname stop
fi
