@echo off

set BASE_URL=https://raw.githubusercontent.com/skaffroddin/dash/main/PDO
set DOWNLOAD_PATH=I:\xampp\htdocs\gargi\

rem Define files in the specified sequence, space-separated
set FILES=connection.php form.php formaction.php display.php login.php loginaction.php logout.php edit.php editaction.php displayclient.php changepass.php changepassaction.php block.php unblock.php displayadmin.php

rem Loop through files and download the first file that doesn't exist
for %%F in (%FILES%) do (
    if not exist "%DOWNLOAD_PATH%%%F" (
        curl -L -o "%DOWNLOAD_PATH%%%F" "%BASE_URL%%%F"
        exit /b
    )
)
