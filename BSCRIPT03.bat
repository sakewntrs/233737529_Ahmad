BSCRIPT03

@echo off
:menu
echo Select a command:
echo 1. ipconfig
echo 2. tasklist/taskkill
echo 3. chkdsk
echo 4. format
echo 5. defrag
echo 6. find
echo 7. attrib
echo 8. Exit

choice /c 12345678 /m "Choose an option: "

if errorlevel 8 goto end
if errorlevel 7 goto attrib
if errorlevel 6 goto find
if errorlevel 5 goto defrag
if errorlevel 4 goto format
if errorlevel 3 goto chkdsk
if errorlevel 2 goto task
if errorlevel 1 goto ipconfig

:ipconfig
ipconfig
goto menu

:task
echo Select one task to execute: 
echo 1. Tasklist 
echo 2. Taskkill 
echo 3. Back to menu
choice /c 123 /m "Choose an option: "

if errorlevel 3 goto menu
if errorlevel 2 goto UserTaskkill 
if errorlevel 1 goto UserTasklist

:UserTasklist
tasklist 
goto menu
:UserTaskkill
set /p filename="Enter the filename of the task you want to kill: "
taskkill /IM %fileName% /F
if %errorlevel% equ 0 (
goto menu
) else (
    echo Failed to kill %processname%
    goto task
)

:chkdsk
chkdsk
goto menu

:format
set /p pathName="Enter the drive letter you want to format (Add a colon. e.g., C:): "
format %pathName%
if %errorlevel% equ 0 (
    goto menu
) else (
    echo Failed to format %pathName%
    goto format
)
goto menu

:defrag
set /p drive="Enter the drive letter you want to defragment (e.g., C:): "
defrag %drive%
goto menu

:find
set /p search="Enter the string you want to search for: "
find "%search%"
goto menu

:attrib
set /p path="Enter the path of the file or directory: "
attrib %path%
goto menu

:end
echo Exiting...