import pygame
import os
import socket    
import ipaddress
import subprocess
from subprocess import Popen, PIPE

# Print shape
def Home():
    print("* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *")
    print("*" + "                                       MUBO                                          *")
    print("*" + "                                                                                     *")
    print("*" + "       1. Open a program                                                             *")
    print("*" + "       2. What is my ip                                                              *")
    print("*" + "       3. Search documents                                                           *")
    print("*" + "       4. Delete file                                                                *")
    print("*" + "                                                                                     *")
    print("*" + "                                                                                     *")
    print("*" + "                                                                                     *")
    print("*" + "                                                                                     *")
    print("*" + "                               Made by: Mustafa Bolat                                *")
    print("* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *")    

#1 Function: Selamun Aleykum my brother i am Mubo
def Mubo():
    pygame.mixer.init()
    pygame.mixer.music.load("hello.mp3")
    print("\n\n--> Selamun Aleykum my brother i am Mubo\n")
    pygame.mixer.music.play()
    while pygame.mixer.music.get_busy():
        pygame.time.Clock().tick()

#2 Function: What can i do for you? Choose a number: 
def WhatCanIDoForYou():
    pygame.mixer.init()
    pygame.mixer.music.load("WhatCanIDoForYou.mp3")
    pygame.mixer.music.play()
    while pygame.mixer.music.get_busy():
        pygame.time.Clock().tick()

#3 Function: What program would you want to start? Choose a number:
def WhatProgram():
    pygame.mixer.init()
    pygame.mixer.music.load("WhatProgram.mp3")
    print("--> What program would you want to start? Choose a number:")
    pygame.mixer.music.play()
    while pygame.mixer.music.get_busy():
        pygame.time.Clock().tick()

#4 Function: Findmy ip:
def FindMyIp():
        hostname = socket.gethostname()    
        IPAddr = socket.gethostbyname(hostname)    
        print("\nYour Computer Name is: " + hostname)    
        print("Your Computer IP Address is: " + IPAddr + "\n") 

#5 Function: Search files: 
FOLDER_PATH = ('C:/Users/Mustafa Bolat/Downloads')

def listDir(dir):
    filenames = os.listdir('C:/Users/Mustafa Bolat/Downloads')
    for filenames in filenames:
        print("file name: " + filenames)
        print("folder path " + os.path.abspath(os.path.join(filenames)) + "\n")

if __name__ == "__main__":
    listDir(FOLDER_PATH)

#6 Function: Put a directory path with the file and it will delete it. Delete file: 
def DeleteFile():
        file = os.remove("C:/Users/Mustafa Bolat/Documents/test.txt")

        if (file != True):
                print("File deleted")
        else:
                print("Cannot be deleted")