import re

def validasi():
    username = 'adila'
    regex_username = "^([a-z]{5,9})$"
    comp_username = re.compile(regex_username)
    match_username = re.search(comp_username, username)
    
    if match_username:
        print("Username nya valid. ("+username+")")
    else:
        print("Username nya tidak valid. ("+username+")")
        
validasi()

def validasi2():
    username = 'adila123'
    regex_username = "^([a-z]{5,9})$"
    comp_username = re.compile(regex_username)
    match_username = re.search(comp_username, username)
    
    if match_username:
        print("Username nya valid. ("+username+")")
    else:
        print("Username nya tidak valid. ("+username+")")
        
validasi2()

def validasi_password():
    password = 'Adila123@'
    regex_password = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!#%*?&]{8,20}$"
    comp_password = re.compile(regex_password)
    match_password = re.search(comp_password, password)
    
    if match_password:
        print("Password nya valid. ("+password+")")
    else:
        print("Password nya tidak valid. ("+password+")")
        
validasi_password()

def validasi_password2():
    password = 'adilawww'
    regex_password = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!#%*?&]{8,20}$"
    comp_password = re.compile(regex_password)
    match_password = re.search(comp_password, password)
    
    if match_password:
        print("Password nya valid. ("+password+")")
    else:
        print("Password nya tidak valid. ("+password+")")
        
validasi_password2()