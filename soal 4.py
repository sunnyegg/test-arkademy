import re

data = "993141 -1 1323 14-232"

apus1 = re.sub('-','',data)
apus2 = re.split('\s',apus1)
gabung1 = ''.join(apus2)
gabung2 = re.findall('.{1,3}',gabung1)
gabung3 = '-'.join(gabung2)
print(gabung3)