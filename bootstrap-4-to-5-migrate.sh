set -x # prints out command during execution
set -e # end the script if fails

migration_folder="views/" # folder of files with HTML tags to update classes to bootstrap 5

find_regex=".*/*.blade.php?" # to find all specific files with the set extension

ignore_path="*/$1node_modules/*" # ignore node_modules folder

# Back up your files or change sed argument -i to -i.bak to generate backup files
find $migration_folder -regextype posix-egrep -regex $find_regex -type f -not -path $ignore_path | xargs sed -i -E '/[(class)(")]/{
    s/data-/data-bs-/g
    s/([mp])l(-[0-5])/\1s\2/g
    s/([mp])r(-[0-5])/\1e\2/g
    s/no-gutters/g-0/g
    s/ close / btn-close /g
    s/arrow/popover-arrow/g
    s/arrow/popover-arrow/g
    s/left(-[0-9]*)/start\1/g
    s/right(-[0-9]*)/end\1/g
    s/(float|border|rounded|text)-left/\1-start/g
    s/(float|border|rounded|text)-right/\1-end/g
    s/font-weight(-[a-zA-Z]*)/fw\1/g
    s/font-style(-[a-zA-Z]*)/fst\1/g
}'
