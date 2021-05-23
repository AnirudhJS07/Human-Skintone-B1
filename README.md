# MAJOR PROJECT B1
## HUMAN SKIN TONE DETECTOR

## Aim :
To create a web portal to detect the skin tone (i.e, Fair,Mild or Dark) from a human face image.

## Objective :
- To make a webpage for a client so that he/she/they can upload his/her/their photo in it to detect his/her/their skin colour.
- To make a backend program which will detect whether the skin colour is mild,dark or fair and deliver the result to the client on the webpage.

## Specifications :
This project consists of three major parts, first is web development where the client will upload their photo to detect their skin colour that is mild,dark, or fair and a result will be provided based on the client’s input. 
Secondly, in the backend there will be a program that is based on Artificial Intelligence that will use the concept of image processing and extract the skin part of the image. 
The Third thing is based on machine learning where we will first teach our system to differentiate between mild, dark and fair skin and use that learning to detect the skin colour of the image given by the client.

## Milestones:
### Webpage
Create a webpage for the client where he or she can upload his/her/their photo and get the desired response(i.e. Colour of the skin). 
The front end of the webpage will be designed using HTML, CSS and Bootstrap. It will prompt the client to add an image from its device for skin colour detection.
The backend can be designed using Django.
We’ve 8 group members who are from Web Development. Thus, 4 of them will work for the frontend and the other 4 will work for the backend part respectively.

### Image Processing and Artificial Intelligence
This is the backend part. In this,an AI-based image processing needs to be done on the photo given by the user  to extract the skin tone of the image. 

### Machine Learning
In this part,we have to teach our backend model to learn how to differentiate  skin tones of an image so that it could evaluate the output of the given input. Since we will be teaching our model to differentiate between skin tones, this comes under supervised learning and since there are multiple classifications in skin tone for which we will use KNN algorithm. 

## Database:
In this part, we have to know about Firebase Real-time Database. Firebase real-time database is a cloud-hosted NoSQL database that lets you store and sync your users in real-time. The realtime database is really just one big JSON  object that developers can manage in real time. With API, the Firebase database provides your web with both the current value of the data and any updates to that data.Real time syncing makes it easy for your users to access their data from any device, be it web or mobile. 

## Methodology:

Take input of image from the user > Read the csv file with “Pandas” > Set a mouse callback event on the window > Create the draw_function > Calculate the distance to get the colour name > Display the image on the window > Run the Python file > Display the desired outputs on the Webpage

# Working Manual/ Instructions
- Opening an existing project
            - You can start opening it by going to File → Open → Project/Solution
- Opening a folder
            - If you just want to edit code for an existing project without using Visual Studio’s project and build systems, you can open a folder through File → Open → Folder.
- Running code
            - To run the project code, click the Go Live button in the toolbar.
            - You can either run the project code by clicking the right mouse button and go with the option called Open with live server.
            - Or you can Right click and copy the code path and paste it in the server and run it.
            After you run the project successfully, you will be landing on the Home page.

## Home Page
It is also known as the start page. A home page is generally the primary web page a visitor navigating to a website from a search engine will see, and it may also serve as a landing page to attract visitors. Thus good home page design is usually a high priority for a website. Our Home page includes three contents in the nav-bar that is as follows:
1. Home
2. About
3. Contact-Us
- Landing page includes a “Get Started” Button if click then it will redirect you to options for 
uploading the image by system or via URL/Image address. Our Landing/Home page also 
includes Footer which has the content of contact details.Options for uploading the image:
- By system
            -If you opt for this option then you can upload the image through you system or your device. It will then upload the image and verify the skin tone by the help of Machine-Learning mechanism and give you the result about the skin tone of the particular image.
- Image address
            - Here you can easily just copy the image address and paste it in the text-box and then the image will be displayed of that particular address. It is useful when you don’t have the image in your device. Here also there is an use of Machine-Learning mechanism to show you the result about the skin tone.

## About Page
This page consists of sections about the general information of various factors of skin tones.

## Contact Us
This page is useful for the customers if they have any queries. If you want to register a query 
then you have to fill three text boxes that are:
1. Your Name
2. Your Contact Number
3. Your Query
- If you fail to leave any text box empty then your query will not register in the data base. After filling up the text boxes you just have to click on the “Submit” button and then your query will be registering successfully.
- After the submission of the query, you will be landing on “Thank You” page.

### NOTE :
- Install PHP for backend execution.
- Install all packages that we’ve used for the ML part which are as follows: numpy, cv2, sklearn.cluster, Kmeans, Counter, imutils, matplotlib, pyplot, sys, requests, urllib.
- Use the following link to see the locally hosted website : http://skintone.c1.biz

## Group Members:
- Abhishek Jena (WebD)
- Amaan Mohamed (ML)
- Anirudh Sharma (WebD)
- Azarudeen R (WebD)
- Bopanna Tejesh (ML)
- Krishna Chaitanya (ML)
- Kushagra Srivastava (ML)
- Milind Palagadu (ML)
- Mohammed Arshad (WebD)
- Mudit Shekhar (ML)
- Paargavi Muthamil Selvan (ML)
- Pallavi Yemmireddi (ML)
- Pavitra Poojary (WebD)
- Sai Bhargav Reddy Chekka (WebD)
- Sangani Sai Kumar (ML)
- Sathvika Chilukumari (WebD)
- Shashank Rai (ML)
- Shashi Suman (WebD)
- Shiva Kumar (ML)
- V Venkat Bhargav (WebD)

## Files for reference:
- [Manual HumanSkintone-B1.pdf](https://github.com/AnirudhJS07/Human-Skintone-B1/files/6527963/Manual.HumanSkintone-B1.pdf)
- [HumanSkintone_B1.pdf](https://github.com/AnirudhJS07/Human-Skintone-B1/files/6527964/HumanSkintone_B1.pdf)


