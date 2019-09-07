import json

info = {'name':'Adila Tresna Putra','age':22,'address':'Pemalang, Jawa Tengah','hobbies':['bersepeda'],'is_married':False,'list_school':[{'id':1,'name_school':'Universitas Dian Nuswantoro'},{'id':2,'year_in':2015},{'id':3,'year_out':2019},{'id':4,'major':'Sastra Inggris'}],'skills':[{'id':1,'skill_name':'Web Developer'},{'id':2,'level':'Beginner'}],'interest_in_coding':True}

def retjson():
    python2json = json.dumps(info)
    print(python2json)
retjson()
