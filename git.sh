#!/bin/bash
clear; cd ~/Github/jumi.biz

printf '\n### RECENT CHANGES ###\n'
git log -n 3 --oneline
printf '# FOR MORE DO "git log --graph --oneline --all"\n'

printf '\n### STATUS ###\n'
git status

printf '\n### REPOSITORY ###\n'
ls -R --tree --sort size *.* pages/*.htm assets/css assets/js

# Check for user input options
for arg in "$@"; do
    case $arg in
        a)
            git add .
            ;;
        c)
            read -p "Enter your commit message: " commit_message
            git commit -m "$commit_message"
            ;;
        p)
            git push
            ;;
        *)
            # Ignore other parameters
            ;;
    esac
done
