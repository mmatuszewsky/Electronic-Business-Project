import json

with open("objectsInJSON.txt", 'r', encoding='utf-8') as file:
    data = file.readlines()
    for course in data:
        course = eval(course)
        # getting to all fields from string:
        # title, description, author, category, subcategory, rating,
        # price, imageSource, length, level, URL, extendedDescription
        print(course['title'])
        print(course['level'])

file.close()