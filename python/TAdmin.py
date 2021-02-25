import pyautogui

pyautogui.typewrite("mysql -u root -p")
pyautogui.press("enter")
pyautogui.press("enter")
pyautogui.typewrite("use hon_no_eiga;")
pyautogui.press("enter")
pyautogui.typewrite("select * from theatres_admins;")
pyautogui.press("enter")
pyautogui.typewrite("exit")
pyautogui.press("enter")