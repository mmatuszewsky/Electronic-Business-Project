import json
import sys


class Course:
    def __init__(self, title, description, author, rating, price, imageSource, length, level, URL):
        self.imageSource = imageSource
        self.title = title
        self.desciption = description
        self.category = None
        self.subcategory = None
        self.author = author
        self.rating = rating
        self.price = 'Darmowy'if price == 'Free' else price[2:] + ' zł'
        self.level = 'Wszystkie poziomy' if level == 'All Levels' \
                else ('Początkujący' if level == 'Beginner' \
                else ('Średnio zaawansowany' if level == 'Intermediate' \
                else 'Ekspert'))
        self.length = length[0:length.find(' ')] + ' godzin(y)' if length[len(length)-5:len(length)] == 'hours' \
                else (length[0:length.find(' ')] + ' godzina' if length[len(length)-4:len(length)] == 'hour' \
                else (length[0:length.find(' ')] + ' minut' if length[len(length)-4:len(length)] == 'mins' \
                else length))
        self.URL = URL
        self.extendedDescription = None

    def setCategory(self, category):
        self.category = category

    def setSubcategory(self, subcategory):
        self.subcategory = subcategory

    def setExtendedDescription(self, extendedDescription):
        self.extendedDescription = extendedDescription

    def makeJSON(self):
        dataString = {}
        dataString['title'] = self.title
        dataString['description'] = self.desciption
        dataString['author'] = self.author
        dataString['category'] = self.category
        dataString['subcategory'] = self.subcategory
        dataString['rating'] = self.rating
        dataString['price'] = self.price
        dataString['imageSource'] = self.imageSource
        dataString['length'] = self.length
        dataString['level'] = self.level
        dataString['URL'] = self.URL
        dataString['extendedDescription'] = self.extendedDescription
        return dataString
