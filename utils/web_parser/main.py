from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.remote.webelement import WebElement
from selenium.common.exceptions import NoSuchElementException
from selenium.common.exceptions import TimeoutException
import time
import json
import os
from course import Course


# Web Driver configuration
PATH = "C:\Program Files (x86)\chromedriver.exe"
driver = webdriver.Chrome(PATH)
coursesList = []

# getting pages URLs
f = open("URL.txt", "r")
URLs = []
for x in f:
    URLs.append(x)
f.close()

# searching through each page from file and through each subpage (< 1 2 3 ... 7 >)
for URL in URLs:
    emptyPage = False # means that the page number is out of range and there is no more content on this page
    subpageCounter = 1
    while not emptyPage:
        print(URL+'&p='+str(subpageCounter))
        driver.get(URL+'&p='+str(subpageCounter))
        subpageCounter += 1
        try: # element with this class name is a big container for all smaller divs. If it is not present then there is no content on the page
            WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, 'course-list--container--3zXPS')))
            container = driver.find_element_by_class_name('course-list--container--3zXPS')
            coursesBiggerDivs = container.find_elements_by_class_name('browse-course-card--link--3KIkQ')
            courses = container.find_elements_by_class_name('course-card--container--3w8Zm')
            driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
            counter = 0
            for course in courses: # each course we convert into an object of 'Course' class (data extraction)
                title = course.find_element_by_class_name('udlite-heading-md').text
                desc = course.find_element_by_class_name('udlite-text-sm').text
                author = course.find_element_by_class_name('udlite-text-xs').text

                try:
                    spanElement = course.find_element_by_css_selector('span.star-rating--rating-number--3lVe8')
                except NoSuchElementException:
                    ratings = 'Brak ocen'
                else:
                    ratings = spanElement.text

                try:
                    details = course.find_elements_by_css_selector('span.course-card--row--1OMjg')
                    courseLength = details[0].text
                    courseLevel = details[len(details)-1].text
                except NoSuchElementException:
                    print("Brak dodatkowych informacji")
                    courseLength = 'Brak informacji'
                    courseLevel = 'Brak informacji'

                try:
                    image = course.find_element_by_class_name('course-card--course-image--2sjYP')
                    ActionChains(driver).move_to_element(image).perform()
                    imageSourceURL = image.get_attribute('src')
                except NoSuchElementException:
                    print("Brak zdjęcia")
                    imageSourceURL = 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.smarthome.com.au%2Faeotec-z-wave-plug-in-smart-switch-6.html&psig=AOvVaw33Vx1wP6a3B3QAn_6WPe4A&ust=1602514347326000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNitsanlrOwCFQAAAAAdAAAAABAE'

                try:
                    priceDiv = course.find_element_by_css_selector('div.price-text--price-part--Tu6MH')
                    ActionChains(driver).move_to_element(priceDiv).perform()
                    spans = priceDiv.find_elements_by_tag_name('span')
                    price = spans[len(spans) - 1].text
                except NoSuchElementException:
                    price = 'Brak ceny'

                try:
                    courseLink = coursesBiggerDivs[counter].get_attribute('href')
                except NoSuchElementException:
                    courseLink = None

                counter += 1
                c = Course(title, desc, author, ratings, price, imageSourceURL, courseLength, courseLevel, courseLink)
                coursesList.append(c)

        except TimeoutException:
            print('[INFO] Ostatnia podstrona adresu URL')
            emptyPage = True

os.remove('objectsInJSON.txt')

for course in coursesList: # search through each course page and get some more specific information
    driver.get(course.URL)
    WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, 'topic-menu')))
    topicDiv = driver.find_element_by_class_name('topic-menu')
    elements = topicDiv.find_elements_by_class_name('udlite-heading-sm')
    course.setCategory(elements[0].text)
    course.setSubcategory(elements[1].text)
    courseDescription = driver.find_element_by_class_name('styles--description--3y4KY')
    course.setExtendedDescription(courseDescription.get_attribute('innerHTML'))

    # write converted course object into output file
    string = course.makeJSON()
    with open('objectsInJSON.txt','a',encoding='utf-8') as file:
        json.dump(string, file, ensure_ascii=False)
        file.write("\n")

driver.quit()
file.close()
