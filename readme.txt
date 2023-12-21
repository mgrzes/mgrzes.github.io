# Look for broken URLs

wget --spider -r -nd -nv -H --level 1 -w 2 -e robots=off -o run1.log https://www.cs.kent.ac.uk/people/staff/mg483/publications.php

grep -B1 'broken link!' run1.log


