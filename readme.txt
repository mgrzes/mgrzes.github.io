# Look for broken URLs

wget --spider -r -nd -nv -H --level 1 -w 2 -e robots=off -o run1.log https://mgrzes.github.io/index.html
wget --spider -r -nd -nv -H --level 1 -w 2 -e robots=off -o run2.log https://mgrzes.github.io/publications.html
wget --spider -r -nd -nv -H --level 1 -w 2 -e robots=off -o run3.log https://mgrzes.github.io/reviewing.html
wget --spider -r -nd -nv -H --level 1 -w 2 -e robots=off -o run4.log https://mgrzes.github.io/contact.html

grep -B1 'broken link!' run1.log

