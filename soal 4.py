import re

data = "993141 -1 1323 14-232"

apus1 = re.sub('-','',data)
apus2 = re.split('\s',apus1)
gabung1 = ''.join(apus2)
pisah = re.findall('.{1,4}',gabung1)
pisah[0:3] = [''.join(pisah[0:3])]
gabung2 = re.findall('.{3}',pisah[0])
gabung3 = re.findall('.{2}',pisah[1])
gabung4 = '-'.join(gabung2)+'-'
gabung5 = '-'.join(gabung3)
gabung6 = gabung4+gabung5
gabung7 = ''.join(gabung6)
print(gabung7)

#puyeng :(