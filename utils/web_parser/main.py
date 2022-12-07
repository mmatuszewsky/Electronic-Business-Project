import os
from random import randint, random
from time import sleep

import undetected_chromedriver
from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.webdriver.common.action_chains import ActionChains
from selenium.common.exceptions import NoSuchElementException
from selenium.common.exceptions import TimeoutException
import json
from course import Course


COURSE_SUBPAGES = 20  # max number of subpages scraped from each category

# Web Driver configuration
PATH = "C:\Program Files (x86)\chromedriver\chromedriver.exe"
options = webdriver.ChromeOptions()
driver = undetected_chromedriver.Chrome(options)
coursesList = []

# getting pages URLs
f = open("URLs.txt", "r")
URLs = []
for x in f:
    URLs.append(x)
f.close()

# URLs = ["https://www.udemy.com/courses/design/?lang=pl&sort=popularity",
# "https://www.udemy.com/courses/development/?lang=pl&sort=popularity",
# "https://www.udemy.com/courses/teaching-and-academics/?lang=pl&sort=popularity",
# "https://www.udemy.com/courses/it-and-software/?lang=pl&sort=popularity",
# "https://www.udemy.com/courses/health-and-fitness/?lang=pl&sort=popularity"]

# searching through each page from file and through each subpage (< 1 2 3 ... 7 >)
for URL in URLs:
    emptyPage = False  # means that the page number is out of range and there is no more content on this page
    subpageCounter = 1
    while not emptyPage:
        print(URL+'&p='+str(subpageCounter))
        driver.get(URL+'&p='+str(subpageCounter))
        subpageCounter += 1
        if subpageCounter > COURSE_SUBPAGES:
            break
        try:  # element with this class name is a big container for all smaller divs. If it is not present then there is no content on the page
            WebDriverWait(driver, 50).until(EC.presence_of_element_located((By.CLASS_NAME, 'course-list--container--3zXPS')))
            container = driver.find_element(By.CLASS_NAME, 'course-list--container--3zXPS')
            coursesBiggerDivs = container.find_elements(By.CLASS_NAME, 'course-card--course-title--vVEjC')
            courses = container.find_elements(By.CLASS_NAME, 'course-card--container--1QM2W')
            driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
            counter = 0
            
            for course in courses: # each course we convert into an object of 'Course' class (data extraction)
                title = course.find_element(By.CLASS_NAME, 'ud-heading-md').text
                desc = course.find_element(By.CLASS_NAME, 'ud-text-sm').text
                
                author = course.find_element(By.CLASS_NAME, 'ud-text-xs').text

                try:
                    # spanElement = course.find_element('span.star-rating--rating-number--3lVe8')
                    spanElement = course.find_element(By.CLASS_NAME, 'span.star-rating--rating-number--3l80q')
                except NoSuchElementException:
                    ratings = 'Brak ocen'
                else:
                    ratings = spanElement.text
                
                try:
                    details = course.find_elements(By.CSS_SELECTOR, 'span.course-card--row--29Y0w')
                    courseLength = details[0].text
                    courseLevel = details[len(details)-1].text
                except NoSuchElementException:
                    print("Brak dodatkowych informacji")
                    courseLength = 'Brak informacji'
                    courseLevel = 'Brak informacji'

                try:
                    image = course.find_element(By.CLASS_NAME, 'course-card--course-image--3QvbQ')
                    ActionChains(driver).move_to_element(image).perform()
                    imageSourceURL = image.get_attribute('src')
                except NoSuchElementException:
                    print("Brak zdjęcia")
                    imageSourceURL = 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.smarthome.com.au%2Faeotec-z-wave-plug-in-smart-switch-6.html&psig=AOvVaw33Vx1wP6a3B3QAn_6WPe4A&ust=1602514347326000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCNitsanlrOwCFQAAAAAdAAAAABAE'
                    
                try:
                    priceDiv = course.find_element(By.CSS_SELECTOR, 'div.price-text--price-part--Tu6MH')
                    ActionChains(driver).move_to_element(priceDiv).perform()
                    spans = priceDiv.find_elements(By.TAG_NAME, 'span')
                    price = spans[len(spans) - 1].text
                except NoSuchElementException:
                    price = 'Brak ceny'

                try:
                    a = coursesBiggerDivs[counter].find_element(By.TAG_NAME, "a")
                    courseLink = a.get_attribute('href')
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
    sleep(random())  # this sleep is needed to avoid error 403
    driver.get(course.URL)
    try:
        WebDriverWait(driver, 7).until(EC.presence_of_element_located((By.CLASS_NAME, 'topic-menu')))
        topicDiv = driver.find_element(By.CLASS_NAME, 'topic-menu')
        elements = topicDiv.find_elements(By.CLASS_NAME, 'ud-heading-sm')
        course.setCategory(elements[0].text)
        course.setSubcategory(elements[1].text)
        courseDescription = driver.find_element(By.CLASS_NAME, 'styles--description--33-vq')
        course.setExtendedDescription(courseDescription.get_attribute('innerHTML'))
        # write converted course object in to output file
        string = course.makeJSON()
        with open('objectsInJSON.txt', 'a', encoding='utf-8') as file:
            json.dump(string, file, ensure_ascii=False)
            file.write("\n")
    except TimeoutException:
        continue
driver.quit()
