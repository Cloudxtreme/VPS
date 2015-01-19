#!/bin/sh

LIST="/var/www/router/shadowsocks";

if [ -e $LIST/ignore.list ]; then
	mv -f $LIST/ignore.list $LIST/ignore.list.old

fi

while [ ! -s $LIST/ignore.list ]; do
	curl 'http://ftp.apnic.net/apnic/stats/apnic/delegated-apnic-latest' | awk -F\| '/CN\|ipv4/ { printf("%s/%d\n", $4, 32-log($5)/log(2)) }' > $LIST/ignore.list;
done

echo "100.100.100.100/32" >> $LIST/ignore.list;
python $LIST/scripts/ip.py >> $LIST/ignore.list;
cat $LIST/ip-cn $LIST/ip-ptc >> $LIST/ignore.list;
