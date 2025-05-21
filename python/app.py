from flask import Flask, request, jsonify
from flask_cors import CORS
from urllib.parse import urlparse
import subprocess

app = Flask(__name__)
CORS(app)

@app.route('/escanear', methods=['POST'])
def escanear():
    data = request.get_json()
    objetivo_bruto = data.get('objetivo', '')
    parsed_url = urlparse(objetivo_bruto)
    objetivo = parsed_url.hostname if parsed_url.hostname else objetivo_bruto

    if not objetivo:
        return jsonify({'resultado': 'No se recibió ningún objetivo.'}), 400

    try:
        resultado = subprocess.check_output(['nmap', '-F', objetivo], text=True)
    except subprocess.CalledProcessError as e:
        resultado = f"Error al ejecutar Nmap: {e.output}"
    except Exception as e:
        resultado = f"Error desconocido: {e}"

    return jsonify({'resultado': resultado})


@app.route('/fuzz', methods=['POST'])
def fuzz():
    data = request.get_json()
    objetivo_bruto = data.get('objetivo', '')
    parsed_url = urlparse(objetivo_bruto)
    objetivo = parsed_url.hostname if parsed_url.hostname else objetivo_bruto

    if not objetivo:
        return jsonify({'resultado': 'No se recibió ningún objetivo.'}), 400

    url_fuzz = f"https://{objetivo}/FUZZ"

    try:
        resultado = subprocess.check_output([
            r'C:\Users\santi\go\bin\ffuf.exe',
            '-u', url_fuzz,
            '-w', r'C:\HTB\common.txt',
            '-mc', '200'
        ], text=True)
    except subprocess.CalledProcessError as e:
        resultado = f"Error al ejecutar FFUF: {e.output}"
    except Exception as e:
        resultado = f"Error desconocido: {e}"

    return jsonify({'resultado': resultado})


@app.route('/whois', methods=['POST'])
def whois_scan():
    data = request.get_json()
    objetivo = data.get('objetivo', '')
    parsed_url = urlparse(objetivo)
    dominio = parsed_url.hostname if parsed_url.hostname else objetivo

    if not dominio:
        return jsonify({'resultado': 'No se recibió ningún dominio.'}), 400

    try:
       resultado = subprocess.check_output(['wsl', 'whois', dominio], text=True)

    except subprocess.CalledProcessError as e:
        resultado = f"Error al ejecutar WHOIS: {e.output}"
    except Exception as e:
        resultado = f"Error desconocido: {e}"

    return jsonify({'resultado': resultado})


@app.route('/whatweb', methods=['POST'])
def whatweb_scan():
    data = request.get_json()
    objetivo = data.get('objetivo', '')
    parsed_url = urlparse(objetivo)
    url = f"http://{parsed_url.hostname}" if parsed_url.hostname else objetivo

    if not url:
        return jsonify({'resultado': 'No se recibió ningún objetivo.'}), 400

    try:
        resultado = subprocess.check_output(['wsl', 'whatweb', url], text=True)

    except subprocess.CalledProcessError as e:
        resultado = f"Error al ejecutar WhatWeb: {e.output}"
    except Exception as e:
        resultado = f"Error desconocido: {e}"

    return jsonify({'resultado': resultado})


if __name__ == '__main__':
    app.run(debug=True)
