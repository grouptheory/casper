#!/bin/csh -f

cd /var/www/html/casper/admin/dataprocessing/

setenv BASE `echo $1 | sed -e 's+.pdf++' | sed -e 's+.PDF++'`
setenv FNAME "$BASE.log"

echo "**********    "`date` >> logs/$FNAME
echo "**********    Running load-prof.sql, showing added rows:" >> logs/$FNAME
mysql -u root --password="b1l4l\!sql" < ./scripts/load-prof.sql


