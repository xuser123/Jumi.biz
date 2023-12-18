#!/bin/bash

clear; cd ~/Github/jumi.biz

while true; do
	clear
	printf '\n# RECENT CHANGES\n' | lolcat
	git log -n 3 --oneline
	#printf '# FOR MORE DO "git log --graph --oneline --all"\n'
	printf '\n## STATUS\n' | lolcat
	git status
	sleep 5
done
