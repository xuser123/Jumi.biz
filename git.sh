#!/bin/bash

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

clear; cd ~/Github/jumi.biz

printf '\n# git.sh OPTIONEN: a [git add], c [commit] p [push]\n'
printf '\n## RECENT CHANGES\n### FOR MORE DO "git log --graph --oneline --all"\n'
git log -n 3 --oneline

printf '\n#### STATUS\n'
git status
