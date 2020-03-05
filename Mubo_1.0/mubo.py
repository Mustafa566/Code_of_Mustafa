import pygame
import subprocess  
import socket    
import ipaddress
import os
from Functions import *

# Function number 1
Mubo()

# The first input of the program. And what you want to do.
Home()

# Function number 2
WhatCanIDoForYou()
WhatCanIDoForYou = input("--> What can i do for you? Choose a number: ")

# Check if the input is empty if that is true it print "Choose one option".
if (WhatCanIDoForYou == ""):
    print ("--> Error: Choose one of the option")

elif (WhatCanIDoForYou == "Open a program"):
    print("--> Error: choose a number please")

elif (WhatCanIDoForYou == "What is my ip"):
    print("--> Error: choose a number please")

# Open program
# Function number 3
elif (WhatCanIDoForYou == "1"):
    print("\n")
    WhatProgram()
    print("--> 1. " + "Vscode")
    print("--> 2. " + "League Of Legends")
    print("--> 3. " + "Chrome")
    print("--> 4. " + "My Youtube Playlist")
    print("--> 5. " + "Xampp")
    print("--> 6. " + "Word\n")
    WhatProgram = input("--> Start: ")  

# All the programs
if (WhatProgram == "1"):
    subprocess.Popen(["D:/Microsoft VS Code/Code.exe"])

elif (WhatProgram == "2"):
    subprocess.Popen(["D:/League Of Legends/LeagueClient"])

elif (WhatProgram == "3"):
    subprocess.Popen(["C:/Program Files (x86)/Google/Chrome/Application/Chrome"])

elif (WhatProgram == "4"):
    subprocess.Popen(["C:/xampp/htdocs/Mubo_1.0/MyPlaylist.bat"])

elif (WhatProgram == "5"):
    subprocess.Popen(["C:/xampp/xampp-control"])

elif (WhatProgram == "6"):
    subprocess.Popen(["C:/Program Files (x86)/Microsoft Office/root/Office16/WINWORD.exe"])

# Funcrion number 4: What is my ip
elif (WhatCanIDoForYou == "2"):
    FindMyIp()

#Function number 5: Search files
elif (WhatCanIDoForYou == "3"):
    print("\n")
    listDir(dir)

#Function number 6: Delete file
elif (WhatCanIDoForYou == "4"):
    DeleteFile()