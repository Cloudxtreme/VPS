from functools import reduce
from math import log, ceil

def x(ip):
	ip_set = ip.split(".")
	int_ip = sum([int(ip_set[-i]) << (i - 1) * 8 for i in xrange(1, 5)])

	return int_ip
    
def r_x(int_ip):
	return "%d.%d.%d.%d" % ((int_ip & 0xFF000000) >> 24,
							(int_ip & 0x00FF0000) >> 16,
							(int_ip & 0x0000FF00) >> 8,
							int_ip & 0x000000FF)
    

def get_result(l):
	int_ip_set = map(x, l)
	mask = reduce(lambda x, y: x ^ y, int_ip_set)
	mask = int(ceil(log(mask, 2)))

	print "%s/%d" % (r_x(x(l[0]) & (2 ** 32 - 1) << mask), (32 - mask))

# BandwagonHost
input	=	['104.224.134.229', '104.224.136.205']

# XVM Labs
input2	=	['104.128.92.146', '104.128.92.246', '104.128.93.119', '104.128.94.204']

# Linode Tokyo
input3	=	['106.186.115.1', '106.187.95.148']

# DigitalOcean SGP
input4	=	['128.199.192.1', '128.199.236.18']

# Neobux
input5	=	['103.28.248.91', '103.28.249.91']

get_result(input)
get_result(input2)
get_result(input3)
get_result(input4)
get_result(input5)
