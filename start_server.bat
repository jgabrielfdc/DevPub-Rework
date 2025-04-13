@echo off
REM Define os caminhos do projeto
set "PROJECT_PATH=C:\Users\authe\Documents\GitHub\DevPub-Rework"
set "PUBLIC_PATH=%PROJECT_PATH%\public"

REM Abre o VS Code no diretório do projeto
start "" code "%PROJECT_PATH%"

REM Aguarda um tempo para o VS Code abrir
timeout /t 2 >nul

REM Abre o Opera no localhost
start "" opera "http://localhost:2020"

REM Aguarda o navegador abrir
timeout /t 2 >nul

REM Muda para a pasta public e inicia o servidor PHP no prompt de comando em background
cd /d "%PUBLIC_PATH%"
start /B php -S localhost:2020

REM Fecha o CMD sem fechar o servidor PHP
exit