count_vowels=input("Masukkan Tulisan: ")
vowels=0
for i in count_vowels:
      if(i=='a' or i=='e' or i=='i' or i=='o' or i=='u' or i=='A' or i=='E' or i=='I' or i=='O' or i=='U'):
            vowels=vowels+1
print("Jumlah vowel: "+str(vowels))